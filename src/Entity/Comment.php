<?php 

namespace App\Entity;

class Comment {

    private ?int $id;
    private string $comment;
    private string $date;
    private bool $approved;
    private Article $article;
    private User $user;

    public function __construct(Article $article, User $user, string $comment, ?string $date=null, bool $approved=false, ?int $id=null){
        $this->id=$id;
        $this->comment=$comment;
        $this->date=$date ?? date('Y-m-d');
        $this->approved=$approved;
        $this->article=$article;
        $this->user=$user;
    }

    public function getId():?int{
        return $this->id;
    }

    public function getComment():string {
        return $this->comment;
    }

    public function getDate():string{
        return $this->date;
    }

    public function getArticle():Article{
        return $this->article;
    }

    public function getUser():User{
        return $this->user;
    }



    public function getApproved():bool {
        return $this->approved;
    }

}