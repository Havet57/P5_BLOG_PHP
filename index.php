<?php

session_start();

require_once 'vendor/autoload.php';

// var_dump($_SERVER);
// die;
use App\Controller\HomePageController;
use App\Controller\ArticleController;
use App\Controller\AuthentificationController;

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
        $controller->displayArticle($_GET['id']);
    }
    
    if( $methode=='tous' ){
        $controller->allArticles();
    }

    if( $methode=='creation' ){
        $controller->createArticle();
    }

    if( $methode=='update'){
        $controller->updateArticle($_GET['id']);
    }

    if( $methode=='delete'){
        $controller->deleteArticle($_GET['id']);
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










