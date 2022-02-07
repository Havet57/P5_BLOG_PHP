<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;



class CoreController {
    protected $twig;
    protected $user;
    protected Request $request;

    public function __construct()  
    {
        $this->request = Request::createFromGlobals();
        if (!$this->request->hasSession()) {
            $this->request->setSession(new Session());
        }   
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($loader);
        if(!empty($this->request->getSession()->get('username'))){
            $this->user = (new UserRepository)->findOneByUsername($this->request->getSession()->get('username'));
        }  
    } 
}