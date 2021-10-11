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
                    <h1>RECO</h1>
                  </a>
                </div>
                <div class="nav-list">
                  <div class="hamburger">
                    <div class="bar"></div>
                  </div>
                  <ul>
                    <li><a href="#Publish Finds" data-after="Finds">Publish Finds</a></li>
                    <li><a href="#Publish Lost" data-after="Losts">Publish Lost</a></li>
                    <li><a href="#Search items" data-after="Search">Search items</a></li>
                    <li><a href="#Sign in" data-after="Signin">Sign in</a></li>
                    <li><a href="#About" data-after="About">About</a></li>
                    <li><a href="#Contact" data-after="Contact">Contact</a></li>
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