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
		<?php createHead("trail") ?>
		<link href="css/trail.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="content">
			<?php createHeader("") ?>
			<div class="container">
				<div class="section">
					<div class="image" style="background-image: url('res/dragonsBackThumb.jpg')"></div>
					<div class="data">
						<table>
							<tr>
								<td class="small">Difficulty</td>
								<td>Hard</td>
							</tr>
							<tr>
								<td class="small">Max Altitude</td>
								<td>1000m</td>
							</tr>
							<tr>
								<td class="small">Length</td>
								<td>19km</td>
							</tr>
							<tr>
								<td class="small">Refreshments</td>
								<td>None</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="section">
					<h1>Dragon's Back</h1>
					<h2>Hong Kong</h2>
					<p>With beautiful coastal scenery and easy-accessibility from the city, the Dragon�s Back is a popular escape that deservedly gets regular mentions in travel guidebooks. A short hop from the bustle of Hong Kong East, the trail provides stunning views of Shek O, Tai Long Wan, Stanley, Tai Tam, and the South China Sea.</p>
				</div>
				<div class="map"><iframe src="//www.google.com/maps/embed/v1/place?q=Dragon's back trail&key=AIzaSyCMYSYb_8W1Y95X56gW8myAM9b7yQ4ATP8"></iframe></div>
			</div>
		</div>
		<?php createFooter(); ?>
	</body>
</html>
