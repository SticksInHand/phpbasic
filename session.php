<!DOCTYPE html>
<?php

//启动session会话
session_start();//必须位于<html>标签之前

if(isset($_SESSION['views']))   //isset()函数检测是否存在session 里的views
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['view'] = 1;
echo "Views=".$_SESSION['views'];

?>
<html>
<head>
    <meta charset="utf-8" />
    <title>session</title>
</head>
<body>

<?php
echo "Pageviews=".$_SESSION['views'];

unset($_SESSION['views']);//释放session

session_destroy()//彻底释放session
?>

</body>
</html>






















