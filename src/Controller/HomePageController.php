<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;

class HomePageController extends CoreController {
    public function home (){      
        if(!empty($this->request->request->get('mail'))){
            $email=$this->request->request->get('mail');
            $firstname=$this->request->request->get('firstname');
            $lastname=$this->request->request->get('lastname');
            $content=$this->request->request->get('content');
        }
        $repository = new ArticleRepository;
        $articles=$repository->findMostRecent();
        echo $this->twig->render('homepage.html.twig', ['articles' => $articles, 'user' => $this->user]);
    }
}
