<?php
session_start();
$username = $_SESSION['SESS_USER'];
$mysql_hostname = "Localhost";
$mysql_user = "root";
$mysql_password = "ananya08";
$mysql_database = "mydb";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
$qry="SELECT User_id, Username,FirstName,LastName  FROM user where username='$username'";
$result=mysqli_query($bd,$qry);
$member = mysqli_fetch_assoc($result);
$username = $member["username"] ;
$firstname = $member["FirstName"] ;
$lastname = $member["LastName"] ;
$userID =  $member["User_id"] ;
$_SESSION['SESS_USER_ID1'] = $userID;
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
                <h1>Hello <?php echo $firstname; ?>!! </h1>
                <h3>POST YOUR QUESTIONS HERE</h3>
            <div class="col-md-5" style="margin-top: 4%;">
                <img class="img-responsive" src="img/profile.jpg" alt="">
            </div>
            <div class="col-md-6" style="margin-top: 4%;">
                
            <div class="boxed-grey">
                <form id="contact-form" action="questions_exec.php" class = "form-group" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" value = "<?php echo $firstname; ?>" name="name" id="name" placeholder="Enter name" required="required" />
                        </div>
                  
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" id = "subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="General">Treatment Details</option>
                                <option value="Diagnosis">Travel Query</option>
                                <option value="Medication">Package Question</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Write Your Question.</label>
                            <textarea name="question" id="question" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Question"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-left" id="btnContactUs" onclick="myFunction()" style="margin-top:-15%;">
                            Post This Question</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        <!-- /.row -->

            <div class="col-lg-12">
                <h3 class="page-header" style="margin-top:-1.5%;"><?php echo $firstname; ?> 's Questions</h3>
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
$qry="SELECT q.question_id, q.user_id, q.Question_Type, q.Question FROM user u, questions q
where u.user_id = q.user_id and u.username='$username' and q.question_id not in (select question_id from answers)";
$result=mysqli_query($bd,$qry);
while ($member = mysqli_fetch_array($result)) {
$user_id = $member["user_id"] ;
$_SESSION['SESS_USER_ID'] = $user_id;
$_SESSION['SESS_QUES'] = $question_id;
$type = $member["Question_Type"] ;
$question = $member["Question"] ;
$question_id = $member["question_id"] ;
?>


            <div class="col-md-4 text-center">
                <div class="thumbnail">

                    <div class="caption">
                        <h3><label><b> SUBJECT : <?php echo $type;?></b></label><br>
                            <small><label><b>QUESTION : <?php echo $question;?></b></label></small>
                        </h3>
                        
                        
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


<?php
}

if ($user_id == "") {
?>

<h2>You have not posted any questions!</h2>

<?php
}
?>

           </div>

        
            <div class="col-lg-12">
                <h2 class="page-header"><?php echo $firstname; ?> 's Questions Answered</h2>
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
$qry="SELECT q.question_id, q.user_id,  q.Question_Type, q.Question, a.Answer, u.FirstName, u.LastName FROM user u, questions q, answers a
where u.user_id = q.user_id and q.question_id = a.question_id and u.username='$username' and a.answer is not null";
$result=mysqli_query($bd,$qry);
while ($member = mysqli_fetch_array($result)) {
$user_id = $member["user_id"] ;
$_SESSION['SESS_USER_ID'] = $user_id;
$_SESSION['SESS_QUES'] = $question_id;
$type = $member["Question_Type"] ;
$question = $member["Question"] ;
$question_id = $member["question_id"] ;
$answer = $member['Answer'];
?>   


            <div class="col-md-4 text-center">
                <div class="thumbnail">

                    <div class="caption">
                        <h3><label><b> SUBJECT : <?php echo $type;?></b></label><br>
                            <small><label><b>QUESTION : <?php echo $question;?></b></label></small>
                        </h3>
                        <div class="form-group">
                        <label><b> ANSWER TO YOUR QUESTION : <?php echo $answer;?></b></label>
                        </div>
                        
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


<?php
}

if ($answer == "") {
?>

<h2>Your questions have not been answered yet!</h2>

<?php
}
?>



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
