<?php
$con = mysql_connect("127.0.0.2","root","");
if(!$con){
    die('Could not connect: '.mysql_error());
}

//使用mysql_query()函数可以向mysql链接发送查询或命令
//创建数据库my_db
if(mysql_query("CREATE DATABASE my_db",$con)){
    echo "Datebase created";
}
else
{
    echo "Error creating datebase: ".mysql_error();
}
//创建数据表
mysql_select_db("my_db",$con);
$sql = "CREATE TABLE Persons(
personID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";

mysql_query($sql,$con);

mysql_close($con);

?>