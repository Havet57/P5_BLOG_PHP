<?php 

namespace App\Controller;

use App\Repository\CommentsRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CommentsController extends CoreController {

    public function displayUnapproved():void{

        $commentsRepository = new CommentsRepository;

        $toApproves = $commentsRepository->findUnapproved();

        echo $this->twig->render('comments_to_approve.html.twig', ['toApproves'=>$toApproves, 'user' =>$this->user]);

    }

    public function delete(int $id):void{

        $commentsRepository = new CommentsRepository;
        $comment = $commentsRepository->find($id);

        $commentsRepository->delete($comment);

        return (new RedirectResponse('index.php?controller=comments&methode=unapproved'))->send();

    }

    public function approve(int $id):void{

        $commentsRepository = new CommentsRepository;
        $comment = $commentsRepository->find($id);

        $commentsRepository->approve($comment);

        return (new RedirectResponse('index.php?controller=comments&methode=unapproved'))->send();

    }
}

