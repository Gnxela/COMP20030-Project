<?php
function createHead($title) {
	echo '<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="css/global.css" type="text/css" rel="stylesheet">
		<link rel="shortcut icon" href="about:blank">
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
				<a href="why.php"><div class="button' . ($page == "why" ? " selected" : "") . '"><h2>Why</h2></div></a>
				<div class="right">
					<input type="text" placeholder="Search"/>
				</div>
			</div>
		</div>';
}

function createFooter() {
	echo '<div class="footer">
			<div class="footerContainer">
				<div class="copyright">&copy;</div>&nbsp;Alex Ng ' . date("Y") . '
				<br>
				<a href="contact.php">Contact</a>
			</div>
		</div>';
}
?>
