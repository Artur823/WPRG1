<?php
function suma($number) {
    while (true) {
        $sum = 0;
        while ($number != 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int)($number / 10);
        }

        if ($sum >= 10) {
            break;
        } else {
            $number = $sum;
        }
    }
    return $sum;
}

$number = 532145;
$result = suma($number);
echo "Suma cyfr podanej liczby to: " . $suma = suma($number);
?>