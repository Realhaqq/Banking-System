<?php include 'head.php'; ?>
<br>

  <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="card" >
                    <div class="card-header">
                        <h4>Transfers</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap">

            <?php
            extract($_POST);
if(isset($_POST['transfer'])) {
  //Check Account Balance
   

//Check Pin
    if ($row['pin'] != $pin) {
         echo '<script>alert("Auth pin Is Invalid");</script>';
    }else{

        //get usee balance
        $query2 = $dBASE->query("SELECT balance FROM balance where account='".$_SESSION['acctt']."'");
        $bal = $query2->fetch_assoc();
        $ball = $bal['balance'] + $amount;

        //Insert to user
        $query1 = $dBASE->query("UPDATE balance SET balance='$ball' where account='".$_SESSION['acctt']."'");

        //Deducting

  
        $d = date("d-m-y");
        $id = rand(0000,9999);
        $query4 = $dBASE->query("INSERT INTO statement (id,fromaccount,toaccount,amount,currentbal,transdate) VALUES ('$id','".$_SESSION['adminid']."','".$_SESSION['acctt']."','$amount','".$bal['balance']."','$d')");
        echo '<script>alert("Transfer Affected Successfuly");</script>';

    


    }
}

?>        
<form action="" method="POST">
    

<table class="table">



    <tr>
 <form action="" method="POST">       <td>Account No</td>
        <td>
<?php
extract($_POST); 
if (isset($_POST['verify'])) {
    $queryy = $dBASE->query("SELECT accountno,accountname FROM useraccounts where accountno='$account_no'");
    if ($queryy->num_rows > 0) {
      $acct = $queryy->fetch_assoc();
    
      $_SESSION['acctt']=$acct['accountno'];
      echo '<input type="number" name="account_no" class="form-control" value='.$acct['accountno'].' disabled>';  
      echo $acct['accountname'];
    }
}else{
        echo '<input type="number" name="account_no" class="form-control">';
        
    }
?>
        </td><td><button class="btn btn-submit" name="verify">Verify</button></td></form>
    </tr>


    <tr>
        <td>Amount</td>
        <td><input type="number" name="amount" class="form-control"></td>
    </tr>



  <tr>
        <td>Auth PIN</td>
        <td><input type="password" name="pin" class="form-control"></td>
    </tr>


      <tr>
        <td></td>
        <td><button class="btn btn-success" name="transfer">Transfer Now</button></td>
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
