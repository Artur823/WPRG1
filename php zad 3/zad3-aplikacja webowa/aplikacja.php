<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        if (!empty($_POST['num1'])) {

            $num1 = $_POST["num1"];
            $operation1 = $_POST["operation1"];

            switch ($operation1) {
                case 'Odwrocenie':
                    $operation1 = strrev($num1);
                    break;
                case 'Zamiana na wielki':
                    $operation1 = strtoupper($num1);
                    break;
                case 'Zamiana na male':
                    $operation1 = strtolower($num1);
                    break;

                case 'Liczenie':
                    $operation1 = strlen($num1);
                    break;

                case 'Usuwanie bialych znakow':
                    $operation1 = trim($num1);
                    break;
                default:
                    $operation1 = "nieprawidlowa opcja";
            }
        }
    }
    echo "<p>Wynik: " . $operation1 . "</p>";
} else {
     echo "<p class='error'>Pole ciągu znaków jest puste.</p>";
}
?>