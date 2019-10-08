<?php
error_reporting(E_ALL);
require_once('nest.class.php');
require_once('credentials.php');


define('USERNAME', $username);
define('PASSWORD', $password);

$nest = new Nest();

// Check whether to set away or home
$setAway = (int)isset($_POST['setAway']);

// Perform set away or home
$action = $setAway ? $nest->setAway(TRUE): $nest->setAway(FALSE);

header('Location: admin.php');
exit;

?>