<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-24
 * Time: 下午5:51
 */

$con = mysql_connect("127.0.0.2","root","");
if(!$con)
{
    die('Could not connect: '.mysql_error());
}

mysql_select_db('my_db',$con);

$result = mysql_query("SELECT * FROM Persons WHERE FirstName = 'Peter'");

while($row = mysql_fetch_array($result))
{
    echo $row['FirstName']." ".$row['LastName'];
    echo "<br  />";
}

?>