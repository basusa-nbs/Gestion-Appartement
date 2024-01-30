<?php

namespace Appart\includes\Routeur;

class Routeur{

    private $url;
    private $routes = [];

    public function __construct($url){
        $this->url = $url;
    }

    public function get($path, $control){
        $route  = new Routes($path, $control);
        $this->routes['GET'][] = $route;
    }

    
    public function post($path, $control){

        $route  = new Routes($path, $control);
        $this->routes['POST'][] = $route;
    }

    public function routage(){
        $routing = false;
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouteurExptions('no methode detected');
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if($route->match($this->url)){
                $route->control();
                $routing = true;
                die();
            }
        }
        if(!$routing){
            
            require dirname(__DIR__) . DIRECTORY_SEPARATOR .'templates'. DIRECTORY_SEPARATOR .'page404.php';
        }

    }

}