<!DOCTYPE html>
<html>
<body>
<form method="post">

Enter your name:<input type="text" name="name">
<input type="submit" value="submit" name="info">
</form>

<?php
if(isset($_POST["info"]))
{
$n=$_POST["name"];
echo" Welcome".$n;
}

//echo "My first PHP script!";
?> 

</body>
</html>
