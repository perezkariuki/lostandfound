<?php require_once "controller.php"; ?>
<!--header -->
<?php require('repetative/Main_header.php') ?>

<?php require('repetative/access.php')?>

<body>
	<div class="tabtxt">
	<br/><br/><h1>My Lost items records</h1>
	<a href="lost.php" class="btn">Add new record</a>
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
		<?php
        $lost = mysqli_query($con, "SELECT * FROM lostitems WHERE credentials_id='$_SESSION[id]'");

		while($lo= mysqli_fetch_assoc($lost)){

			echo "<tr>";
			echo "<td>".'<img src="img/'.$lo['img'].'" width="100px", height:"100px">'."</td>";
			echo "<td>".$lo['category']."</td>";
            echo "<td>".$lo['serial']."</td>";
			echo "<td>".$lo['brand']."</td>";
			echo "<td>".$lo['colour']."</td>";
            echo "<td>".$lo['datetime']."</td>";
            echo "<td>".$lo['location']."</td>";
            echo "<td>".$lo['description']."</td>";
			echo "<td><a href=\"editlost.php?idLost=$lo[idLost]\">Edit</a> | <a href=\"deletel.php?idLost='$lo[idLost]'\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			echo "</tr>";		
		}
		?>
	</table>
	</div>	
</body>
</html>