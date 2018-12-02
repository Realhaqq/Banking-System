<?php include 'head.php'; ?>
<br>

  <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="card" >
                    <div class="card-header">
                        <h4>Statements</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap">
  
<?php
extract($_POST); 
if (isset($_POST['go'])) {
    $queryy = $dBASE->query("SELECT accountno,accountname FROM useraccounts where accountno='$account_no'");
    if ($queryy->num_rows > 0) {
      $acct = $queryy->fetch_assoc();
    
      $_SESSION['acct']=$acct['accountno'];
      echo '<script>location = "Statement.php";</script>';
    
}else{
         echo '<script>alert("Invalid Account No");</script>';
        
    }

}
?>

<form action="" method="POST">
<table class="table">
    
    <tr>
        
        <td>Account No:</td>
        <td><input type="number" name="account_no" class="form-control"></td>

    </tr>

<tr>
    <td></td>
    <td><button name="go" class="btn btn-success" type="submit">Print Now</button></td>
</tr>
</table>

</form>

                        </div>
                    </div>
                </div>
                <!-- /# card -->
         </div></div>


            <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>


</body>
</html>
