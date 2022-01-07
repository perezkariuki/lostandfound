<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php') ?>

<body>
	<div class="">
	<br/><br/><h1>My Findings records</h1>
	<a href="finder.php" class="btn">Add new record</a>
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
        $finds = mysqli_query($con, "SELECT * FROM founditems WHERE credentials_id='$_SESSION[id]'");

		while($fi= mysqli_fetch_assoc($finds)){

			echo "<tr>";
			echo "<td>".$fi['img']."</td>";
			echo "<td>".$fi['category']."</td>";
            echo "<td>".$fi['serial']."</td>";
			echo "<td>".$fi['brand']."</td>";
			echo "<td>".$fi['colour']."</td>";
            echo "<td>".$fi['datetime']."</td>";
            echo "<td>".$fi['location']."</td>";
            echo "<td>".$fi['description']."</td>";
			echo "<td><a href=\"edit_finds.php?\">Edit</a> | <a href=\"delete.php? idFound='$fi[idFound]'\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			echo "</tr>";		
		}
		?>
	</table>
	</div>	
</body>
</html>