<?php
    
    require_once $_SERVER["DOCUMENT_ROOT"]."lib/core/controller/Controller.php";
    
    class index extends Controller {
        
        public function indexAction() {
            $this->display("core/index/index.tpl");
        }
        
    }