<?php
    
    require_once "Controller.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."src/modules/Moduler.php";

    class IndexController extends Controller {
        private $module;
        private $action;
        
        private $module_obj;
        
        function __construct() {
            $this->getVars();
            $this->module_obj = new Moduler($this->module, $this->action);
        }
        
        private function getVars() {
            if(isset($_GET["m"]) && !empty($_GET["m"])) {
                $_ma = explode(".", $_GET["m"]);
                if(count($_ma) == 2) {
                    $this->module = $_ma[0];
                    $this->action = $_ma[1];
                } else if(!empty($_ma[0])) {
                    $this->module = $_ma[0];
                    $this->action = "";
                } else {
                    die("Błąd: nieprawidłowy moduł/akcja");
                }
                return true;
            } else if(!isset($_GET["m"]) || empty($_GET["m"])) {
                $_GET["m"] = "index";
                $this->getVars();
            }
        }
    }