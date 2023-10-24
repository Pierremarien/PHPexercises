<?php
function getRandomApology($reason) {
    $apologies = [
        'illness' => [
            'I regret to inform you that my child is unwell and unable to attend school today.',
            'Due to an unexpected illness, my child is not feeling well and won&apos;t be able to attend school.',
            'Unfortunately, my child is under the weather and won&apos;t be able to make it to school today.',
            'My child woke up with a fever and is not fit to come to school today.',
            'I am writing to let you know that my child is sick and will not be able to attend school.'
        ],
        'death_pet' => [
            'I am sorry to inform you that our family pet has passed away, and my child is grieving deeply.',
            'Tragically, our beloved pet has died, and my child is too upset to come to school today.',
            'Due to the loss of our family pet, my child is not in a condition to attend school.',
            'My child&rsquo;s pet passed away, and it has been a tough morning for our family.',
            'I regret to say that our pet&rsquo;s demise has deeply affected my child, and they need the day off.'
        ],
        'extra_activity' => [
            'My child has a significant extra-curricular activity today that they cannot miss.',
            'Today, my child has an important extra-curricular event, and they are excited to participate.',
            'Due to a special extra-curricular activity, my child will be absent from school today.',
            'My child is involved in an important school event, and their presence is required.',
            'My child is representing the school in a competition, and they need the day off for the event.'
        ],
        'other' => [
            'I have personal family matters that require my child&rsquo;s presence today.',
            'My child won&rsquo;t be able to attend school due to a family matter that needs immediate attention.',
            'We have a family situation that my child needs to be a part of today.',
            'Due to unforeseen family circumstances, my child will not be at school today.',
            'I am requesting a day off for my child due to a family matter that needs their presence.'
        ]
    ];

    return $apologies[$reason][array_rand($apologies[$reason])];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $childName = isset($_POST['child_name']) ? htmlspecialchars($_POST['child_name']) : '';
    $childGender = isset($_POST['child_gender']) ? htmlspecialchars($_POST['child_gender']) : '';
    $teacherName = isset($_POST['teacher_name']) ? htmlspecialchars($_POST['teacher_name']) : '';
    $reason = isset($_POST['reason']) ? htmlspecialchars($_POST['reason']) : '';
    $apology = getRandomApology($reason);
    $currentDate = date("l, j F Y");

    $politePhrase = '';
    if ($childGender === 'boy') {
        $politePhrase = "Dear Mr. $teacherName,\n";
    } elseif ($childGender === 'girl') {
        $politePhrase = "Dear Mrs. $teacherName,\n";
    }

    $letter = "$politePhrase$currentDate\n\n$apology\n\nSincerely,\n$childName&rsquo;s Parent";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Excuse Note Generator</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="excuses.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <H1>Get excuses for school and be cool</H1>
        <figure class="logo">
            <img class="logoImg" src="noschoollogo.png" alt="logo">
        </figure>
    </header>
    <main>
        <form method="post" action="">
            <label for="child_name">Your Name:</label>
            <input class="inputText" type="text" name="child_name" id="child_name" required><br>
            
            <label for="child_gender">Your Gender:</label>
            <input type="radio" name="child_gender" value="boy" id="genderBoy" required>
            <label for="genderBoy">Boy</label>
            <input type="radio" name="child_gender" value="girl" id="genderGirl" required>
            <label for="genderGirl">Girl</label><br>

            <label for="teacher_name">Teacher&rsquo;s Name:</label>
            <input class="inputText" type="text" name="teacher_name" id="teacher_name" required><br>

            <label for="reason">Reason for Absence:</label>
            <input type="radio" name="reason" value="illness" id="reasonIllness" required>
            <label for="reasonIllness">Illness</label>
            <input type="radio" name="reason" value="death_pet" id="reasonDeathPet" required>
            <label for="reasonDeathPet">Death of Pet/Family Member</label>
            <input type="radio" name="reason" value="extra_activity" id="reasonExtraActivity" required>
            <label for="reasonExtraActivity">Significant Extra-curricular Activity</label>
            <input type="radio" name="reason" value="other" id="reasonOther" required>
            <label for="reasonOther">Other</label><br>

            <input class="btn" type="submit" value="Print Letter">
        </form>
       
        <?php
        if (isset($letter)) {
            echo "<div class='letter'><pre>$letter</pre></div>";
        }
        ?>
   </main>
</body>
</html>
