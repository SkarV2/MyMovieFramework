<?php
    include_once "lib/config/config.php";
    
    if (!isset($_SESSION['username']) && !in_array($_GET["m"], $allowed_sites)) {
        include_once "lib/auth/main_login.php";
    } else {
        require_once "lib/core/controller/Controller.php";
        require_once "lib/core/model/Medoo.php";
        require_once "lib/core/view/Smarty.class.php";
        
        require_once "lib/core/controller/IndexController.php";
        
        Controller::setMedoo(new Medoo\Medoo([
            'database_type' => $db_type,
            'database_name' => $db_name,
            'server' => $db_server,
            'username' => $db_username,
            'password' => $db_password,
            'charset' => $db_charset,
            'port' => $db_port])
        );
        
        $_smarty = new Smarty();
        $_smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT'].'src/templates');
        $_smarty->setCompileDir($_SERVER['DOCUMENT_ROOT'].'src/templates_c');
        $_smarty->setCacheDir($_SERVER['DOCUMENT_ROOT'].'cache/smarty');
        $_smarty->setConfigDir($_SERVER['DOCUMENT_ROOT'].'lib/config/smarty');
        
        Controller::setSmarty($_smarty);
        
        $INDEX = new IndexController();
    }