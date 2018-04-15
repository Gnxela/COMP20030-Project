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
		<?php createHead("Trails") ?>
		<link href="css/trails.css" type="text/css" rel="stylesheet">
		<script src="js/trails.js"></script>
	</head>
	<body>
		<?php createHeader("trails") ?>

		<?php createFooter(); ?>
	</body>
</html>
