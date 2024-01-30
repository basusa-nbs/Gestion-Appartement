<?php

namespace Appart\includes\Routeur;
use Appart\control\MyExceptions;

class Routes{

    private $path;
    private $control;

    private $matches=[];

    public function __construct($path, $control){

        $this->path = trim($path, '/');
        $this->control = $control;

    }

    public function match($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([a-zA-Z0-9]+)#', "([^/]+)", $this->path);

        $regex = "#^$path$#";
    
        if(!preg_match($regex, $url, $matchs)){
            return false;
        }

        $this->matches = $this->array_Drop($matchs, 0);
        return true;
        
    }

    private function array_Drop($array, $n){
        $newArray = [];
        foreach ($array as $key => $value) {
            if($key != $n){ $newArray[] = $value;}
        }
        return $newArray;
        
    }
    

    public function control(){
        $control = explode('#', $this->control);
        $controleur = $this->array_Drop($control, sizeof($control) - 1);
        $i = 0;
        foreach ($controleur as $c) {
            $c = 'Appart\\control\\'.$c;
            $goodaction = $control[$i+1];
            try {
                $actionneur = new $c($goodaction, $this->matches);
            } catch (MyExceptions $th) {
                $th->MaKeOutput();
            }
            if(!$actionneur->continue()){
                var_dump($actionneur);
                require dirname(__DIR__) . DIRECTORY_SEPARATOR .'templates'. DIRECTORY_SEPARATOR .'page404.php';
                die();
            }
            $i++;
        }
        $actionneur->action();

    }
}