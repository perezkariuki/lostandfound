<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php')?>

<div id="login-form">
    <h1>Profile Form</h1>
    <p class="p2">Ensure the credentials entred are valid.</P>
    <form action="profile.php" method="POST" autocomplete="">

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

    <?php $results = mysqli_query($con, "SELECT * FROM credentials where id='$_SESSION[id]'"); 
    
    while($f= mysqli_fetch_assoc($results)){
    ?>

        <p>First Name</p>
        <input type="text" name="FirstName" placeholder="First name" required value="<?php echo $f['FirstName'] ?>">
        <p>Last Name</p>
        <input type="text" name="LastName" placeholder="Last name" required value="<?php echo $f['LastName'] ?>">
        <p>Phone Number</p>
        <input type="text" name="Phone" placeholder="Phone Number" required value="<?php echo $f['Phone'] ?>">
        <p>Email</p>
        <input type="email" name="email" placeholder="Email Address" required value="<?php echo $f['email'] ?>"/>
        <button type="submit" name ="profedit" value="profedit">Submit</button>
    </form>  
</div>
    <?php 
    }
    ?>
