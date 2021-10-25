<?php 

namespace App\Controller;


class HomePageController {
    public function home (){
        $articles = [];
        require_once ('templates/homepage.html');
    }
}