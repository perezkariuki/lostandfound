<?php require_once "controller.php"; ?>
<!--header -->
<?php require('repetative/header.php') ?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM credentials WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user_otp.php');
        }
    }
}else{
    header('Location: login.php');
}
?>

  <!-- main-body Section  -->
  <section id="main-body">
    <div class="main-body container">
      <div>
        <h2> <?php echo $fetch_info['FirstName'] ?> <?php echo $fetch_info['LastName'] ?> Welcome to RECO a lost and found system <br>
          This is a system that helps in solving the problem of Lost or Stolen item by connecting the owner or the finder of a product to the respective individual.
        </h2>
        <a href="#projects" type="button" class="cta">I'VE FOUND AN ITEM</a>
        <a href="#projects" type="button" class="cta">I'VE LOST AN ITEM</a>
      </div>
    </div>
  </section>
  <!-- End main-body Section  -->
