<!DOCTYPE html>
<html>
<head>
	<title>Delete Book</title>
</head>
<body>
	<center>
	<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$conn = mysqli_connect("localhost", "root", "", "book");
		
		// Check connection
		if(!$conn){
			echo " Database Error".mysqli_connect_error();
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
				
		
		$sql = "SELECT * FROM book WHERE bookid='$id'";
      $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $id=$row["Bookid"];
	$name=$row["Name"];
	$author=$row["Author"];
	$publisher=$row["Publisher"];
	$price=$row["Price"];
	
  }
} else {
  echo "No book found";
}
	}
?>
	
<form method="post">
BookID:<input type="text" value="<?php echo $id;?>" name="bid"><br>
Book Name:<input type="text" value="<?php echo $name;?>" name="bname"><br>
Book Author:<input type="text" value="<?php echo $author;?>" name="bauth"><br>
Book Publisher:<input type="text" value="<?php echo $publisher;?>" name="bpub"><br>
Book price:<input type="text" value="<?php echo $price;?>" name="bprice"><br>
<input type="submit" value="update" name="update">
<?php
if(isset($_POST["update"]))
{
	$conn = mysqli_connect("localhost", "root", "", "book");
		
		// Check connection
		if(!$conn){
			echo " Database Error".mysqli_connect_error();
		}
		$id=$_POST["bid"];
	$name=$_POST["bname"];
	$author=$_POST["bauth"];
	$publisher=$_POST["bpub"];
	$price=$_POST["bprice"];
	
}

	</center>
</body>

</html>