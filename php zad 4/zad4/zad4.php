<?php
$filePath = 'linki.txt';

if (!file_exists($filePath)) {
    die("Plik nie istnieje.");
}

// Odczyt zawartości pliku
$fileContent = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Tablica do przechowywania odnośników
$links = [];

foreach ($fileContent as $line) {
    // Rozdzielenie linii na adres URL i opis
    list($url, $description) = explode(';', $line);
    // Dodanie do tablicy odnośników
    $links[] = [
        'url' => trim($url),
        'description' => trim($description)
    ];
}

echo '<h1>Lista odnośników</h1>';
echo '<ul>';
foreach ($links as $link) {
    echo '<li><a href="' . htmlspecialchars($link['url']) . '">' . htmlspecialchars($link['description']) . '</a></li>';
}
echo '</ul>';
?>
