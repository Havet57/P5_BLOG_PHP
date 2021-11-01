<?php

require_once 'vendor/autoload.php';

use App\Controller\HomePageController;

$controller = new HomePageController;

$controller->home();
