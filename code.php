<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <!--  LOGO -->
  <div class = "container" style = "margin-top:50px;">
      <div class = "row">
        <div clas = "col-md-6 col-sm-10">
        <h1> Welcome to Interview Prep! </h1>
      </div>
      </div>
  </div>
  
  <!--  Coding Area -->
  <form action = "hackerApi.php">
    <div class = "container">
        <div class = "row">
          <div class = "col-md-6 col-sm-10">
            <div class="form-horizontal">
              <div class="form-group">     
                  <textarea  name = "code" id = "codingArea" class="form-control" rows="15"  placeholder="Write yor code here!" required style = "resize:none;"></textarea>
              </div>
            </div>
          </div>
        </div>
        
        <div class = "row">
          <div class = "col-md-2 col-sm-2">
              <button type="submit" class="btn btn-primary" onclick = "myFunction()">Submit</button>
          </div>
        </div>
    </div>
</form>

<p>Output: <span id="txtHint"></span></p>


  <script type="text/javascript">

    function myFunction()
    {  
      var str = document.getElementById("codingArea").value;

    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "Empty";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            //document.getElementById("txtHint").innerHTML = xmlhttp.readyState;
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "hackerApi.php?code=" + str, true);
        xmlhttp.send();
    }

    }
  </script>

 
</body>
</html>
