<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

ul{
  text-align: left;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.center {
  text-align: center;
}
img {
  image-rendering: auto;
}


#more {display: none;}

</style>
</head>
<body>

  <div class="topnav">
  <a class="active" href="index.php">HOME</a>
  <a href="about.php">ABOUT</a>
  <a href="blog.php">BLOG</a>
  <a href="engineer.php">ENGINEER</a>
  <a href="Products.php">PRODUCTS</a>
  <a href="faq.php">FAQ</a>
  <a href="contact.php">CONTACT</a>
  <a class="log" href="cart.php">CART</a>
    <a class="log" href="login.php">LOGIN</a>
  <a class="log" href="signup.php">SIGNUP</a>
</div>


<section>

<section class="introduction py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="" alt="" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2>WHO WE ARE</h2>
				<p>We are an online business that sells different building materials at affordable prices </p> <p>
				
				<p>Our vision was to simplify the home improvement industry and give the power of choice back to the homeowner and the buyer. We set out to provide those seeking to build or improve their homes with an online marketplace to access the products they wanted, at the prices they would love and deliver them on time and directly to their doorstep. </p> 
				
				<p>Our offices are Based in Nairobi at Ruaka Centre we provide good customerservice and good delivery at affordable costs. </p>
			</div>
		</div>
	</div>


  
<h2 style="text-align:center">OUR TEAM</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/harry.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/harry" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/harry.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
  </div>
</div>


<footer >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="engineer.php">Engineer</a></li>
  <li><a href="Products.php">Products</a></li
  ><li><a href="Cart.php.php">Cart</a></li>

  <li><a href="contact.php">Contact</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0792052668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/propertygrams/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>EJENGA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>
</body>
</html>
