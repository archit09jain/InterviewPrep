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
  </style>
</head>
<body>

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
        <li><a href="#">About</a></li>
        <li><a href="#">SignUp</a></li>
        <li><a href="#">LogIn</a></li>
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