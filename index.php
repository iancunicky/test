<!DOCTYPE html>
<?php include_once('includes/init.php');?>
<html>
	<head>
		<title>New one yeah!</title>
	</head>
	<body>
	<?php $manager1 = new Manager('Agentu007');

	?>

	<?php $player = new Player('Bas', 'Beekhuis', 32);?>
	<?php $player2 = new Player('Leon', 'Magerl', 31);?>



	<h2>Team name: <?php $team1 = new Team('Bagabontzii');
	echo $team1->team_name;
	?> ownned by: <?php echo $manager1->manager;  ?></h2>
	<h3>Players List:</h3>
	<p>Player name: <?php echo $player->first_name; ?>
	<?php 	echo $player->last_name; ?></p>
	<p>Age:<?php 	echo $player->age; ?></p>
	<p>Player name: <?php echo $player2->first_name; ?>
	<?php 	echo $player2->last_name; ?></p>
	<p>Age:<?php 	echo $player2->age; ?></p>



	</body>
</html>
