<?php

session_start();

require_once 'vendor/autoload.php';

// var_dump($_SERVER);
// die;
use App\Controller\HomePageController;
use App\Controller\ArticleController;
use App\Controller\AuthentificationController;
use App\Controller\CommentsController;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$controller=null;
$methode=null;

if(isset($_GET['controller'])){
    $controller=$_GET['controller'];
}

if(isset($_GET['methode'])){
    $methode=$_GET['methode'];
}

if(empty($controller) && empty($methode)){
    $controller = new HomePageController;
    $controller->home();
}
if($controller=='article') {
    $controller = new ArticleController;

    if( $methode=='chaque' ){
        $controller->displayArticle($request->query->get('id'));
    }
    
    if( $methode=='tous' ){
        $controller->allArticles();
    }

    if( $methode=='creation' ){
        $controller->createArticle();
    }

    if( $methode=='update'){
        $controller->updateArticle($request->query->get('id'));
    }

    if( $methode=='delete'){
        $controller->deleteArticle($request->query->get('id'));
    }


}

if ($controller=='authentification'){

    $controller = new AuthentificationController;

    if( $methode=='login' ){
        $controller->login();
    }

    if( $methode=='register' ){
        $controller->register();
    }

    if( $methode=='logout'){
        $controller->logout();
    }
}

if($controller=='comments'){
    $controller = new CommentsController;

    if($methode=='unapproved'){
        $controller->displayUnapproved();
    }

    if($methode=='delete'){
        $controller->delete($request->query->get('id'));
    }

    if($methode=='approve'){
        $controller->approve($request->query->get('id'));
    }


 
}










