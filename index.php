<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 


	$a = file_get_contents('http://m.weather.com.cn/data/101280601.html');
	//$a = stripcslashes($a);
	 $c=json_decode($a,true);
	// function objectToArray($e){ 
			// $e=(array)$e; 
			// foreach($e as $k=>$v){ 
			// if( gettype($v)=='resource' ) return; 
			// if( gettype($v)=='object' || gettype($v)=='array' ) 
			// $e[$k]=(array)objectToArray($v); 
			// } 
			// return $e; 
	// } 
	echo '<pre>';
	//$x = objectToArray($c);
	print_R($c);

?>