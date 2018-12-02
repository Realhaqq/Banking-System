<?php include 'head.php'; ?>
<br>

  <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="card" >
                    <div class="card-header">
                        <h4>Check Balance</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap">
<?php
extract($_POST);
$opendate = date("D-M-Y");
$accountno = rand(00000000000,99999999999);

if (isset($_POST['go'])) {

$queryy = $dBASE->query("INSERT INTO useraccounts (accountno,accountname,accounttype,dob,gender,pin,openingdate) VALUES ('$accountno','$accountname','$accounttype','$dob','$gender','$pin','$opendate')") or die($dBASE->error);
$u = $dBASE->query("INSERT INTO balance (account) VALUES ('$accountno')");
    # code... 

    echo '<script>alert("Account Created Successfully");

    location = "UserAccounts.php";</script>';

   

}



?>

<form action="" method="POST">
<table class="table">
    
    <tr>
        
        <td>Account Type:</td>
        <td>
<select name="accounttype" class="form-control" required="true">
                                <option>Select Account Type</option>
                                <option value="SAVINGS">SAVINGS</option>
                                <option value="CURRENT">CURRENT</option>
                            </select>
        </td>

    </tr>


 <tr>
        
        <td>Account Name:</td>
        <td><input type="text" name="accountname" class="form-control" required="true"></td>

    </tr>
     <tr>
        
        <td>Date of Birth:</td>
        <td><input type="date" name="dob" class="form-control" required="true"></td>

    </tr>

        <tr>
        
        <td>Gender:</td>
        <td>
<select name="gender" class="form-control" required="true">
                                <option>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
        </td>

    </tr>




 <tr>
        
        <td>PIN:</td>
        <td><input type="password" name="pin" class="form-control" required="true"></td>

    </tr>


    <tr>
    <td></td>
    <td><button name="go" class="btn btn-success" type="submit" required="true">Create</button></td>
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
