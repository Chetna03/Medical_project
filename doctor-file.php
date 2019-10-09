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

		<div id="det-cont">
				<div class="name">
					<h4>Name : </h4>
					<p id="nam">Shawn Mendes</p>
				</div>

				<div class="name">
					<h4>Age : </h4>
					<p id="age">21</p>
				</div>

				<div class="name">
					<h4>Sex : </h4>
					<p id="sex">Male</p>
				</div>

				<div class="name">
					<h4>Contact No. : </h4>
					<p id="no">9899747696</p>
				</div>

				<div class="name">
					<h4>Marital Status : </h4>
					<p id="martal">Single</p>
				</div>

				<div class="name">
					<h4>Address : </h4>
					<p id="add">XYZ</p>
				</div>

				<div class="name">
					<h4>Blood Group : </h4>
					<p id="blood">A+</p>
				</div>

				<div class="name">
					<h4>Previous Medical Ailment: </h4>
					<p id="prev">None</p>
				</div>

				<div class="name">
					<h4>Current Medical Ailment : </h4>
					<p id="cur">None</p>
				</div>

				<div id="med-cont">
				
					<div class="name">
						<h4>Medical Checkups : </h4>
						<p id="med_check_in">None</p>	
					</div><button  style="visibility: hidden;">Confirm</button>
				</div>	
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
	/*document.getElementById('done').style.visibility="visible";*/
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ajax.php?update="+document.getElementById('med_check_in').innerHTML, false);
	
	xmlhttp.send(null);
	var x = xmlhttp.responseText;
	window.alert(x);
	document.getElementById('med_check_in').innerHTML = x;

}

function show()
{
	document.getElementById('done').style.visibility="hidden";
	window.alert("hello");
	var xmlhttp = new XMLHttpRequest();
	window.alert("hello again");
	/*document.getElementById('med_check_in').innerHTML =document.getElementById('inp').value;*/
	xmlhttp.open("GET","update-ajax.php?Done="+document.getElementById('inp').value, false);
	window.alert("hello once more");
	xmlhttp.send(null);
	var x = xmlhttp.responseText;
	window.alert(x);
	document.getElementById('med-cont').innerHTML = x;
}
</script>