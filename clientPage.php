<?php
include 'includes/garble_cnfg.php';
protected_page();
header_check();
$clientID = $_GET['ID'];
$client = get_client_byId($clientID);
$addressID = $client['AddressID'];
$phoneID = $client['PhoneID'];
$emailID = $client['EmailID'];
$address = get_address_byID($addressID);
$phone = get_phone_byID($phoneID);
$email = get_email_byID($emailID);
// TODO: add matters here

$matters = get_matters_byClientID($clientID);
?>
<div class="wrapper container">
  <div class="col-md-12">
    <h3 class="text-center">Client Information</h3>
    <hr>
    <div class="col-md-4">
      <h3><?php echo $client['FName'] . " " . $client['LName']; ?></h3>
      <p><?php echo $address['Street1']; ?></br>
      <?php if ($address['Street2']){
        echo $address['Street2'] . "</br>";
      } ?>
      <?php echo $address['City'] . ", " . $address['State'] . " " . $address['Zip']; ?></br>
      <?php echo $phone['Number']; ?></br>
      <?php echo $email['Email']; ?></p>
      <hr>
      <a href='editClient.php?ID=<?php echo $clientID; ?>'>Edit Client</a>
    </div>
    <div class="col-md-4">
      <h3 class="text-center">Case Files:</h3>
      <?php
    foreach ($matters as $matter){
      echo "<div class'col-md-12'>";
      echo "<h5><a href='/matter.php?ID=" . $matter['ID'] . "'>" . $matter['Name'] . "</a></h5>";
      echo "</div>";
    }
       ?>
       <a href="/addMatter.php?ID=<?php echo $clientID; ?>">Add Matter</a>
    </div>
  </div>
</div>


<?php
include 'includes/footer.php'; ?>
