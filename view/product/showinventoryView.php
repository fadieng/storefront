		<div id="pageFullWidth">
		      this is the Show inventory view

		    <span id="actionmessege"><?php print $deletemessege;?></span>  
			<h2>All Products</h2>

			<table id="showinventory">
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Description</th>
					<th>Category</th>
					<th>Quantity</th>
					<th>price</th>
					<th>Discount</th>
				</tr>

				<?php
					foreach ($products as $key => $product) {
						print "<tr>";
						print "<td>" . $product['product_id'] . "</td>";
						print "<td>" . $product['product_name'] . "</td>";
						print "<td>" . $product['product_description'] . "</td>";
						print "<td>" . $categories[$product['category_id']] . "</td>";
						print "<td>" . $product['qty_stock'] . "</td>";
						print "<td>" . $product['price'] . "</td>";
						print "<td>" . $product['discount'] . "</td>";
						print "<td>" . $product['discount'] . "</td>";
						
						$modifyurl = "index.php?q=product&a=modifyproduct&product_id=" . $product['product_id'];
						$deleteurl = "index.php?q=product&a=deleteproduct&product_id=" . $product['product_id'];

						print '<td><a href="' . $modifyurl . '">Modify</a><td>';
						print '<td><a href="' . $deleteurl . '">Delete</a><td>';
						print "</tr>";
					}
				?>

			
			</table>

		</div>