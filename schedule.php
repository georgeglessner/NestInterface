<?php
require_once('header.php');

// Get schedule
$schedule = $nest->getDeviceSchedule();

$daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

?>
<html>
	<h1> Week Schedule </h1>
		<table class="table table-striped">
		<th> Day </th>
		<th> Time </th>
		<th> Temp </th>
	</html>
<?php

for($i=0; $i<count($daysOfWeek); $i++){
	for($j=0; $j<count($schedule[$daysOfWeek[$i]]); $j++){
		echo("<tr>");
			echo("<td>".$daysOfWeek[$i]."</td>");
			echo("<td>".convertTime(($schedule[$daysOfWeek[$i]][$j]->time / 60))."</td>");
			echo("<td>".round($schedule[$daysOfWeek[$i]][$j]->target_temperature)."</td>");
		echo("</tr>");
	}
}
echo("</table>");


function convertTime($time){
	if($time == 0){
		return '12 am';
	} else if($time < 12){
		return round($time).' am';
	} else{
		return (round($time) - 12).' pm';
	}
}

?>