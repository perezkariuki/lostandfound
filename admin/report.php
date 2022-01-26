<?php require_once "../controller.php"; ?>

<?php require_once "header.php"; ?>

<?php require('../repetative/access.php')?>
<!-- Location imports -->
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<!--search function-->
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `founditems` WHERE CONCAT(`img`, `category`, `brand`, `colour`,`datetime`, `location`, `description`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `founditems`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "lostandfound");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!--Actual code-->    
<section class="split right">
<body>
<div class="tabtxt">
	<br/><br/><br/><br/><h1>My Findings records</h1>
	<a href="../finder.php" class="btn">Add new record</a>
    <form method="post" action="foundpdf.php">
    <button type="submit" name="lost"><a href="foundpdf.php" style="color:black;">convert to PDF</a></button>
	</form></br>
	<br/><br/>
	<form method="POST" action="report.php">
	</div>
	<div class="table" >
	<table width='80%' border=0 class="tab">
		<tr bgcolor='#CCCCCC'>
			<td>Image</td>
			<td>Category</td>
			<td>Serial(if valid)</td>
			<td>Brand</td>
			<td>Colour</td>
            <td>Date</td>
            <td>Location</td>
            <td>Description</td>
			<td>chat</td>
		</tr>

      <!-- populate table from mysql database -->
                <?php while($fi = mysqli_fetch_array($search_result)):?>
                <?php
                    echo "<tr>";
                    echo "<td>".'<img src="../img/'.$fi['img'].'" width="100px", height:"100px">'."</td>";
			        echo "<td>".$fi['category']."</td>";
                    echo "<td>".$fi['serial']."</td>";
			        echo "<td>".$fi['brand']."</td>";
			        echo "<td>".$fi['colour']."</td>";
                    echo "<td>".$fi['datetime']."</td>";
                    echo "<td>".$fi['location']."</td>";
                    echo "<td>".$fi['description']."</td>";
			        echo "<td><a href=\"../chat.php?\">text owner</a></td>";
			        echo "</tr>";
                    ?>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</section>

<!--search lost items-->
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `lostitems` WHERE CONCAT(`img`, `category`, `brand`, `colour`,`datetime`, `location`, `description`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `lostitems`";
    $search_result = filterTable($query);
}
?>

<section class="split left">
<section class="marg">
<body>
	<div class="tabtxt">
	<form method="POST" action="report.php">
    <p><b>SEARCH FOR BOTH LOST AND FOUND ITEMS</b></p>
	<div>
		Search:<input type="text" name="valueToSearch" placeholder="Value To Search">
            <input type="submit" name="search" value="search">
	</div>
	<br/><br/><h1>Lost items records</h1>
	<a href="../lost.php" class="btn">Add new record</a><br/>
    <form method="post" action="lostpdf.php">
    <button type="submit" name="lost"><a href="lostpdf.php" style="color:black;">convert to PDF</a></button>
	</form></br>
	<br/><br/>
	</div>
	<div class="table" >
	<table width='80%' border=0 class="tab">
		<tr bgcolor='#CCCCCC'>
			<td>Image</td>
			<td>Category</td>
			<td>Serial(if valid)</td>
			<td>Brand</td>
			<td>Colour</td>
            <td>Date</td>
            <td>Location</td>
            <td>Description</td>
			<td>chat</td>
		</tr>

      <!-- populate table from mysql database -->
                <?php while($fi = mysqli_fetch_array($search_result)):?>
                <?php
                    echo "<tr>";
                    echo "<td>".'<img src="../img/'.$fi['img'].'" width="100px", height:"100px">'."</td>";
			        echo "<td>".$fi['category']."</td>";
                    echo "<td>".$fi['serial']."</td>";
			        echo "<td>".$fi['brand']."</td>";
			        echo "<td>".$fi['colour']."</td>";
                    echo "<td>".$fi['datetime']."</td>";
                    echo "<td>".$fi['location']."</td>";
                    echo "<td>".$fi['description']."</td>";
			        echo "<td><a href=\"../chat.php?\">text owner</a></td>";
			        echo "</tr>";
                    ?>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</section>