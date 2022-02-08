<?php 

namespace App\Repository;

use App\Entity\User;

class UserRepository extends CoreRepository {

    public function findOneByUsername(string $username):?User{
        $sql = 'SELECT * FROM users WHERE username=:username';
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':username', $username);
        $sth->execute();
        $user = $sth->fetch();
        if($user!==false){
            return new User($user['username'], $user['email'], $user['password'], $user['type'], $user['id']);
        } 
        return null;
    }

    public function find(int $id):?User {
        $sql = 'SELECT * FROM users WHERE id=:id';

        $sth = $this->pdo->prepare($sql);

        $sth->bindValue(':id', $id);

        $sth->execute();
        $userData = $sth->fetch(\PDO::FETCH_ASSOC);
        return new User($userData['username'], $userData['email'], $userData['password'], $userData['type'], $userData['id']);
    }
    
    
    /**
     * findOneByEmail find user by email
     * @param mixed $email
     * 
     * @return User|null
     */
    public function findOneByEmail($email):?User{


        $sql = 'SELECT * FROM users WHERE email=:email';
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();
        $user = $sth->fetch();
        if($user!==false){
            return new User($user['username'], $user['email'], $user['password'], $user['type'], $user['id']);
        } 
        return null;
    }

    /**
     * save save new user
     * @param mixed $username
     * @param mixed $email
     * @param mixed $password
     * 
     * @return [type]
     */
    public function save(User $user):void{


        $sql = "INSERT into `users` (username, email, type, `password` )
        VALUES (:username, :email, :type, :pass )";

        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':username', $user->getUsername());
        $sth->bindValue(':email', $user->getEmail());
        $sth->bindValue(':pass', $user->getPassword());
        
        $sth->bindValue(':type', User::TYPE);

        $sth->execute();


    }
}
