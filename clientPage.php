<?php
include 'includes/garble_cnfg.php';
protected_page();
header_check();
$clientID = $_GET['ID'];
$client = get_client_byId($clientID);
print_r($client);
?>
<div class="wrapper container">
  <div class="col-md-4">
    <h3>Clients</h3>

  <a href='editClient.php?ID=" . $clientID . "'>Edit Client</a>
  </div>
</div>


<?php
include 'includes/footer.php'; ?>
