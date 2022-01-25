<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/header.php')?>


<?php
if(isset($_POST['lostedit']))
{	
    $idLost = $_POST['idLost'];
    $img = $_POST['img'];
    $category = $_POST['category'];
    $serial = $_POST['serial'];
    $brand = $_POST['brand'];
    $colour = $_POST['colour'];
    $datetime = $_POST['datetime'];
    $location = $_POST['location'];
    $description = $_POST['description'];
	
	// checking empty fields
	if(empty($brand) || empty($datetime) || empty($location)) {
				
		if(empty($brand)) {
			echo "<font color='red'>brand field is empty.</font><br/>";
		}
		if(empty($datetime)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}
		if(empty($location)) {
			echo "<font color='red'>location field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($con, "UPDATE lostitems SET img ='$img',category ='$category',serial ='$serial',brand ='$brand', colour = '$colour', datetime = '$datetime', location = '$location', description = '$description' where idLost ='$idLost'");
		
		//redirectig to the display page. In our case, it is mylost.php
	}
}
?>


<?php
//getting id from url
if (isset($_GET['idLost'])){
    $idLost = $_GET['idLost'];
    
    //selecting data associated with this particular id
    $result = mysqli_query($con, "SELECT * FROM lostitems WHERE idLost = $idLost");
    
    while($res = mysqli_fetch_array($result))
    {
        $img = $res['img'];
        $category = $res['category'];
        $serial = $res['serial'];
        $brand = $res['brand'];
        $colour = $res['colour'];
        $datetime = $res['datetime'];
        $location = $res['location'];
        $description = $res['description'];
    }
    }
    ?>

    <div id="report-form">
    <div class="centered" >
    <h1>Edit Lost Item</h1>
    <p class="p2">Please fill in all the relevant details accurately</P>
    <form action="editlost.php" method="POST" autocomplete="">

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
        <input type="text" name="serial" value="<?php echo $serial;?>">
        </div>
        <p>Brand</p>
        <input type="text" name="brand" required value="<?php echo $brand;?>">
        <p>Colour</p>
        <input type="text" name="colour" required value="<?php echo $colour;?>">
        <p>When was it found?</p>
        <input type="date" name="datetime" required value="<?php echo $datetime;?>">
        <p>Location</p>
        <input id="where" type="text" name="location" required value="<?php echo $location;?>">
        <p>Special Description</p>
        <textarea id="description" name="description" rows="4" cols="42"required value="<?php echo $description;?>"></textarea>
        <input type="hidden" name="idLost" value="<?php echo $_GET['idLost'];?>"></td>
        <button type="submit" name ="lostedit" value="lostedit">Submit</button>
    </form>
    </div>
    </div>

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