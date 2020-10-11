<?php
/////////////////1//////////////////
function sqr($num){
    return $num * $num;
}

$num = sqr(2);
echo '2*2 = '.$num."<br>";
/////////////////2//////////////////
function sum($first,$second){
    return $first + $second;
}
echo '4 + 5 = '.sum(4,5)."<br>";
/////////////////3//////////////////
function func1($first,$second,$third){
    $tmp = ($first - $second)/$third;
    return round($tmp,2);
}
echo '10 - 15 / 12 = '.func1(10,15,12)."<br>";
/////////////////4//////////////////
function getDayOfWeek($day){
    $day = $day % 7;
    $week = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
    return $week[$day - 1];
}
echo getDayOfWeek(8)." - 1 день недели<br>";
/////////////////5//////////////////
function isPositive($num){
    return $num > 0;
}
$ar = [1,5,4,-5,1,-2,2,-23,10,15,751];
$nar = [];
foreach ($ar as $item){
    if(isPositive($item)){
        array_push($nar,$item);
    }
}
echo '<br>';
foreach($nar as $item) {
    echo $item.' ';
}
/////////////////6-7//////////////////
function isNumderInRange($num){
    return $num > 0 && $num < 10;
}
$ar = [1,5,4,-5,1,-2,2,-23,10,15,751];
$nar = [];
foreach ($ar as $item){
    if(isNumderInRange($item)){
        array_push($nar,$item);
    }
}
echo '<br>';
foreach($nar as $item) {
    echo $item.' ';
}
/////////////////8//////////////////
function getDigitsSum($num){
    return array_sum(str_split($num));
}
/////////////////9//////////////////
echo "<br>";
for($i = 1;$i < 2020;$i++){
    if(getDigitsSum($i) == 13){
        echo $i.' ';
    }
}
/////////////////10-11/////////////////
echo "<br>";
function isEven($num){
    return $num % 2 == 0;
}
$ar = [1,5,4,-5,1,-2,2,-23,10,15,751];
$nar = [];
foreach ($ar as $item){
    if(isEven($item)){
        array_push($nar,$item);
    }
}
echo '<br>';
foreach($nar as $item) {
    echo $item.' ';
}
/////////////////12/////////////////
echo "<br>";
function getDivisors($num){
    $ar = [];
    for($i = 1;$i <= abs($num);$i++){
        if($num % $i == 0) {
            array_push($ar, $i);
        }
    }
    return $ar;
}
/////////////////13/////////////////
echo "<br>";
function getCommonDivisors($first,$second){
    $firdicis = getDivisors($first);
    $secdicis = getDivisors($second);
    arsort($firdicis);
    arsort($firdicis);
    foreach($firdicis as $item1){
        foreach ($secdicis as $item2) {
            if($item1 == $item2)
                return $item1;
        }
    }
}
echo getCommonDivisors(12,64);
