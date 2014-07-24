<html>
<head>
    <meta charset="utf-8" />
    <title>cookie</title>
</head>
<body>

<?php
$int = 123.5;

if(!filter_var($int,FILTER_VALIDATE_INT)){
    echo("Integer is not valid");
}
else{
    echo "Integer is valid";
}
?>

</body>
</html>






















