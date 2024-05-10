<?php
function createArray($a, $b, $c, $d) {
    $resultArray = array();

    if ($a <= $b) {
        for ($i = $a; $i <= $b; $i++) {
            $resultArray[$i] = $c;
            $c++;
        }
    }
    return $resultArray;
}

    $a = 5;
    $b = 8;
    $c = 10;
    $d = 14;

    $arrayResult = createArray($a, $b, $c, $d);
    echo "new array:\n";
    print_r($arrayResult);
?>