<?php

switch ( $_GET["a"] ) {

    case "login":
        // Draw login form
        include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/auth/loginView.php");
        include(APP_VIEW . "/footer.php");
        break;

    case "newuser":
        include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/auth/register.php");
        include(APP_VIEW . "/footer.php");
        break;

    case "processReg":
        
        if (addNewUser($_POST)) {
            header("Location: index.php");
        }
        else {
            $messege="can not add coustomer, try again";
            print $messege;
        }
        break;

    case "logout":
        // Destroy session and go home
        $_SESSION = 0;
        session_destroy();
        header("Location: index.php");
        break;

    case "processAuth":
        // Check user/password
        if (processAuth($_POST)) {
            header("Location: index.php");
        }
        else {
            // Draw login form
            $formError = "incorrect user name or password";
            include(APP_VIEW . "/header.php");
            include(APP_VIEW . "/auth/loginView.php");
            include(APP_VIEW . "/footer.php");
        }
        break;
}