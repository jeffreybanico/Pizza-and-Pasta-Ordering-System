<?php

	if(isset($_POST["btn_buy"])){
		header("location: ../customer.php");
		exit();
	}else if (isset($_POST["btn_sale"])) {
		header("location: ../home.php");
		exit();
	}else if(isset($_POST["about"])){
		header("location: ../about.php");
		exit();
	}