<?php
require_once('header.php');

// Check if away or not
$away = $nest->getDeviceInfo()->current_state->structure_away;

// Check if device is on 
$on = $nest->getDeviceInfo()->target->mode != "off" ? true : false;

if($away){
	?>
	<html>
		<form method="post" action="commands/setAway.php">
		<h1> Status: <input type="submit" class="btn btn-danger" name="setHome" title='Click to set home' value="Away"> </h1>
		</form>
	</html>
	<?php
} else{
	?>
	<html>
		<form method="post" action="commands/setAway.php">
		<h1> Status: <input type="submit" class="btn btn-primary" name="setAway" title='Click to set away' value="Home"> </h1>
		</form>
	</html>
	<?php
}


if($on){
	?>
	<html>
		<form method="post" action="commands/turnOff.php">
		<h1> On/Off: <input type="submit" class="btn btn-primary" name="turnOff" title='Click to turn off' value="On"></h1>
		</form>
	</html>
	<?php
} else{
	?>
	<html>
		<form method="post" action="commands/turnOff.php">
		<h1> On/Off: <input type="submit" class="btn btn-danger" name="turnOn" title='Click to turn on' value="Off"></h1>
		</form>
	</html>
	<?php
}

?>
