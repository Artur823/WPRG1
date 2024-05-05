<?php
function sumaElementowCiagu($PierwszyWyrazCiagu, $RoznicaIloraz, $IloscElementow){
    $SumaArytmetyczna = (($PierwszyWyrazCiagu + $IloscElementow)/2)*$IloscElementow;
    echo "Suma ciagu arytmetycznego: " . $SumaArytmetyczna;

    if ($RoznicaIloraz != 0 && $RoznicaIloraz != 1) {
        $SumaGeometryczna = $PierwszyWyrazCiagu * (1 - pow($RoznicaIloraz, $IloscElementow)) / (1 - $RoznicaIloraz);
    } else {
        $SumaGeometryczna = $PierwszyWyrazCiagu * $IloscElementow;
    }
    echo "\nSuma ciagu geometrycznego: " . $SumaGeometryczna;
}

$PierwszyWyrazCiagu = 1;
$RoznicaIloraz = 4;
$IloscElementow = 6;
sumaElementowCiagu($PierwszyWyrazCiagu, $RoznicaIloraz, $IloscElementow);