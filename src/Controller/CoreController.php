<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;


class CoreController {
    protected $twig;
    protected $user;
    protected Request $request;

    public function __construct()  
    {
        $this->request = Request::createFromGlobals();
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($loader);
        if(!empty($_SESSION['username'])){
            $this->user = (new UserRepository)->findOneByUsername($_SESSION['username']);
            // var_dump($this->user);
        }

        
    } 

}