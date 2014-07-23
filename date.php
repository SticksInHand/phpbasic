<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>

<?php

////mktime() 返回unix时间戳
////strtotime() 把人类时间转化为unix时间戳
//
//date_default_timezone_set("Asia/Shanghai");
//
//echo "今天是 ".date("Y/m/d")."<br>";
//echo "今天是 ".date("Y.m.d")."<br>";
//echo "今天是 ".date("Y-m-d")."<br>";
//echo "今天是 ".date("l");
//
//echo "现在时间是 ".date("h:i:sa");
//
//$d = mktime(9,12,31,6,10,2015);
//echo "创建日期是 ".date("Y-m-d h:i:sa",$d);
//
//$d = strtotime("10:38pm April 15 2015");
//echo "创建日期是 ".date("Y-m-d h:i:sa",$d);
//
//$d = strtotime("tomorrow");
//echo date("Y-m-d h:i:sa",$d)."<br>";
//
//$d = strtotime("next Saturday");
//echo date("Y-m-d h:i:sa",$d)."<br>";
//
//$d = strtotime("+3 Months");
//echo date("Y-m-d h:i:sa",$d)."<br>";

//输出下周六的日期：
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);

while($startdate < $enddate){
    echo date("M d",$startdate),"<br>";
    $startdate = strtotime("+1 week",$startdate);
}
//输出七月四日之前的天数
$d1 = strtotime("December 31");
$d2 = ceil(($d1-time())/60/60/24);
echo "距离十二月三十一日还有：".$d2."天。";

?>

</body>
</html>






















