<?php 

namespace App\Repository;

use App\Entity\Article;

class ArticleRepository extends CoreRepository {
    
    public function findMostRecent(int $limit=3):?Article{
        $sql = 'SELECT * FROM articles ORDER BY `date` DESC LIMIT 3';
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        $article = $sth->fetchAll(\PDO::FETCH_ASSOC);
        if($article!==false){
            return new Article($article['id'], $article['title'], $article['content'], $article['date']);
        } 
        return null;
    }

    public function findAll():?Article {


        $sql = 'SELECT * FROM articles ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);


        $sth->execute();
        $article = $sth->fetchAll(\PDO::FETCH_ASSOC);
        if($article!==false){
            return new Article($article['id'], $article['title'], $article['content'], $article['date']);
        } 
        return null;
    }




    public function find(int $id):?Article {
        $sql = 'SELECT * FROM articles WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':id', $id);

        $sth->execute();
        $sth->setFetchMode(\PDO::FETCH_CLASS, Article::class);
        $article = $sth->fetch();
        var_dump($article);
        die;
        if($article!==false){
            return new Article($article['id'], $article['title'], $article['content'], $article['date']);
        } 
        return null;
    }

    public function save(string $title, string $content):void {
        $sql = 'INSERT INTO articles (title, content, `date`) VALUES (:title, :content, NOW())';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':title', $title);
        $sth->bindParam(':content', $content);

        $sth->execute();
    }

    
    public function update(string $title, string $content, int $id):void {
        $sql = 'UPDATE articles SET title=:title, content=:content WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':title', $title);
        $sth->bindParam(':content', $content);
        $sth->bindParam(':id', $id);

        $sth->execute();
    }

    public function delete(int $id):void {
        $sql = 'DELETE FROM articles WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':id', $id);

        $sth->execute();
    }


}
