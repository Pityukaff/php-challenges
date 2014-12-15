<?php
$file = fopen("date-input.txt", "r") or die("Unable to open the file!");
$output = fopen("date-output.txt", "w") or die("File does not exist!");
while (!feof($file)) {
    $str = fgets($file);
    //One of the two problematic dates are the ones containing #,
    //so if the character '#' exsists, we are changing the date "manually".
    if (strpos($str, '#') !== false) {
        $prefix = (substr($str, 3) >= "14") ? "19" : "20";
        $str = $prefix . substr($str, 3, 2) . "-" . substr($str, 6, 2) . "-" . substr($str, 0, 2);
    } else {
        $str = str_replace('*', '-', $str);
        $str = date("Y-m-d", strtotime($str));
    }
    //The second problematic dates are the onec containing /.
    //The function adds 19 to the values from 00 to 69,
    //and 20 to the values from 70 to 99.
    trim($str);
    fwrite($output, $str . PHP_EOL);
}
fclose($file);
fclose($output);
?>