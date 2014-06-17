<?php

function authCheck($array) {

    if ($array["user_id"]) {
        return true;
    }
    else {
        return false;
    }
}

function processAuth($array) {

	$sql = "SELECT * FROM login_data WHERE user_name = '" . $array["userId"] . "'";
    
	$res = mysql_query($sql);

	$row = mysql_fetch_assoc($res);


    if (!$row) {
        
        return false;
    }
    elseif ( md5($array["password"]) != $row["password"]) {
    	return false;	
    }
    else {
    	$_SESSION["user_id"] = $row["user_id"];

        return true;
    }


}


function addNewUser($array) {
    #retrive data
    $user_name      = $array["userid"];
    $password       = md5($array["password"]);
    
    $first_name     = $array["firstname"];
    $last_name      = $array["lastname"];
    $street_address = $array["address"];   
    $city           = $array["city"];
    $state          = $array["state"];
    $zipcode        = $array["zipcode"];
    $phone          = $array["phone"];
    $email          = $array["email"];

    $sql = "INSERT INTO user_data (first_name, last_name, street_address, city, state, zipcode, phone, email)
            VALUES ('$first_name', '$last_name', '$street_address', '$city', '$state', '$zipcode', '$phone', '$email')";

    $res = mysql_query($sql) or die('Invalid query: ' . mysql_error());

    if ($res) {
        $user_id = mysql_insert_id();

        $sql = "INSERT INTO login_data (user_id, user_name, password)
                VALUES ('$user_id', '$user_name', '$password')";
        $res1 = mysql_query($sql) or die('Invalid query: ' . mysql_error());

        if ($res1) {
            $_SESSION["user_id"] = $user_id;
            
        return true;
        }
    }
}