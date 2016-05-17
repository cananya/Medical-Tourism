  <?php
    //Start session
    session_start();    
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="custom.js"> </script>
    <script src="path/to/angular.min.js"></script>
    <script src="path/to/angular-messages.min.js"></script>
    <script>
      var app = angular.module('app', ['ngMessages']);
    </script>
    <title>Medical Tourism</title>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/modernizr.js"></script>


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://webdesign9.in/js/jquery.js"></script>
    <script src="http://webdesign9.in/js/bootstrap.min.js"></script>



       
</head>

<style> 
.jm-item {
    padding: 10px;
    display: inline-block;
    text-align: left;
}
.jm-item-wrapper {
  position: relative;
  padding: 7px;
  background: #E8D7B6;
}
.jm-item-image {
  position: relative;
    overflow: hidden;
}
.jm-item-image img {
  display: block;
}
.jm-item-title {
    position: absolute;
    left: -10px;
    bottom: 17px;
    background: #FF6B0E;
    line-height: 1.5em;
    font-weight: normal;
    padding: 7px 9px 6px;
    text-transform: uppercase;
    font-family: 'Oswald', sans-serif;
    color: #FFFFFF;
    font-size: 1.4em;
}
.jm-item-overlay {
  background: #000;
  opacity: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  -webkit-transition: opacity 0.5s ease-in 0s;
  -moz-transition: opacity 0.5s ease-in 0s;
  -o-transition: opacity 0.5s ease-in 0s;
  transition: opacity 0.5s ease-in 0s;
}
.jm-item-wrapper:hover .jm-item-overlay {
  opacity: 0.3;
}
.jm-item-button {
  height: 70px;
  width: 70px;
  text-align: center;
  position: absolute;
  left: 50%;
  margin-left: -25px;
}
.jm-item-button a {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #FF6B0E;
    text-transform: uppercase;
    font-family: 'Oswald', sans-serif;
    color: #FFFFFF;
    font-size: 1.2em;
    line-height: 50px;
    -webkit-transition: all 0.2s ease-in 0s;
    -moz-transition: all 0.2s ease-in 0s;
    -o-transition: all 0.2s ease-in 0s;
    transition: all 0.2s ease-in 0s;
    text-decoration: none !important;
    display: block;
}
.jm-item-button a:hover {
  background: #3b3b3b;  
}
.first .jm-item-button {
  -webkit-transition: all 0.5s ease-in 0.5s;
  -moz-transition: all 0.5s ease-in 0.5s;
  -o-transition: all 0.5s ease-in 0.5s;
  transition: all 0.5s ease-in 0.5s;
  top: -50px; 
}
.first .jm-item-wrapper:hover .jm-item-button {
  top: 20%; 
}
</style>
  <body ng-app="app" style="background-image:url('img/bg.jpg')">

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
            <li class="active"><a href="login.php">Sign In</a></li>
         </ul>
      </div>
      <!--/.navbar-collapse -->
   </div>
</div>
<div class="container" style="margin-top: 4%;">
        <div class="row">
            <div class="col-md-6">

<div class="jm-item first">
  <div class="jm-item-wrapper">
    <div class="jm-item-image">
      <img src="img/login.jpg">
      <span class="jm-item-overlay"> </span>
      <div class="jm-item-button"><a href="#">Login </a></div>
    </div>
    <div class="jm-item-title">User/Provider</div>
  </div>
</div>

 
 <script>

function checkLogin() {

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value; 

    if(username == "") {
        alert('Enter Username!');
        return false;
    } else if (password == "") {
        alert('Enter Password!');
        return false;

    } else return true;
}

function checkSignup() {

    var userName = document.getElementById('userName').value;
    var userPassword = document.getElementById('userPassword').value;
    var userFirstName = document.getElementById('userFirstName').value; 
    var userLastName = document.getElementById('userLastName').value; 
    var userEmail = document.getElementById('userEmail').value; 
    var userPhoneNumber = document.getElementById('userPhoneNumber').value; 
    var userAddress = document.getElementById('userAddress').value; 
    var userCity = document.getElementById('userCity').value; 
    var userState = document.getElementById('userState').value; 
    var userZip = document.getElementById('userZip').value;  

    if(userName == "") {
        alert('Enter Username!');
        return false;
    } else if (userPassword == "") {
        alert('Enter Password!');
        return false;

    } else if (userFirstName == "") {
        alert('Enter FirstName!');
        return false;

    }else if (userLastName == "") {
        alert('Enter LastName!');
        return false;

    }else if (userEmail == "") {
        alert('Enter Email!');
        return false;

    }else if (userPhoneNumber == "") {
        alert('Enter PhoneNumber!');
        return false;

    }else if (userAddress == "") {
        alert('Enter Address!');
        return false;

    }else if (userCity == "") {
        alert('Enter City!');
        return false;

    }else if (userState == "") {
        alert('Enter State !');
        return false;

    }else if (userZip == "") {
        alert('Enter Zip!');
        return false;

    }else return true;
}
 </script>

             
                <h3>Login!</h3>
                <form name="loginform" onsubmit="return checkLogin();" action="login_exec.php" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input type="text" name="username"  class="form-control" id="username" class="text" placeholder="USERNAME">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD">
                        </div>
                    </div>
                    <div id="success"></div>

                    <input type="submit" class="btn btn-primary" value="LOG IN" >
                </form>
            </div>


                        <div class="col-md-6">
