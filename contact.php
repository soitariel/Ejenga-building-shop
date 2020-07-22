<?php 
session_start();
    $pagetitle = "Contact Us"; 
    ?>

<?php include('header.php'); ?>
<br><br><br><br>

<section class="contact-us py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <img src="images/puc.jpg" alt="">
      </div>
      <div class="col-md-6">
      <form method="POST" action="contactdatabase.php">
        <label for="fname">First Name</label>
        <input class="form-control" type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input class="form-control" type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="email">Email</label>
        <input class="form-control" type="text" id="email" name="email" placeholder="Your Email..">
        
        <label for="subject">Message</label>
        <textarea class="form-control" id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
          &nbsp; 
        <input class="btn btn-success d-block w-100" type="submit" value="Submit">
      </form>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>

