<?php
    
    require_once $_SERVER["DOCUMENT_ROOT"]."lib/core/controller/Controller.php";
    
    class checklogin extends Controller {
        
        public function indexAction() {
            ob_start();
            include 'lib/auth/config.php';
            require 'lib/auth/includes/functions.php';
            
            // Define $myusername and $mypassword
            $username = $_POST['myusername'];
            $password = $_POST['mypassword'];
            
            // To protect MySQL injection
            $username = stripslashes($username);
            $password = stripslashes($password);
            
            $response = '';
            $loginCtl = new LoginForm;
            $conf = new GlobalConf;
            $lastAttempt = checkAttempts($username);
            $max_attempts = $conf->max_attempts;
            
            
            //First Attempt
            if ($lastAttempt['lastlogin'] == '') {
            
                $lastlogin = 'never';
                $loginCtl->insertAttempt($username);
                $response = $loginCtl->checkLogin($username, $password);
            
            } elseif ($lastAttempt['attempts'] >= $max_attempts) {
            
                //Exceeded max attempts
                $loginCtl->updateAttempts($username);
                $response = $loginCtl->checkLogin($username, $password);
            
            } else {
            
                $response = $loginCtl->checkLogin($username, $password);
            
            };
            
            if ($lastAttempt['attempts'] < $max_attempts && $response != 'true') {
            
                $loginCtl->updateAttempts($username);
                $resp = new RespObj($username, $response);
                $jsonResp = json_encode($resp);
                echo $jsonResp;
            
            } else {
            
                $resp = new RespObj($username, $response);
                $jsonResp = json_encode($resp);
                echo $jsonResp;
            
            }
            
            unset($resp, $jsonResp);
            ob_end_flush();
        }
        
    }