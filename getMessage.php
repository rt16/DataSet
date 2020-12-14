<?php
	require_once("db.php");

	$sql = "SELECT * FROM messenger ORDER BY id ASC";
	$result_set = $db->query($sql);
	$resp_json = json_encode($result_set->fetchAll(PDO::FETCH_ASSOC));
	header('Content-Type: application/json');
	echo $resp_json;
?>