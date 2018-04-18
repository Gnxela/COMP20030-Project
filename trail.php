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
	$data = array();
	$data['name'] = "Lorem Ipsum";
	$data['id'] = -1;
	$data['country'] = "Lorem Ipsum Lorem Ipsum";
	$data['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed metus sem. Proin vehicula et metus in semper. Vestibulum efficitur rhoncus risus, in faucibus ligula gravida sit amet. Pellentesque gravida, libero sit amet convallis pharetra, erat massa mattis ipsum, at tristique nibh nibh non ex. Pellentesque non justo urna. In risus quam, sagittis at egestas sed, vehicula eget quam. In eleifend purus a consectetur sodales. Morbi ac urna mattis velit pretium viverra.

	Etiam nec bibendum massa. Donec ac ipsum posuere, venenatis lectus id, scelerisque magna. Mauris ac hendrerit velit. Donec dignissim erat felis. Sed eros ante, commodo accumsan ipsum vitae, viverra tempus tortor. Curabitur varius lacus nisl, et pharetra mauris lacinia et. Suspendisse eget urna pretium, blandit nisi et, consequat magna. Morbi tortor felis, bibendum vel elit nec, venenatis faucibus ex. Sed accumsan venenatis ante. Quisque molestie lobortis posuere. Mauris turpis tortor, ornare sed ante in, pellentesque tristique lorem. Aliquam non ligula et dolor finibus porttitor. Nam volutpat, ipsum vitae euismod dictum, lectus nibh tristique odio, quis ornare urna tellus nec velit.

	Proin pretium diam vel pellentesque porta. Ut et lacus at eros mattis dapibus. Proin eu turpis sit amet lorem tincidunt lobortis. Maecenas consectetur diam sem, et scelerisque nunc semper sed. Donec ut dapibus augue. Morbi condimentum pharetra metus non vestibulum. Curabitur tempus libero quis nisi mattis vehicula. Duis diam tortor, ullamcorper sed interdum eget, condimentum in est. In ex nibh, hendrerit ac pharetra nec, sodales vel massa. Nulla ac odio sed ante aliquet vulputate at eget mauris. Integer at blandit metus. Donec eros enim, aliquam eu volutpat ac, commodo id urna. Sed dictum eget ipsum sodales dignissim. Integer gravida arcu ac lacus volutpat, eget dignissim nibh mattis.

	Sed lacinia, velit id luctus ornare, velit lectus bibendum ex, non iaculis quam justo in leo. Ut eget ex rhoncus, fermentum risus vitae, semper nunc. Donec turpis magna, pharetra vitae purus vitae, porttitor pharetra nulla. Duis a ante vel mauris posuere vestibulum vitae non nunc. Aenean at velit magna. Phasellus dapibus vel velit pellentesque eleifend. Nunc volutpat condimentum sapien vitae tempus. Cras a fermentum purus. Quisque cursus hendrerit lorem. Cras mi nisl, auctor et viverra id, convallis non neque. Nam hendrerit a mi nec vulputate. Nunc ullamcorper, mauris at maximus imperdiet, erat nibh viverra justo, ac tincidunt eros tellus varius mi.

	Vivamus efficitur est leo, vitae condimentum risus dignissim nec. Phasellus auctor, nulla at rutrum egestas, urna velit vehicula nisi, placerat bibendum justo sapien sed mi. Nullam iaculis sapien felis, at commodo dolor tempus vel. Integer nec augue eleifend, sollicitudin magna at, euismod turpis. Nam id feugiat erat, et dignissim tellus. In sem felis, vehicula quis eros imperdiet, efficitur varius lectus. Pellentesque a tempor lectus, vel tempus nunc. Quisque faucibus scelerisque augue, ac bibendum metus. Praesent vestibulum convallis est, quis pretium libero maximus eu. Cras quis enim felis.

	Mauris consequat lorem nec efficitur tristique. Curabitur lacinia in nibh in gravida. Curabitur ut metus sit amet libero fringilla condimentum vitae non nibh. Nunc imperdiet turpis sit amet hendrerit mattis. Vestibulum faucibus libero.";
	$data['thumb'] = "http://via.placeholder.com/300";
	$data['mapURL'] = "";
	$data['images'] = "http://via.placeholder.com/300|http://via.placeholder.com/400|http://via.placeholder.com/500|http://via.placeholder.com/300";
	$data['data'] = "Lorem Ipsum`Lorem Ipsum|Lorem Ipsum`Lorem Ipsum|Lorem Ipsum`Lorem Ipsum|Lorem Ipsum`Lorem Ipsum";
}else {
	$data = $result -> fetch_assoc();
}
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
