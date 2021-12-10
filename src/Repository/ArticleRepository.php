<?php 

namespace App\Repository;

class ArticleRepository extends CoreRepository {
    public function findMostRecent(int $limit=3):array{


        $sql = 'SELECT * FROM articles ORDER BY `date` DESC LIMIT 3';

        $sth = $this->pdo->prepare($sql);


        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findAll():array{


        $sql = 'SELECT * FROM articles ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);


        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }




    public function find(int $id):array {
        $sql = 'SELECT * FROM articles WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':id', $id);

        $sth->execute();
        return $sth->fetch(\PDO::FETCH_ASSOC);
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
