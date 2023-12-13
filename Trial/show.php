<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from book";
$result = mysqli_query($conn, $sql);
echo"<center><h1><u>Book Information</u></h1></center>";
echo "<center><table border='3'><tr><td>BookID</td><td>Book Name</td><td>Author</td><td>Publisher</td><td>Price</td></tr>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["Bookid"]. "</td><td>" . $row["Name"]. "</td><td> " . $row["Author"]."</td><td> " . $row["Publisher"]." </td><td>". $row["Price"]."</td></tr>";
  }
  echo"</table></center>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
		<a href="bookstore.html">Back</a>