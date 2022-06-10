<!DOCTYPE html>
<html>
<head>
	<title>Pizza and Pasta Ordering System</title>
	<link rel="stylesheet" href="CSS/PPOS.css">
</head>
<body>
	
	<div class="box">

			 <form class="format" action="include/report.inc.php" method="post">
			 		<ul>
					 	<li><button class="admin_btn" type="submit" name="home">Home</button></li>
						<li><button class="admin_btn" type="submit" name="pizza">Pizza</button></li>
						<li><button class="admin_btn" type="submit" name="pasta">Pasta</button></li>
						<li><button class="admin_btn" type="submit" name="drink">Drink</button></li>
						<li><button class="admin_btn" type="submit" name="top_choice">Top choice</button></li>
					</ul>
					<br>
					<h3>Total Revenue: Php <?php
							$dbservername = "localhost";
							$dbusername = "root";
							$dbpwd = "";
							$dbname = "pizza_and_pasta";
							
							$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);

							if (!$conn) {
								echo "Unable to connect to DB: " . mysql_error();
								exit;
							}
							//>> This query will compute the total revenue that the sales generated and output it in the top_option page.
								$sql = "SELECT SUM(`TOTAL_PRICE`) AS REVENUE FROM `payment`;";
					
							$result = mysqli_query($conn, $sql);

							if (!$result) {
								echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								exit;
							}
							
							while($rows=mysqli_fetch_assoc($result))
							{
								echo $rows['REVENUE'];
							}
					?></h3>
			        <h3>Best seller based on number of order:</h3>
				       <table width="90%" style="border: solid;  margin-left: auto; margin-right: auto;">
				        	<?php
					
							if (!$conn) {
								echo "Unable to connect to DB: " . mysql_error();
								exit;
							}
							//>>this query will join the product table to the order_list table and output the sum of the quantity in descending order per product to determine the highest number of ordered product per quantity including the null.
								$sql = "SELECT SUM(QUANTITY) AS QUANTITY_PER_PRODUCT,product.PRODUCT_ID, PRODUCT_NAME, SIZE_DESCRIPTION, PRODUCT_PRICE
									FROM order_list
									RIGHT JOIN product
									ON product.PRODUCT_ID = order_list.PRODUCT_ID
									GROUP BY product.PRODUCT_ID
									ORDER BY SUM(QUANTITY) DESC;";
					

							$result = mysqli_query($conn, $sql);

							if (!$result) {
								echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								exit;
							}
							?>
							<tr>
								<th>Quantity per Product</th>
								<th>Product ID</th>
								<th>Product Name</th>
								<th>Size Description</th>
								<th>Product Price</th>
							</tr>
							<?php
							while($rows=mysqli_fetch_assoc($result))
							{
								if($rows['QUANTITY_PER_PRODUCT'] == null)
								{
									$rows['QUANTITY_PER_PRODUCT'] = 0;
								}
							?>
							<br>				
							<tr>
								<td style="text-align: center;"><?php echo $rows['QUANTITY_PER_PRODUCT'];?></td>
								<td style="text-align: center;"><?php echo $rows['PRODUCT_ID'];?></td>
								<td style="text-align: center;"><?php echo $rows['PRODUCT_NAME'];?></td>
								<td style="text-align: center;"><?php echo $rows['SIZE_DESCRIPTION'];?></td>
								<td style="text-align: center;"><?php echo $rows['PRODUCT_PRICE'];}?></td>
							</tr>
				        </table>
				        <br>
				        <h3>Best seller based on the customers demand:</h3>
				        <table width="90%" style="border: solid;  margin-left: auto; margin-right: auto;">
				        	<?php
							$dbservername = "localhost";
							$dbusername = "root";
							$dbpwd = "";
							$dbname = "pizza_and_pasta";
							
							if (!$conn) {
								echo "Unable to connect to DB: " . mysql_error();
								exit;
							}
							//>> This query will join the product table to the order_list table and output the number of customer who order in descending order to determine the most number of product that customer demand including the null.
								$sql = "SELECT COUNT(order_list.ORDER_ID) AS DEMAND, product.PRODUCT_ID, PRODUCT_NAME, SIZE_DESCRIPTION, PRODUCT_PRICE
									FROM order_list
									RIGHT JOIN product
									ON product.PRODUCT_ID = order_list.PRODUCT_ID
									GROUP BY product.PRODUCT_ID
									ORDER BY COUNT(order_list.ORDER_ID) DESC;";
													

							$result = mysqli_query($conn, $sql);

							if (!$result) {
								echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								exit;
							}
							?>
							<tr>
								<th>Demand per Product</th>
								<th>Product ID</th>
								<th>Product Name</th>
								<th>Size Description</th>
								<th>Product Price</th>
							</tr>
							<?php
							while($rows=mysqli_fetch_assoc($result))
							{
								if($rows['DEMAND'] == null)
								{
									$rows['DEMAND'] = 0;
								}
							?>
							<br>				
							<tr>
								<td style="text-align: center;"><?php echo $rows['DEMAND'];?></td>
								<td style="text-align: center;"><?php echo $rows['PRODUCT_ID'];?></td>
								<td style="text-align: center;"><?php echo $rows['PRODUCT_NAME'];?></td>
								<td style="text-align: center;"><?php echo $rows['SIZE_DESCRIPTION'];?></td>
								<td style="text-align: center;"><?php echo $rows['PRODUCT_PRICE'];}?></td>
							</tr>
				        </table>
						      <div class="btn-block">
				              <button class="btn" type="submit" name="back_home">Back to home↩</button>
				              </div>
	
		     </form>
	</div>
</body>
</html>