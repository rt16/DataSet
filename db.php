<?php

$dbhost = "localhost";
$dbname = "location_messenger";
$dbuser = "root";
$dbpass = "root";

try
{
	$db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
	echo "sucess";
}
catch(PDOException $error)
{
	echo "Connection failed: ".$error->getMessage();
	die();
}

?>
