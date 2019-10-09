<?php

	//require "database.inc.php";
	$done_data = isset($_GET['Done']) ? $_GET['Done'] : '';

	echo "<div class='name'>";
					echo "<h4>Medical Checkups : </h4>";
					echo "<p id='med_check_in'>".$done_data."</p>";
				echo "</div>";
?>	