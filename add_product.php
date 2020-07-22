<?php

include "db.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <title>Add_product</title>
    
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="c/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
     <link rel="stylesheet" href="Style.css">
</head>
<body>
    

             <center>
        <div id="main-header">
        <div id="logo">
            <span id="IST">E-Jenga</span
                >
            
            </div>
        
      
            
        </div>
                 </center>
        </div>
       
               <BR>
  <BR>
  

   	
   	<div class="container-fluid main-container">
	<?php include("include/header.php");?>
	<?php include("include/side_bar.php");?>
    <br><br>
	<div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#343a40">
    <h1 style="color:#ffffff">Add products</h1></div><br>
       
 <div id="wrapper">
    <div id="header">
         <div id="subheader">
           
              <div class="container">
               
</div>
       
    <div class="container-fluid main-container">
<div class="col-md-9 content" style="margin-left:50px">
  <div class="panel panel-default">


<div class="panel-body">
<h3>
    <!-- end of center content -->
    <!-- end of right content -->
<!-- end of main_container -->

<form class="was-validated" action="" method="POST" enctype="multipart/form-data">
   <div class="mb-3">
    <label for="validationTextarea">Product Title</label>
    <textarea class="form-control is-invalid" id="validationTextarea" name="prd_title"placeholder="Please Enter Product Title....." required></textarea>
    <div class="invalid-feedback">
    </div>
</div>
<br><br>
<div class="form-row">
     <div class="form-group">
<label for="inputState">Product Category</label>
    <select class="custom-select" name="prd_cat" required>
           <option selected disabled>Select Category</option>
           
           <?php
           
   $get_cats = "select * from categories";
$run_cats = mysqli_query($con,$get_cats);

while($row_cats=mysqli_fetch_array($run_cats)){

$cat_title = $row_cats['cat_title'];
    $cat_id = $row_cats['cat_id'];
   

     echo "<option value=$cat_id>$cat_title</option>";    
   
      }    
           ?>
           
           </select>
    <div class="invalid-feedback"></div>
  </div>

  <br>

   <div class="mb-3">
    <label for="validationTextarea">Product Price</label>
    <textarea class="form-control is-invalid" id="validationTextarea" name="prd_price" placeholder="Please Enter Product Price....." required></textarea>
    <div class="invalid-feedback">
    </div>
</div>
   <div class="mb-3">
    <label for="validationTextarea">Product Description</label>
    <textarea class="form-control is-invalid" id="validationTextarea" name="prd_desc" placeholder="Please Enter Product Description....." required></textarea>
    <div class="invalid-feedback">
    </div>
</div>
<br>
 <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="prd_img" required>
    
    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
  </div>
  <br>
   <div class="mb-3">
    <label for="validationTextarea">Product Keyword</label>
    <textarea class="form-control is-invalid" id="validationTextarea" name="prd_keyword" placeholder="Please Enter Product Keywords....." required></textarea>
    <div class="invalid-feedback">
    </div>
</div>
   <div class="mb-3">
    <label for="validationTextarea">Product Quantity</label>
    <textarea class="form-control is-invalid" id="validationTextarea" name="prd_quantity" placeholder="Please Enter Product Details....." required></textarea>
    <div class="invalid-feedback">
    </div>
</div>
<div class="form_row">
             &nbsp;<input type="submit" class="contact_input" name="index" value="Add Product" style="width: 720px"/>&nbsp;<br />
            </div>
 </div>
<div class="bottom_prod_box_big"></div>
      </div>
    &nbsp;<br>
    </div>
</form>
     
</body>
</html>


<?php


if(isset($_POST['index'])){

    //getting text data
  
   $prd_title = $_POST['prd_title'];
      $prd_cat = $_POST['prd_cat'];
   $prd_price = $_POST['prd_price'];
   $prd_desc = $_POST['prd_desc'];
   $prd_keyword = $_POST['prd_keyword'];
    $prd_quantity = $_POST['prd_quantity'];
    //getting image data
   $prd_img = $_FILES['prd_img']['name'];
   $prd_img_tmp = $_FILES['prd_img']['tmp_name'];
   
   move_uploaded_file($prd_img_tmp,"images/$prd_img");
   
   $insert_product = "insert into products (prd_title,prd_cat,prd_price,prd_desc,prd_img,prd_keyword,prd_quantity) values ('$prd_title','$prd_cat','$prd_price','$prd_desc','$prd_img','$prd_keyword','$prd_quantity')";
   
   $run_product = mysqli_query($con,$insert_product);
   
   
   if($run_product){
   
    echo "<script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'PRODUCT ADDED',
      showConfirmButton: false,
      timer: 2000
    })
    </script>"; 

    
    
  
  
  }


}


?>

        <!-- main content area end -->
        <!-- footer area start-->
       
        <!-- footer area end-->
    </div>
</div>
</div>
</div>
</div>
<div>
</div>
</div>
</div>
<div>
</div>
       
           
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