<h2>Enter details below to Register!</h2>
<p align = "center" style="border:thin">
<form name="exampleForm" onsubmit="return checkSignup();" action="signup_exec.php" class="elegant-aero" method="post" novalidate>
            
         <label> Username</label><strong style="color:red"> *</strong>
          <input type="text" name="userName" id="userName" ng-model="userName" class="form-control required"  ng-minlength="3" ng-maxlength="10"  required />
               <div ng-messages="exampleForm.userName.$error">

        <div ng-message="minlength">UserName must be over 3 characters</div>
        <div ng-message="maxlength">UserName must not exceed 10 characters</div>
      </div> 
       

       
         <label>Password</label><strong style="color:red"> *</strong>
          <input type="text" name="userPassword" id="userPassword" ng-model="Password" class="form-control"  ng-pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/"  required />
               <div ng-messages="exampleForm.userPassword.$error">
        <div ng-message="pattern">Password must be between 4-8 characters, one upper case letter, one lower case letter, one numeric digit</div>
      </div>     
       

  
         <label>First Name</label><strong style="color:red"> *</strong>
          <input type="text" name="userFirstName" id="userFirstName"   ng-model="firstName" class="form-control"  ng-pattern="/^[a-zA-Z]+(?:[\\s-][a-zA-Z]+)*$/" required />
               <div ng-messages="exampleForm.userFirstName.$error">
        <div ng-message="pattern">Please enter a valid First Name</div>
      </div>
 
       

        
         <label>Last Name</label><strong style="color:red"> *</strong>
          <input type="text" name="userLastName" id="userLastName" ng-model="lastName" class="form-control"  ng-pattern="/^[a-zA-Z]+(?:[\\s-][a-zA-Z]+)*$/" required />
               <div ng-messages="exampleForm.userLastName.$error">
        <div ng-message="pattern">Please enter a valid Last Name</div>
      </div> 
       
             
         <label> Email</label><strong style="color:red"> *</strong>
          <input type="email" name="userEmail" id="userEmail" class="form-control"  ng-model="email" required />
               <div ng-messages="exampleForm.userEmail.$error">
        <div ng-message="email">Your email address is invalid</div>
      </div> 
       
      
       
         <label>Phone</label><strong style="color:red"> *</strong>
          <input type="email" name="userPhoneNumber" id="userPhoneNumber" ng-model="phoneNumber" class="form-control"  ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/" required/>
               <div ng-messages="exampleForm.userPhoneNumber.$error">
        <div ng-message="pattern">Must be a valid 10 digit phone number</div>
      </div> 
       

       
         <label>Address</label><strong style="color:red"> *</strong>
          <input type="email" name="userAddress" id="userAddress" ng-model="Address" class="form-control"   ng-pattern="/^[0-9]+\s+([a-zA-Z]+|[a-zA-Z]+\s[a-zA-Z]+)$/" required/>
               <div ng-messages="exampleForm.userAddress.$error">
        <div ng-message="pattern">Must be a valid Street Address</div>
      </div> 
       

         
         <label>City</label><strong style="color:red"> *</strong>
          <input type="email" name="userCity" id="userCity" ng-model="userCity" class="form-control"  ng-pattern="/^[a-zA-Z]+(?:[\\s-][a-zA-Z]+)*$/" required/>
               <div ng-messages="exampleForm.userCity.$error">
        <div ng-message="pattern">Must be a valid City Name</div>
      </div> 
       
             
         <label> State</label><strong style="color:red"> *</strong>
          <input type="email" name="userState" id="userState" ng-model="userState" class="form-control"  ng-pattern="/^[a-zA-Z]+(?:[\\s-][a-zA-Z]+)*$/ " required/>
               <div ng-messages="exampleForm.userState.$error">
        <div ng-message="pattern">Must be a valid State Name</div>
      </div> 
       

       
         <label>ZIP</label><strong style="color:red"> *</strong>
          <input type="email" name="userZip" id="userZip" ng-model="Zip" class="form-control"  ng-pattern="/^(\d{5}(-\d{4})?|[A-Z]\d[A-Z] *\d[A-Z]\d)$/" required/>
               <div ng-messages="exampleForm.userZip.$error">
        <div ng-message="pattern">Must be a valid Zip Code</div>
      </div> <br>  
       <div>
                        <input type="submit" class="btn btn-primary" value="Submit Form" >
                            </button>
                    </div>


      
    </form>

            </div>

        </div>
        </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-messages.min.js"></script>
    <script src="js/app.js"></script>

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
