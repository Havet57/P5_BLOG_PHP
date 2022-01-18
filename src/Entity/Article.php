<?php 

namespace App\Entity;

// require_once 'admin.class.php';
class Article {
    private int $id;
    private string $title;
    private string $content;
    private string $date;
    /*private User $user; 
    private int $viewCounts;
    private int $commentsCount;*/

    // public function __construct(int $id, string $title, string $content, string $date){
    //     $this->id=$id;
    //     $this->title=$title;
    //     $this->content=$content;
    //     $this->date=$date;
    //     // $this->user=$user;
    //     // $this->viewCounts=$viewCounts;
    //     // $this->commentsCount=$commentsCount;

    // }

    public function getId():int{
        return $this->id;
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getContent():string{
        return $this->content;
    }

    public function getDate():\datetime{
        return $this->date;
    }


}


?>