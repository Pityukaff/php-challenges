<?php
    $file = fopen("date-input.txt", "r") or die("Unable to open the file!");
    $output = fopen("date-output.txt", "w") or die("File does not exist!");
    while (!feof($file)) {
        $str = fgets($file);
        if (strpos($str, '#') !== false) {
            if (substr($str, 3) >= "14") {
                $date = "19" . substr($str, 3, 2) . "-" . substr($str, 6, 2) . "-" . substr($str, 0, 2);
            } else {
                $date = "20" . substr($str, 3, 2) . "-" . substr($str, 6, 2) . "-" . substr($str, 0, 2);
            }
        } elseif (strpos($str, '/') !== false) {
            if (substr($str, 6) >= "14") {
                $date = "19" . substr($str, 6, 2) . "-" . substr($str, 0, 2) . "-" . substr($str, 3, 2);
            } else {
                $date = "20" . substr($str, 6, 2) . "-" . substr($str, 0, 2) . "-" . substr($str, 3, 2);
            }
        } elseif (strpos($str, ' ') !== false) {
            switch (substr($str, 0, 3)) {
                case "Jan" :
                    $month = "01";
                    break;
                case "Feb" :
                    $month = "02";
                    break;
                case "Mar" :
                    $month = "03";
                    break;
                case "Apr" :
                    $month = "04";
                    break;
                case "May" :
                    $month = "05";
                    break;
                case "Jun" :
                    $month = "06";
                    break;
                case "Jul" :
                    $month = "07";
                    break;
                case "Aug" :
                    $month = "08";
                    break;
                case "Sep" :
                    $month = "09";
                    break;
                case "Oct" :
                    $month = "10";
                    break;
                case "Nov" :
                    $month = "11";
                    break;
                case "Dec" :
                    $month = "12";
                    break;
            }
            if (substr($str, 8) >= "14") {
                $date = "19" . substr($str, 8, 2) . "-" . $month . "-" . substr($str, 4, 2);
            } else {
                $date = "20" . substr($str, 8, 2) . "-" . $month . "-" . substr($str, 4, 2);
            }
        } elseif (strpos($str, '*') !== false) {
            $date = trim(substr($str, 6)) . "-" . substr($str, 3, 2) . "-" . substr($str, 0, 2);
        } else {
            $date = trim($str);
        }
        trim($date);
        fwrite($output, $date . PHP_EOL);
    }
    fclose($file);
    fclose($output);
?>