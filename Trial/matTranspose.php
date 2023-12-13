<!DOCTYPE html >
<head >
<meta charset=utf-8 />
<title>PHP Simple Calculator, Matrix operations </title>
<style type="text/css">

body 
{
background-color: #FFF8DA; 
color:#806E21; 
margin: 30px;
}

#matrix 
{
margin: 20px; 
padding: 20px; 
float: center; 
border: thin solid black; 
}
</style>
</head>

<body>
<a href="phpcalcMatrix.php">Back to Main Menu</a>
<h2>Transpose of a Matrix</h2>
<div id="matrix">
  <form method="get" action = "matTranspose.php" >
	Enter m and n values for m x n matrix : 
<input type = "text" name ="m" size="5" placeholder="m" />  <input type = "text" name ="n" size="5" placeholder="n" />
	<input type = "submit" name="genMatrix" value="Enter" />
</form>

<?php 
if(isset($_GET["genMatrix"]))
{
$m = $_GET['m']; $n = $_GET['n'];
 	echo "<form method= 'get' action = 'matTranspose.php'><table>";
  	for($i=0; $i<$m; $i++)
{
     	echo "<tr>";
     for($j=0; $j<$n; $j++) 
{
	      $val =$i.":".$j;//0:0 0:1 1:0 1:1
	     echo "<td><input type='text' size='4' name=$val /></td>";
		}
	echo"</tr>";
	}
	echo "</table>";
echo "<input type='hidden' name= 'm' value=$m /><input type='hidden' name='n' value=$n />";
	echo "<input type='submit' name='transpose' value='Find Transpose' />";
	echo "</form>";
}
	

if(isset($_GET["transpose"]))
{
	
	$m = $_GET['m']; $n = $_GET['n'];
	echo "Matrix Entered <br />";
	for($i=0; $i<$m; $i++)
{
	  for($j=0; $j<$n; $j++) 
{
	     $val =$i.":".$j;
	     $mat[$i][$j] = $_GET["$val"]; $transpose[$j][$i] = $mat[$i][$j];
		 echo $mat[$i][$j]."  ";
		}
		 echo "<br />";
	}
	echo "<p>Transpose of the Matrix : <br />";
	
for($i=0;$i<$n;$i++) 
{
	  for($j=0;$j<$m;$j++) 
{
		echo $transpose[$i][$j]."  ";
		}
		 echo "<br />";
	}
	echo "</p>";
}
?>	

</div>

</body>
</html>
