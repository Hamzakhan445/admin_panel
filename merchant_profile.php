  <?php 
 session_start();
 $role_id = "0"; 
 $email = ""; 
 $pass = ""; 
 if (isset($_SESSION['email']) && isset($_SESSION['pass']) ) {
   // code...
    $role_id = $_SESSION['role_id'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];
  
 }
 else
 {
   session_destroy();
   header('location:login.php');
 }


?>
   
<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

             <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                      
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Merchant </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="add_merchant.php"> Add Merchant  </a></li>
                            <li><i class="fa fa-table"></i><a href="show_merchant.php"> Show Merchant  </a></li>
                        </ul>
                    </li>
                    

                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage operator </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="add_operator.php"> Add operator  </a></li>
                            <li><i class="fa fa-table"></i><a href="show_operator.php"> Show operator  </a></li>
                        </ul>
                    </li>
                    
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage Driver </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="add_driver.php"> Add driver  </a></li>
                            <li><i class="fa fa-table"></i><a href="show_driver.php"> Show driver  </a></li>
                        </ul>
                    </li>

                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i> Vehicle Type </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="add_vehicle.php"> Add Vehicle  </a></li>
                            <li><i class="fa fa-table"></i><a href="show_vehicle.php"> Show Vehicle  </a></li>
                        </ul>
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

                <div class="col-sm-7" >
                    <a id="menuToggle" class="menutoggle pull-left" ><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger" hidden><i class="fa fa-search"></i></button>
                        <div class="form-inline" hidden>
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification" hidden >
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message" hidden>
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profile.php"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select" hidden>
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       



 <div class="container-fluid pt-5 update_profile bg-white">
     
 <?php 

           include 'connection.php';
 
  $select_data = "select * from merchant_table";

   $rquery = mysqli_query($con, $select_data);

    $profile = mysqli_fetch_array($rquery);

    $key = $profile['id'];


    if (isset($_POST['update_merchant'])) {

        $merchant_name = $_POST['merchant_name'];
        $merchant_email = $_POST['merchant_email'];
        $merchant_address = $_POST['merchant_address'];
        $merchant_city = $_POST['merchant_city'];
        $merchant_company = $_POST['merchant_company'];
        $merchant_password = $_POST['merchant_password'];
          
         $update_data = "update merchant_table set merchant_name = '$merchant_name', merchant_email = '$merchant_email', merchant_address = '$merchant_address', merchant_city = '$merchant_city', merchant_company = '$merchant_company', merchant_password = '$merchant_password' where id = '$key' ";

         $up_query = mysqli_query($con, $update_data);

         if ($up_query) {

            $pass = null;

            if ($pass != "") {

                $update_password = "update merchant_table set merchant_password = '$merchant_password' ";
                $pass_query = mysqli_query($con, $update_password)  ;
             }

             echo "<script> alert('Data Updated');  </script>";
         }
         else{
                         echo "<script> alert('Data Not Updated');  </script>";
         }

    }
    ?>

     <form action="" method="post" enctype="multipart/form-data">

    <div class=" w-25 mx-auto text-center ">
    <img src="<?php echo $profile['merchant_profile'] ?>" class="shadow" style="cursor: pointer;" alt="">
</div>
        <div class="row pb-5 ">
 


            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> merchant_name </label>
            <input type="text" class="form-control" name="merchant_name" value="<?php echo $profile['merchant_name']; ?>">
            </div>

            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> merchant_email </label>
            <input type="text" class="form-control" name="merchant_email" value="<?php echo $profile['merchant_email']; ?>">
            </div>

            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> merchant_address </label>
            <input type="text" class="form-control" name="merchant_address" value="<?php echo $profile['merchant_address']; ?>">
            </div>

            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> merchant_city </label>
            <input type="text" class="form-control" name="merchant_city" value="<?php echo $profile['merchant_city']; ?>">
            </div>

            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> merchant_company </label>
            <input type="text" class="form-control" name="merchant_company" value="<?php echo $profile['merchant_company']; ?>">
            </div>

             
            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> merchant_profile </label>
            <input type="file" class="form-control" name="merchant_profile" value="">
            </div>

            <div class="col-lg-8 mt-3 mx-auto ">
                <label for="input"> New Password </label>
            <input type="text" class="form-control" placeholder="New password" name="merchant_password" value="">
            </div>

            <div class="col-lg-5 mt-3 mx-auto">
            <input type="submit" class="btn btn-dark w-100 " name="update_merchant" value="Update Profile"> 
</div>

        </div>

     </form>

 </div>
  













    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
