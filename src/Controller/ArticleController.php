<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;
use App\Repository\CommentsRepository;

class ArticleController extends CoreController {
    public function displayArticle(int $id){  
        $commentsRepository = new CommentsRepository;
        if(!empty($_POST['comments'])){
            $commentsRepository->save($id, $this->user['id'], $_POST['comments']);
        }
        $comments = $commentsRepository->findAll($id);
        $repository = new ArticleRepository;
        $article=$repository->find($id);
        echo $this->twig->render('article.html.twig', ['article' => $article, 'comments' => $comments]);
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
            $ArticleRepository->save($_POST['textTitle'], $_POST['textContent']);  
        }
        echo $this->twig->render('ecrireunarticle.html.twig');
    }

    public function updateArticle(int $id){
        if($this->user['is_admin']){
            $articleRepository = new ArticleRepository;

            if(!empty($_POST['textTitle'])){
                $articleRepository->update($_POST['textTitle'], $_POST['textContent'], $id);
                header('Location: index.php');
            }
            $article = $articleRepository->find($id);

            echo $this->twig->render('modifiearticle.html.twig', ['article' => $article ]);
        }else{
            echo 'bien tenté';
        }
    }

    public function deleteArticle(int $id){
        $articleRepository = new ArticleRepository;
        $articleRepository->delete($id);

        header('location: index.php?controller=article&methode=tous');

        
    }
}