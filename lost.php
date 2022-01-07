<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php') ?>

<style>
<?php include 'css/style.css'; ?>
</style>

<!-- Location imports -->
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>



<!--Actual code-->    
<section class="split right">
    <div id="report-form">
    <div class="centered" >
    <h1>Lost Item Form</h1>
    <p class="p2">Please fill in all the relevant details accurately</P>
    <form action="lost.php" method="POST" autocomplete="">

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
    
        <p>Image of the Item Lost</p>
        <input type="file" id="img" name="img" accept="image/*">
        <p for="category">Choose the category of the item:</p>
        <fieldset>
        <select id="category" name="category" onchange="changeCategory()">
            <option value="">-Select-</option>
            <option value="Keys">Keys</option>
            <option value="Wallets">Wallets, Purse & Handbags</option>
            <option value="Bags">Bags & Suitcase</option>
            <option value="Books">Books & Magazine</option>
            <option value="Laptop">Laptop</option>
            <option value="Mobile">Mobile Phone</option>
            <option value="Photography">Photograpy Equipments</option>
        </select>
        </fieldset>
        <div class="hidden" id="SDetails">
        <p>Model/Serial/ID</p>
        <input type="text" name="serial" placeholder="Enter the Model/Serial/ID">
        </div>
        <p>Brand</p>
        <input type="text" name="brand" placeholder="Enter the brand">
        <p>Colour</p>
        <input type="text" name="colour" placeholder="Enter the primary colour">
        <p>When was it found?</p>
        <input type="date" name="datetime">
        <p>Location</p>
        <input id="where" type="text" name="location" placeholder="location">
        <p>Special Description</p>
        <textarea id="description" name="description" rows="4" cols="42" placeholder="e.g it contains yellow zips or got lost on an event"></textarea>
        <button type="submit" name ="lostdb" value="lostdb">Submit</button>
    </form>
    </div>
    </div>
    </section>

<section class="split left">
    <d class="centered" >
    <p>Publish a lost item on RECO </p>
    <ol>
        <li>Fill out the form.</li>
        <li>Wait for a text from a possible finder</li>
        <li>Ensure the details filled match the description</li>
        <li>Make sure the location of meet up is a safe place for both parties</li>
    </ol>
    <p><b>N.B.:</b>Passports and identity cards should not be registered. These should be brought to your city council.</p>
</section>

<!-- hide code/imei digits code -->
<script>
    function changeCategory()
    {
        var option = document.getElementById("category");
        if(option.value=="Laptop")
        {
            document.getElementById("SDetails").style.visibility="visible";
        }
        else if(option.value=="Mobile")
        {
            document.getElementById("SDetails").style.visibility="visible";
        }
        else if(option.value=="Photography")
        {
            document.getElementById("SDetails").style.visibility="visible";
        }
        else
        {
            document.getElementById("SDetails").style.visibility="hidden";
        }
    }
</script>



<!--location script not working
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCerAzjPeGPY5kEzCI71wP2mFktsfbky8k8&libraries=places&callback=whereAutocomplete" async defer></script>

<script>
    function whereAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('where'),
            {
                types: ['(regions)'],
                componentRestrictions: { 'country': ['US', 'CA'] }
            }
        );
        autocomplete.addListener('place_changed', place_changed);
    }
 
    function btn_handler(){
        alert($("#where").val())}
</script>
    -->