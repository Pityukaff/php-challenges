<?php
    //while (!PHP_EOF)
        $str = '09#65#21'; // ucitaj novu liniju
        if (strpos($str, '#') !== false) {
            // M YY DD    09#65#21
            if (substr($str, 3) > "14") {
                $date = "19".substr($str, 3, -3)."-".substr($str, 0, -6)."-".substr($str, 6);
            } else {
                $date = "20".substr($str, 3, -3)."-".substr($str, 0, -6)."-".substr($str, 6);
            }
        } elseif (strpos($str, '/') !== false) {
            // MM DD YY   11/15/78
            if (substr($str, 6) > "14") {
                $date = "19".substr($str, 6)."-".substr($str, 0, -6)."-".substr($str, 3, -3);
            } else {
                $date = "20".substr($str, 6)."-".substr($str, 0, -6)."-".substr($str, 3, -3);
            }
        } elseif (strpos($str, ' ') !== false) {
            // MMM DD YYYY   Dec 26, 75
            switch (substr($str, 0, -7)) {
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
            // MMM DD YYYY   Dec 26, 75
            if (substr($str, 8) > "14") {
                $date = "19".substr($str, 8)."-".$month."-".substr($str, 4, -4);
            } else {
                $date = "20".substr($str, 8)."-".$month."-".substr($str, 4, -4);
            }
        } elseif (strpos($str, '*') !== false) {
            // DD MM YYYY   15*10*1981
            $date = substr($str, 6)."-".substr($str, 3, -5)."-".substr($str, 0, -8);
        } else {
            // YYYY MM DD   1964-01-10
            $date = $str;
        }
        echo $date;
        //upisi $date
    //}
        //GGGG-MM-DD
?>