
      <!-- page content -->
      <div id="page">
      <!-- this is the checkout view -->
      <h3>Order details</h3>
      
      <div id="userdata">
        

        <label>Name</label><br />
        <?php print $userdata["first_name"] . " " . $userdata["last_name"]; ?>

        <br /><br />
        <label>Address</label><br />
        <?php 
          print $userdata["street_address"] . "<br />";
          print $userdata["city"] . ", " . $userdata["state"] . ", " . $userdata["zipcode"]; 
        ?>

        <br /><br />
        <label>Phone</label><br />
        <?php print $userdata["phone"];?>

        <br /><br />
        <label>E-mail</label><br />
        <?php print $userdata["email"];?>
      </div>

      <div id="ordertotal">
        <label>Your order total: </label><?php print "$" . $_GET["total"]?>
        <a href="index.php?q=product&a=placeorder">Place Order</a>

      </div>
        

     
      </div>
      <!-- End page content -->