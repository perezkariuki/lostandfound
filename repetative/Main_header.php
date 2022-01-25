<?php 

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/lostandfound/';

//$user_logged = false;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECO Lost and Found System</title>
        <link rel="stylesheet" href="<?php echo $server; ?>css/style.css" >
    </head>
    <body>
        <!--header-->
        <section id="header">
            <div class="header container">
              <div class="nav-bar">
                <div class="brand">
                  <a href="#main-body">
                    <h2><a href="index.php"> RECO</h2>
                  </a>
                </div>
                <div class="nav-list">
                  <div class="hamburger">
                    <div class="bar"></div>
                  </div>
                  <ul>
                    <li><a href="Mainfinderspage.php" data-after="found">Found Items</a></li>
                    <li><a href="Mainlostpage.php" data-after="Lost">Lost Items</a></li>
                    <li><a href="myreport.php" data-after="Search">My Reports</a></li>
                    <li><a href="profile.php" data-after="Profile">Profile</a></li>
                    <li><a href="about.php" data-after="About">About</a></li>
                    <li><a href="contact.php" data-after="Contact">Contact us</a></li>
                    <li><a href="logout.php" data-after="Logout">Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
           <!--header end-->
           <!--invoc humbagger-->
           <script src="./app.js"></script>
    </body>
</html>