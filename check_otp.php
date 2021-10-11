<?php require_once "controller.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>

<!--Header connecter -->
<?php require('repetative/header.php') ?>

<div id="login-form">
    <h1>Code Verification</h1>

    <!--OTP alart message-->
    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
    <!--End of OTP alart message-->

    <p class="p2">Please fill in your reset code</P>
    <form action="check_otp.php" method="post">
        <input type="number" name="otp" placeholder="Enter Verification code">
        <button type="submit" name="check_otp" value="Submit">check</button>
    </form>      
</div>