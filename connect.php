<?php
$connection=mysqli_connect("localhost", "root", "", "jengaa");
if(!$connection){
die("Database Connection Failed".mysql_error($connection));

}
  $firstname=$_POST['firstname'];
  
  $lastname=$_POST['lastname'];
   $Email_id=$_POST['Email_id'];
   $phonenumber=$_POST['phonenumber'];
      $address=$_POST['address'];
   $station=$_POST['station'];
$query="INSERT INTO customer_info (firstname,lastname,Email_id,phonenumber,address,station) values('$firstname', '$lastname','$Email_id', '$phonenumber', '$address', '$station')";
 $result = mysqli_query($connection, $query);
 
 

if ($result) 
   
   echo "<script>alert('Your Address Information Submitted ,Successfully')</script>";
   echo "<script>window.open('checkout.php','_self')</script>";


?>