<?php
function createHead($title) {
	echo '<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="css/global.css" type="text/css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/global.js"></script>
		<title>Hike For Health' . ($title == '' ? '' : ' / ' .$title) . '</title>';
}

function createHeader($page) {
	echo '<div class="headerContainer">
			<div class="header">
				<a href="index.php"><div class="button' . ($page == "home" ? " selected" : "") . '"><h2>Home</h2></div></a>
				<div class="seperator"></div>
				<a href="trails.php"><div class="button' . ($page == "trails" ? " selected" : "") . '"><h2>Trails</h2></div></a>
				<div class="seperator"></div>
				<a href="learn.php"><div class="button' . ($page == "learn" ? " selected" : "") . '"><h2>Learn</h2></div></a>
				<div class="right">
					<input type="text" placeholder="Search"/>
				</div>
			</div>
		</div>';
}

function createFooter() {
	echo '<div class="footer">
			<div class="container">
				<div class="copyright">&copy;</div><span>Alex Ng ' . date("Y") . '</span>
				<a href="contact.php">Contact</a>
			</div>
		</div>';
}
?>
