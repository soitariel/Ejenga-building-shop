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
mysqli_select_db($con,"isproject") or die("could not select the database");


if(isset($_POST['but_upload'])){
  $username=$_POST['username'];
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
mysqli_query($con,"ALTER TABLE buyerimages
ADD FOREIGN KEY (username) REFERENCES buyers(username)");
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "INSERT INTO `buyerimages`(`username`, `name`) values('$username','".$name."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}

/*$sql = "select name from images where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "upload/".$image;*/



//close connection
mysqli_close($con);

?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
ul{
  text-align: left;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: white;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input{
  width: 30%;
  margin:2% 0 2% 15%;
  background-color: rgba(0,0,0,.3);
  padding: 12px;
  border: none;
  border-radius: 4px;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  color:black;
  text-decoration: none; /* remove underline from anchors */
}

.btn {
  width: 30%;
  margin:2% 0 2% 15%;
  background-color: #900C3F;
  padding: 12px;
  border: none;
  border-radius: 4px;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}



/* style the submit button */
input[type=submit] {
  background-color: black;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #4A0259;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */


/* bottom container */
.bottom-container {
  text-align: center;
  background-color: black;
  margin-top: 10px;
  margin-bottom: 20px;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}


</style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="property.php">Property</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
  <a href="const_details.html">Construction details</a>
 
 <a class="log" href="contractorlog.php">Login</a>
 <a  class="log" href="">Log out</a>
  <!--<a class= "log" href="personal.php">my account</a>-->
</div>


<h2>Upload houses</h2>


<div class="container">
  <form method="post" action="" enctype='multipart/form-data'>
    <input type="text" name="username" placeholder="enter username" required="" autocomplete="off"></br>
   
    <label ><p style="margin:2% 0 2% 15%;">Choose file</p></label>
    <input type='file' name='file' ></br>
       
    <input type='submit' value='Upload' name='but_upload'>
  </form>
</div>   
    
    
  
<footer style="margin-top:50px;">
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="property.php">Property</a></li>
  <a href="constructiondetails.php">Construction details</a>
<a href="uploadimage.php">Upload images</a>
<a href="buyerimages.php">Buyer images</a>
<a  class="log" href="contrlogout.php">Log out</a>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0702073700" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:ruthkimani387@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/propertygrams/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>REAL ESTATE KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>

</body>

</html>

<!--<img src='<?php //echo $image_src;  ?>' >-->

