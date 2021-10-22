<?php 

namespace App\Controller;

use App\Manager\UserManager;

class LoginController {
    public function index(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $userManager = new UserManager;
            //vérifier le nom d'utilisateur en base de données
            //si le name est ok on vérifie l'password
            if($userManager->isAuthenticate($_POST['username'], $_POST['password'])){
                //redirection vers la page des articles
                header('Location: article.php');
            }
            
        }
        require_once ('templates/login.html');

    }
    
    
}



?>