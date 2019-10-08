<?php
require_once('header.php');

// Check if away or not
$away = $nest->getDeviceInfo()->current_state->structure_away;

if($away){
	?>
	<html>
		<form ethod="post" action="setAway.php">
		<h1> Status </h1>
    		<input type="submit" class="btn btn-danger" name="setHome" title='Click to set home' value="Away">
		</form>
	</html>
	<?php
} else{
	?>
	<html>
		<form method="post" action="setAway.php">
		<h1> Status </h1>
    		<input type="submit" class="btn btn-primary" name="setAway" title='Click to set away' value="Home">
		</form>
	</html>
	<?php
}

?>
