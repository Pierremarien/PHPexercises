 <!-- exercices sur les array php -->
<?php
// $familyMembers = array('sister' => 'Emilie', 'nephew' => 'Augustin', 'brother-in-law' => 'Victor', 'dad' => 'Alain');

// print_r($familyMembers);

// $favoriteRecipes = array(
//     'Bolognaise' => 'Spaghetti Bolognese',
//     'OnionSoup' => 'French Onion Soup',
//     'HachiParmentier' => 'Hachis Parmentier',
//     'GratinDauphinois' => 'Gratin Dauphinois'
// );

// print_r($favoriteRecipes);


// $favoriteFilms = array(
//     'The Big Lebowski',
//     'A Clockwork Orange',
//     'The Lord of the Rings',
//     'How High',
//     'Harry Potter'
// );


// $favoriteFilmIndex = 0; 
// $favoriteFilm = $favoriteFilms[$favoriteFilmIndex];

// echo "My favorite film is: $favoriteFilm";

// $me = array(
//     'firstname' => 'Pierre',
//     'lastname' => 'Marien',
//     'age' => 29,       
//     'favorite_season' => 'winter', 
//     'soccer_fan' => false, 
//     'hobbies' => array('reading', 'gaming', 'music'),
// );

// // echo '<pre>';
// // print_r($me);
// // echo '</pre>';

// $mother = array(
//     'firstname' => 'Carine',
//     'lastname' => 'Marien',
//     'age' => 58,
//     'favorite_season' => 'spring',
//     'soccer_fan' => false,
//     'hobbies' => array('gardening', 'cooking', 'walking')
// );

// // echo '<pre>';
// // print_r($mother);
// // echo '</pre>';

// $me['mother'] = $mother; 

// echo '<pre>';
// print_r($me);
// echo '</pre>';

// $me_hobbies_count = count($me['hobbies']);
// $mother_hobbies_count = count($mother['hobbies']);
// $total_hobbies_count = $me_hobbies_count + $mother_hobbies_count;

// echo "Pierre's number of hobbies: $me_hobbies_count<br>";
// echo "Carine's number of hobbies: $mother_hobbies_count<br>";
// echo "Total number of hobbies: $total_hobbies_count";

// $me['hobbies'][]='taxidermy';

// $me['lastname'] = 'Durand';

// $soulmate = array(
//     'firstname' => 'Roberto',
//     'lastname' => 'de la Vega',
//     'age' => 28,
//     'favorite_season' => 'summer',
//     'soccer_fan' => true,
//     'hobbies' => array('cooking', 'painting', 'traveling')
// );

// $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);

// $possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

// echo '<pre>';
// print_r($possible_hobbies_via_intersection);
// print_r($possible_hobbies_via_merge);
// echo '</pre>';

$web_development = array(
    'frontend' => array(),
    'backend' => array()
);

$web_development['frontend'][] = 'xhtml';

$web_development['backend'][] = 'Ruby on Rails';

$web_development['frontend'][] = 'CSS';

$web_development['frontend'][] = 'Flash';

$web_development['frontend'][] = 'JavaScript';

$web_development['frontend'] = array_map(function($value) {
    return ($value === 'xhtml') ? 'html' : $value;
}, $web_development['frontend']);

if (($key = array_search('Flash', $web_development['frontend'])) !== false) {
    unset($web_development['frontend'][$key]);
}

echo '<pre>';
print_r($web_development);
echo '</pre>';
