<!DOCTYPE html>
<html>
<body>

<?php
$age=array("Peter"=>"45","Ben"=>"37","Joe"=>"43");
asort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>

</body>
</html>
