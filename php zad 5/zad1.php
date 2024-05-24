<?php
$maxVisits = 5;

if (isset($_POST['reset'])) {
    setcookie('visit_count', '', time() - 3600);
    header('Location: index.php');
    exit();
}

// Sprawdzenie, czy ciasteczko istnieje
if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'] + 1;
} else {
    $visitCount = 1;
}

// Zapisanie aktualnej liczby odwiedzin w ciasteczku
setcookie('visit_count', $visitCount, time() + (86400 * 30)); // Ciasteczko ważne 30 dni

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Licznik odwiedzin</title>
</head>
<body>
<h1>Licznik odwiedzin</h1>
<p>Odwiedziłeś tę stronę <?php echo $visitCount; ?> razy.</p>

<?php if ($visitCount >= $maxVisits): ?>
    <p>Osiągnąłeś maksymalną liczbę odwiedzin: <?php echo $maxVisits; ?>.</p>
<?php endif; ?>

<form method="POST" action="index.php">
    <button type="submit" name="reset">Resetuj licznik odwiedzin</button>
</form>
</body>
</html>