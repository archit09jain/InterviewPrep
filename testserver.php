<?php
    $conn_error = "No connection";
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $mysql_db = 'interviewprep';
    if(!mysql_connect($server,$username,$password) || !mysql_select_db($mysql_db)){
        die($conn_error);
    }

    $query = "select * from mcq;";
    if($query_run = mysql_query($query))
    {
        while($row = mysql_fetch_assoc($query_run))
        {
            $q_def[$row['Qid']] = $row['Qdef'];
            $o_def[$row['Qid']]['1'] = $row['O1'];
            $o_def[$row['Qid']]['2'] = $row['O2'];
            $o_def[$row['Qid']]['3'] = $row['O3'];
            $o_def[$row['Qid']]['4'] = $row['O4'];

            if(!is_null($row['O5']))
              $o_def[$row['Qid']]['5'] = $row['O5'];
        }

    } 
    else
    {
      echo mysql_error();
    } 

    $query = "select * from coding;";
    if($query_run = mysql_query($query))
    {
        while($row = mysql_fetch_assoc($query_run))
        {
            $c_def[$row['Cid']] = $row['question'];
        }
    } 
    else
    {
      echo mysql_error();
    } 


      function httpPost($url,$q,$fields_string)
    {
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_POST,true);
      curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
    }

    if(isset($_POST['Submit']))
    {
        $code = $_REQUEST['code'];
        $input = $_REQUEST['input'];
        $url = 'http://api.hackerrank.com/checker/submission.json';
        $key = 'hackerrank|631865-613|616ab1ad542ca4dbeabd7f04e266006c5c5a14f3';
        $query = array();
        $query['source'] = urlencode($code);
        $query['testcases'] = urlencode(json_encode(array($input)));
        $query['lang'] = 5;
        $query['api_key'] = urlencode($key);
        $q = array();
        $fields_string ="";
        foreach($query as $key=>$value) { $fields_string .= $key.'='.$value.'&';}
        rtrim($fields_string,'&');
        $result = "";
        $result = (httpPost($url,$q,$fields_string));
        $result = json_decode($result,true);
        echo $result['result']['stdout'][0];
    }

  ?>