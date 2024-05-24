<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

echo 'Witaj, ' . $_SESSION['email'] . '! Jesteś zalogowany.<br>';
echo '<a href="logout.php">Wyloguj się</a>';
?>
