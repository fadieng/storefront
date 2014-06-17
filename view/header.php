<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/form.css" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <title>My Project</title />
  </head>
  <body>
    <div id="content"><!-- Main Content Wraper Div -->
      <div id="topPage">
        <div id="logo">
          <img src="images/logo.png">
        </div>
        <div id="userArea">
          <?php
            if ($_SESSION["user_id"]) {
                $logout = ' ( <a href="index.php?q=auth&a=logout">Logout</a> )';
                print "Welcome " . $_SESSION["user_name"] . $logout;
                print ' | <a href="index.php?q=product&a=mycart" >My Cart</a>'; 
            }
            else {
                print '<a href="index.php?q=auth&a=login">Login</a>';
                print ' | <a href="index.php?q=auth&a=newuser">New Customer</a>';
            }
          ?>
        </div>
      </div>
