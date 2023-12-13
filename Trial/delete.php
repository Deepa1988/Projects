<!DOCTYPE html>
<html>
<head>
	<title>Delete Book</title>
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
				
		
		$sql = "DELETE FROM book WHERE bookid='$id'";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Book deleted from the database successfully.";

			} else{
			echo "ERROR". mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<a href="bookstore.html">Back</a>
	</center>
</body>

</html>