 <?php

// // example function 
// function shuffleLetters($word) {
//     if (strlen($word) <= 3) {
//         return $word;
//     }

//     $firstLetter = $word[0];
//     $lastLetter = $word[strlen($word) - 1];
//     $lettersInBetween = str_split(substr($word, 1, -1));
//     shuffle($lettersInBetween);

//     return $firstLetter . implode('', $lettersInBetween) . $lastLetter;
// }

// $text = "According to a researcher at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

// $words = preg_split('/\s+/', $text);

// foreach ($words as $word) {
//     echo shuffleLetters($word) . ' ';
// }


// // Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
// function capitalizeFL($string) {
//     return mb_convert_case($string, MB_CASE_TITLE, 'UTF-8');
// }

// $originalString = "émile";
// $capitalizedString = capitalizeFL($originalString);
// echo $capitalizedString; 

// // Use the native function allowing you to display the current year.
// $currentYear = date('Y');
// echo $currentYear;
// // Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
// $currentDate = date('Y-m-d H:i:s');
// echo $currentDate;

// function sum($num1, $num2) {
//     return $num1 + $num2;
// // }

// // $number1 = 5;
// // $number2 = 7;
// // $result = sum($number1, $number2);
// // echo "The sum of $number1 and $number2 is: $result"; 

// function sum($num1, $num2) {
//     if (is_numeric($num1) && is_numeric($num2)) {
//         return $num1 + $num2;
//     } else {
//         return "Error: Argument is not a number.";
//     }
// }
// // function to make acronyms
// function generateAcronym($input) {
//     $words = preg_split('/\s+/', $input);
//     $acronym = '';
//     foreach ($words as $word) {
//         $acronym .= strtoupper($word[0]);
//     }
//     return $acronym;
// }

// $inputString = "In code we trust!";
// $acronym = generateAcronym($inputString);
// echo $acronym;
// //replace a e with æ
// function replaceLetters($input) {
//     return preg_replace('/ae/', 'æ', $input);
// }

// $inputString1 = "caecotrophie";
// $inputString2 = "chaenichthys";
// $inputString3 = "microsphaera";
// $inputString4 = "sphaerotheca";

// $output1 = replaceLetters($inputString1);
// $output2 = replaceLetters($inputString2);
// $output3 = replaceLetters($inputString3);
// $output4 = replaceLetters($inputString4);

// echo $output1 . '<br>';
// echo $output2 . '<br>';
// echo $output3 . '<br>';
// echo $output4;

// same but inverted
// function replaceLetters($input) {
//     return str_replace('æ', 'ae', $input);
// }

// $inputString1 = "cæcotrophie";
// $inputString2 = "chænichthys";
// $inputString3 = "microsphæra";
// $inputString4 = "sphærotheca";

// $output1 = replaceLetters($inputString1);
// $output2 = replaceLetters($inputString2);
// $output3 = replaceLetters($inputString3);
// $output4 = replaceLetters($inputString4);

// echo $output1 . '<br>';
// echo $output2 . '<br>';
// echo $output3 . '<br>';
// echo $output4;
// // warning messages 
// function feedback($message, $cssClass = "info") {
//     $validClasses = array("info", "error", "warning");
//     $cssClass = in_array($cssClass, $validClasses) ? $cssClass : "info";

//     return "<div class=\"$cssClass\">".ucfirst($cssClass).": $message.</div>";
// }

// echo feedback("Incorrect email address", "error");
// echo feedback("This is a warning message", "warning");
// echo feedback("This is an information message");

// decapitalize a string

$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
$decapitalizedString = strtolower($string);
echo $decapitalizedString;

function calculate_cone_volume($radius, $height) {
    $volume = $radius * $radius * 3.14 * $height * (1/3);
    return "The volume of a cone with a radius of $radius and a height of $height = $volume cm<sup>3</sup>";
}

echo calculate_cone_volume(5, 2) . '<br>';
echo calculate_cone_volume(3, 4) . '<br>';