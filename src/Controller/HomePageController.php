<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;

class HomePageController extends CoreController {
    public function home (){      
        if(isset($_POST['mail'])){
            $email=$_POST['mail'];
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $content=$_POST['content'];
        }
        $repository = new ArticleRepository;
        $articles=$repository->findMostRecent();
        echo $this->twig->render('homepage.html.twig', ['articles' => $articles, 'user' => $this->user]);
    }
}