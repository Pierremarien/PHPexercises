<?php
// $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
// $verb = 'code';

// foreach ($pronouns as $pronoun) {
//     if ($pronoun == 'He/She') {
//         $verb_conjugated = $verb . 's';
//     } else {
//         $verb_conjugated = $verb;
//     }

//     echo "$pronoun $verb_conjugated<br>";
// }
// $number = 1;

// while ($number <= 120) {
//     echo $number . " ";
//     $number++;
// }

// for ($number = 1; $number <= 120; $number++) {
//     echo $number . " ";
// }

// $startupMembers = array('Tom', 'Antoine', 'Ping', 'Pong', 'Chong', 'Du', 'Valentin');

// foreach ($startupMembers as $firstname) {
//     echo $firstname . '<br>';
// }

$countries = array(
    'US' => 'United States',
    'CA' => 'Canada',
    'UK' => 'United Kingdom',
    'DE' => 'Germany',
    'FR' => 'France',
    'AU' => 'Australia',
    'JP' => 'Japan',
    'CN' => 'China',
    'IN' => 'India',
    'BR' => 'Brazil',
    'ES' => 'Spain',
    'IT' => 'Italy',
    'MX' => 'Mexico',
    'KR' => 'South Korea',
    'RU' => 'Russia',
    'NL' => 'Netherlands',
    'CH' => 'Switzerland',
    'SE' => 'Sweden',
    'NO' => 'Norway',
    'DK' => 'Denmark'
);

echo '<form>';
echo '<label for="country">Select a country:</label>';
echo '<select name="country" id="country">';

// shuffle($countries);

// $selectedCountries = array_slice($countries, 0, 20);

foreach ($countries as $iso => $country) {
    echo "<option value='$iso'>$country</option>";
}

echo '</select>';
echo '</form>';
