<?php
$uri = trim($_SERVER['REQUEST_URI'], '/');


class Request {
  public static function uri() {
    return trim($_SERVER['REQUEST_URI'], '/');
  }
}

 ?>
