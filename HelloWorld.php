<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }


.login_modal_footer{margin-top:5px;}
.login_modal_header .modal-title {text-align: center;font-family:'Philosopher',sans-serif; }
.form-group{position: relative;}
.form-group .login-field-icon {
    font-size: 20px;
    position: absolute;
    right: 15px;
    top: 3px;
    transition: all 0.25s ease 0s;
    padding-top: 2%;
}
.login-modal{
    width:100%;
    padding-bottom:20px;
}
.login_modal_header, .login_modal_footer {background: #00BB64 !important;color:#fff;}
.modal-register-btn{margin: 4% 33% 2% 33% ;width:100%;}
.login-modal input{height:40px; box-shadow: none; border:1px solid #ddd;}
.modal-body-left{float:left; width:50%; padding-right:4%; border-right:4px solid #ddd;}
.modal-body-right{float:right; width:47%;}
.login-link{padding:0 20%;}
.modal-social-icons{padding:0 10%;}
.facebook, .twitter, .google, .linkedin {width:55%;height:35px;}
.modal-icons{margin-left: -10px; margin-right: 20px;}
.google, .google:hover{background-color:#dd4b39;border:2px solid #dd4b39;color:#fff;}
.twitter, .twitter:hover{ background-color: #00aced; border:2px solid #00aced;color: #fff;}
.facebook, .facebook:hover{background-color: #3b5999; border:2px solid #3b5999;color:#fff;}
.linkedin, .linkedin:hover{background-color: #007bb6; border: 2px solid #007bb6; color:#fff;}
#social-icons-conatainer{position: relative;}
#center-line{position: absolute;  right: 265.7px;top: 80px;background:#ddd;  border: 4px solid #DDDDDD;border-radius: 20px;}
.modal-login-btn{width:100%;height:40px; margin-bottom:10px;}
#modal-launcher{margin: 30% 0 0 30%; }
  </style>
</head>
<body>
   <script>
  function login(){
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
     FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me?fields=id,name,email', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
});
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
     window.alert("Please Log into Facebook");
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1002941833111016',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=id,name,email', function(response) {
      console.log('Successful login for: ' + response.name + response.email); //fetched user info move to next page
     
    });
  }
}
</script>
<?php
// define variables and set to empty array_values(input)      //form validation code to check if important entries are not left
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_inputData($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }
  
   if (empty($_POST["exampleInputEmail1"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_inputData($_POST["exampleInputEmail1"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_inputData($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_inputData($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_inputData($_POST["gender"]);
   }


function test_inputData($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">InterviewPrep</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
 <!-- Button trigger modal -->
<button class="btn btn-success" data-toggle="modal" data-target="#myModalNorm">
    Login
</button>

<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel" style="color:black;">
                    Login
                </h3>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" >
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black;">Email address</label>
                      <input type="text" id="exampleInputEmail1" placeholder="Enter email" />                  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="color:black;">Password</label>
                      <input type="password" class="form-control"
                          id="exampleInputPassword1" placeholder="Password"/>
                  </div>
                 
                  <button type="submit" class="btn btn-default">Submit</button>
                  <a onclick="login()" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Login With Facebook </a>
                </form>
                
            </div>
            
        </div>
    </div>
</div>

   <!-- Button trigger modal -->
<button class="btn btn-success" data-toggle="modal" data-target="#myModalNorm">
    Sign Up
</button>

<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel" style="color:black;">
                    Sign Up
                </h3>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" >
                   <div class="form-group">
                    <label for="exampleInputName" style="color:black;">Name</label>
                      <input type="e" class="form-control"
                      id="exampleInputName" placeholder="Enter name"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black;"></label>
                      <input type="email" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:black;">Email address</label>
                      <input type="email" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="color:black;">Password</label>
                      <input type="password" class="form-control"
                          id="exampleInputPassword1" placeholder="Password"/>
                  </div>
                 
                  <button type="submit" class="btn btn-default">Submit</button>
                  <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Login With Facebook </a>
                </form>
                
            </div>
            
        </div>
    </div>
</div>




      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h1 class="margin">ONE STOP SOLUTION FOR ALL YOUR INTERVIEW PREPARATION</h1>
  <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ15_g9Kgz4bO53s_HeWyEblNRaIJMRbDTXMvzrMB3P5j6zm7jKkA" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h2>800+ SUCCESSFUL PLACEMENTS!</h2>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h2 class="margin">Who are we?</h2>
  <p>A group of computer engineering students from DTU helping students all over the world with their interview preparation. </p>
  
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h2 class="margin">Why Us?</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Get a chance to interview and work for various multinational companies all over the world.</p>
      <img src="http://authoru.org/wp-content/uploads/2013/04/minimal_icons_preview11.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Test your knowledge via MCQ questions.</p>
      <img src="http://cdn.wonderfulengineering.com/wp-content/uploads/2014/06/multiple-choice-exam-798x350.jpg" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Organise hiring challenges for free!.</p>
      <img src="http://blog.freshersworld.com/wp-content/uploads/2012/12/hiring-595.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copywright 2016<a href="http://www.w3schools.com">www.interviewprep.com</a></p> 
</footer>

</body>
</html>
