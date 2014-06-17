<?php

# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");


switch ( $_GET["a"] ) {

    case "category":
        $categories = loadCategories();
        $products = loadProductsPerCategory( $_GET["category_id"] );
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/productView.php" );
        break;

    # go to product single view page
    case "show_product":
        $categories = loadCategories();
        $product = loadProductData( $_GET["product_id"] );
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/productSingleView.php" );
        break;

    # Go to add inventory form
    case "addtoinventory":
        $categories = loadCategories();
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/addproductView.php" );
        break;

    # Adding product to DATABASE
    case "addproduct":
        $addmessege = addProduct($_POST);
        $categories = loadCategories();
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/addproductView.php" );
        break;


    ####### show / modify / delete inventory

    # show all inventory
    case "showinventory":
        $products = loadProductsPerCategory("all");
        $categories = loadCategories();
        include( APP_VIEW ."/product/showinventoryView.php" );
        break;
    
    #Go to modify product page
    case "modifyproduct":
        $categories = loadCategories();
        $product = loadProductData( $_GET["product_id"] );
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/modifyinventoryView.php" );
        break;

    #modify product data in DATABASE
    case "modifyinventory":
        $categories = loadCategories();
        $modifymessege = modifyProduct($_POST, $_GET["product_id"]);
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/modifyinventoryView.php" );
        break;

    #Delete product from DATABASE
    case "deleteproduct":
        $deletemessege = deleteProduct( $_GET["product_id"] );
        header("Location: index.php?q=product&a=showinventory");
        break;

    case "mycart":
        if ( $_GET["product_id"]) {
            unset($_SESSION["mycart"][$_GET["product_id"]]);
        }
        $categories = loadCategories();
        $cartproducts = loadMyCart();
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/mycartView.php" );
        break;

    case "checkout":
        $categories = loadCategories();
        $userdata = loadUserData();
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/checkoutView.php" );
        break;

    case "placeorder":
        $categories = loadCategories();
        $messege = saveOrder();
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/messegeView.php" );
        break;

    default:
        $categories = loadCategories();
        include( APP_VIEW ."/product/productSubNav.php" );
        include( APP_VIEW ."/product/productView.php" );
        break;
}


# Include html footer
include(APP_VIEW . "/footer.php");


#------------------------------------------------------------------#
#                    Local Functions                               #  
#------------------------------------------------------------------#

function loadCategories() {
    $sql = "SELECT * FROM category ORDER BY category_name";

    $res = mysql_query($sql);

    $catagories = array();
    
    $i = 0;
    while( $row = mysql_fetch_assoc($res) ) {
        $catagories[$row["category_id"]] = $row["category_name"];
        
    }

    return $catagories;
}


function loadProductsPerCategory($cat_id) {

    if ("all" == $cat_id) {
        $sql = "SELECT * FROM inventory ORDER BY category_id, product_name";
    }

    else {
        $sql = "SELECT * FROM inventory WHERE category_id = $cat_id ORDER BY product_name";
    }


    $res = mysql_query($sql);

    $products = array();
    $i = 0;
    
    while( $row = mysql_fetch_assoc($res) ) {
        $products[$i]["product_id"]             = $row["product_id"];
        $products[$i]["product_name"]           = $row["product_name"];
        $products[$i]["product_description"]    = $row["product_description"];
        $products[$i]["category_id"]            = $row["category_id"];
        $products[$i]["qty_stock"]              = $row["qty_stock"];
        $products[$i]["price"]                  = $row["price"];
        $products[$i]["discount"]               = $row["discount"];
        $i++;
    }

    return $products;
}



function loadProductData($prod_id) {

    $sql = "SELECT * FROM inventory WHERE product_id = $prod_id";

    $res = mysql_query($sql);

    $row = mysql_fetch_assoc($res);

    return $row;

}


function loadMyCart() {

    $i = 0;
    $cartproducts = array();
    foreach ($_SESSION["mycart"] as $product_id => $qty) {
        $cartproducts[$product_id] = loadProductData($product_id);
        $i++;
    }
    
    return $cartproducts;

}

function loadUserData() {

    $sql= "SELECT * FROM user_data WHERE user_id =" . $_SESSION["user_id"];

    $res = mysql_query($sql);

    $row = mysql_fetch_assoc($res);

    return $row;
}



function saveOrder() {
    #retrive data
    $user_id    = $_SESSION["user_id"];
    $order_date = date("Y-m-d H:i:s");

    foreach ($_SESSION["mycart"] as $product_id => $qty_ordered) {
        $sql = "INSERT INTO orders (user_id, product_id, qty_ordered, order_date)
                VALUES ('$user_id', '$product_id', '$qty_ordered', '$order_date')";
        $res = mysql_query($sql) or die('Invalid query: ' . mysql_error());


        # subtract the ordered quantity from the quantity on stock
        $sql = "UPDATE inventory SET qty_stock = qty_stock-'$qty_ordered' WHERE product_id = $product_id";
        $res = mysql_query($sql) or die('Invalid query: ' . mysql_error());

        unset($_SESSION["mycart"]["$product_id"]);
    }
    
    if($res) {
        return "you successfully placed your order";
            
    }
    else return "Failed to process your order, please try again";
}

