
      <!-- page content -->
      <div id="page">
      this is the cart view
            
      

      <div id="showproduct">
      <?php print date("Y-m-d H:i:s")?>
        <table id="mycart">
          
          <?php
          $i = 1;
          foreach ($cartproducts as $prod_id => $product) { 
            $ordered_qty = $_SESSION["mycart"][$product['product_id']];
            $total[$i] = ($product['price'] * $ordered_qty * (1-$product['discount']));
            $url='index.php?q=product&a=show_product&product_id=' . $prod_id;
          ?>

            <tr><td colspan="5" id="prodname">
              <a href="<?php print $url?>"><h4><?php print $product['product_name']?></h4></a>
            </td></tr>
            <tr>
              <td>
                <?php print $i;?>
              </td>
              <td>
                <a href="<?php print $url?>"><img src="images/<?php print $product['product_id']?>.jpg" width="75" /></a>
              </td>
              <td id="desc">
                <label>Description</label><br />    <?php print $product['product_description']?><br />
                <label>Category: </label>  <?php print $categories[$product['category_id']]?><br />
                <label>Quantity in stock: </label>  <?php print $product['qty_stock']?> 
              </td>
              <td id="remove">
                <a href="index.php?q=product&a=mycart&product_id=<?php print $prod_id?>">Remove</a>
              </td>
              <td id="price">
                <label>Price: </label><span>        <?php print $product['price']?></span><br />
                <label>Quantity: </label><span>     <?php print $ordered_qty?><br /></span>
                <label>Discount: </label><span>     <?php print $product['discount']?></span><br />
                <label class="total">Total: </label><span class="total">     <?php print $total[$i]?></span>
              </td>
              
            </tr>
          <?php $i++; }?>
            <tr>
              <td colspan="5" class="total">
                <label>Order Total: </label><?php print array_sum($total)?>
              </td>
            </tr>
            <tr>
              <td colspan="5" align="right">
                <a href="index.php?q=product&a=checkout&total=<?php print array_sum($total)?>">Check out</a>
              </td>
            </tr>

        </table>

      </div>

      </div>
      <!-- End page content -->