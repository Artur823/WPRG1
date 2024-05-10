<?php
 function tablice($array,$n)
 {
     if ($n >= 0 && $n < count($array)) {
         $resultArray = $array;
         $resultArray[$n] = '$';  // n zamieniamy na $
         return $resultArray;
     } else {
         return " $n nie jest w array";
     }
 }
$numbers = array(10, 20, 30, 40, 50);
$index = 3; //gdzie znajduje sie $

$newArray = tablice($numbers, $index);
if (is_array($newArray)) {
    echo "Nowy  ";
    print_r($newArray);
} else {
    echo $newArray;
}

?>