<?php 

namespace App\Controller;

use App\Repository\CommentsRepository;

class CommentsController extends CoreController {

    public function displayUnapproved():void{

        $commentsRepository = new CommentsRepository;

        $toApproves = $commentsRepository->findUnapproved();

        echo $this->twig->render('comments_to_approve.html.twig', ['toApproves'=>$toApproves]);

    }

    public function delete(int $id):void{

        $commentsRepository = new CommentsRepository;

        $commentsRepository->delete($id);

        header('location: index.php?controller=comments&methode=unapproved');

    }

    public function approve(int $id):void{

        $commentsRepository = new CommentsRepository;

        $commentsRepository->approve($id);

        header('location: index.php?controller=comments&methode=unapproved');

    }
}

