<?php
session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php"); // Przekierowanie do formularza logowania, jeśli użytkownik nie jest zalogowany
    exit;
}

// Obsługa wylogowania
if(isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Witaj!</title>
</head>
<body>
<h2>Witaj!</h2>
<p>Jesteś zalogowany.</p>
<form method="post" action="">
    <input type="submit" name="logout" value="Wyloguj">
</form>
</body>
</html>
