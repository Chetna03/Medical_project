<?php

	//require "database.inc.php";
$nam_data = isset($_GET['nam']) ? $_GET['nam'] : '';
$age_data = isset($_GET['age']) ? $_GET['age'] : '';
$sex_data = isset($_GET['sex']) ? $_GET['sex'] : '';
$no_data = isset($_GET['no']) ? $_GET['no'] : '';
	$update_data = isset($_GET['update']) ? $_GET['update'] : '';

echo "<div class='name'>";
					echo "<h4>Name : </h4>";
					echo "<p id='nam'><input type='text' value=".$nam_data."></input></p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Age : </h4>";
					echo "<p id='age'>".$age_data."</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Sex : </h4>";
					echo "<p id='sex'>".$sex_data."</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Number : </h4>";
					echo "<p id='no'>".$no_data."</p>";
				echo "</div>";			

				echo "<div class='name'>";
					echo "<h4>Marital Status : </h4>";
					echo "<p id='martal'>Single</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Address : </h4>";
					echo "<p id='add'>XYZ</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Blood Group  : </h4>";
					echo "<p id='blood'>A+</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Previous Medical Ailment : </h4>";
					echo "<p id='pre'>None</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Current Medical Ailment : </h4>";
					echo "<p id='cur'>None</p>";
				echo "</div>";

				echo "<div class='name'>";
					echo "<h4>Medical Checkups : </h4>";
					echo "<p id='med_check_in'>".$update_data."</p>";
				echo "</div>";




?>	