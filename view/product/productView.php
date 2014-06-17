
      <!-- page content -->
      <div id="page">
      <!-- this is the product view -->

      <div id="showproducts">

      <?php
      if ("category" == $_GET["a"]) {
      	foreach ($products as $key => $value) {
        	$url='index.php?q=product&a=show_product&product_id=' . $value["product_id"];
        	print ('<a href="' . $url . '">' . $value["product_name"] . '</a><br />');
    	}
    
      }
      

      ?>

      </div>
      </div>
      <!-- End page content -->