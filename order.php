<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>
<?php

//sort()   按照数字升序排列
//rsort()  按照字母降序排列
//asort()   根据值对关联数组升序排列
//ksort()   根据键对关联数组升序排列
//arsort()  根据值对关联数组降序排列
//krsort()  根据键对关联数组降序排列

$cars = array("Volvo","BMW","SAAB");
sort($cars);
foreach($cars as $y){
    echo "$y <br>";
}

$numbers = array(3,5,1,22,11);
sort($numbers);

foreach($numbers as $x){
    echo "$x <br>";
}

$age = array("Steve"=>"37","Bill"=>"50","Peter"=>"43");
asort($age);
foreach($age as $z=>$z_age){
    echo "$z => $z_age <br>";
}
?>
</body>
</html>