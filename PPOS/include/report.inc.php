<?php
	if(isset($_POST['home'])){
		header("location: ../home.php");
		exit();
	}
	else if(isset($_POST['pizza'])){
		header("location: ../pizza.php");
		exit();
	}
	else if(isset($_POST['pasta'])){
		header("location: ../pasta.php");
		exit();
	}
	else if(isset($_POST['drink'])){
		header("location: ../drink.php");
		exit();
	}
	else if(isset($_POST['top_choice'])){
		header("location: ../top_choice.php");
		exit();
	}
	else if(isset($_POST['back_home'])){
	    header("location: ../home.php");
		exit();
	}
	else if(isset($_POST['back'])){
	    header("location: ../index.php");
		exit();
	}