<?php
function czyPierwsza ($number){
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function wypiszLiczbyPierwsze($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (czyPierwsza($i)) {
            echo $i . " ";
        }
    }
}

$start = 3;
$end = 20;
echo "Liczby pierwsze w zakresie od $start do $end to: ";
wypiszLiczbyPierwsze($start, $end);
?>