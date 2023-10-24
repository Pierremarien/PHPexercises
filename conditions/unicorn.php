<!DOCTYPE html>
<html>
<head>
    <title>Human, Cat, or Unicorn?</title>
</head>
<body>
    <form method="get" action="unicorn.php">
        <label for="choice">Are you a human, a cat, or a unicorn?</label>
        <select name="choice" id="choice">
            <option value="human">Human</option>
            <option value="cat">Cat</option>
            <option value="unicorn">Unicorn</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['choice'])) {
        $userChoice = $_GET['choice'];
        $gifSrc = ($userChoice === 'human') ? 'human.gif' : 
                  (($userChoice === 'cat') ? 'cat.gif' : 
                  (($userChoice === 'unicorn') ? 'unicorn.gif' : 'unknown.gif'));

        echo '<img src="' . $gifSrc . '" alt="' . $userChoice . '">';
    }
    ?>
</body>
</html>
