<html>
  <head><title>Hi!</title></head>
  <body>
  <?php 
$name="Pierre";
$age="29";
$colorEyes="grey blue";
$family = array(
    0 => 'Emilie', 
    1 => 'Alain', 
    2 => 'Augustin', 
    3 => 'Victor',);
$isHungry = true;



    echo "
    <p>Hi. My name is {$name}!</p> 
    <p>I'm {$age} years old</p>
    <p>My eyes are {$eyeColor} </p>
    <p>The first person in my family is {$family[1]} </p>
    "
      ?>

    
  </body>
</html>