<?php
function manageDirectory($path, $dirname, $operation = 'read') {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    $fullPath = $path . $dirname;

    switch ($operation) {
        case 'read':
            if (is_dir($fullPath)) {
                $files = scandir($fullPath);
                return $files ? array_diff($files, ['.', '..']) : [];
            } else {
                return "Katalog nie istnieje.";
            }

        case 'create':
            if (!is_dir($fullPath)) {
                if (mkdir($fullPath, 0777, true)) {
                    return "Katalog został pomyślnie utworzony.";
                } else {
                    return "Nie udało się stworzyć katalogu.";
                }
            } else {
                return "Katalog już istnieje.";
            }

        case 'delete':
            if (is_dir($fullPath)) {
                $files = scandir($fullPath);
                if (count(array_diff($files, ['.', '..'])) === 0) {
                    if (rmdir($fullPath)) {
                        return "Katalog został pomyślnie usunięty.";
                    } else {
                        return "Nie udało się usunąć katalogu.";
                    }
                } else {
                    return "Katalog nie jest pusty.";
                }
            } else {
                return "Katalog nie istnieje.";
            }

        default:
            return "Nieznana operacja.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $path = $_POST['path'];
    $dirname = $_POST['dirname'];
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'read';

    $result = manageDirectory($path, $dirname, $operation);

    echo '<h1>Wynik operacji</h1>';
    if (is_array($result)) {
        echo '<ul>';
        foreach ($result as $item) {
            echo '<li>' . htmlspecialchars($item) . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>' . htmlspecialchars($result) . '</p>';
    }
    echo '<a href="/">Powrót</a>';
}
?>
