<?php 


namespace App\Utils;

class HttpParameters {
    public static function get(int $id) {
      return $_GET[$id];
    } 
  }

?>
