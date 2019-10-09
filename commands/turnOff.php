<?php
require_once('../nest.class.php');
require_once('../credentials.php');

define('USERNAME', $username);
define('PASSWORD', $password);

$nest = new Nest();

// Check whether to set away or home
$turnOff = (int)isset($_POST['turnOff']);

// Perform set away or home
$action = $turnOff ? $nest->turnOff(): 

// Set to next scheduled event mode
$nest->setTargetTemperatureMode($nest->getNextScheduledEvent()->mode=='heat'?TARGET_TEMP_MODE_HEAT:TARGET_TEMP_MODE_COOL);

header('Location: ../admin.php');
exit;

?>