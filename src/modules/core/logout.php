<?php
    
    require_once $_SERVER["DOCUMENT_ROOT"]."lib/core/controller/Controller.php";
    
    class logout extends Controller {
        
        public function indexAction() {
            session_start();
            session_destroy();
            header("location: /");
        }
        
    }