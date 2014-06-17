
      <!-- page content -->
      <div id="page">
      this is the messege view

      	<?php print $messege?>
      	<?php 
      	unset($_SESSION["mycart"]);
      	$_SESSION["mycart"] = array();

      	?>

      </div>
      <!-- End page content -->