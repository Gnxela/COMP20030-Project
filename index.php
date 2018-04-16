<?php
include "lib.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php createHead("") ?>
		<link href="css/index.css" type="text/css" rel="stylesheet">
		<script src="js/index.js"></script>
	</head>
	<body>
		<div class="frontpage">
			<div class="center">Hike For Health<div class="desc">Get outside and explore the world around you! And while you're at it, keep healthy!</div></div>
			<div class="credit">Image by Andreas Strauss</div>
		</div>
		<div class="content">
			<?php createHeader("home") ?>
			<div class="section left about-us">
				<h1>Hike For Health</h1>
				<p>Hike For Health was set up by passionate college students to try promote hiking around the world, for everyone.</p>
				<p>Providing free and easily accessable information about hiking.</p>
				<p>We strive to make our about us as long as possible but also get as few people as possible to read it.</p>
				<a href="about.php"><div class="button">About</div></a>
			</div>
			<div class="section">
				<div class="image"><img src="res/findTrails-small.jpg" alt="Young man walking down outdoor wooden stairs."/></div>
				<div class="text">
					<h1>Find Trails</h1>
					Finding the right trail for you can be hard. Difficulty, length and location must all be taken into account.<br>Let our expertise guide you!
					<br>
					<a href="trails.php"><div class="button">Trails</div></a>
				</div>
			</div>
			<div class="section left">
				<div class="image"><img src="res/whyHike-small.jpg" alt="Forrest hiking trail with young men running."/></div>
				<div class="text">
					<h1>Why Hike?</h1>
					You can potentially lose weight, reduce heart disease, decrease blood pressure and slow the aging process. It also offers mental health benefits by reducing stress and anxiety.
					<br>
					<a href="#"><div class="button">More</div></a>
				</div>
			</div>
			<div class="section">
				<div class="image"><img src="res/landscape-small.jpg" alt="Wide expansive vally and a blue sky."/></div>
				<div class="text"><h1>SOMETHING ELSE</h1>I really need to fill these...<br>Soon too...</div>
			</div>
		</div>
		<?php createFooter(); ?>
	</body>
</html>
