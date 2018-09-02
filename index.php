<!DOCTYPE html>
<?php include_once('includes/init.php');?>
<html>
	<head>
		<title>New one yeah!</title>
	</head>
	<body>
		<?php $player = new Player('Bas', 'Beekhuis', 32);
		echo $player->first_name;
		echo $player->last_name;
		echo $player->age;

		?>

	</body>
</html>
