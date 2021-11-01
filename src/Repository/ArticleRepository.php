<?php 

namespace App\Repository;

class ArticleRepository extends CoreRepository {
    public function findMostRecent(int $limit=3):array{


        $sql = 'SELECT * FROM articles ORDER BY `date` DESC LIMIT 3';

        $sth = $this->pdo->prepare($sql);

        // $sth->bindParam(':limit', $limit);

        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

}
