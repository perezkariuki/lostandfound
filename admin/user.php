<?php require_once "../controller.php"; ?>

<?php require_once "header.php"; ?>

<?php require('../repetative/access.php')?>

<body>
	<div class="tabtxt">
	<br/><br/><h1>Users Records</h1>
	<a href="../signup.php" class="btn">Add new user</a>
	<form method="post" action="userpdf.php">
	<input type="submit" value="convert to PDF" name="pdf"/>
	</form></br>
	</div>
	<div class="table" >
	<table width='80%' border=0 class="tab">
		<tr bgcolor='#CCCCCC'>
			<td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Phone</td>
			<td>Email</td>
            <td>Status</td>
            <td>Usertype</td>
		</tr>
		<?php
        $user = mysqli_query($con, "SELECT * FROM credentials ORDER BY id DESC");

		while($fi= mysqli_fetch_assoc($user)){

			echo "<tr>";
			echo "<td>".$fi['id']."</td>";
			echo "<td>".$fi['FirstName']."</td>";
            echo "<td>".$fi['LastName']."</td>";
			echo "<td>".$fi['Phone']."</td>";
			echo "<td>".$fi['email']."</td>";
            echo "<td>".$fi['status']."</td>";
            echo "<td>".$fi['usertype']."</td>";
			echo "</tr>";		
		}
		?>
	</table>
	</div>	
</body>
</html>