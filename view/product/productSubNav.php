
      <!-- sub navigation -->
      <div id="subNav">

      <?php
      	foreach ( $categories as $key => $cat ) {
            $url = "index.php?q=product&a=category&category_id=" . $key;
            print '<a href="' . $url . '">' . $cat . '</a><br />';
          }
      ?>

      <br />
      
      
      </div>
      <!-- end sub navigation -->