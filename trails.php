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
		<link href="css/trails.css" type="text/css" rel="stylesheet">
		<?php createHead("Trails") ?>
		<script src="js/trails.js"></script>
	</head>
	<body>
		<?php createHeader("trails") ?>
		<div class="controls-wrapper">
			<div class="controls">
				<div class="section">
					<h2>Countries</h2>
				</div>
				<div class="section left">
					<h2>Difficulty</h2>
				</div>
			</div>
		</div>
		<div class="tile-wrapper">
			<?php
				while($row = $result -> fetch_assoc()) {
					//echo '<div class="tile" style="background-image: url(\'' . $row['thumbnail'] . '\');" onclick="window.location=\'trail.php?id=' . $row['id'] . '\';">
					echo '<a href="trail.php?id=' . $row['id'] . '"><div class="tile" style="background-image: url(\'' . $row['thumbnail'] . '\');">
							<div class="overlay"></div>
							<div class="title">' . $row['name'] . '</div>
							<div class="slide-left">' . $row['country'] . '</div>
							<div class="slide-right"><br><br>' . $row['description'] . '</div>
							<div class="hidden">' . $row['difficulty'] . '</div>
						</div></a>';
				}
			?>
		</div>
		<?php createFooter(); ?>
	</body>
</html>
