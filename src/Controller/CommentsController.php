<?php 

namespace App\Controller;

use App\Repository\CommentsRepository;

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

        header('location: index.php?controller=comments&methode=unapproved');

    }

    public function approve(int $id):void{

        $commentsRepository = new CommentsRepository;
        $comment = $commentsRepository->find($id);

        $commentsRepository->approve($comment);

        header('location: index.php?controller=comments&methode=unapproved');

    }
}

