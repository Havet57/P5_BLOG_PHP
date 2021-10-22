<?php 

namespace App\Repository;

class UserRepository extends CoreRepository {
    public function findOneByUsername(string $username):array{


        $sql = 'SELECT * FROM users WHERE username=:username';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':username', $username);

        $sth->execute();
        $users = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return (count($users)==1)?current($users):[];
    }

    public function findOneByEmail($email){


        $sql = 'SELECT * FROM users WHERE email=:email';

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':email', $email);

        $sth->execute();

        $users = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return (count($users)==1)?current($users):[];
    }

    public function save($username, $email, $password){


        $sql = "INSERT into `users` (username, email, /* type, */ `password`)
        VALUES ('$username', '$email', 'user', '".hash('sha256', $password)."')";

        $sth = $this->pdo->prepare($sql);

        $sth->bindParam(':username', $username);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':password', $password);

        $sth->execute();

        return $sth->fetchAll(\PDO::FETCH_ASSOC);




    }
}
