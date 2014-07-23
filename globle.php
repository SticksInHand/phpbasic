<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>
<?php

//$GLOBALS  引用全局作用域中可用的全部变量
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION



//$x = 75;
//$y = 25;
//
//function addition(){
//    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
//}
//
//addition();
//echo $z;
//
//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];




?>


<!--<form method="post" action="--><?php //echo $_SERVER['PHP_SELF'];  ?><!--" >-->
<!--    Name:<input type="text" name="fname"  />-->
<!--    <input type="submit"  />-->
<!--</form>-->

<?php
//$name = $_REQUEST['fname'];
//echo $name;
?>
<a href="test_get.php?subject=PHP&web=W3school.com.cn">测试 $GET</a>

</body>
</html>






















