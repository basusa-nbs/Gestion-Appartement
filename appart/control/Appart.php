<?php
namespace Appart\control;
use Appart\vues\AppartOption;
use Appart\vues\ContratAction;
use Appart\vues\Imprimer;


class Appart{
    private $action;
    private $params;


    public function __construct($action, $params){
        $this->action = $action;
        $this->params = $params;
    }
    public function action(){
        if(isset($_GET["search"])){
            $this->action = "menu";
            $this->params = ["search"];
        }

        $appel = $this->action;
        $this->$appel();
    
        
    }

    public function menu(){
        $this->checkRule();        
        $maVue = new AppartOption($this->params);  
    }
    public function contracter(){
        $this->checkRule();
        $maVue = new ContratAction($this->params);  
    }

    public function imprimer(){
        $this->checkRule();
        $maVue = new Imprimer($this->params);
    }

    public function seConecter(){
        session_start();
        if(isset($_SESSION["login"])){
                ?>
                <script>
                    window.location.href = "/appart/dashboard"
                </script>
                <?php
                die();
        }
        // session_abort();
        require dirname(__DIR__). DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'seConecter.php';
    }

    public function destroy(){
        session_start();
        session_destroy();
        ?>
        <script>
            window.location.href = "seConnecter"
        </script>
        <?php
    }

    public function redirection(){
        ?>
            <script>
                window.location.href = "/seConnecter"
            </script>
        <?php
    }

    private function checkRule(){
        session_start();
        if(!isset($_SESSION["login"])){
            $this->redirection();
        }
    }
    public function continue(){
        // $this->action();
        return true;
    }
}