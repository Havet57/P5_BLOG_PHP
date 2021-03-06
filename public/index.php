<?php


require_once '../vendor/autoload.php';

use App\Controller\HomePageController;
use App\Controller\ArticleController;
use App\Controller\AuthentificationController;
use App\Controller\CommentsController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

$request = Request::createFromGlobals();
if (!$request->hasSession()) {
    $request->setSession(new Session());
}   
$controller=null;
$methode=null;

if(!empty($request->query->get('controller'))){
    $controller=$request->query->get('controller');
}

if(!empty($request->query->get('methode'))){
    $methode=$request->query->get('methode');
}

if(empty($controller) && empty($methode)){
    $controller = new HomePageController($request);
    $controller->home();
}
if($controller=='article') {
    $controller = new ArticleController($request);

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

    $controller = new AuthentificationController($request);

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
    $controller = new CommentsController($request);

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










