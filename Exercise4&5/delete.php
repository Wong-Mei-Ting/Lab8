<?php
require('db.php');

$id = $_REQUEST['id'];

$query = "DELETE FROM new_record WHERE id = $id";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

header("Location: view.php");
exit();
?>
