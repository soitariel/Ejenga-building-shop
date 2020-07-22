<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>



<?php
//connect to the database
$con=mysqli_connect("localhost","root", "");
if(!$con)
{
	echo ("Connection to the database Engine Failed");

}

else{

	echo("Established connection successfully");
}
//select database for use
mysqli_select_db($con,"jengaa") or die("could not select the database");

//receive form data and store in variable

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

 //executing a query to insert data into a table

mysqli_query($con,"insert into contact (firstname,lastname,email,message) values('$firstname','$lastname','$email','$message')");
echo "<a  href=contact.php>Add another record</a>";



//close connection
mysqli_close($con);

?>
</body>
</html>