<?php 

namespace App\Manager;

use App\Entity\User;
use App\Repository\UserRepository;

class UserManager {
    public function isAuthenticate($name, $password){
        $userRepository = new UserRepository();
        $user=$userRepository->findOneByUsername($name);

        if(!empty($user)){ 
            if(password_verify($password, $user->getPassword())){
                return true; 
            }   
        }
        return false;      
    }

    public function isSave($username, $password, $email){
        $userRepository = new UserRepository();
        $userByEmail=$userRepository->findOneByEmail($email);
        $userByUsername=$userRepository->findOneByUsername($username);
        if(empty($userByEmail) && empty($userByUsername)){
            $user= new User($username, $email, $password);
            $user->setPassword($password);
            $userRepository->save($user);
            return true;
        }

        return false;
        
        

    }
}
