<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;

class HomePageController {
    public function home (){
        $repository = new ArticleRepository;
        $articles=$repository->findMostRecent();
        require_once ('templates/homepage.php');
    }
}