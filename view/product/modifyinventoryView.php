 <!-- page content -->
      <div id="page">
      this is the modify product view

      	<span id="actionmessege"><?php print $modifymessege;?></span>
      	<form name="addProductForm" id="name="addProductForm"" 
      		  action="index.php?q=product&a=modifyinventory&product_id=<?php print $product['product_id'];?>" onsubmit="return validateForm(this)" method="post">
      		<fieldset id="productinfo">
				<legend><span>Modify Product</span></legend>    

				<label for="categorynameinput">* Category Name: </label>
				<select name="categoryname" id="categorynameinput">
					
	      			<?php
				      	foreach ( $categories as $key => $cat ) {
	            			print '<option value="' . $key . '" ';
	            			if ($key == $product['category_id']) print 'selected="selected"';
	            			print '>' . $cat . '</option>';
	          			}
	      			?>
      			</select>
				<span id="categorynameError" style="color: red; font-size: 12pt"></span>
			    
			    <label for="productnameinput">* Product Name: </label>
				<input type="text" name="productname" id="productnameinput" size="50" value="<?php print $product['product_name'];?>" />
				<span id="productnameError" style="color: red; font-size: 12pt"></span>
				
			    <label for="descriptioninput">* Description: </label>
				<textarea rows="4" cols="50" name="description" id="descriptioninput" ><?php print $product['product_description'];?> </textarea>
				<span id="descriptionError" style="color: red; font-size: 12pt"></span>
				
			    <label for="qtyinput">* Quantity in stock: </label>
				<input type="text" name="qty" id="qtyinput" size="7"  value="<?php print $product['qty_stock'];?>"/>
				<span id="qtyError" style="color: red; font-size: 12pt"></span>
				
				<label for="priceinput">* Price : </label>
				<input type="text" name="price" id="priceinput" size="10" value="<?php print $product['price'];?>"/>
				<span id="priceError" style="color: red; font-size: 12pt"></span>

				<label for="discountinput">* Discount: </label>
				<input type="text" name="discount" id="discountinput" size="10" value="<?php print $product['discount'];?>"/>
				<span id="discountError" style="color: red; font-size: 12pt"></span>

				<input type="submit" id="submit" value="-- Modify Product --">

			</fieldset>
			</form>


      </div>
      <!-- End page content -->