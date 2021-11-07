<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php') ?>

<style>
<?php include 'css/style.css'; ?>
</style>

<div id="login-form">
    <h1>Found Item Form</h1>
    <p class="p2">Please fill in all the relevant details accurately</P>
    <form action="finder.php" method="POST" autocomplete="">

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

        <p>Image of the Item found</p>
        <input type="file" id="img" name="img" accept="image/*">
        <p for="category">Choose the category of the item:</p>
        <select id="category" name="category">
            <option value="Keys">Keys</option>
            <option value="Wallets">Wallets, Purse & Handbags</option>
            <option value="Bags">Bags & Suitcase</option>
            <option value="Books">Books & Magazine</option>
            <option value="Laptop">Laptop</option>
            <option value="Mobile">Mobile Phone</option>
            <option value="Photograpy">Photograpy Equipments</option>
        </select>
        <p>Model/Serial/ID</p>
        <input type="text" name="serial" placeholder="Enter the Model/Serial/ID">
        <p>Colour</p>
        <input type="text" name="colour" placeholder="Enter the primary colour">
        <p>When was it found?</p>
        <input type="date" name="datetime">
        <p>Location</p>
        <input type="password" name="conpassword" placeholder="Confirm Password">
        <p>Special Description</p>
        <textarea id="description" name="description" rows="4" cols="42" placeholder="e.g it contains yellow zips or got lost on an event"></textarea>
        <button type="submit" name ="signup" value="lostitem">Submit</button>
    </form>      
</div>