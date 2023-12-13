<!DOCTYPE html >
<head >
<meta charset=utf-8 />
<title>Matrix Operations</title>
<style type="text/css">

body 
{
background-color: #FFF8DA; 
color:#806E21; 
margin: 30px;
}

table,tr,th,td 
{
border-collapse:collapse; 
border: thin solid black; 
padding:20px 
}

.warning 
{
color:red; 
font-style: italic 
}
</style>
</head>

<body>

<?php $op = $_GET["op"]; ?>
<a href="phpcalcMatrix.php">Back to Main Menu</a>
<h2>Matrix Operations :<?php if($op == "add") echo " Addition"; else if($op == "mult") echo " Multiplication"; ?></h2>

<div>
  <form method="get" action = "matAM.php" >
  	<p>
	Enter m and n values for m x n matrix for matrix 1 : 
<input type = "text" name ="m1" size="5" placeholder="m" />  <input type = "text" name ="n1" size="5" placeholder="n" />
	</p>
	<p>
	Enter m and n values for m x n matrix for matrix 2 : 
<input type = "text" name ="m2" size="5" placeholder="m" />  <input type = "text" name ="n2" size="5" placeholder="n" />
	</p>
	<p>
	<input type='hidden' name='op' value='<?php echo $op?>' />
	<input type = "submit" name="genMatrix" value="Enter" />
	</p>
</form>
<?php 


if(isset($_GET["genMatrix"]))
{
 $m1 = $_GET['m1']; $n1 = $_GET['n1'];
 $m2 = $_GET['m2']; $n2 = $_GET['n2'];
 
 if($n1 != $m2 && $op == "mult")
{
     echo "<p class='warning'> The Matrices cannot be multiplied! </p>";
} 
else if (($m1!=$m2 || $n1 != $n2) && $op == "add") 
{
	 echo "<p class='warning'> The Matrices cannot be added! </p>";
 	} 
else 
{
 	echo "<form method= 'get' action = 'matAM.php'>";

echo "<div>";
echo "<h4> Matrix 1 </h4>";
   	
for($i=0; $i<$m1; $i++)
{
     		for($j=0; $j<$n1; $j++) 
{
	    		 $val ="M1".":".$i.":".$j;
	     		echo "<input type='text' size='4' name=$val />";
		}	
		echo "<br />";
	}
	echo "</div> <div >";
	echo "<h4>Matrix 2</h4>";

   for($i=0; $i<$m2; $i++)
{
     	for($j=0; $j<$n2; $j++) 
{
	    		$val ="M2".":".$i.":".$j;
	    		echo "<input type='text' size='4' name=$val />";
		}
		echo "<br />";
	}
	echo "</div>";
	
echo "<input type='hidden' name= 'm1' value=$m1 /><input type='hidden' name='n1' value=$n1 />";
echo "<input type='hidden' name= 'm2' value=$m2 /><input type='hidden' name='n2' value=$n2 />";
echo "<input type='hidden' name = 'op' value='$op' />";
echo "<input type='submit' name='submit' value='Enter' />";
echo "</form>";
} // end else
}
	
	if(isset($_GET["submit"]))
{
	
	$m1 = $_GET['m1']; $n1 = $_GET['n1'];
	$m2 = $_GET['m2']; $n2 = $_GET['n2'];
	
echo "<table><tr><th> Matrix 1</th><th>Matrix 2</th><th>Result</th><tr><td>";
	
for($i=0; $i<$m1; $i++)
{
	  for($j=0; $j<$n1; $j++) 
{
	     		$val ="M1:".$i.":".$j;
	     		$mat1[$i][$j] = $_GET["$val"];
		 	echo $mat1[$i][$j]."  ";
		 }
		 echo "<br />";
	 }
	echo "</td><td>";
	 for($i=0; $i<$m2; $i++)
{
	  	for($j=0; $j<$n2; $j++) 
{
	     			$val ="M2:".$i.":".$j;
	     			$mat2[$i][$j] = $_GET["$val"];
		 		echo $mat2[$i][$j]."  ";
		 	}
		 echo "<br />";
	 }
		 
	echo "</td><td>";
	if($op =="mult") 
{
		for($i=0;$i<$m1;$i++) 
{
	  		for($j=0;$j<$n2;$j++) 
			{
		   		$mul[$i][$j]=0;
	    			for($k=0;$k<$m2;$k++) 
{
		    			$mul[$i][$j]+=$mat1[$i][$k] *$mat2[$k][$j];
				}
		 	echo $mul[$i][$j]."  ";
	 		}
		echo "<br />";
		}
	}
	
else if($op == "add") 
{
		for($i=0;$i<$m1;$i++) 
{
	  		for($j=0;$j<$n2;$j++) 
{
	     			$res[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
		 		echo $res[$i][$j]."  ";
	     		}
	   		echo "<br />";
		}
	 }
	
echo "</td></tr></table>";
}	
?>	

</div>

</body>
</html>
