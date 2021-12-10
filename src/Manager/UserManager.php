<?php 

namespace App\Manager;

use App\Repository\UserRepository;

class UserManager {
    public function isAuthenticate($name, $password){
        $userRepository = new UserRepository();
        $user=$userRepository->findOneByUsername($name);

        if(!empty($user)){ 
            if(hash('sha256', $password) == $user['password']){
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
            $user=$userRepository->save($username, $password, $email);
            return true;
        }

        return false;
        
        

    }
}