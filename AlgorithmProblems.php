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
