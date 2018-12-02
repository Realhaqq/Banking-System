<?php
include 'config/dbconnect.php';
session_start();

extract($_SESSION);

if (isset($_SESSION['adminid'])) {
    # code...
}else{
header("Location: index.php");
}

$query = $dBASE->query("SELECT * FROM admin where adminid='".$_SESSION['adminid']."'") or die($dBASE->error);
$row = $query->fetch_array();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $row['name'];?> -Online Banking System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Online Banking System</a>
                <a class="navbar-brand hidden" href="./">myBANK</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="Home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Activities</h3><!-- /.menu-title -->
                    <li class="menu-item">
                     <a href="Deposit.php"> <i class="menu-icon fa fa-dashboard"></i>Deposit </a>
                    </li>

                      <li class="menu-item">
                     <a href="CheckBal.php"> <i class="menu-icon fa fa-dashboard"></i>Check Balance</a>
                    </li>

                      <li class="menu-item">
                     <a href="Create.php"> <i class="menu-icon fa fa-dashboard"></i>New Account </a>
                    </li>

                             <li class="menu-item">
                     <a href="UserAccounts.php"> <i class="menu-icon fa fa-dashboard"></i>Users</a>
                    </li>
                    
                    <h3 class="menu-title">Report</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                       <li class="menu-item">
                     <a href="PStatement.php"> <i class="menu-icon fa fa-dashboard"></i>Statement </a>
                  
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">



                <div align="right">
      
                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        
                  

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<br>