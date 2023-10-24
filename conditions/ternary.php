<?php
$gender = "M"; // Change this to "F" to see different results
$hello = ($gender === "M") ? "Hello, Sir!" : "Hello, Madam!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greeting Based on Gender</title>
</head>
<body>
    <p><?php echo $hello; ?></p>
</body>
</html>