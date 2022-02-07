<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CoreController {
    protected $twig;
    protected $user;
    protected $request;

    public function __construct(Request $request)  
    {
        $this->request=$request;
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $this->twig = new \Twig\Environment($loader);
        if(!empty($this->request->getSession()->get('username'))){
            $this->user = (new UserRepository)->findOneByUsername($this->request->getSession()->get('username'));
        }  
    } 
}