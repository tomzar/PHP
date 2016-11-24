<?php

class Router {


  protected $routes = [];

  public function define($routes)
  {

    $this->routes = $routes;

  }

  public function direct($uri)
  { //finds uri and then it searches through the routes
    if(array_key_exists($uri, $this->routes)) {
      return $this->routes($uri);
    }
    throw new Exception('No routes defined for this URI');
  }

  static function load($file) {
    $router = new static ;
    require $file;
    return $router;
  }

}



 ?>
