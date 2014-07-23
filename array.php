<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>
<?php

//$cars = array("Volvo","BMW","SAAB");
//echo "I like ".$cars[0].",".$cars[1]." and ".$cars[2].".";
//
//echo count($cars);

//$cars = array("Volvo","BMW","SAAB");
//$arrlength = count($cars);
//
//for($x=0;$x<$arrlength;$x++){
//    echo $cars[$x];
//    echo "<br>";
//}

//$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
////$age['Peter'] = "35";
////$age['Ben'] = "37";
////$age['Joe'] = "43";
//echo "Peter is ".$age['Peter']." years old.";

$age = array ("Bill"=>"35","Steve"=>"37","Peter"=>"43");

foreach($age as $x=>$x_value){
    echo "Key=".$x.", Value=".$x_value;
    echo "<br>";
}

?>
</body>
</html>