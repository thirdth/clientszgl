<?php
include 'includes/garble_cnfg.php';
if(isset($_POST['name']) && isset($_POST['password'])) {
  register_user($_POST['name'], $_POST['password'], $_POST['email']);
  header("Location: index.php");
  die();
}else {
  header("Location: register.php?error=error");
  die();
}
?>
