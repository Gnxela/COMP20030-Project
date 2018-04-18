<?php
include_once 'Database.php';
include_once 'lib.php';

if (!isset($_GET['id'])) {
	echo "Invalid ID.";
	exit();
}
$id = $_GET['id'];

$database = new Database();
$database -> connect();
$statement = $database -> prepare("SELECT * from trails WHERE id=?");
$statement -> bind_param("i", $id);
$statement -> execute();
$result = $statement -> get_result();
if ($result === false || $result -> num_rows != 1) {
	echo "Database error.";
	exit();
}
$data = $result -> fetch_assoc();
$database -> close();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php createHead("Trail") ?>
		<link href="css/trail.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="content">
			<?php createHeader("") ?>
			<div class="container">
				<div class="section">
					<div class="image" style="background-image: url('<?php echo $data['thumbnail'] ?>')"></div>
					<div class="data">
						<table>
							<?php
								$pairs = explode("|", $data['data']);
								foreach ($pairs as $pair) {
									$values = explode("`", $pair);
									echo	'<tr>
												<td class="small">' . $values[0] . '</td>
												<td>' . $values[1] . '</td>
											</tr>';
								}
							 ?>
						</table>
					</div>
				</div>
				<div class="section">
					<h1><?php echo $data['name'] ?></h1>
					<h2><?php echo $data['country'] ?></h2>
					<?php echo $data['description'] ?>
				</div>
			</div>
		</div>
		<div class="mapContainer">
			<h2>Map</h2>
			<div class="map"><iframe frameborder="0" width=600 height=450 src="<?php echo $data['mapURL'] ?>" allowfullscreen ></iframe></div>
		</div>
		<div class="gallery">
			<h1>Gallery</h1>
			<?php
				$images = explode("|", $data['images']);
				foreach ($images as $image) {
					echo '<div class="image"><img src="' . $image . '"/></div>';
				}
			 ?>
		</div>
		<?php createFooter(); ?>
	</body>
</html>
