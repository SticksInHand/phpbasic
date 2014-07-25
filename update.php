<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-25
 * Time: 上午10:07
 */

$con = mysql_connect("127.0.0.2","root","");
if(!$con)
{
    die('Could not connect: '.mysql_error());
}

mysql_select_db("my_db",$con);

mysql_query("UPDATE Persons SET Age = '36' WHERE FirstName = 'Peter' AND LastName = 'Griffin'");

mysql_close($con);

?>