<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include '../includes/garble_cnfg.php';
$claimID = $_GET['ID'];
$matterID = $_GET['matterID'];

$result = delete_claim($claimID, $matterID);

?>
