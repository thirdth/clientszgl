<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include '../includes/garble_cnfg.php';
$matterID = $_POST['matterID'];
$body = $_POST['body'];

$result = insert_note($matterID, $body);

if ($result)  {
  header("Location: ../matter.php?ID=" . $matterID);
} else {
  echo "something went wrong" . mysqli_error($conn);
}
?>
