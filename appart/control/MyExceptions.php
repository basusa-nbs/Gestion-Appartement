<?php
namespace Appart\control;

class MyExceptions extends \Exception{
    
    public function __construct(String $mess) {
        parent::__construct($mess);
        
    }
    public function MaKeOutput(){
        $result = [];
        $result["error"] = $this->getMessage();
        echo json_encode($result);
        die();
    }
}