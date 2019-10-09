<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<title> E-MEDS </title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noticia+Text" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Noticia+Text" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

	<header>
		<a class="logo" href="#">YAY</a>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>

	 <div class="wrapper">
			<!-- <div class="vertical-center"> -->

				
				
				<h2>Medical Report</h2>

				<div class="img-cont">
					<img src="images/shawn.jpg">
				</div>

				<div class="name">
					<h4>Name : </h4>
					<p>Shawn Mendes</p>
				</div>

				<div class="name">
					<h4>Age : </h4>
					<p>21</p>
				</div>

				<div class="name">
					<h4>Sex : </h4>
					<p>Male</p>
				</div>

				<div class="name">
					<h4>Contact No. : </h4>
					<p>9899747696</p>
				</div>

				<div class="name">
					<h4>Marital Status : </h4>
					<p>Single</p>
				</div>

				<div class="name">
					<h4>Address : </h4>
					<p>XYZ</p>
				</div>

				<div class="name">
					<h4>Blood Group : </h4>
					<p>A+</p>
				</div>

				<div class="name">
					<h4>Previous Medical Ailment: </h4>
					<p>None</p>
				</div>

				<div class="name">
					<h4>Current Medical Ailment : </h4>
					<p>None</p>
				</div>

				<div class="name">
					<h4>Medical Checkups : </h4>
					
						<p id="med_check_in">Nonenckjsnc</p>
			
					
				</div>

				<div id="update">
					<button onclick="edit()">Update</button>
				</div>

				<div>
					<button id="done" onclick="show()" style="visibility: hidden">Done</button>
				</div>

			<!-- </div>	-->
		</div>


</body>
</html>


<script type="text/javascript">

function edit()
{
	document.getElementById('done').style.visibility="visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax.php?update="+document.getElementById('med_check_in').innerHTML, false);
	
	xmlhttp.send(null);
	var x = xmlhttp.responseText;

	document.getElementById('med_check_in').innerHTML = x;
}

function show()
{
	document.getElementById('done').style.visibility="hidden";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax2.php?done="+document.getElementById('update_inp').value, false);
	
	xmlhttp.send(null);
	var x = xmlhttp.responseText;

	document.getElementById('med_check_in').innerHTML = x;
}
</script>