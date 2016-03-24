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

<body>

	<?php 
			$table_names = array("Active Contests","Archived Contests");

			$conn_error = "No connection";
		    $server = 'localhost';
		    $username = 'root';
		    $password = '';
		    $mysql_db = 'interviewprep';
		    if(!mysql_connect($server,$username,$password)||!mysql_select_db($mysql_db)){
		        die($conn_error);
		    }

		    $query = "select * from contest order by starttime;";
		    if($query_run = mysql_query($query))
		    {
		        while($row = mysql_fetch_assoc($query_run))
		        {
		        		$id = $row['id'];
		        		$present_contest[$id]['name'] = $row['name'];
		        		$present_contest[$id]['starttime'] = $row['starttime'];
		        		$present_contest[$id]['endtime'] = $row['endtime'];
		        		$present_contest[$id]['duration'] = $row['duration'];
		        }
		    }
			else
			{
				echo mysql_error();
			}
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



    <div class = "container">
    	<div class = "row">
    		<h3>All Contests</h3>
    		<hr></hr>
    	</div>
    </div>


    <div class ="container">

    	<?php
    			for($i = 0;$i<count($table_names);$i++)
    			{
    				echo '<div class = "container">';
    				echo '<div class = "row">';
    				echo '<h3 style = "color:black;">'.$table_names[$i].'</h3>';
    				echo '<table class="table table-hover table-striped table-bordered">';
    				echo '<thead>
				      <tr>
				      	<th>#</th>
				        <th>Contest Name</th>
				        <th>Start Time</th>
				        <th>End time</th>
				        <th>Duration</th>
				        <th>Participate</th>
				      </tr>
				    </thead>
				    <tbody>
				    ';

				    foreach ($present_contest as $key => $value) {
				    	# code...

				    	echo '<tr>
				      	<td>'.$key.'</td>
				        <td><b>'.$present_contest[$key]['name'].'</b></td>
				        <td>'.$present_contest[$key]['starttime'].'</td>
				        <td>'.$present_contest[$key]['endtime'].'</td>
				        <td>'.$present_contest[$key]['duration'].'</td>
				        <td><a>Register</a>/<a>Enter</a></td>
				      </tr>';
				    }
				      
				echo '.</tbody>
				</table>';
				echo '</div>';
				echo '</div>';
    			}
    	?>
    </div>

</body>
</html>