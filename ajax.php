<?php

	//require "database.inc.php";
	$update_data = isset($_GET['update']) ? $_GET['update'] : '';

	echo "<input id='inp' type='text' value=". $update_data ."></input>";
?>	