<?php
function generateWord($minLength, $maxLength) {
    $length = rand($minLength, $maxLength);
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $word = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        $word .= $randomChar;
    }

    return $word;
}

if (isset($_POST['generate'])) {
    $shortWord = generateWord(1, 5);
    $longWord = generateWord(7, 15);
} else {
    $shortWord = '';
    $longWord = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate a New Word</title>
</head>
<body>
    <h1>Generate a New Word</h1>
    <p><?php echo $shortWord; ?></p>
    <p><?php echo $longWord; ?></p>
    <form method="post">
        <input type="submit" name="generate" value="Generate">
    </form>
</body>
</html>
