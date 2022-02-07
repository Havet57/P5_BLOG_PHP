<?php 

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Repository\ArticleRepository;
use App\Repository\CommentsRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;


class ArticleController extends CoreController {
    public function displayArticle(int $id){ 
        $succes=null; 
        $commentsRepository = new CommentsRepository;
        $repository = new ArticleRepository;
        $article=$repository->find($id);
        if(!empty($this->request->request->get('comments'))){
            $comment = new Comment($article, $this->user,  $this->request->request->get('comments'));
            $commentsRepository->save($comment);
            $succes = 'Votre commentaire a bien été envoyé et sera très prochainement approuvé par un modérateur';
        }
        if(!empty($this->user)){
            $comments = $commentsRepository->findAll($article);
            echo $this->twig->render('article.html.twig', ['article' => $article, 'comments' => $comments, 'succes' => $succes, 'user'=> $this->user]);    
        }else{
            return (new RedirectResponse('index.php?controller=authentification&methode=login'))->send();
        }
    }

    public function allArticles(){
        if(!empty($this->user)){
            $articleRepository = new ArticleRepository;
            $articles = $articleRepository->findAll();
            echo $this->twig->render('touslesarticles.html.twig', ['articles' => $articles, 'user'=> $this->user]);
        }else{
            return (new RedirectResponse('index.php?controller=authentification&methode=login'))->send();
        }
    }

    public function createArticle(){

        if ((!empty($this->request->request->get('textTitle'))) && (!empty($this->request->request->get('textContent')))) {
            $ArticleRepository = new ArticleRepository;
            $article = new Article($this->user, $this->request->request->get('textTitle'), $this->request->request->get('textContent'));
            $ArticleRepository->save($article);
            return (new RedirectResponse('index.php?controller=article&methode=tous'))->send();
        }
        echo $this->twig->render('ecrireunarticle.html.twig', ['user' => $this->user]);
    }

    public function updateArticle(int $id){
        if($this->user->isAdmin()){
            $articleRepository = new ArticleRepository;
            $article = $articleRepository->find($id);
            if(!empty($this->request->request->get('textTitle'))){
                $article->setTitle($this->request->request->get('textTitle'));
                $article->setContent($this->request->request->get('textContent'));
                $articleRepository->save($article);
                return (new RedirectResponse('index.php?controller=article&methode=tous'))->send();
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

        return (new RedirectResponse('index.php?controller=article&methode=tous'))->send();

        
    }
}