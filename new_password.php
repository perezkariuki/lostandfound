<?php require_once "controller.php"; ?>

<?php require('repetative/header.php') ?>

<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>
<div id="login-form">
    <h1>Password Reset</h1>
    <p class="p2">Please enter your prefered password</P>

<!--reset alart-->
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

<!--End of reset alart-->
    <form action="new_password.php" method="post" autocomplete="off">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter new password">
        <p>Confirm Password</p>
        <input type="password" name="conpassword" placeholder="Enter new password">
        <button type="submit" name="change_pass">login</button>
    </form>      
</div>