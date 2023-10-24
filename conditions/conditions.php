<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

// $room_is_filthy = false;

// if( $room_is_filthy ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// // 1.2 Clean your room Exercise, improved

// // Create the array of possible states
// $possible_states = [
//     0 => "health hazard",
//     1 => "filthy",
//     2 => "dirty",
//     3 => "clean",
//     4 => "immaculate",
// ];

// // When testing, change the index value to navigate to the possible array values
// $room_filthiness = $possible_states[0]; 

// if ($room_filthiness === "health hazard") {
//     echo "Yuk, Room is disgusting! Let's clean it up!";
// } elseif ($room_filthiness === "filthy") {
//     echo "Yuk, Room is filthy : let's clean it up!";
// } elseif ($room_filthiness === "dirty") {
//     echo "Room is dirty, time to clean it!";
// } elseif ($room_filthiness === "clean") {
//     echo "Room is clean, looking good!";
// } elseif ($room_filthiness === "immaculate") {
//     echo "Room is immaculate, no need to clean!";
// } else {
//     echo "<br>Nothing to do, room is neat.";
// }


// // 2. "Different greetings according to time" Exercise
// date_default_timezone_set('Europe/Amsterdam');
// $currentHour = date('H');

// if ($currentHour >= 5 && $currentHour <= 9) {
//     echo "Good morning!";
// } elseif ($currentHour >= 9 && $currentHour <= 12) {
//     echo "Good day!";
// } elseif ($currentHour >= 12 && $currentHour <= 16) {
//     echo "Good afternoon!";
// } elseif ($currentHour >= 16 && $currentHour <= 21) {
//     echo "Good evening!";
// } else {
//     // For times between 21:01 and 04:59
//     echo "Good night!";
// }
?>
<!-- 3. Display a different greeting according to the user's age. 4. Display a different greeting according to the user's age and gender.-->
<!-- 5. Display a different greeting according to the user's age, gender and mothertongue. -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Greeting Based on Age</title>
</head>
<body>
<?php
// if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {
//     $age = intval($_GET['age']);
//     $gender = $_GET['gender'];
//     $english = $_GET['english'];

//     if ($age < 12) {
//         if ($english === "yes") {
//             if ($gender === "Woman") {
//                 $message = "Hello Girl!";
//             } else {
//                 $message = "Hello Boy!";
//             }
//         } else {
//             if ($gender === "Woman") {
//                 $message = "Aloha Girl!";
//             } else {
//                 $message = "Aloha Boy!";
//             }
//         }
//     } elseif ($age >= 12 && $age <= 18) {
//         if ($english === "yes") {
//             if ($gender === "Woman") {
//                 $message = "Hello Miss Teen!";
//             } else {
//                 $message = "Hello Mister Teen!";
//             }
//         } else {
//             if ($gender === "Woman") {
//                 $message = "Aloha Miss Teen!";
//             } else {
//                 $message = "Aloha Mister Teen!";
//             }
//         }
//     } elseif ($age > 18 && $age <= 115) {
//         if ($english === "yes") {
//             if ($gender === "Woman") {
//                 $message = "Hello Miss Adult!";
//             } else {
//                 $message = "Hello Mister Adult!";
//             }
//         } else {
//             if ($gender === "Woman") {
//                 $message = "Aloha Miss Adult!";
//             } else {
//                 $message = "Aloha Mister Adult!";
//             }
//         }
//     } else {
//         $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
//     }
// }
?>

<form method="get" action="">
    <label for="age">Please type your age: </label>
    <input type="text" name="age"><br>
    
    <label>Man or Woman? </label>
    <input type="radio" name="gender" value="Man" id="genderMan">
    <label for="genderMan">Man</label>
    <input type="radio" name="gender" value="Woman" id="genderWoman">
    <label for="genderWoman">Woman</label><br>

    <label>Do you speak English? </label>
    <input type="radio" name="english" value="yes" id="englishYes">
    <label for="englishYes">Yes</label>
    <input type="radio" name="english" value="no" id="englishNo">
    <label for="englishNo">No</label>

    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
// if (isset($message)) {
//     echo $message;
// }
?>



</body>
</html> -->


<!-- 6. The Girl Soccer team -->
<?php
// $age = '';
// $gender = '';
// $message = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
//     $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

//     if ($age >= 21 && $age <= 40 && $gender === 'female') {
//         $message = "Welcome to the team!";
//     } else {
//         $message = "Sorry, you don't fit the criteria.";
//     }
// }
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Girl Soccer Team</title>
</head>
<body>
    <form method="post" action="">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>

    <?php //if (!empty($message)) : ?>
        <p><?php //echo $message; ?></p>
    <?php // endif; ?>
</body>
</html> -->

<!-- 7. Achieve the same, without the ELSE. -->
<?php
// $age = '';
// $gender = '';
// $message = "Sorry, you don't fit the criteria.";

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
//     $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

//     if ($age >= 21 && $age <= 40 && $gender === 'female') {
//         $message = "Welcome to the team!";
//     }
// }
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Girl Soccer Team</title>
</head>
<body>
    <form method="post" action="">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>

    <p><?php // echo $message; ?></p>
</body>
</html> -->


<!-- 8. "School sucks!" Exercise -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Teacher's Grading Form</title>
</head>
<body>
    <form method="post" action="">
        <label for="grade">Grade (0-20):</label>
        <input type="number" name="grade" id="grade" min="0" max="20" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     $grade = isset($_POST['grade']) ? intval($_POST['grade']) : 0;
    //     $message = '';

    //     if ($grade >= 0 && $grade <= 4) {
    //         $message = "This work is really bad. What a dumb kid!";
    //     } elseif ($grade >= 5 && $grade <= 9) {
    //         $message = "This is not sufficient. More studying is required.";
    //     } elseif ($grade === 10) {
    //         $message = "Barely enough!";
    //     } elseif ($grade >= 11 && $grade <= 14) {
    //         $message = "Not bad!";
    //     } elseif ($grade >= 15 && $grade <= 18) {
    //         $message = "Bravo, bravissimo!";
    //     } elseif ($grade >= 19 && $grade <= 20) {
    //         $message = "Too good to be true: confront the cheater!";
    //     } else {
    //         $message = "Invalid grade. Please enter a grade between 0 and 20.";
    //     }

    //     echo '<p>' . $message . '</p>';
    // }
    ?>
</body>
</html> -->

