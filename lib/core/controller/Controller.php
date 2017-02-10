<?php

    class Controller {
        static private $S_SMARTY = NULL;
        static private $S_MDB = NULL;
        
        protected function getSmarty() {
            return self::$S_SMARTY;
        }
        
        protected function getMedoo() {
            return self::$S_MDB;
        }
        
        static function setSmarty($smarty) {
            self::$S_SMARTY = $smarty;
        }
        
        static function setMedoo($medoo) {
            self::$S_MDB = $medoo;
        }
        
        protected function display($template) {
            $this->getSmarty()->display($template);
        }
        
        protected function assign($var_name, $var) {
            $this->getSmarty()->assign($var_name, $var);
        }
    }