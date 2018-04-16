<?php
include "lib.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php createHead("Contact") ?>
		<link href="css/contact.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="content">
			<?php createHeader("home") ?>
			<div class="wrapper">
				<?php
					if (isset($_POST['content'])) {
				?>
				<h2>
					Message recieved!
				</h2>
				<?php
					} else {//Doing it the lazy way here.
				?>
				<form method="POST" action="contact.php">
					<!--<lable for="name">Name: </lable>-->
					<input type="text" name="name" placeholder="Name" required />
					<br>
					<!--<lable for="email">Email: </lable>-->
					<input type="text" name="email" placeholder="Email Address" required />
					<br>
					<textarea name="content" placeholder="Message" required ></textarea>
					<br>
					<input type="submit" />
				</form>
				<?php
					}
				?>
			</div>
		</div>
		<?php createFooter(); ?>
	</body>
</html>
