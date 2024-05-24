<?php
$question = "Jak oceniasz naszą usługę?";

$answers = array(
    "Bardzo dobrze",
    "Dobrze",
    "Średnio",
    "Źle"
);

// Sprawdzenie, czy użytkownik już głosował
$hasVoted = isset($_COOKIE['poll_voted']);

if (isset($_POST['vote']) && !$hasVoted) {
    // Sprawdzenie, czy wybrana odpowiedź istnieje
    $selectedAnswer = isset($_POST['answer']) ? $_POST['answer'] : '';
    if ($selectedAnswer !== '') {
        setcookie('poll_voted', '1', time() + (86400 * 30)); // Ciasteczko ważne 30 dni

        $selectedAnswerText = $answers[$selectedAnswer];
        echo "Dziękujemy za oddanie głosu! Wybrana odpowiedź: $selectedAnswerText.";
        exit(); // Zakończenie wykonania skryptu po oddaniu głosu
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sonda internetowa</title>
</head>
<body>
<h1>Sonda internetowa</h1>

<?php if ($hasVoted): ?>
    <p>Dziękujemy za udział w sondzie! Już oddałeś swoje głosy.</p>
<?php else: ?>
    <form method="POST" action="index.php">
        <p><?php echo $question; ?></p>
        <?php foreach ($answers as $key => $answer): ?>
            <label>
                <input type="radio" name="answer" value="<?php echo $key; ?>">
                <?php echo $answer; ?>
            </label><br>
        <?php endforeach; ?>
        <br>
        <button type="submit" name="vote">Oddaj głos</button>
    </form>
<?php endif; ?>
</body>
</html>
