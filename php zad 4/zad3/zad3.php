<?php
// Ścieżka do pliku z licznikiem
$filePath = 'licznik.txt';

// Sprawdzenie, czy plik istnieje
if (!file_exists($filePath)) {
    file_put_contents($filePath, '1');
    $visits = 1;
} else {
    $visits = (int)file_get_contents($filePath);
    $visits++;
    file_put_contents($filePath, (string)$visits);
}

echo "<h1>Liczba odwiedzin: $visits</h1>";
?>
