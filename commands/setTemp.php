<?php

require_once('../nest.class.php');
require_once('../credentials.php');


define('USERNAME', $username);
define('PASSWORD', $password);

$nest = new Nest();

$targetTemp = (int)$_POST['targetTemp'];
$heat = (int)isset($_POST['modeHeat']);

// If heat is selected, set mode to heat. Otherwise default to cool
$nest->setTargetTemperatureMode($heat?TARGET_TEMP_MODE_HEAT:TARGET_TEMP_MODE_COOL, $targetTemp);

header('Location: ../index.php');
exit;

?>