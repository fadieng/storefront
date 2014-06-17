<?php

function addProduct($array) {
	//Retrive data
	$product_name 			= $array["productname"];
	$category_id 			= $array["categoryname"];
	$product_description 	= $array["description"];
	$qty_stock 				= $array["qty"];
	$price 					= $array["price"];
	$discount				= $array["discount"];
	$shipping_id			= 1;

	$sql = "INSERT INTO inventory (product_name, product_description, category_id, qty_stock, price, discount, shipping_id) 
	VALUES ('$product_name', '$product_description', '$category_id', '$qty_stock', '$price', '$discount', '$shipping_id')";

	$res = mysql_query($sql) or die('Invalid query: ' . mysql_error());

	if($res) return "Product added successfully";
	else return "Failed to add product, please try again";
}


function modifyProduct($array, $product_id) {
	//Retrive data
	$product_name 			= $array["productname"];
	$product_description 	= $array["description"];
	$category_id 			= $array["categoryname"];
	$qty_stock 				= $array["qty"];
	$price 					= $array["price"];
	$discount				= $array["discount"];
	$shipping_id			= 1;

	$sql = "UPDATE inventory SET
	product_name		= '$product_name',
	product_description	= '$product_description',
	category_id			= '$category_id',
	qty_stock			= '$qty_stock',
	price				= '$price',
	discount			= '$discount',
	shipping_id			= 'shipping_id'
	WHERE product_id = $product_id";

	$res = mysql_query($sql) or die('Invalid query: ' . mysql_error());

	if($res) return "Product modified successfully";
	else return "Failed to modify, please try again";
}


function deleteProduct($product_id) {
	$sql = "DELETE FROM inventory WHERE product_id = $product_id";

	$res = mysql_query($sql) or die('Invalid query: ' . mysql_error());

	if($res) return "Product deleted successfully";
	else return "Failed to delete product, please try again";
}


?>