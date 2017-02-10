<?php

    $db_type = 'mysql';
    $db_name = 'kmycic';
    $db_server = 'localhost';
    $db_port = 3306;
    $db_username = 'kmycic';
    $db_password = 'YYcrhUMdSnphbrTx';
    $db_charset = 'utf8';
    
    
    // dozwolone strony (nie wymagające logowania)
    
    $allowed_sites = array();
    $allowed_sites[] = "checklogin";
    $allowed_sites[] = "register";
    $allowed_sites[] = "createuser";
    
    
    //auth

    //DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

    $tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
    $tbl_members = $tbl_prefix."members";
    $tbl_attempts = $tbl_prefix."loginAttempts";
    
    //Set this for global site use
    $site_name = 'Test Site';
    
    //Maximum Login Attempts
    $max_attempts = 5;
    //Timeout (in seconds) after max attempts are reached
    $login_timeout = 300;
    
    //ONLY set this if you want a moderator to verify users and not the users themselves, otherwise leave blank or comment out
    $admin_email = '';
    
    //EMAIL SETTINGS
    //SEND TEST EMAILS THROUGH FORM TO https://www.mail-tester.com GENERATED ADDRESS FOR SPAM SCORE
    $from_email = 'youremail@domain.com'; //Webmaster email
    $from_name = 'Test Email'; //"From name" displayed on email
    
    //Find specific server settings at https://www.arclab.com/en/kb/email/list-of-smtp-and-pop3-servers-mailserver-list.html
    $mailServerType = 'smtp';
    //IF $mailServerType = 'smtp'
    $smtp_server = 'smtp.mail.domain.com';
    $smtp_user = 'youremail@domain.com';
    $smtp_pw = 'yourEmailPassword';
    $smtp_port = 465; //465 for ssl, 587 for tls, 25 for other
    $smtp_security = 'ssl';//ssl, tls or ''
    
    //HTML Messages shown before URL in emails (the more
    $verifymsg = 'Click this link to verify your new account!'; //Verify email message
    $active_email = 'Your new account is now active! Click this link to log in!';//Active email message
    //LOGIN FORM RESPONSE MESSAGES/ERRORS
    //$signupthanks = 'Thank you for signing up! You will receive an email shortly confirming the verification of your account.';
    $signupthanks = "Dziekujemy za rejestrację. ";
    $activemsg = 'Your account has been verified! You may now login at <br><a href="'.$signin_url.'">'.$signin_url.'</a>';
    $sendVerMail = false; // czy wysyłać mail-e weryfikujące?
    if($sendVerMail) {
        $signupthanks .= "Wysłaliśmy email weryfikujący konto. Sprawdź pocztę.";
    } else {
        $signupthanks .= "Poczekaj aż twoje konto zostanie aktywowane. Powiadomimy cię o tym.";
    }
    //DO NOT TOUCH BELOW THIS LINE
    //Unsets $admin_email based on various conditions (left blank, not valid email, etc)
    if (trim($admin_email, ' ') == '') {
        unset($admin_email);
    } elseif (!filter_var($admin_email, FILTER_VALIDATE_EMAIL) == true) {
        unset($admin_email);
        echo $invalid_mod;
    };
    $invalid_mod = '$adminemail is not a valid email address';
    
    //Makes readable version of timeout (in minutes). Do not change.
    $timeout_minutes = round(($login_timeout / 60), 1);
    