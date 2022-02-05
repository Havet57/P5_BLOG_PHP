<?php 

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Repository\ArticleRepository;
use App\Repository\CommentsRepository;

class ArticleController extends CoreController {
    public function displayArticle(int $id){ 
        $succes=null; 
        $commentsRepository = new CommentsRepository;
        $repository = new ArticleRepository;
        $article=$repository->find($id);
        if(!empty($_POST['comments'])){
            $comment = new Comment($article, $this->user,  $_POST['comments'] );
            $commentsRepository->save($comment);
            $succes = 'Votre commentaire a bien été envoyé et sera très prochainement approuvé par un modérateur';
        }
        if(!empty($this->user)){
            $comments = $commentsRepository->findAll($article);
            echo $this->twig->render('article.html.twig', ['article' => $article, 'comments' => $comments, 'succes' => $succes, 'user'=> $this->user]);    
        }else{
            header('location: index.php?controller=authentification&methode=login');
        }
    }

    public function allArticles(){
        if(!empty($this->user)){
            $articleRepository = new ArticleRepository;
            $articles = $articleRepository->findAll();
            echo $this->twig->render('touslesarticles.html.twig', ['articles' => $articles, 'user'=> $this->user]);
        }else{
            header('location: index.php?controller=authentification&methode=login');
        }
    }

    public function createArticle(){
        if ((!empty($_POST['textTitle'])) && (!empty($_POST['textContent']))) {
            $ArticleRepository = new ArticleRepository;
            $article = new Article($this->user, $_POST['textTitle'], $_POST['textContent']);
            $ArticleRepository->save($article);
            header('location: index.php?controller=article&methode=tous');  
        }
        echo $this->twig->render('ecrireunarticle.html.twig', ['user' => $this->user]);
    }

    public function updateArticle(int $id){
        if($this->user->isAdmin()){
            $articleRepository = new ArticleRepository;
            $article = $articleRepository->find($id);
            if(!empty($_POST['textTitle'])){
                $article->setTitle($_POST['textTitle']);
                $article->setContent($_POST['textContent']);
                $articleRepository->save($article);
                header('Location: index.php?controller=article&methode=tous');
            }
            

            echo $this->twig->render('modifiearticle.html.twig', ['article' => $article ]);
        }else{
            echo 'bien tenté';
        }
    }


    public function deleteArticle(int $id){
        $articleRepository = new ArticleRepository;
        $article = $articleRepository->find($id);
        $articleRepository->delete($article);

        header('location: index.php?controller=article&methode=tous');

        
    }
}