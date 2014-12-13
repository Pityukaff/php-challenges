<?php
    $s = '10#51#16'; // treba staviti ucitavanje jedne linije iz fajla
    if (strpos($s, '#') !== false) {
        echo "format je sa #"; // M YY DD
    } elseif (strpos($s, '/') !== false) {
        echo "format je sa /"; // DD MM YY
    } elseif (strpos($s, '-') !== false) {
        echo "format je sa -"; // YYYY MM DD
    } elseif (strpos($s, '*') !== false) {
        echo "format je sa *"; // DD MM YYYY
    } else {
        echo "format je sa karakterom"; // MMM DD YYYY
    }
?>