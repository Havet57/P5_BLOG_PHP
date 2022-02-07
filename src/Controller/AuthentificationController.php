<?php 

namespace App\Controller;

use App\Manager\UserManager;

class AuthentificationController extends CoreController {
    public function login(){
        $message=null;
        if(!empty($this->request->request->get('username')) && !empty($this->request->request->get('password'))){
            $userManager = new UserManager;
            //vérifier le nom d'utilisateur en base de données
            //si le name est ok on vérifie l'password
            if($userManager->isAuthenticate($this->request->request->get('username'), $this->request->request->get('password'))){
                //redirection vers la page des articles
  /*problème superglobale session*/              $_SESSION['username']=$this->request->request->get('username');
                header('Location: index.php');
            } else {
                $message = 'ko';
            }

           
            
        }
        echo $this->twig->render('login.html.twig', ['message'=>$message]);
        

    }


    public function register(){
        if(!empty($this->request->request->get('username')) && !empty($this->request->request->get('password')) && !empty($this->request->request->get('email'))){
            $userManager = new UserManager;
            //Vérifier la non existence du mail dans la bdd
            //si elle n'existe pas
            if($userManager->isSave($this->request->request->get('username'), $this->request->request->get('password'), $this->request->request->get('email'))){
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