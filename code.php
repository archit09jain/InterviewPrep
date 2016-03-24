<!DOCTYPE html>
<html lang="en">
<head>
  <title>InterviewPrep</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src = "test.js"></script>
  <link rel="stylesheet" type="text/css" href="textcss">
</head>

<body onload = "startTime()">
  <?php
        require 'testserver.php';
  ?>
  <!--Code for navigation bar-->
     <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage">InterviewPrep</a>
        </div>
      </div>
    </nav>
  <!-- Navigation bar finished-->
  <!--  Coding Area -->
  <form>
    <div class = "container" style = "margin-top:30px;">
          <div class  = "col-md-6">
          <!-- Code for the coding area-->
          <div class = "row">
            <div class = "col-md-12">
              <h1> Code Here</h1>
              <div class="form-horizontal">
                <div class="form-group">     
                    <textarea  style="color:black"
                    name = "code" id = "codingArea" class="form-control" rows="12"  placeholder="Write yor code here!" required style = "resize:none;"></textarea>
       
                </div>
              </div>
            </div>
          </div>
          <!-- Code for the coding area over-->

          <!-- Code for the input box-->
          <div class = "row">
            <div class = "col-md-12 col-sm-10">
                <div class="form-horizontal">
                  <div class="form-group">     
                      <textarea  name = "code" id = "txtHint" class="form-control" rows="5"  placeholder="Input" required style = "resize:none;"></textarea>
                  </div>
                </div>
            </div>
          </div>
          <!-- Code fo the input box over-->

          <div class = "row">
            <div class = "col-md-8 col-sm-10">
              <div class="btn-group">
                 
                 <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Language <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">C++</a></li>
                      <li><a href="#">Java</a></li>
                      <li><a href="#">Pyhton</a></li>
                    </ul>
                  </div>
                  <button type="submit" class="btn btn-success" onclick = "myFunction()">Run</button>
         
              </div>
                
            </div>
          </div>
        </div>

        <div class = "col-md-1"></div>
        <div class = "col-md-5">
            <div class = "row">
              <h3  id = "txt" align = "right" style = "color:gray;"></h3>
              
                <div class="panel-group" id="accordion">
                    <?php
                        foreach ($c_def as $key => $value) {
                          echo '<div class="panel panel-primary">';
                          echo '<div class="panel-heading">';
                          echo '<h4 class="panel-title">';
                          echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$key.'">';
                          echo 'Question '.$key.'</a></h4></div>';
                          echo '<div id="collapse'.$key.'" class="panel-collapse collapse">';
                          echo '<div class="panel-body">'.$value.'</div></div></div>';
                        }
                    ?>
                </div>
            </div>
            </div>
        </div>

    </div>

    <div class = "container" style = "margin-top:50px;">
      <div class = "row">
           <div class  = "col-md-12">

          <h1 style = "color:gray;">MCQ Questions </h1>
          <br><br>
          <?php
                foreach($q_def as $x => $x_value)
                {
                    echo '<div class = "row" style = "color:gray;"> 
                          <p><b>'.$x.' .'.$x_value.'
                    ?</p></b></div>';
                    echo '<div class = "row"
                      <form role="form">';

                            foreach ($o_def[$x] as $z => $value) {
                              
                                echo '<label class="radio"  style = "margin-left:50px;">
                                  <input type="radio" name="optradio">'.$value.'
                                </label>';
                            }

                    echo '</form>
                    </div><br>';
                }
          ?>
        </div>

      </div>
    </div>
</form>
  
</body>
</html>
