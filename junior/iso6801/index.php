<?php
    $file = fopen("date-input.txt", "r") or die("Unable to open the file!");
    $output = fopen("date-output.txt", "w") or die("File does not exist!");
    while (!feof($file)) {
        $str = fgets($file);
        if (strpos($str, '#') !== false) {
            if (substr($str, 3) >= "14") {
                $str = "19" . substr($str, 3, 2) . "-" . substr($str, 6, 2) . "-" . substr($str, 0, 2);
            } else {
                $str = "20" . substr($str, 3, 2) . "-" . substr($str, 6, 2) . "-" . substr($str, 0, 2);
            }
        } else {
            $str = str_replace('*', '-', $str);
            $str = date("Y-m-d", strtotime($str));
        }
        trim($str);
        fwrite($output, $str . PHP_EOL);
    }
    fclose($file);
    fclose($output);
?>