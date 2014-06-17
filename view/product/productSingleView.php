
      <!-- page content -->
      <div id="page">
      <!-- this is the product single view -->

      

      <div id="showproduct">

        <h3><?php print $product['product_name']?></h3><br />
        <div id="productimage"><img src="images/<?php print $product['product_id']?>.jpg" width=300 /></div>
        <label>Description</label><br />    <?php print $product['product_description']?><br /><br />
        <label>Quantity in stock: </label>  <?php print $product['qty_stock']?><br /><br />
        <label>Price: </label>              <?php print $product['price']?><br /><br />
        <label>Discount: </label>           <?php print ($product['discount']*100) . " %"?><br /><br />

        <label>Quantity: </label><input type="text" id="quantity" value="1" /> 
        <button id="addtocart" onclick="addToCart(<?php print $product['product_id']?>, document.getElementById('quantity').value);">Add To Cart</button>
        <br />
        <span id="addcompleted">
          <?php 
          if (0 != $_SESSION["mycart"][$product['product_id']]) {
            print "Quantity of ( " . $_SESSION["mycart"][$product['product_id']] . " ) has been added to your cart";
          }
          ?>
        </span>
      
      </div>


      </div>
      <!-- End page content -->