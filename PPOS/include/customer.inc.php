<?php
session_start();

	if(isset($_POST["cust_next_btn"])){
		//code for getting info from user

		$f_name = $_POST['first_name'];
		$l_name = $_POST['last_name'];
		$street = $_POST['street'];
		$brgy = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$contact_num = $_POST['contact'];

		$dbservername = "localhost";
		$dbusername = "root";
		$dbpwd = "";
		$dbname = "pizza_and_pasta";

		//establish connection to the database	
		$conn = mysqli_connect($dbservername, $dbusername, $dbpwd, $dbname);

		//check kung lahat ng input boxex ay linagyan ni customer ng info
		if(empty($f_name) || empty($l_name) || empty($street) || empty($brgy) || empty($city) || empty($province) || empty($contact_num)){	
			header("location: ../customer.php?error=emptyinput");
			exit();
		}
		else{

			if(!preg_match("/^[a-zA-Z]*$/", $f_name)){
				header("location: ../customer.php?error=invalid-input-in-first-name");
				exit();
			}

			if(!preg_match("/^[a-zA-Z]*$/", $l_name)){
				header("location: ../customer.php?error=invalid-input-in-last-name");
				exit();
			}

			if(!preg_match('/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/', $street)){
				header("location: ../customer.php?error=invalid-input-in-street");
				exit();
			}

			if(!preg_match('/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/', $brgy)){
				header("location: ../customer.php?error=invalid-input-in-barangay");
				exit();
			}
			if(!preg_match('/(?=.*[A-Z])(?=.*[a-z])/', $city)){
				header("location: ../customer.php?error=invalid-input-in-city");
				exit();
			}
			if(!preg_match("/^[a-zA-Z]*$/", $province)){
				header("location: ../customer.php?error=invalid-input-in-province");
				exit();
			}

			if(!preg_match('/(?=.*[0-9])/', $contact_num)){
				header("location: ../customer.php?error=invalid-input-in-mobile-number");
				exit();
			}
			
			//>>inserting customer data once customer click the next button on customer page
			$sql = "INSERT INTO customer(FIRST_NAME, LAST_NAME, STREET, BARANGAY, CITY, PROVINCE, CONTACT_NUMBER) VALUES ('$f_name','$l_name','$street','$brgy','$city','$province','$contact_num');";
			$conn->query($sql) or die($conn->error);
			$_SESSION['last_customer_id'] = $conn->insert_id;
			$last_customer_id = $_SESSION['last_customer_id'];
			//>>inserting the recent fetch CUSTOMER_ID in cust_order table
			$sql="INSERT INTO cust_order(CUSTOMER_ID) VALUES ('$last_customer_id');";
			$conn->query($sql) or die($conn->error);
			$_SESSION['last_cust_order_id'] = $conn->insert_id;
			header("location: ../menu.php");
			exit();
		}
	}
	//here naman pagpinindot ni customer yung cancel button
	else if (isset($_POST["cust_cancel_btn"])) {
		header("location: ../index.php?ordercancel");
		exit();
	}