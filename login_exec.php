<?php

	//Start session
	session_start();
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];


    $_SESSION["username"] = $username;


	function getusername() {
		return $_SESSION['username'];
	}

	function getpassword() {
		return $_SESSION['password'];
	}
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	 
	//If there are input validations, redirect back to the login form
	if($errflag) { 
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	$mysql_hostname = "Localhost";
$mysql_user = "root";
$mysql_password = "ananya08";
$mysql_database = "mydb";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
	$qry="SELECT * FROM User WHERE Username='$username' AND Password='$password'";
	$result=mysqli_query($bd,$qry);


	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successfu
			
			session_regenerate_id();
			$User = mysqli_fetch_assoc($result);
			$_SESSION['SESS_USER_ID'] = $User['User_id'];
			$_SESSION['SESS_USER'] = $User['Username'];
			$_SESSION['SESS_PASS'] = $User['Password'];
			$_SESSION['SESS_ROLE'] = $User['Role'];
			$Role = $_SESSION['SESS_ROLE'];
				if ($Role == "Patient") {
				header("location: patprof.php");
				exit();
			    } else 
			    header("location: docpage.php"); 
				exit();
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();

				if ($Role = "Patient") {
				header("location: patprof.php");
				exit();
			    } else 
			    header("location: docpage.php"); 
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>