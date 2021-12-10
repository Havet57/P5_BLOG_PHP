<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;

class CoreController {
    protected $twig;
    protected $user;
    public function __construct()  
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($loader);
        if(!empty($_SESSION['username'])){
            $this->user = (new UserRepository)->findOneByUsername($_SESSION['username']);
            $this->user['is_admin']=$this->user['type']==='admin';

            // var_dump($this->user);
        }

        
    } 

}