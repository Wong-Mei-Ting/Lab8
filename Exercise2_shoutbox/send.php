<?php
// Database connection
require_once("connection.php");

// If the shout is not empty
if ($_POST['shout'] != "") {
    // Add to database
    $result = mysqli_query($link, "INSERT INTO shouts(shout_text) VALUES ('".$_POST['shout']."')")
              or die(mysqli_error($link));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0; url=index.php">
    <title>Redirecting...</title>
</head>
<body>
    <p>Please wait... (^_^)</p>
</body>
</html>
