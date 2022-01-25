<?php require_once "controller.php"; ?>

<!--header navigation code-->
<?php require('repetative/Main_header.php') ?>

<?php require('repetative/access.php')?>

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
<body>
	<div class="tabtxt">
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
			echo "<td><a href=\"editfind.php?idFound=$fi[idFound]\">Edit</a> | <a href=\"deletef.php?idFound='$fi[idFound]'\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			echo "</tr>";		
		}
		?>
	</table>
	</div>	
</body>
</section>

<section class="split left">
<section class="marg">
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
			echo "<td>".$lo['img']."</td>";
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
</section>

