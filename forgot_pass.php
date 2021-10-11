<?php require('repetative/header.php') ?>

<?php require_once "controller.php"; ?>
<div id="login-form">
    <h1>Forgot Password</h1>
    <p class="p2">Please enter valid credentials</P>

<!--forgot alart-->
<?php
        if(count($errors) > 0){
            ?>
            <div class="alert alert-danger text-center">
                <?php 
                    foreach($errors as $error){
                        echo $error;
                    }
                ?>
            </div>
            <?php
        }
    ?>

<!--End of forgot alart-->
    <form action="forgot_pass.php" method="post" autocomplete="off">
        <p>Enter your registered email</p>
        <input type="email" name="email" placeholder="Enter your Email address" required value="<?php echo $email ?>">>
        <button type="submit" name="check_email">Check</button>
    </form>      
</div>