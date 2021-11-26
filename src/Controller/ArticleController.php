<?php 

namespace App\Controller;
use App\Repository\ArticleRepository;

class ArticleController extends CoreController {
    public function displayArticle(int $id){      
        $repository = new ArticleRepository;
        $article=$repository->find($id);
        echo $this->twig->render('article.html.twig', ['article' => $article]);
        
    }

    public function allArticles(){
        $articleRepository = new ArticleRepository;
        $articles = $articleRepository->findAll();
        echo $this->twig->render('touslesarticles.html.twig', ['articles' => $articles]);
    }

    public function createArticle(){
        if ((!empty($_POST['textTitle'])) && (!empty($_POST['textContent']))) {
            $ArticleRepository = new ArticleRepository;
            $ArticleRepository->save($_POST['textTitle'], $_POST['textContent']);  
        }
        echo $this->twig->render('ecrireunarticle.html.twig');
    }
}