<?php
class YinYang
{
    static function solve($x, $y)
    {
        $a = $x;
        $b = $y;
    
        //if a is greater than b, swap their values
        if ($a > $b) {
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;
        }
        
        for ($a; $a <= $b; $a++) {
            if (($a % 3 == 0) && ($a % 5 == 0)) {
                echo " YinYang";
            } elseif ($a % 3 == 0) {
                echo " Yin";
            } elseif ($a % 5 == 0) {
                echo " Yang";
            } else {
                echo " " . $a;
            }
        }
    }
}
YinYang::solve(15,0);
?>