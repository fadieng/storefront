 <!-- page content -->
      <div id="page">
      <!-- this is the add product view -->

      	<span id="actionmessege"><?php print $addmessege;?></span>
      	<form name="addProductForm" id="addProductForm" action="index.php?q=product&a=addproduct" onsubmit="return validateForm('addProductForm')" method="post">
      		<fieldset id="productinfo">
				<legend><span>Add Product</span></legend>    

				<label for="categorynameinput">* Category Name: </label>
				<select name="categoryname" id="categorynameinput">
					<option value="" selected="selected">Select Category</option>
	      			<?php
				      	foreach ( $categories as $key => $cat ) {
	            			print '<option value="' . $key . '">' . $cat . '</option>';
	          			}
	      			?>
      			</select>
				<span id="categorynameError" style="color: red; font-size: 12pt"></span>
			    
			    <label for="productnameinput">* Product Name: </label>
				<input type="text" name="productname" id="productnameinput" size="50" placeholder="Please enter product name" />
				<span id="productnameError" style="color: red; font-size: 12pt"></span>
				
			    <label for="descriptioninput">* Description: </label>
				<textarea rows="4" cols="50" name="description" id="descriptioninput" placeholder="Please enter product description" ></textarea>
				<span id="descriptionError" style="color: red; font-size: 12pt"></span>
				
			    <label for="qtyinput">* Quantity in stock: </label>
				<input type="text" name="qty" id="qtyinput" size="7"  />
				<span id="qtyError" style="color: red; font-size: 12pt"></span>
				
				<label for="priceinput">* Price : </label>
				<input type="text" name="price" id="priceinput" size="10" />
				<span id="priceError" style="color: red; font-size: 12pt"></span>

				<label for="discountinput">* Discount: </label>
				<input type="text" name="discount" id="discountinput" size="10" />
				<span id="discountError" style="color: red; font-size: 12pt"></span>

				<input type="submit" id="submit" value=" Add Product ">

			</fieldset>
			</form>


      </div>
      <!-- End page content -->