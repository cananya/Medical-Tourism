<?php
session_start();
$username = $_SESSION['SESS_USER'];
$mysql_hostname = "Localhost";
$mysql_user = "root";
$mysql_password = "ananya08";
$mysql_database = "mydb";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
$qry="SELECT * FROM User where username='$username'";
$result=mysqli_query($bd,$qry);
$member = mysqli_fetch_assoc($result);
$first = $member["FirstName"] ;
$last = $member["LastName"] ;
$_SESSION['SESS_DOC'] =  $member["User_id"];

//session_regenerate_id();
//echo "Name : $name <br> Address : $address <br> Age : $age <br> Speciality : $speciality <br> Hospital Name : $hospitalname <br> <br> <br>" 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Tourism</title>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

        <script>
function myFunction() {
    alert("Question Posted Successfully!");
}
</script>
</head>

<body style = "background-image:url('img/bg.jpg')">

     <!-- Navigation -->
    <div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand hidden-xs" href="index.html"><i class="fa fa-heartbeat"></i>&#160;Medical Tourism</a>
         <a class="navbar-brand visible-xs" href="index.html"><i class="fa fa-heartbeat"></i>&#160;Medical Tourism</a>
         <form class="navbar-form pull-left" role="search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search">
               <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
               </div>
            </div>
         </form>
      </div>
      <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
        <li ><a href="index.html">Home</a></li>
            <li><a href="travel.html">Travel</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login.php">Logout</a></li>
         </ul>
      </div>
      <!--/.navbar-collapse -->
   </div>
</div>
    <!-- Page Content -->



    <div class="container" style="margin-top: 4%;">


            <div class="row">
                <h1>Hello <?php echo $firstname; ?>!! POST YOUR QUESTIONS HERE</h1>
            <div class="col-md-5" style="margin-top: 4%;">
                <img class="img-responsive" src="img/gru.png" alt="" >
            </div>
            <div class="col-md-6" style="margin-top: 4%;">
                
            <div class="boxed-grey">
                <form id="contact-form" action="questions_exec.php" class = "form-group" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-left:20%;">
                            <label for="name">
                                <h3 > NAME : GRU </h3> </label>
                        </div>
                  
                        <div class="form-group" style="margin-left:20%; font-size:1.2em;">
                            <label for="subject">PACKAGE SPECIALIST</label>
                            <label for="subject">Senior Customer Department</label>
                            <label for="subject">gru@medicaltourism.com</label>
                            <label for="subject">126 826 1627</label>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <!-- /.row -->
            <div class="col-lg-12">
                <h2 class="page-header">Questions Posted By Users</h2>
            </div>  
                <div class="row">                  
<?php
session_start();
$mysql_hostname = "Localhost";
$mysql_user = "root";
$mysql_password = "ananya08";
$mysql_database = "mydb";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
$qry="SELECT u.FirstName, q.question_id, q.user_id,  q.Question_Type, q.Question FROM user u, questions q where u.user_id = q.user_id and q.question_id not in (select question_id from answers)";
$result=mysqli_query($bd,$qry);
while ($member = mysqli_fetch_array($result)) {
$_SESSION['SESS_USER_ID'] = $_SESSION['SESS_DOC'];
$user_id_session = $_SESSION['SESS_USER_ID'];
$type = $member["Question_Type"] ;
$question = $member["Question"] ;
$question_id = $member["question_id"] ;
$firstname = $member["FirstName"] ;
$_SESSION['SESS_QUES_ID1'] = $member["question_id"] ;
?> 

<form id="contact-form" action="answers_exec.php" class = "form-group" method="post">
            <div class="col-md-4 text-center" >
                <div class="thumbnail">

                    <div class="caption">
                        <h3>
                            <label><b> Question Posted By : <?php echo $firstname;?></b></label>
                            <label><b> SUBJECT : <?php echo $type;?></b></label><br>
                            <small><label><b>QUESTION : <?php echo $question;?></b></label></small>
                            <div class="form-group">
                            <label for="name"><h4>Write Answer Here.</h4></label>
                            <b><textarea name="answer" id="answer" class="form-control" rows="9" cols="25"  placeholder="Post Your Answer Here"></textarea></b>
                        </div>
                        </h3>
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-left" id="btnContactUs" onclick="myFunction()">
                        Post This Answer</button>
                        </div>
                    </div>

                </div>
            </div>
</form>

<?php
}
?>
           </div>

<div class="col-lg-12">
                <h2 class="page-header">Answers posted by Gru.</h2>
            </div>  
                <div class="row">                  
<?php
session_start();
$username = $_SESSION['SESS_USER'];
$mysql_hostname = "Localhost";
$mysql_user = "root";
$mysql_password = "ananya08";
$mysql_database = "mydb";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
$qry="SELECT u.FirstName,q.Question, q.Question_type,a.Answer FROM  answers a, questions q, User u WHERE a.question_id = q.question_id AND q.User_id = u.User_id;";
$result=mysqli_query($bd,$qry);
while ($member = mysqli_fetch_array($result)) {
$_SESSION['SESS_USER_ID'] = $member["user_id"] ;
$_SESSION['SESS_QUES_ID'] = $member["question_id"] ;
$type = $member["Question_type"] ;
$question = $member["Question"] ;
$answer = $member['Answer'] ;
$firstname = $member["FirstName"] ;
?>   


            <div class="col-md-4 text-center">
                <div class="thumbnail">

                    <div class="caption">
                        <div class="form-group">
                            <label><b>QUESTION POSTED BY : <?php echo $firstname;?></b></label>
                        </div>
                        <div class="form-group">
                            <label><b>QUESTION : <?php echo $question;?></b></label>
                        </div>
                        <div class="form-group">
                            <label><b> SUBJECT : <?php echo $type;?></b></label>
                        </div>
                        <div class="form-group">
                            <label><b> YOUR ANSWER : <?php echo $answer;?></b></label>
                        </div>
                    </div>
                </div>
            </div>


<?php
}
?>
           </div>

    </div>
    </div>
    <!-- /.container -->

</body>

    <!-- Footer -->
<footer id="footerWrapper">
    <section id="mainFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="footerWidget">
                        <i class="fa fa-heartbeat"></i>&#160;Medical Tourism
                        <p><a href="http://www.little-neko.com" title="Little Neko, website template creation">Medical Tourism</a> is a web design and development studio. We build responsive HTML5 and CSS3 templates, integrating best web design practices and up-to-date web technologies to create great user experiences. We love what we do and we hope you do too! </p>
            
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footerWidget">

                        <h4>Medical Tourism</h4>
                        <address>
                            <p>320 Huntington Ave.<br>
                                Boston, MA 02120-2125 USA <br>
                                615.987.1234 <br>
                              <a href="medicaltourism@neu.com">medicaltourism@neu.com</a> </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footerWidget">
                            <h4>Follow us, we are social</h4>
                              <ul class="socialNetwork">
                                <li><a href="#" ><img src="img/googleplus.png"></a></li>
                                <li><a href="https://facebook.com/medicaltourismassociation/" target="_blank"><img src="image/facebookLogo.png"></a></li>
                                <li><a href="#"><img src="img/twitter.png"></a></li>
                                <li><a href="#"><img src="img/linkedin.png"></a></li>
                                <li><a href="#"><img src="img/email.png"></a></li>
                            </ul>        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footerRights">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p> &copy; 2016 medicaltourism.com <a href="index.html" target="blank">All rights reserved.</p>
                    </div>

                </div>
            </div>
        </section>
</footer>

</html>
