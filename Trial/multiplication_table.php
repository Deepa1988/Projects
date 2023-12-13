<html>
<body>
<table border="1">
<?php
$n=7;
print"<tr><td colspan='5'>Multiplication table</td></tr>";
for($i=1;$i<=10;$i++)
{
	print "<tr><td>".$n."</td><td>*</td><td>".$i."</td><td>=</td><td>".($n*$i)."</td><tr>";
}
print"</table>";
?>
</body>
</html>
	