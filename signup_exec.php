<?php

	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
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
	$fname = $_POST['userFirstName'];
	$username = $_POST['userName'];
	$password = $_POST['userPassword'];
    $lname = $_POST['userLastName'];
    $role = "Patient";
    $message = "Username Already Exists!";
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result=mysqli_query($bd,$qry);
    $_SESSION['SESS_USER'] = $member['username'];
	$_SESSION['SESS_PASS'] = $member['password'];
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
         header("location: login.php");
			echo "<script type='text/javascript'> alert('$message'); </script>";
		}else {

    $sql = "INSERT INTO user ( Username, Password,FirstName, LastName, Role )
    VALUES ('$username','$password','$fname', '$lname', '$role')";
    if (!mysqli_query($bd,$sql))
      {
      die('Error: ' . mysqli_error($bd));
      }

    $_SESSION['SESS_USER'] = $username;  
    echo "1 record added";
    header("location: patprof.php");
    mysqli_close($bd);
    exit();
}
	}else {
		die("Query failed");
	}
?>

