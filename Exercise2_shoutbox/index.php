<!DOCTYPE html>
<html>
<head>
    <title>ShoutBox</title>
</head>
<body>

    <form action="send.php" method="post">
        Message: <textarea name="shout" size="50" maxlength="300"></textarea>
        <input type="submit" value="Shout!">
    </form>

    <?php
    // Connect to the database
    require_once("connection.php");

    // Get all of the shouts
    $result = mysqli_query($link, "SELECT * FROM shouts ORDER BY shout_date DESC")
              or die(mysqli_error($link));

    // Loop through and print each shout
    while ($data = mysqli_fetch_assoc($result)) {
        print $data['shout_text'];
        // print $data['shout_date']; // Uncomment if you want to show date
        print "<br>";
    }
    ?>

</body>
</html>
