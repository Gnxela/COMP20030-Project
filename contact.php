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
			<?php createHeader("contact") ?>
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
					<lable for="name">Name</lable>
					<input type="text" name="name" placeholder="Name" required />
					<br>
					<lable for="email">Email</lable>
					<input type="text" name="email" placeholder="Email Address" required />
					<br>
					<lable for="email">What can we help you with? </lable>
					<textarea name="content" placeholder="Message" required ></textarea>
					<br>
					<p>We will respond by email as promptly as possible!</p>
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
