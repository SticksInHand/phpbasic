<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-25
 * Time: 上午10:13
 */
$con = mysql_connect("127.0.0.2","root","");
if(!$con)
{
    die('Could not connect: '.mysql_error());
}

mysql_select_db("my_db",$con
);

mysql_query("DELETE FROM Persons WHERE LastName = 'Griffin'");

mysql_close($con);


?>