<?php
session_start();
	//Payment
	//Receipt

	if(isset($_POST["order_confirm_btn"])){
		$dbservername = "localhost";
		$dbusername = "root";
		$dbpwd = "";
		$dbname = "pizza_and_pasta";

		//establish connection to the database	
		$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);
		//insert payment
		$last_cust_order_id = $_SESSION['last_cust_order_id'];
		$quantity_total = $_SESSION['quantity_total'];
		$total_payment = $_SESSION['total_payment'];
		//>>inserting te total payment computed to the payment table 
		$sql="INSERT INTO `payment`(`TOTAL_PRICE`, `TOTAL_QUANTITY`, `ORDER_ID`) VALUES ('$total_payment','$quantity_total ','$last_cust_order_id');";
		$conn->query($sql) or die($conn->error);
		$_SESSION['last_payment_id'] = $conn->insert_id;

		//insert receipt
		$last_payment_id = $_SESSION['last_payment_id'];
		//>> inserting the recently fetch PAYMENT_ID in the receipt table
		$sql="INSERT INTO `receipt`(`PAYMENT_ID`) VALUES ('$last_payment_id')";
		$conn->query($sql) or die($conn->error);
		$_SESSION['last_reciept_id'] = $conn->insert_id;
		header("location: ../reciept.php");
		exit();
	}else if (isset($_POST["order_cancel_btn"])) {

		$dbservername = "localhost";
		$dbusername = "root";
		$dbpwd = "";
		$dbname = "pizza_and_pasta";

		//establish connection to the database	
		$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);
		
		$last_cust_order_id = $_SESSION['last_cust_order_id'];
		//>>this will delete all the recently inserted data by the customer to the table (orderlist, cust_order, and customer) once the customer clicks the cancel button in the order table
		$sql = "DELETE FROM order_list WHERE order_list.ORDER_ID = $last_cust_order_id;";
		$conn->query($sql) or die($conn->error);
		$sql = "DELETE FROM cust_order WHERE cust_order.ORDER_ID = $last_cust_order_id;";
		$conn->query($sql) or die($conn->error);
		$sql = "DELETE FROM customer WHERE CUSTOMER_ID = (SELECT max(CUSTOMER_ID) FROM customer);";
		$conn->query($sql) or die($conn->error);
		header("location: ../index.php?ordercancel");
		exit();

	}