<?php

session_start();

	if(isset($_POST["menu_next_btn"])){

		//code here is for the customer order
		//quantity of order
		$_SESSION['cheese_qty'] = $_POST['cheese_quantity'];
		$_SESSION['hawaiian_qty'] = $_POST['hawaiian_quantity'];
		$_SESSION['detriot_qty'] = $_POST['detriot_quantity'];
		$_SESSION['chicago_qty'] = $_POST['chicago_quantity'];
		$_SESSION['carbonara_qty'] = $_POST['carbonara_quantity'];
		$_SESSION['macaroni_qty'] = $_POST['macaroni_quantity'];
		$_SESSION['spaghetti_qty'] = $_POST['spaghetti_quantity'];
		$_SESSION['linguine_qty'] = $_POST['linguine_quantity'];

		//size option
		$_SESSION['cheese'] = $_POST['cheese_option'];
		$_SESSION['hawaiian'] = $_POST['hawaiian_option'];
		$_SESSION['detriot'] = $_POST['detriot_option'];
		$_SESSION['chicago'] = $_POST['chicago_option'];
		$_SESSION['carbonara'] = $_POST['carbonara_option'];
		$_SESSION['macaroni'] = $_POST['macaroni_option'];
		$_SESSION['spaghetti'] = $_POST['spaghetti_option'];
		$_SESSION['linguine'] = $_POST['linguine_option'];
		$_SESSION['drink'] = $_POST['drink_option'];
		$_SESSION['quantity_total'] = 0;

		$dbservername = "localhost";
		$dbusername = "root";
		$dbpwd = "";
		$dbname = "pizza_and_pasta";

		//establish connection to databse
		$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);
		$last_cust_order_id = $_SESSION['last_cust_order_id'];
		//total quantity $_SESSION['quantity_total'];
		//checking for menu if customer has order, if customer has no order system will prompt an error 

		//cheese
		if(($_SESSION['cheese_qty'] != 0) && ($_SESSION['cheese_qty'] > 0)){
			if(($_SESSION['cheese']!='Regular') && ($_SESSION['cheese']!='Medium') && ($_SESSION['cheese']!='Large')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['cheese_qty'];
				$quantity = $_SESSION['cheese_qty'];
				if($_SESSION['cheese']=='Regular'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','1','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['cheese']=='Medium'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','2','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['cheese']=='Large'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','3','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}
		}

		//hawaiian
		if(($_SESSION['hawaiian_qty'] != 0) && ($_SESSION['hawaiian_qty'] > 0)){
			if(($_SESSION['hawaiian']!='Regular') && ($_SESSION['hawaiian']!='Medium') && ($_SESSION['hawaiian']!='Large')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['hawaiian_qty'];
				$quantity = $_SESSION['hawaiian_qty'];
				if($_SESSION['hawaiian']=='Regular'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','4','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['hawaiian']=='Medium'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','5','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['hawaiian']=='Large'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','6','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}
		}
		//detriot
		if(($_SESSION['detriot_qty'] != 0) && ($_SESSION['detriot_qty'] > 0)){
			if(($_SESSION['detriot']!='Regular') && ($_SESSION['detriot']!='Medium') && ($_SESSION['detriot']!='Large')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['detriot_qty'];
				$quantity = $_SESSION['detriot_qty'];
				if($_SESSION['detriot']=='Regular'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','7','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['detriot']=='Medium'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','8','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['detriot']=='Large'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','9','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}	
		}
		//chicago
		if(($_SESSION['chicago_qty'] != 0) && ($_SESSION['chicago_qty'] > 0)){
			if(($_SESSION['chicago']!='Regular') && ($_SESSION['chicago']!='Medium') && ($_SESSION['chicago']!='Large')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['chicago_qty'];
				$quantity = $_SESSION['chicago_qty'];
				if($_SESSION['chicago']=='Regular'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','10','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['chicago']=='Medium'){//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','11','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['chicago']=='Large'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','12','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}	
		}

		//carbonara
		if(($_SESSION['carbonara_qty'] != 0) && ($_SESSION['carbonara_qty'] > 0)){
			if(($_SESSION['carbonara']!='Barkada size') && ($_SESSION['carbonara']!='Family size')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['carbonara_qty'];
				$quantity = $_SESSION['carbonara_qty'];
				if($_SESSION['carbonara']=='Barkada size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','13','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['carbonara']=='Family size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','14','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}	
		}
		//macaroni
		if(($_SESSION['macaroni_qty'] != 0) && ($_SESSION['macaroni_qty'] > 0)){
			if(($_SESSION['macaroni']!='Barkada size') && ($_SESSION['macaroni']!='Family size')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['macaroni_qty'];
				$quantity = $_SESSION['macaroni_qty'];
				if($_SESSION['macaroni']=='Barkada size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','15','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['macaroni']=='Family size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','16','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}
		}
		//spaghetti
		if(($_SESSION['spaghetti_qty'] != 0) && ($_SESSION['spaghetti_qty'] > 0)){
			if(($_SESSION['spaghetti']!='Barkada size') && ($_SESSION['spaghetti']!='Family size')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['spaghetti_qty'];
				$quantity = $_SESSION['spaghetti_qty'];
				if($_SESSION['spaghetti']=='Barkada size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','17','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['spaghetti']=='Family size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','18','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}
		}
		//linguine
		if(($_SESSION['linguine_qty'] != 0) && ($_SESSION['linguine_qty'] > 0)){
			if(($_SESSION['linguine']!='Barkada size') && ($_SESSION['linguine']!='Family size')){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				$_SESSION['quantity_total'] = $_SESSION['quantity_total'] + $_SESSION['linguine_qty'];
				$quantity = $_SESSION['linguine_qty'];
				if($_SESSION['linguine']=='Barkada size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','19','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
				else if($_SESSION['linguine']=='Family size'){
					//>>insert the chosen product of customer to the orderlist table 
					$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('$quantity','20','$last_cust_order_id');";
					$conn->query($sql) or die($conn->error);
				}
			}
		}
		//drinks
			if($_SESSION['quantity_total'] == 0){
				header("location: ../menu.php?erroroccured");
				exit();	
			}
			else{
				if($_SESSION['drink'] != 'none_drink' ){
					if(($_SESSION['drink'] == 'cola')||($_SESSION['drink'] == 'sprite')){
						$_SESSION['drink_qty'] = 1;
						$_SESSION['quantity_total'] = $_SESSION['drink_qty'] + $_SESSION['quantity_total'];
						if($_SESSION['drink']=='cola'){
							//>>insert the chosen product of customer to the orderlist table 
							$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('1','21','$last_cust_order_id');";
							$conn->query($sql) or die($conn->error);
						}
						else if($_SESSION['drink']=='sprite'){
							//>>insert the chosen product of customer to the orderlist table 
							$sql="INSERT INTO order_list(`QUANTITY`,`PRODUCT_ID`,`ORDER_ID`) VALUES ('1','22','$last_cust_order_id');";
							$conn->query($sql) or die($conn->error);
						}
					}
			   }
			}

		
		header("location: ../order.php");
		exit();	
	}
	else if (isset($_POST["menu_next_cancel"])) {
		//Pag si customer nagcancel ng order sa menu idedelete dito yung info na inimput nya..btw anes here yung code sa pag delete 

		$dbservername = "localhost";
		$dbusername = "root";
		$dbpwd = "";
		$dbname = "pizza_and_pasta";

		//establish connection to the database
		$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);
		//>>delete the revent customer info save to the databse once customer click that cancel button in menu page
		$last_cust_order_id = $_SESSION['last_cust_order_id'];
		$sql = "DELETE FROM cust_order WHERE cust_order.ORDER_ID = $last_cust_order_id;";
		$conn->query($sql) or die($conn->error);
		$sql = "DELETE FROM customer WHERE CUSTOMER_ID = (SELECT max(CUSTOMER_ID) FROM customer);";
		$conn->query($sql) or die($conn->error);

		header("location: ../index.php?cancel");
		exit();

	}