<?php
require_once('header.php');

// Get schedule
$schedule = $nest->getDeviceSchedule();

// Get days of week in schedule
$daysOfWeek = array_keys($schedule);

?>
<html>
	<h1> Week Schedule </h1>
		<table class="table table-striped">
		<th> Day </th>
		<th> Time </th>
		<th> Temp </th>
		<th> Mode </th>
	</html>
<?php

// Create table
if($schedule){
	for($i=0; $i<count($schedule); $i++){
			for($j=0; $j<count($schedule[$daysOfWeek[$i]]); $j++){
				echo("<tr>");
					echo("<td>".$daysOfWeek[$i]."</td>");
					echo("<td>".convertTime(($schedule[$daysOfWeek[$i]][$j]->time / 60))."</td>");
					echo("<td>".round($schedule[$daysOfWeek[$i]][$j]->target_temperature)."</td>");
					echo("<td>".$schedule[$daysOfWeek[$i]][$j]->mode."</td>");
				echo("</tr>");
			}
		}
}else{
	echo("<tr><td colspan='4'> No schedule set </td></tr>");
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