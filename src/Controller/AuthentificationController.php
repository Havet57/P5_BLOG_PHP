<?php 

namespace App\Controller;

use App\Manager\UserManager;

class AuthentificationController extends CoreController {
    public function login(){
        $message=null;
        if(isset($_POST['username']) && isset($_POST['password'])){
            $userManager = new UserManager;
            //vérifier le nom d'utilisateur en base de données
            //si le name est ok on vérifie l'password
            if($userManager->isAuthenticate($_POST['username'], $_POST['password'])){
                //redirection vers la page des articles
                $_SESSION['username']=$_POST['username'];
                header('Location: index.php');
            } else {
                $message = 'ko';
            }

           
            
        }
        echo $this->twig->render('login.html.twig', ['message'=>$message]);
        

    }


    public function register(){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
            $userManager = new UserManager;
            //Vérifier la non existence du mail dans la bdd
            //si elle n'existe pas
            if($userManager->isSave($_POST['username'], $_POST['password'], $_POST['email'])){
                header('Location: index.php');
            }
        }
        echo $this->twig->render('register.html.twig');
    }

    public function logout(){
        session_destroy();

        header('location: index.php');
    }
    
    
}



?>