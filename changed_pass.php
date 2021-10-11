<?php require_once "controller.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login.php');  
}
?>
<!--header script-->
<?php require('repetative/header.php') ?>

<div id="login-form">
<!--session alart-->
<?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
<!--End of session alart-->
<form action="login.php" method="post" autocomplete="">
        <input type="submit" name="login_check" value="Login Now">
    </form>      
</div>