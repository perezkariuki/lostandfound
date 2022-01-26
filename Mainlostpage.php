<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php') ?>

<?php require('repetative/access.php')?>

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

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "lostandfound");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<body>
	<div class="tabtxt">
	<br/><br/><h1>Lost items records</h1>
	<a href="lost.php" class="btn">Add new record</a>
	<br/><br/>
	<form method="POST" action="Mainlostpage.php">
    <p>Search found items</p>
	<div>
		Search:<input type="text" name="valueToSearch" placeholder="Value To Search">
            <input type="submit" name="search" value="Filter">
	</div>
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
			<td></td>
		</tr>

      <!-- populate table from mysql database -->
                <?php while($fi = mysqli_fetch_array($search_result)):?>
                <?php
                    echo "<tr>";
                    echo "<td>".'<img src="img/'.$fi['img'].'" width="100px", height:"100px">'."</td>";
			        echo "<td>".$fi['category']."</td>";
                    echo "<td>".$fi['serial']."</td>";
			        echo "<td>".$fi['brand']."</td>";
			        echo "<td>".$fi['colour']."</td>";
                    echo "<td>".$fi['datetime']."</td>";
                    echo "<td>".$fi['location']."</td>";
                    echo "<td>".$fi['description']."</td>";
			        echo "<td><a href=\"chat.php?\">text owner</a></td>";
			        echo "</tr>";
                    ?>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>