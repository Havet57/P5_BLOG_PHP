<?php 

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\User;

class CommentsRepository extends CoreRepository {
    public function save(Comment $comment):void{
        $sql = 'INSERT INTO `comments` (article_id, user_id, `comment`, `date`) VALUES(:article_id, :user_id, :comment, NOW())';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':article_id', $comment->getArticle()->getId());
        $sth->bindValue(':user_id', $comment->getUser()->getId());
        $sth->bindValue(':comment', $comment->getComment());

        
        $sth->execute();

        

    }

    public function findAll(Article $article):array{


        $sql = 'SELECT * FROM `comments` c WHERE c.article_id = :article_id AND c.approved=1 ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':article_id', $article->getId());


        $sth->execute();
        
        $comments=[];
        $commentsData = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $articleRepository = new ArticleRepository;
        $userRepository = new UserRepository;
        foreach ($commentsData as $commentData){
            $comments[] = new Comment($articleRepository->find($commentData['article_id']), $userRepository->find($commentData['user_id']), $commentData['comment'], $commentData['date'], $commentData['approved'], $commentData['id']);
        }

        return $comments;
    }

    public function find(int $id):?Comment {
        $sql = 'SELECT * FROM comments WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':id', $id);

        $sth->execute();
        $commentData = $sth->fetch(\PDO::FETCH_ASSOC);
        $articleRepository = new ArticleRepository;
        $userRepository = new UserRepository;
        return new Comment($articleRepository->find($commentData['article_id']), $userRepository->find($commentData['user_id']), $commentData['comment'], $commentData['date'], $commentData['approved'], $commentData['id']);
    }

    public function findUnapproved():array {
        $sql = 'SELECT c.* FROM `comments` c WHERE c.approved=0 ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        
        $comments=[];
        $commentsData = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $articleRepository = new ArticleRepository;
        $userRepository = new UserRepository;
        foreach ($commentsData as $commentData){
            $comments[] = new Comment($articleRepository->find($commentData['article_id']), $userRepository->find($commentData['user_id']), $commentData['comment'], $commentData['date'], $commentData['approved'], $commentData['id']);
        }

        return $comments;
    }

    public function delete(Comment $comment):void{
        $sql = 'DELETE FROM comments WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':id', $comment->getId());

        $sth->execute();
    }

    public function approve(Comment $comment):void{

        $sql = 'UPDATE comments SET approved = 1 WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':id', $comment->getId());

        $sth->execute();
    }
}