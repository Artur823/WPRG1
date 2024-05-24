<?php
// Pobranie danych z formularza
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Sprawdzenie, czy plik użytkowników istnieje
if (!file_exists('users.txt')) {
    fopen('users.txt', 'w'); // Utworzenie pliku, jeśli nie istnieje
}

// Sprawdzenie, czy email jest unikalny
$lines = file('users.txt', FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    $user = explode(';', $line);
    if ($user[2] === $email) {
        die('Użytkownik o podanym adresie email już istnieje!');
    }
}

// Zapisanie danych do pliku
$userData = "$firstname;$lastname;$email;$password" . PHP_EOL;
file_put_contents('users.txt', $userData, FILE_APPEND);

echo 'Rejestracja zakończona pomyślnie!';
?>
