<?php 

namespace App\Entity;

use DateTime;

// require_once 'admin.class.php';
final class Article {
    private int $id;
    private string $user;
    private \DateTime $date;
    private int $viewCounts;
    private int $commentsCount;
    private string $status;

    public function __construct(int $id, string $user, \DateTime $date, int $viewCounts, int $commentsCount, string $status ){
        $this->id=$id;
        $this->user=$user;
        $this->date=$date;
        $this->viewCounts=$viewCounts;
        $this->commentsCount=$commentsCount;
        $this->status=$status;
    }


}


?>