<?php
include 'includes/garble_cnfg.php';
protected_page();
header_check();
$clientID = $_GET['ID'];
$client = get_client_byId($clientID);
?>
<div class="wrapper container">

  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <?php
    echo "<h5><a href='/clientPage.php?ID=" . $client['ID'] . "'>" . $client['FName'] . " " . $client['LName'] . "</a></h5>";
    echo "<h5>" . $client['Street1'] . "</h5>";
    echo "<h5>" . $client['City'] . ", " . $client['State'] . " " . $client['Zip'] . "<h5>"; 
    ?>
      <h2>New Matter</h2>
      <p>Please enter Matter information.</p>
      <form action="inserts/insertMatter.php" method="post">
            <input type="hidden" name="clientID" value="<?php echo $clientID; ?>">
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="Name" class="form-control">
              <span class="help-block"></span>
          </div>
          <div class="form-group">
              <label>Description</label>
              <textarea rows="10" name="Description" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label>Matter Number</label>
              <input type="text" name="MatterNum" class="form-control">
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-primary" name="submit" value="Create">
          </div>
      </form>
    </div>
  </div>



<?php
include 'includes/footer.php'; ?>
