<?php require_once "controller.php"; ?>

//lost items
<?php

//getting id of the data from url
$idLost = $_GET['idLost'];

//deleting the row from table
$result=mysqli_query($con, "DELETE FROM lostitems WHERE idLost=$idLost");

//redirecting to the display page (view.php in our case)
header("Refresh:1; url=mylost.php");
?>