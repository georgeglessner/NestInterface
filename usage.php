<?php
require_once('header.php');

$energy = $nest->getEnergyLatest();
$energyDays = $energy->objects[0]->value->days;

?>
<html>
<h1> 10 Day History </h1>
	<table class="table table-striped">
	<th> Date </th>
	<th> Usage (hours) </th>
	<th> Leaf </th>
</html>

<?php
for($i=0; $i<count($energyDays); $i++){
	$leaf = $energyDays[$i]->leafs?'<i class="fas fa-leaf"></i>':'';
	echo("<tr>");
	echo("<td>".$energyDays[$i]->day."</td>");
	echo("<td>".round($energyDays[$i]->total_cooling_time / 3600, 1)."</td>");
	echo("<td>".$leaf."</td>");
	echo("</tr>");
}
echo("</table>");
?>