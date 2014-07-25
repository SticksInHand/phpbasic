<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-25
 * Time: 上午9:53
 */

$con = mysql_connect("127.0.0.2","root","");
if(!$con)
{
    die("Could not connect: ".mysql_error());
}

mysql_select_db('my_db');

$result = mysql_query("SELECT * FROM Persons ORDER BY age DESC");

while($row = mysql_fetch_array($result))
{
    echo $row['FirstName'];
    echo " ".$row['LastName'];
    echo " ".$row['Age'];
    echo "<br  />";
}

mysql_close($con);

?>