<!DOCTYPE html >
<head >
<meta charset=utf-8 />
<title>Sort Student List </title>
<style type="text/css">
body {
	background-color: #FFFFCC; 
	color:#806E21; 
	margin: 30px;
	}
	
table, th, td {
	border-collapse:collapse; 
	padding:5px; 
	border:thin solid black
	};
</style>
</head>
<body>
<h2>Sort Student List </h2>
<?php
/* Sort USN wise assuming batch and branch are the same */
$results_con = mysqli_connect("localhost","root","","student_db");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query="SELECT * from student";
if($result = $results_con->query($query)) {
echo "<h4>Student List before Sorting</h4>";
echo "<table><tr><th></th><th>USN</th><th><Name</th><th>Branch</th><th>Batch</th></tr>";
while($row= $result->fetch_assoc()) {
echo "<tr><td>".$row["ID"]."</td>";
echo "<td>".$row["USN"]."</td>";
echo "<td>".$row["NAME"]."</td>";
echo "<td>".$row["BRANCH"]."</td>";
echo "<td>".$row["BATCH"]."</td></tr>";
}
echo "</table>";
}
$result = $results_con->query($query);
$rowcount =mysqli_num_rows($result);
$i=0; $j=0;
while($row = $result->fetch_array()) {
$minID = $row[0]; $minUSN = $row[1];
//echo "Initial: ".$minID." ".$minUSN." ". $row[1]. "<br />";
while($urow = $result->fetch_array()) {
if (strnatcmp($urow[1],$minUSN)<0){
$minID = $urow[0]; $minUSN = $urow[1];
}
}
//echo $minID." ".$minUSN." ". $row[1]. "<br />";
$query_min = "Select * from student where ID=$minID";
$result_min = $results_con->query($query_min);
$min_rec = $result_min->fetch_array();
$query_swap = "update student set USN='$row[1]', Name='$row[2]' where ID = $minID"; //echo $query_swap."<br/>";
$result_swap = $results_con->query($query_swap);
$query_swap2 = "update student set USN='$min_rec[1]', Name='$min_rec[2]' where ID = $row[0] "; //echo $query_swap2."<br/><br />";
$result_swap = $results_con->query($query_swap2);
$i++;
if($i==$rowcount-1) break;
$result = $results_con->query($query);
mysqli_data_seek($result,$i);
}
if($result = $results_con->query($query)) {
echo "<h4>Student List After Sorting</h4>";
echo "<table><tr><th></th><th>USN</th><th><Name</th><th>Branch</th><th>Batch</th></tr>";
while($row= $result->fetch_assoc()) {
echo "<tr><td>".$row["ID"]."</td>";
echo "<td>".$row["USN"]."</td>";
echo "<td>".$row["NAME"]."</td>";
echo "<td>".$row["BRANCH"]."</td>";
echo "<td>".$row["BATCH"]."</td></tr>";
}
echo "</table>";
}
?>
</body>
</html>
