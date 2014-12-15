<?php
function printLex($lex){
    echo "{";
    foreach($lex as $value => $key) {
        echo '"' . "$value" . '"' . " : $key" . ","; 
        echo "\n";
    }
    echo "}";
}

$lex = [];
$file = fopen("polnoe-esenin.txt", "r") or die("Unable to open the file!");

while(!feof($file)){
    $str = fgets($file);
    $str = mb_strtolower($str, "UTF-8");
    $str = preg_replace('/\P{L}+/u', ' ', $str);
    $array = mb_split(" ", $str);
    for($i = 0; $i < count($array); $i++){
      if (array_key_exists($array[$i], $lex)){
        $lex[$array[$i]]++;
    } else {
        $lex[$array[$i]] = 1;
    }
}
}

fclose($file);
printLex($lex);
?>