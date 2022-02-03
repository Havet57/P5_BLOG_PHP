<?php 

namespace App\Repository;

use App\Entity\Article;
use App\Entity\User;

class ArticleRepository extends CoreRepository {
    
    /**
     * @param int $limit=3
     * 
     * @return Article[]
     */
    public function findMostRecent(int $limit=3):array{
        $sql = 'SELECT * FROM articles ORDER BY `date` DESC LIMIT 3';
        $sth = $this->pdo->prepare($sql);
        $sth->execute();

        $articles=[];
        $articlesData = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $userRepository = new UserRepository;

        foreach ($articlesData as $articleData){
            $articles[] = new Article($userRepository->find($articleData['user_id']), $articleData['title'], $articleData['content'], $articleData['date'], $articleData['id']);
        }

        return $articles;
    }


    /**
     * @return Article[]
     */
    public function findAll():array{


        $sql = 'SELECT * FROM articles ORDER BY `date` DESC';
        $sth = $this->pdo->prepare($sql);
        $sth->execute();

        $articles=[];
        $articlesData = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $userRepository = new UserRepository;
        foreach ($articlesData as $articleData){
            $articles[] = new Article($userRepository->find($articleData['user_id']), $articleData['title'], $articleData['content'], $articleData['date'], $articleData['id']);
        }

        return $articles;
    }




    public function find(int $id):?Article {
        $sql = 'SELECT * FROM articles WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':id', $id);

        $sth->execute();
        $articleData = $sth->fetch(\PDO::FETCH_ASSOC);
        $userRepository = new UserRepository;
        return new Article($userRepository->find($articleData['user_id']), $articleData['title'], $articleData['content'], $articleData['date'], $articleData['id']);
    }

    /**
     * @param Article $article
     * 
     * @return void
     */
    public function save(Article $article):void {
        if(empty($article->getId())){
            $sql = 'INSERT INTO articles (user_id, title, content, `date`) VALUES (:user_id, :title, :content, NOW())';
            $sth = $this->pdo->prepare($sql);
            $sth->bindValue(':user_id', $article->getUser()->getId());
        }else{
            $sql = 'UPDATE articles SET title=:title, content=:content WHERE id=:id';
            $sth = $this->pdo->prepare($sql);
            $sth->bindValue(':id', $article->getId());
        }
       
        $sth->bindValue(':title', $article->getTitle());
        $sth->bindValue(':content', $article->getContent());
        

        $sth->execute();
    }


    public function delete(Article $article):void {
        $sql = 'DELETE FROM articles WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':id', $article->getId());

        $sth->execute();
    }


}
