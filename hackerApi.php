<?php
	
		function httpPost($url,$q,$fields_string)
		{
			$ch = curl_init();
			//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL,$url);
			//curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch,CURLOPT_POST,true);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			//execute post
			$result = curl_exec($ch);
			#print_r($result);
			curl_close($ch);
			return $result;
		}
		
		$input = '10 8';
		$code = $_REQUEST['code'];
		//print 
		
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

		//print_r($result);
		$result = json_decode($result,true);
		//print_r($result['result']['stdout']);
		echo $result['result']['stdout'][0];
 ?>