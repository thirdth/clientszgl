<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include '../includes/garble_cnfg.php';
print_r($_POST);
$claimID = $_POST['ID'];
$description = $_POST['Description'];
$typeID = $_POST['Type'];
$matterID = $_POST['MatterID']

$result = update_claim($claimID, $description, $typeID);

if ($result)  {
  header("Location: ../matter.php?ID=" .  $matterID);
} else {
  echo "something went wrong" . mysqli_error($conn);
}
?>
