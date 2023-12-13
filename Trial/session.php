<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "Red";
$_SESSION["favfruit"] = "Apple";
echo "Session variables are set.";
$fname=$_SESSION["favfruit"];
$color=$_SESSION["favcolor"];
echo $fname." are ".$color;

?>

</body>
</html>