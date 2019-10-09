<?php

	//require "database.inc.php";
	$update_data = isset($_GET['update']) ? $_GET['update'] : '';

	echo "<input type='text' value=". $update_data ."></input>";
?>	