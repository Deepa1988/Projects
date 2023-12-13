<html>
<body>
<?php
$name=$email=$usn=$sem=$mobileno=$gender="";
$nameErr=$usnErr=$semErr=$emailErr=$genderErr=$mobilenoErr="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = $_POST["name"];  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }
	
//Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = $_POST["email"];  
            // check that the e-mail address is well-formed  
            if (!preg_match("/[a-z][a-z0-9_]+@[a-z]+\.[a-z]+/",$email)) {  
                $emailErr = "Invalid email format";  
            }  
     } 
	 
	 //USN Validation   
    if (empty($_POST["usn"])) {  
            $usnErr = "USN is required";  
    } else {  
            $usn = $_POST["usn"];  
            // check that the e-mail address is well-formed  
            if (!preg_match("/^[1-4][a-zA-Z]{2}[0-9]{2}[a-zA-Z]{2}[0-9]{3}$/",$usn)) {  
                $usnError = "Invalid email format";  
            }  
     } 
	 
	 //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = $_POST["mobileno"];  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    } 

//Sem Validation   
    if (empty($_POST["sem"])) {  
            $semErr = "SEM is required";  
    } else {  
            $sem = $_POST["sem"];  
            // check that the e-mail address is well-formed  
            if (!preg_match("/^[1-8]$/",$sem)) {  
                $semErr = "Invalid email format";  
            }  
     }
 //Empty Field Validation  
    if (empty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = $_POST["gender"];  
    }  	 
}


?>
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    USN:   
    <input type="text" name="usn">  
    <span class="error">* <?php echo $usnErr; ?> </span>  
    <br><br> 
	Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>
	Semester:   
    <input type="text" name="sem">  
    <span class="error">* <?php echo $semErr; ?> </span>  
    <br><br>
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    Mobile No:   
    <input type="text" name="mobileno">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span>  
    <br><br>  
   
    Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>  
                               
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $semErr == "" && $usnErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>"; 
		echo "USN: " .$usn;  
        echo "<br>";		
        echo "Name: " .$name;  
        echo "<br>"; 
		echo "Semester: " .$sem;  
        echo "<br>";		
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Mobile No: " .$mobileno;  
        echo "<br>";  
          
        echo "Gender: " .$gender;  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
	$conn=mysqli_connect("localhost","root","","student_db");
if(!$conn)
echo "Database error".mysqli_error($conn);
else{
	$sql="INSERT INTO student_new VALUES('$usn','$name',$sem,'$email',$mobileno,'$gender')";
		if(mysqli_query($conn,$sql))
			echo "\n\nData inserted into databse successfully";
		else
			echo "\nInsertion Error".mysqli_error($conn);
}	
mysqli_close($conn);
    } 


?>  
  
</body>  
</html>  