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
                    <h2><a href="home.php"> RECO</h2>
                  </a>
                </div>
                <div class="nav-list">
                  <div class="hamburger">
                    <div class="bar"></div>
                  </div>
                  <ul>
                    <li><a href="index.php" data-after="Publish">Publish Items</a></li>
                    <li><a href="Login.php" data-after="Login">Login</a></li>
                    <li><a href="about.php" data-after="About">About</a></li>
                    <li><a href="contact.php" data-after="Contact">Contact us</a></li>
                    <li><a href="signup.php" data-after="Signup">Signup</a></li>
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