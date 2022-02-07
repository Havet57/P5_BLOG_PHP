<?php 

namespace App\Entity;

class Article {
    private ?int $id;
    private string $title;
    private string $content;
    private string $date;
    private User $user; 

    public function __construct(User $user, string $title, string $content, ?string $date=null, ?int $id=null){
        $this->id=$id;
        $this->title=$title;
        $this->content=$content;
        $this->date=$date ?? date('Y-m-d');
        $this->user=$user;

    }

    public function getUser():User{
        return $this->user;
    }

    public function getId():?int{
        return $this->id;
    }

    public function setTitle(string $title):void{
        $this->title=$title;

    }

    public function getTitle():string{
        return $this->title;
    }

    public function setContent(string $content):void{
        $this->content=$content;
    }
    
    public function getContent():string{
        return $this->content;
    }

    public function getDate():string{
        return $this->date;
    }


}


?>