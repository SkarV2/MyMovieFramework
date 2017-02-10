<?php

    class Moduler {
        private $module;
        private $dirs = array( // dopuki tutaj nie dodasz modułu to nie dostaniesz się do niego
            "core" => array("index", "logout", "checklogin", "register", "createuser"),
            "kmycic" => array(),
        );
        
        function __construct($module, $action = "") {
            $this->module = $this->createModuleObject($module);
            if(empty($action)) {
                $this->module->indexAction();                
            } else {
                $action_Action = $action."Action";
                $this->module->$action_Action();
            }
        }
        
        private function createModuleObject($module) {
            foreach($this->dirs as $dir => $mod) {
                if(in_array($module, $mod)) {
                    require_once $dir."/".$module.".php";
                    return new $module();
                } else {
                    die("Brak modułu: ".$module);
                }
            }
        }
    }