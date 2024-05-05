<?php
function isPangram($text) {
    $text = strtolower($text);

    $alphabet = array_fill(0,26, false);

    for ( $i = 0; $i < strlen($text); $i++) {
        $char = $text [$i];
        if (ctype_alpha($char)) {
            $index = ord($char) - ord('a');
            $alphabet[$index] = true;
        }
    }

    foreach ($alphabet as $value) {
        if (!$value) {
            return false;
        }
    }
    return true;
}

$text = "The quick brown fox jumps over the lazy dog";
$result = isPangram($text);
if ($result) {
    echo "true";
} else {
    echo "false";
}
?>