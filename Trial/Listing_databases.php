<?php
// Usage without mysql_list_dbs()
$conn = mysqli_connect("localhost","root","");
$res = $conn->query("SHOW DATABASES");

while ($row = mysqli_fetch_assoc($res)) {
    echo "\n".$row['Database'] . "<br>";
}

/*Deprecated as of PHP 5.4.0
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$db_list = mysql_list_dbs($link);

while ($row = mysql_fetch_object($db_list)) {
     echo $row->Database . "\n";
}*/
?>