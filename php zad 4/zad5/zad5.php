<?php
$ipFilePath = 'tekst.txt';

// Pobranie adresu IP użytkownika
$userIp = $_SERVER['REMOTE_ADDR'];

// Funkcja do sprawdzenia, czy adres IP znajduje się na liście dozwolonych adresów
function isAllowedIp($ipFilePath, $userIp) {
    if (!file_exists($ipFilePath)) {
        return false;
    }

    $allowedIps = file($ipFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Sprawdzenie, czy adres IP użytkownika znajduje się na liście dozwolonych adresów
    return in_array($userIp, $allowedIps);
}

// Wybór odpowiedniej strony do wyświetlenia
if (isAllowedIp($ipFilePath, $userIp)) {
    include 'special.php';
} else {
    include 'default.php';
}
?>
