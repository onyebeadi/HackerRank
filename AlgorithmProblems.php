<?php
function miniMaxSum($arr) {
    for($i = 0; $i<= count($arr);$i++ ){
        if($arr[$i]>=1 && $arr <= pow(10,9)){

        }else{
            return;
        }
    }
    $first[0] = $arr[0]+$arr[1]+$arr[2]+$arr[4];
    $first[1] = $arr[0]+$arr[1]+$arr[2]+$arr[4];
    $first[2]= $arr[0]+$arr[1]+$arr[2]+$arr[4];
    $first[3]= $arr[0]+$arr[2]+$arr[3]+$arr[4];
    $first[4]= $arr[1]+$arr[2]+$arr[3]+$arr[0];

    $maxNumber = max($first);
    $minNumber = min($first);
    echo"".$minNumber."  ".$maxNumber."";


}

function timeConversion($s) {
    /*
     * Write your code here.
     */
    preg_match("/([0-9]+):([0-9]+):([0-9]+)([A-Z]+)/",$s,$matches);
    $hh = intval($matches[1]);
    $mm = intval($matches[2]);
    $ss = intval($matches[3]);
    $pmOrAm = $matches[4];

    if($hh == 12 && $pmOrAm == "PM" && $mm == 0 && $ss == 0) {
        $hhh = "00";
        $mmm = "00";
        $sss = "00";
    }else if($hh == 12 && $mm > 0){
        $hhh = "00";
        $mmm = $matches[2];
        $sss = $matches[3];
    }else if($hh >= 0 && $hh < 12 && $mm > 0 && $pmOrAm == "AM"  ){
        $hhh = $matches[1];
        $mmm = $matches[2];
        $sss = $matches[3];
    }else if($hh == 12 || $hh < 12 && $pmOrAm == "PM"){
        if($hh == 12){
            $hhh = $matches[1];
            $mmm = $matches[2];
            $sss = $matches[3];
        }else if($hh >= 1){
            $hhh = "".(12+$hh)."";
            $mmm = $matches[2];
            $sss = $matches[3];

        }else{
            return;
        }
    }else{
        return;
    }

    return "".$hhh.":".$mmm.":".$sss."";

}

function gradingStudents($grades) {
    // Write your code here
    $c = count($grades);
    $r = [];
    if($c >= 1 && $c <= 60){
        for($i = 0; $i < $c;$i++){
            if($grades[$i] >= 0 && $grades[$i] <=100){
                if($grades[$i]<38){
                    $r[$i] = $grades[$i];
                }else{
                    $b = floor($grades[$i]/5);
                    $e = ($b * 5)+5 ;
                    $d = $e - $grades[$i];
                    if($d < 3){
                        $r[$i] = $e;
                    }else{
                        $r[$i] = $grades[$i];
                    }
                }
            }
        }
    }
    return $r;
}


function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    $range = pow(10, 5);
    $app = count($apples);
    $org = count($oranges);
    $ap = 0;
    $or = 0;

    if ($s >= 1 && $s <= $range
        && $t >= 1 && $t <= $range
        && $a >= 1 && $a <= $range
        && $b >= 1 && $b <= $range
        && $app >= 1 && $app <= $range
        && $org >= 1 && $org <= $range) {

        if ($a < $s && $s < $t && $t < $b) {
            for ($i = 0; $i < $app; $i++) {
                if ($apples[$i] >= -$range && $apples[$i] <= $range) {
                    $j = $a + $apples[$i];
                    if ($j >= $s && $j <= $t) {
                        $ap++;
                    }
                }
            }
            for ($k = 0; $k < $org; $k++) {
                if ($oranges[$k] >= -$range && $oranges[$k] <= $range) {
                    $j = $b + $oranges[$k];
                    if ($j >= $s && $j <= $t) {
                        $or++;
                    }
                }
            }

        }
    }
    echo "" . $ap . "\n";
    echo "" . $or . "\n";
}