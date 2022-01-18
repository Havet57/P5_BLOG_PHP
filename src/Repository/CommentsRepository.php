<?php 

namespace App\Repository;

use App\Entity\Article;
use App\Entity\User;

class CommentsRepository extends CoreRepository {
    public function save(Article $article, User $user, string $comment):void{
        $sql = 'INSERT INTO `comments` (article_id, user_id, `comment`, `date`) VALUES(:article_id, :user_id, :comment, NOW())';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':article_id', $article->getId());
        $sth->bindParam(':user_id', $user->getId());
        $sth->bindParam(':comment', $comment);

        
        $sth->execute();

        

    }

    public function findAll(int $articleId):array{


        $sql = 'SELECT c.id, c.comment, c.date, u.username FROM `comments` c INNER JOIN `users` u ON c.user_id = u.id WHERE c.article_id = :article_id AND c.approved=1 ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':article_id', $articleId);


        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findUnapproved():array {
        $sql = 'SELECT c.id, c.comment, c.date, u.username FROM `comments` c INNER JOIN `users` u ON c.user_id = u.id WHERE c.approved=0 ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);

       


        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete(int $id):void{
        $sql = 'DELETE FROM comments WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':id', $id);

        $sth->execute();
    }

    public function approve(int $id):void{

        $sql = 'UPDATE comments SET approved = 1 WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':id', $id);

        $sth->execute();
    }
}