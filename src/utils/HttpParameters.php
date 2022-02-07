<?php 


namespace App\Utils;

class HttpParameters {
  public static function get(string $name) {
    return $_GET[$name];
  } 
}

?>
