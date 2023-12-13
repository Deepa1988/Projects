<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		
		$conn = mysqli_connect("localhost", "root", "", "book");
		
		// Check connection
		if(!$conn){
			echo " Database Error".mysqli_connect_error();
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$author = $_REQUEST['author'];
		$publisher = $_REQUEST['publisher'];
		$price = $_REQUEST['price'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO book VALUES ('$id','$name','$author','$publisher',$price)";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";

			} else{
			echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<br>
		<a href="bookstore.html">Back</a>
	</center>
</body>

</html>
