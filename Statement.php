<?php include 'head.php'; 
$qq = $dBASE->query("SELECT * FROM useraccounts where accountno='".$_SESSION['acct']."'");
$r = $qq->fetch_assoc();
?>
<br>

  <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="card" >
                    <div class="card-header">
                        <h4>Statements -  <?php echo $r['accountname'];?></h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap">
  

<table class="table">
    <form action="" method="POST">
    <tr>
        <td><input type="date" name="from" class="form-control"></td>
        <td><input type="date" name="to" class="form-control"></td>
        <td><button name="search" class="btn btn-success">Filter</button></td>
    </tr></form>
</table>

<table class="table">
    <tr>
        
        <td>DATE</td>
        <td>TYPE</td>
        <td>TRANSFER TO</td>
        <td>AMOUNT</td>
        <td>CURRENT BALANCE</td>
    </tr>



<?php
extract($_POST);
if (isset($_POST['search'])) {
   $queryy = $dBASE->query("SELECT * FROM statement where transdate BETWEEN '$from' AND '$to' And toaccount='".$_SESSION['acct']."'");
while ($tr = $queryy->fetch_assoc()) {
   
   echo '<tr>
<td>'.$tr['transdate'].'</td>
<td>'.$tr['type'].'</td>
<td>'.$tr['toaccount'].'</td>
<td>'.$tr['amount'].'</td>
<td>'.$tr['currentbal'].'</td>

   </tr>'; 
}

}else{
    $queryy = $dBASE->query("SELECT * FROM statement where toaccount='".$_SESSION['acct']."'");
while ($tr = $queryy->fetch_assoc()) {
   
   echo '<tr>
<td>'.$tr['transdate'].'</td>
<td>'.$tr['type'].'</td>
<td>'.$tr['toaccount'].'</td>
<td>'.$tr['amount'].'</td>
<td>'.$tr['currentbal'].'</td>

   </tr>'; 
}

}
?>
        
        <tr>
            
            <td>
<a href="" onclick="window.print()" class="btn btn-danger">Print now</a>
</td>
        </tr>

</table>




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
