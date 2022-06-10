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
					
			        <h3>Based on number of ordered Pasta:</h3>
			        <table width="90%" style="border: solid;  margin-left: auto; margin-right: auto;">
			        	<?php
						$dbservername = "localhost";
						$dbusername = "root";
						$dbpwd = "";
						$dbname = "pizza_and_pasta";
						
						$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);


						if (!$conn) {
							echo "Unable to connect to DB: " . mysql_error();
							exit;
						}
						//>>this query will join the product table to the order_list table and output the sum of the quantity ordered per product in Pasta only including the null.
							$sql = "SELECT SUM(QUANTITY) AS QUANTITY_PER_PASTA,product.PRODUCT_ID, PRODUCT_NAME, SIZE_DESCRIPTION, PRODUCT_PRICE
								FROM order_list
								RIGHT JOIN product
								ON product.PRODUCT_ID = order_list.PRODUCT_ID
								WHERE product.PRODUCT_TYPE = 'Pasta'
								GROUP BY product.PRODUCT_ID
								ORDER BY SUM(QUANTITY) DESC;";
				

						$result = mysqli_query($conn, $sql);

						if (!$result) {
							echo "Could not successfully run query ($sql) from DB: " . mysql_error();
							exit;
						}
						?>
						<tr>
							<th>Quantity per Pasta</th>
							<th>Pasta ID</th>
							<th>Pasta Name</th>
							<th>Size Description</th>
							<th>Pasta Price</th>
						</tr>
						<?php
						while($rows=mysqli_fetch_assoc($result))
						{
							if($rows['QUANTITY_PER_PASTA'] == null)
							{
								$rows['QUANTITY_PER_PASTA'] = 0;
							}
						?>
						<br>				
						<tr>
							<td style="text-align: center;"><?php echo $rows['QUANTITY_PER_PASTA'];?></td>
							<td style="text-align: center;"><?php echo $rows['PRODUCT_ID'];?></td>
							<td style="text-align: center;"><?php echo $rows['PRODUCT_NAME'];?></td>
							<td style="text-align: center;"><?php echo $rows['SIZE_DESCRIPTION'];?></td>
							<td style="text-align: center;"><?php echo $rows['PRODUCT_PRICE'];}?></td>
						</tr>
			        </table>
			       	<br>
					   
					   <h3>Based on number of customers demand:</h3>
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
						//>> This query will join the product table to the order_list table and output the number of customer who ordered Pasta including the null.
							$sql = "SELECT COUNT(order_list.ORDER_ID) AS DEMAND, product.PRODUCT_ID, PRODUCT_NAME, SIZE_DESCRIPTION, PRODUCT_PRICE
								FROM order_list
								RIGHT JOIN product
								ON product.PRODUCT_ID = order_list.PRODUCT_ID
								WHERE PRODUCT_TYPE = 'Pasta'
								GROUP BY product.PRODUCT_ID
								ORDER BY COUNT(order_list.ORDER_ID) DESC;";
												

						$result = mysqli_query($conn, $sql);


						if (!$result) {
							echo "Could not successfully run query ($sql) from DB: " . mysql_error();
							exit;
						}
						?>
						<tr>
							<th>Demand per Pasta</th>
							<th>Pasta ID</th>
							<th>Pasta Name</th>
							<th>Size Description</th>
							<th>Pasta Price</th>
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