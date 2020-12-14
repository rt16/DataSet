<?php
	require_once("db.php");

	if(!empty(trim($_GET["message"]))) {
		$sql = "INSERT INTO messenger (message) VALUES ('".trim($_GET["message"])."')";
		$result_set = $db->query($sql);
	}
?>
