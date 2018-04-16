<?php
include_once 'Database.php';
include_once 'lib.php';

if (!isset($_GET['id'])) {
	echo "Invalid ID.";
	exit();
}
$id = $_GET['id'];

/*
$database = new Database();
$database -> connect();
$statement = $database -> prepare("SELECT * from trails WHERE id=?");
$statement -> bind_param("i", id);
$statement -> execute();
$result = $statement -> get_result();
if ($result === false) {
	echo "Database error.";
	exit();
}
$database -> close();
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php createHead("") ?>
		<link href="css/trail.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="content">
			<?php createHeader("home") ?>
			<div class="image" style="background-image: url('res/dragonsBackThumb.jpg')"></div>
			<h1>Dragon's Back</h1>
		</div>
		<?php createFooter(); ?>
	</body>
</html>
