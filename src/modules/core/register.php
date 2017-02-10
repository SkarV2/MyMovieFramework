<?php
    
    require_once $_SERVER["DOCUMENT_ROOT"]."lib/core/controller/Controller.php";
    
    class register extends Controller {
        
        public function indexAction() {
            session_start();

            if (isset($_SESSION['username'])) {
                session_start();
                session_destroy();
            }
            $this->display("core/register/index.tpl");
        }
        
    }