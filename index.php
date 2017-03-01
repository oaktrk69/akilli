<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href=http://muhammetcelepci.com/mc/css/style.css>
        <title>AKILLI</title>
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	<?php
		function getter($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

echo getter('http://muhammetcelepci.com/giris/yeni.php');
	file_get_contents('http://www.muhammetcelepci.com/giris3/giris.php');
		
	?>
  <h2>1.LED</h2>
	 <button class="button button-green" ng-click="resetPassword()">On</button>
	 <button class="button button-green" ng-click="resetPassword()">OFF</button>  
	
   <h2>2.LED</h2>
   
	  <button class="button button-green" ng-click="resetPassword()">ON</button>
	  
	
		  <button class="button button-green" ng-click="resetPassword()">OFF</button>
	 
	</body>
</html>
