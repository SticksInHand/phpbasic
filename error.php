<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>error</title>
</head>
<body>

<?php

//if(!file_exists("welcome.txt")){
//    die("File not found");
//}else{
//    $file = fopen("welcome.txt","r");
//}

//创建一个错误处理函数
function customError($errno,$errstr){
    echo "<b>Error:</b> [$errno] $errstr<br />";
    echo "Ending Script";
    die();
}

set_error_handler("customError");

//$file = fopen("welcome.txt","r");

$test = 2;
if($test > 1){
    trigger_error("Value must be 1 or below");
}

?>

</body>
</html>






















