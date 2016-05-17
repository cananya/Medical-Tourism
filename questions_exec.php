<?php

	//Start session
	session_start();
	session_regenerate_id();
 
	//Include database connection details
	require_once('connection.php');

	$subject = $_POST['subject'];
	$question = $_POST['question'];
    $user_id = $_SESSION['SESS_USER_ID1'];

	
    $sql = "INSERT INTO questions (user_id, Question_Type, Question)
    VALUES ('$user_id','$subject','$question')";
    if (!mysqli_query($bd,$sql))
      {
      die('Error: ' . mysqli_error($bd));
      } 
    header("location: patprof.php");
    mysqli_close($bd);
    exit();

	
?>

