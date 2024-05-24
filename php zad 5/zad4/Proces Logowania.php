<?php
session_start();

// Pobranie danych z formularza
$email = $_POST['email'];
$password = $_POST['password'];

// Sprawdzenie, czy plik użytkowników istnieje
if (!file_exists('users.txt')) {
    die('Błąd logowania: Brak użytkowników w systemie!');
}

// Sprawdzenie poprawności danych
$lines = file('users.txt', FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    $user = explode(';', $line);
    if ($user[2] === $email && $user[3] === $password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header('Location: welcome.php');
        exit;
    }
}

echo 'Błąd logowania: Nieprawidłowy email lub hasło!';
?>
