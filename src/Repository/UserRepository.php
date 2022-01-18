<?php 

namespace App\Repository;

use App\Entity\User;

class UserRepository extends CoreRepository {

    public function findOneByUsername(string $username):?User{
        $sql = 'SELECT * FROM users WHERE username=:username';
        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':username', $username);
        $sth->execute();
        $user = $sth->fetch();
        if($user!==false){
            return new User($user['username'], $user['email'], $user['password'], $user['type'], $user['id']);
        } 
        return null;
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
        $sth->bindParam(':email', $email);
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
    public function save(User $user){


        $sql = "INSERT into `users` (username, email, type, `password` )
        VALUES (:username, :email, :type, :pass )";

        $sth = $this->pdo->prepare($sql);
        $sth->bindParam(':username', $user->getUsername());
        $sth->bindParam(':email', $user->getEmail());
        // $sth->bindParam(':pass', hash('sha256', $password));
        $sth->bindParam(':pass', $user->getPassword());
        
        $sth->bindValue(':type', User::TYPE);

        $sth->execute();


    }
}
