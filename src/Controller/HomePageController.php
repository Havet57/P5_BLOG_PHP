<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;

class HomePageController extends CoreController {
    public function home (){      
        $repository = new ArticleRepository;
        $articles=$repository->findMostRecent();
        echo $this->twig->render('homepage.html.twig', ['articles' => $articles, 'user' => $this->user]);
    }
}