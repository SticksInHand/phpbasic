<?php
setcookie("user","liangzai",time()+3600);
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>cookie</title>
</head>
<body>

<?php

echo $_COOKIE["user"];

//print_r($_COOKIE);

if(isset($_COOKIE["user"]))
    echo "Welcome ".$_COOKIE["user"]."!<br />";
else
    echo "Welcome guest! <br  />";

setcookie("user","",time()-3600);//删除cookie   （使cookie过期）

?>

<form action="welcome.php" method="post">
    Name:<input type="text" name="name"/>
    Age:<input type="text" name="age" />
    <input type="submit"  />
</form>

</body>
</html>






















