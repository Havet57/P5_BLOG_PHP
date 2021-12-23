<?php 

namespace App\Repository;

class CommentsRepository extends CoreRepository {
    public function save(int $articleId, string $userId, string $comment):void{
        $sql = 'INSERT INTO `comments` (article_id, user_id, `comment`, `date`) VALUES(:article_id, :user_id, :comment, NOW())';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':article_id', $articleId);
        $sth->bindParam(':user_id', $userId);
        $sth->bindParam(':comment', $comment);

        $sth->execute();

    }

    public function findAll(int $articleId):array{


        $sql = 'SELECT c.id, c.comment, c.date, u.username FROM `comments` c INNER JOIN `users` u ON c.user_id = u.id WHERE c.article_id = :article_id ORDER BY `date` DESC';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':article_id', $articleId);


        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
}