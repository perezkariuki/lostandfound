<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php') ?>

<body>
	<div class="">
	<br/><br/><h1>Report of all Lost items</h1>
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
        $lost = mysqli_query($con, "SELECT * FROM lostitems ORDER BY DATE (datetime) DESC");

		while($lo= mysqli_fetch_assoc($lost)){

			echo "<tr>";
			echo "<td>".$lo['img']."</td>";
			echo "<td>".$lo['category']."</td>";
            echo "<td>".$lo['serial']."</td>";
			echo "<td>".$lo['brand']."</td>";
			echo "<td>".$lo['colour']."</td>";
            echo "<td>".$lo['datetime']."</td>";
            echo "<td>".$lo['location']."</td>";
            echo "<td>".$lo['description']."</td>";
			echo "<td><a href=\"chat.php?\">text owner</a></td>";
			echo "</tr>";		
		}
		?>
	</table>
	</div>	
</body>
</html>