<html>
<body>
<?php
$result = '';
?>
<?php
if(isset($_REQUEST['operator']))
{
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];

$result = $first_num + $second_num;
}
?>
<div id="page-wrap">
	<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <input type="text" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            <input type="submit" name="operator" value="Add" />
            
	  </form>
    </div>


<body>
    
</body>
</html>