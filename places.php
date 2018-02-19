<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<title>Professional profile</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="slicknav.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="jquery.slicknav.min.js"></script>
		<script type="text/javascript">
		$ (document).ready(function()
		{
			$('#nav_menu').slicknav({prependTo:"#mobile_menu"});
			});
		</script>
	</head>
<body>
	<header>
		<h1>Erika Lizbeth Reyes</h1>
	</header>
	<nav id="mobile_menu"></nav>
	<nav id="nav_menu">
		<ul>
			<li><a href="main.php"> Contact Information</a></li>
			<li><a href="education.php">Education</a></li>
			<li><a href="workexperience.php">Work Experience</a></li>
			<li><a href="interest.php">Interests</a></li>
			<li><a href="places.php">Favorites Places</a></li>

		</ul>
	</nav>	
	<main>
		<div class="roulette-pictures">
		<img id="images" src="peru.jpg" alt="places picture" height="350">
		</div>
	</main>	
	
	<footer>
		<p> &copy Professional Profile 2018. All right reserved. Term & conditions.</p>
	</footer>
	<script>
		var pictures = ["mexico.jpg","canada.jpg"];
		var variable = document.getElementById("images");
		var i = 0;
		setInterval(function(){
			variable.src = pictures[i];
			i++;
			if (i == 2) i = 0;
		}, 2000);
	</script>
</body>
</html>