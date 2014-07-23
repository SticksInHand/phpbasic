<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Name:<input type="text" name="name"  /><span class="error">*<?php echo $nameErr; ?></span><br>
    E-mail:<input type="text" name="email"  /><span class="error">*<?php echo $emailErr; ?></span><br>
    Website:<input type="text" name="website" /><span class="error">*<?php echo $websiteErr; ?></span><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female"  />Female<br>
    <input type="radio" name="gender" value="male" />Male<br>
    <span class="error">*<?php echo $genderErr; ?></span>
    <input type="submit"/>
</form>
<?php

//定义变量并设置为空值
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }

    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["website"])){
        $website = "";
    }else{
        $website = test_input($_POST["website"]);
    }

    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }


//    $name = test_input($_POST["name"]);
//    $email = test_input($_POST["email"]);
//    $website = test_input($_POST["website"]);
//    $comment = test_input($_POST["comment"]);
//    $gender = test_input($_POST["gender"]);

//    echo "$name<br>";
//    echo "$email<br>";
//    echo "$website<br>";
//    echo "$comment<br>";
//    echo "$gender<br>";

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

</body>
</html>






















