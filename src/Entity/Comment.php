<?php 

namespace App\Entity;

use phpDocumentor\Reflection\Types\Boolean;

class Comment {

    private ?int $id;
    private string $comment;
    private \datetime $date;
    private bool $approved;
    private Article $article;
    private User $user;

    public function __construct(Article $article, User $user, string $comment, \DateTime $date, bool $approved, ?int $id=null){
        $this->id=$id;
        $this->comment=$comment;
        $this->date=$date;
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

    public function getDate():\datetime{
        return $this->date;
    }

    public function getApproved():bool {
        return $this->approved;
    }

}