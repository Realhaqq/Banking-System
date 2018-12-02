<?php include 'head.php'; 

?>
<br>

  <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="card" >
                    <div class="card-header">
                        <h4>Users </h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap">
  

<table class="table">
    <form action="" method="POST">
    <tr>
        <td><input type="text" name="searchh" class="form-control" placeholder="Account No / Account Name"></td>
       
        <td><button name="search" class="btn btn-success">Search</button></td>
    </tr></form>
</table>

<table class="table">
    <tr>
        
        <td><b>ACCOUNT NO</b></td>
        <td><b>ACCOUNT NAME</b></td>
        <td><b>ACCOUNT TYPE</b></td>
        <td><b>DOB</b></td>
        <td><b>GENDER</b></td>
        <td><b>OPENING DATE</b></td>
    </tr>



<?php
extract($_POST);
if (isset($_POST['search'])) {

   $queryy = $dBASE->query("SELECT * FROM useraccounts where accountno LIKE '%$search%' or accountname LIKE '%$search%'");
while ($tr = $queryy->fetch_assoc()) {
   
   echo '<tr>
<td>'.$tr['accountno'].'</td>
<td>'.$tr['accountname'].'</td>
<td>'.$tr['accounttype'].'</td>
<td>'.$tr['dob'].'</td>
<td>'.$tr['gender'].'</td>
<td>'.$tr['openingdate'].'</td>

   </tr>'; 
}
}else{
   $queryy = $dBASE->query("SELECT * FROM useraccounts");

while ($tr = $queryy->fetch_assoc()) {
   
   echo '<tr>
<td>'.$tr['accountno'].'</td>
<td>'.$tr['accountname'].'</td>
<td>'.$tr['accounttype'].'</td>
<td>'.$tr['dob'].'</td>
<td>'.$tr['gender'].'</td>
<td>'.$tr['openingdate'].'</td>

   </tr>'; 
}
}
?>        
       

</table>


</div>

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
