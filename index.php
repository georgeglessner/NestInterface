<?php

require_once('header.php');

// Get device info
$infos = $nest->getDeviceInfo();

?>

<html>
	<div class="mx-auto" style="width: 200px;">
		<h1 style="font-size: 200;"><?php echo(round($infos->target->temperature))?></h1>
	</div>

	<form id="targetTemp" method="post" action="setTemp.php">
		<input type="number" name="targetTemp" min="50" max="90" placeholder="Target Temp">
	    <input type="submit" class="btn btn-primary" name="temp" value="Submit"><br>
	    <input type="checkbox" class="btn btn-danger" name="modeHeat" value="Heat"> Heat
	</form>

	<table class="table table-striped">

		<th> Mode </th>
		<th> Humidity </th>
		<th> Outside Temp </th>
			<tr>
				<td><?php echo($infos->target->mode)?></td>
				<td><?php echo(round($infos->current_state->humidity))?></td>
				<td><?php echo(round($nest->getWeather($zipcode)->outside_temperature))?></td>
			</tr>
	</html>
<?php

?>