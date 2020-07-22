<?php include('header.php'); ?>


<br>
<br>
<br>
<br><br><br><br><br><br>



<?php

$con = mysqli_connect("localhost","root","","jengaa");

?>
<?php
if(isset($_POST['submit'])){
$user_email=$_POST['user_email'];
$user_password=MD5($_POST['user_password']);
$position=$_POST['position'];
switch($position){
case 'Admin':
  $result=mysqli_query($con,"SELECT admin_id, user_email FROM admin WHERE user_email='$user_email' AND user_password='$user_password'");
  $row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['user_email']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin/index.php");
}else{
  echo"<script>alert('Wrong Password or Username!')</script>";
}
break;


case 'Customer':

$result=mysqli_query($con,"SELECT user_id, user_email FROM users WHERE user_email='$user_email' AND user_password='$user_password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['user_id']=$row[0];
$_SESSION['user_email']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/checkout.php");
}else{
  echo"<script>alert('Wrong password or Username!')</script>";
}
break;



}}
echo <<<LOGIN


<section class="login-form py-5">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6">
                                          <h2>Log into you're account</h2>
<form method="post" action="admin_login.php">
     <p><input type="text" class="form-control" name="user_email" id="email" value="" placeholder="Email_Id" required></p>
     <span id="email_error" class="error"></span>


     <div class="form-group">
     <p><input type="password" class="form-control" id="password" name="user_password" value="" placeholder="Password"minlength="8" "
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     
     </p>
     <input type="checkbox" onclick="myFunction()">Show Password
     <span id="passsword_error" class="error"></span>
 </div>
		<p><select name="position">
		<option>--Select position--</option>
			<option>Admin</option>
			<option>Customer</option>
			
			</select></p>
			<p class="submit"><input type="submit" name="submit" value="Login">
        <p class="submit"><input  class="btn btn-success w-100"" name="submit" value="Login">		
</p>


      </form>
      </div>
							<div class="col-md-6">
							<div class="text-center">
								<h4>Don't have an account?</h4>
								<a href="signup.php" class="btn btn-primary">Sign Up</a>
								
							</div>
							</div>
						</div>
					</div>
				</section>

</center>
<?php include('footer.php'); ?>

LOGIN;
?>

	