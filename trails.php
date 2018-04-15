<?php
include_once 'Database.php';
include_once 'lib.php';

$database = new Database();
$database -> connect();
$statement = $database -> prepare("SELECT * from trail_tiles");
$statement -> execute();
$result = $statement -> get_result();
if ($result === false) {
	echo "Database error.";
	exit();
}
$database -> close();
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
		<div class="tile-wrapper">
			<?php
				while($row = $result -> fetch_row()) {
					echo '<div class="tile" style="background-image: url(\'' . $row[4] . '\');"onclick="window.location=\'trail.php?id=' . $row[0] . '\';">
							<div class="overlay"></div>
							<div class="title">' . $row[1] . '</div>
							<div class="slide-left">' . $row[3] . '</div>
							<div class="slide-right"><br><br>' . $row[2] . '</div>
						"</div>"';
				}
			?>
		</div>
	</body>
</html>
