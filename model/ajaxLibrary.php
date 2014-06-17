<?php
include("../config/bootstrap.php");

//get the q parameter from URL
$q = $_GET["q"];

// match the search keyword from inventory table
$sql = "SELECT * FROM inventory WHERE product_description LIKE '%" . $q . "%'";

$res = mysql_query($sql) or die('Invalid query: ' . mysql_error());
    
// Fill up php array with data from database
    $products = array();
    $i = 0;
    while( $row = mysql_fetch_assoc($res) ) {
        $products[$i]["productId"]      = $row["product_id"];
        $products[$i]["productName"]    = $row["product_name"];
        $products[$i]["description"]    = $row["product_description"];
        $products[$i]["categoryId"]     = $row["category_id"];
        $products[$i]["qtyStock"]       = $row["qty_stock"];
        $products[$i]["price"]          = $row["price"];
        $products[$i]["discount"]       = $row["discount"];
        $i++;
    }

    // print '<form id=myform action="javascript:gotopage()">';
    // print '<select id="FavWebSite" size=' . count($products) . ' >';
    
    // foreach ($products as $key => $value) {
    //     $url='index.php?q=product&a=show_product&product_id=' . $value["productId"];
    //     print ('<option value="' . $url . '">' . $value["productName"] . '</option>');
    // }
    // print '</select>';
    // print '<input type="submit" />';
    // print '</form>';

//output the response        
    foreach ($products as $key => $value) {
        $url='index.php?q=product&a=show_product&product_id=' . $value["productId"];
        print ('<a href="' . $url . '">' . $value["productName"] . '</a><br />');
    }
    



//echo $response;

  // print $products[0]["productName"];
  //   echo "hhhhhhhhhhhhhhhh";

    