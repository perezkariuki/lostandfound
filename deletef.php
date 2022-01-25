<<<<<<< HEAD
<?php require_once "controller.php"; ?>

//found items
<?php

//getting id of the data from url
$idFound = $_GET['idFound'];

//deleting the row from table
$result=mysqli_query($con, "DELETE FROM founditems WHERE idLost=$idFound");

//redirecting to the display page (view.php in our case)
header("Refresh:1; url=myfindings.php");
=======
<?php require_once "controller.php"; ?>

//found items
<?php

//getting id of the data from url
$idFound = $_GET['idFound'];

//deleting the row from table
$result=mysqli_query($con, "DELETE FROM founditems WHERE idLost=$idFound");

//redirecting to the display page (view.php in our case)
header("Refresh:1; url=myfindings.php");
>>>>>>> e92d8ae4e37083a31d7cd64ab092bd74adf18e8a
?>