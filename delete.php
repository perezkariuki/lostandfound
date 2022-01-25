<?php require_once "controller.php"; ?>

<?php

$del = mysqli_query($con, "SELECT * FROM founditems WHERE idFound='$_POST[id]'");

//getting id of the data from url
$idFound = $del['idFound'];

//deleting the row from table
$result=mysqli_query($con, "DELETE FROM founditems WHERE idFound=$idFound");

//redirecting to the display page (view.php in our case)
?>