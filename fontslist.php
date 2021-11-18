<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h3>Task 1: Fetching all the Google Fonts from API and showing it in a list.</h3>
</head>
<body>
<?php

$url ="https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDsbCN6NWRzvkGEmSaXko2om8fmda3DgYo";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
    $result = $result->items;
 
for ($x = 0; $x<sizeof($result); $x++) {
       echo $x," ", $result[$x]->family;
       echo "<br>";
    }
?>