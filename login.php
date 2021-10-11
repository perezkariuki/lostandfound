<?php require_once "controller.php"; ?>
<!--header script-->
<?php require('repetative/header.php') ?>

<div id="login-form">
    <h1>Login Form</h1>
    <p class="p2">Please fill in your credentials to login</P>

<!--Login alart-->
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

<!--End of Login alart-->
    <form action="login.php" method="post" autocomplete="">
        <p>Email address</p>
        <input type="email" name="email" placeholder="Email address" required value="<?php echo $email ?>">
        <p>Password</p>
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="login">login</button>
        <div><a href="forgot_pass.php">Forgot password?</a></div>
        <div>Not yet a member? <a href="signup.php">Signup now</a></div>
    </form>      
</div>