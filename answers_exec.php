<?php

	//Start session
	session_start();
	session_regenerate_id();

	require_once('connection.php');

	  $answer = $_POST['answer'];
    $user_id = $_SESSION['SESS_DOC'];
    $question_id = $_SESSION['SESS_QUES_ID1'];
	
    $sql = "INSERT INTO answers ( question_id, user_id, answer)
    VALUES ('$question_id','$user_id','$answer')";

    if (!mysqli_query($bd,$sql))
      {
      die('Error: ' . mysqli_error($bd));
      } 
    header("location: docpage.php");
    mysqli_close($bd);
    exit();
    

	
?>

