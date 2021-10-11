<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/header.php') ?>

<div id="login-form">
    <h1>Signup Form</h1>
    <p class="p2">Please fill in your credentials to register.</P>
    <form action="signup.php" method="POST" autocomplete="">

    <!--Sign up alert-->
    <?php
        if(count($errors) == 1){
            ?>
            <div class="alert alert-danger text-center">
                <?php
                foreach($errors as $showerror){
                    echo $showerror;
                }
                ?>
            </div>
            <?php
        }elseif(count($errors) > 1){
            ?>
            <div class="alert alert-danger">
                <?php
                foreach($errors as $showerror){
                    ?>
                    <li><?php echo $showerror; ?></li>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    <!--End of sign up alart-->

        <p>First Name</p>
        <input type="text" name="FirstName" placeholder="First name" required value="<?php echo $FirstName ?>">>
        <p>Last Name</p>
        <input type="text" name="LastName" placeholder="Last name">
        <p>Phone Number</p>
        <input type="text" name="Phone" placeholder="Phone Number">
        <p>Email</p>
        <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
        <p>Password</p>
        <input type="password" name="password" placeholder="Password">
        <p>Confirm Password</p>
        <input type="password" name="conpassword" placeholder="Confirm Password">
        <button type="submit" name ="signup" value="Signup">Create</button>
    </form>      
</div>