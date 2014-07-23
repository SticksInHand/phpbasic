<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>
<?php

//function writeMsg(){
//    echo "Hello world!";
//}
//
//writeMsg();

//function familyName($fname){
//    echo "$fname Zhang. <br>";
//}
//
//familyName("Li");
//familyName("Hong");
//familyName("Tao");

//function familyName($fname,$year){
//    echo "$fname Zhang. Born in $year <br>";
//}
//
//familyName("Li","1975");
//familyName("Hong","1978");
//familyName("Tao","1983");

//function setHeight($minheight = 50){
//    echo "The height is : $minheight <br>";
//}
//setHeight(350);
//setHeight();
//setHeight(135);
//setHeight(80);

function sum($x,$y){
    $z = $x + $y;
    return $z;
}
echo "5+10=".sum(5,10)."<br>";



?>
</body>
</html>