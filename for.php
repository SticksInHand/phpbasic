<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>
<?php

//for ($x = 0;$x <= 10;$x++){
//    echo "数字是：$x <br>";
//}

$colors = array("red","green","blue","yellow");

foreach($colors as $value){
    echo "$value <br>";
}

?>
</body>
</html>