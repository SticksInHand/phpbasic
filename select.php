<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-24
 * Time: 下午5:33
 */

$con = mysql_connect("127.0.0.2","root","");
if(!$con)
{
    die('Could not connect: '.mysql_error());
}

mysql_select_db("my_db",$con);

$result = mysql_query("SELECT * FROM Persons");

echo "<table border='1'
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>";

while($row = mysql_fetch_array($result))
{
    echo "<tr>";
    echo "<td>".$row['FirstName']."</td>";
    echo "<td>".$row['LastName']."</td>";
    echo "</tr>";
//    echo $row['FirstName']." ".$row['LastName']." ".$row['Age'];
//    echo "<br />";
}

mysql_close($con);

?>