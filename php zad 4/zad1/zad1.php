<?php
function calculateAge($birthdate) {
    $today = new DateTime();
    $birthdate = new DateTime($birthdate);
    $age = $today->diff($birthdate)->y;
    return $age;
}

function dayOfWeek($birthdate) {
    $days = ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"];
    $birthdate = new DateTime($birthdate);
    return $days[$birthdate->format('w')];
}

function daysToNextBirthday($birthdate) {
    $today = new DateTime();
    $birthdate = new DateTime($birthdate);
    $nextBirthday = (new DateTime())->setDate($today->format('Y'), $birthdate->format('m'), $birthdate->format('d'));
    if ($nextBirthday < $today) {
        $nextBirthday->modify('+1 year');
    }
    return $today->diff($nextBirthday)->days;
}

if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    $day = dayOfWeek($birthdate);
    $age = calculateAge($birthdate);
    $daysToBirthday = daysToNextBirthday($birthdate);
} else {
    echo "Nie podano daty urodzenia";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wyniki</title>
</head>
<body>
<h1>Wyniki</h1>
<p>Urodziłeś się w: <?php echo $day; ?></p>
<p>Masz: <?php echo $age; ?> lat(a)</p>
<p>Dni do następnych urodzin: <?php echo $daysToBirthday; ?></p>
</body>
</html>