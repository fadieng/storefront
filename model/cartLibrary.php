<?php
include("../config/bootstrap.php");

//get the q parameter from URL
$prod_id = $_GET["id"];
$qty = $_GET["q"];

session_start();

$_SESSION["mycart"][$prod_id] += $qty;

print "Quantity of ( " . $_SESSION["mycart"][$prod_id] . " ) has been added to your cart";

?>