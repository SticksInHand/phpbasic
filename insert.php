<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-24
 * Time: 下午5:08
 */
$con = mysql_connect("127.0.0.2","root","");
if(!$con){
    echo "Could not connect: ".mysql_error();
}

mysql_select_db("my_db",$con);

//mysql_query("INSERT INTO Persons (FirstName,LastName,Age) VALUES ('Peter','Griffin','35')");
//
//mysql_query("INSERT INTO Persons (FirstName,LastName,Age) VALUES ('Glenn','Quagmire','33')");
//
//mysql_close($con);

$fistname = $_POST[firstname];
$lastname = $_POST[lastname];
$age = $_POST[age];

$sql = "INSERT INTO Persons (FirstName,LastName,Age) VALUES ('$fistname','$lastname','$age')";

if(!mysql_query($sql,$con)){
    die("Error: ".mysql_error());
}
else{

}
echo "1 record added";

mysql_close();

?>