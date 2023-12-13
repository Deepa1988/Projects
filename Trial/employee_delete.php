<html>
<body>
<?php
$eid=$_GET["eid"];



$conn = mysqli_connect("localhost","root","","employee");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "DELETE FROM employee WHERE empid = '$eid'";
if ($conn->query($sql) === TRUE) {
  echo " record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</body>
</html>