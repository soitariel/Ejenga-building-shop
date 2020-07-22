
<?php

session_start();
include("includes/db.php");
include("includes/functions.php");
cart();
?>
<style>margin-top:500px;


</style>


<?php include('headers.php'); ?>
<?php include('cart-section.php'); ?>
<br><br><br><br><br>
<section class="our-products py-5">
<div class="container">

<div class="row">
   <div class="col-md-3"> <!--Product Filter  -->
    <div class="product-filter bg-light p-3">
      <div class="card bg-transparent">
        <div class="card-body">
        <h5>Filter by Material</h5>
          <ul class="list-unstyled">
            <li>
              <input type="checkbox" name="" id="">
              <span>Stonewall </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Hammer </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Tiles </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Ironsheet </span>
            </li>
            
            <li>
              <input type="checkbox" name="" id="">
              <span>Doorhinge </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Pipes </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Sinks</span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Timber </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Cement</span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Nails </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Adhesives </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Ceiling </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Ballast </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Paint </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Wires </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Taps </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Windows</span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>Doors </span>
            </li>
          </ul>
        </div>
      </div>
      &nbsp; 
      <div class="card bg-transparent">
        <div class="card-body">
          <h5>Filter by Price</h5>
          <input type="number" min="0" class="form-control">
        </div>
      </div>
      &nbsp; 
      <div class="card bg-transparent">
        <div class="card-body">
          <h5>Filter by Size</h5>
          <ul class="list-unstyled">
            <li>
              <input type="checkbox" name="" id="">
              <span>50kg </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>100kg </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>150kg </span>
            </li>
            <li>
              <input type="checkbox" name="" id="">
              <span>200kg </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Selected Products
        </div>


  
 <form action="" enctype="multipart/form-data" method="post">
 
 <table align="center" width="500" border="0">
 
 

<tr align="center">
  <th>Remove</th>
  <th>Product(s)</th>
  <th name="qty">Quantity </th>
  <th>Total Price</th>
</tr>
 
 <?php
 
 
         $total = 0;
   global $con;

   $ip = getip();

   $price = "select * from cart where ip_add = '$ip'";

   $run_price = mysqli_query($con,$price) ;

   while($pprice = mysqli_fetch_array($run_price)){

      $pro_id = $pprice['p_id'];
      
      $prod_price = "select * from products where prd_id = '$pro_id'";

      $run_pro_price = mysqli_query($con,$prod_price);


      while($ppprice = mysqli_fetch_array($run_pro_price)){

         $product_price = array($ppprice['prd_price']);
         $product_title = $ppprice['prd_title'];
         $product_image = $ppprice['prd_img'];
         $single_price = $ppprice['prd_price'];
       

         $price_sum = array_sum($product_price);

         $total +=$price_sum;

         //echo  $product_price;
     
 ?>
 
 <tr align="center">
   
   <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;  ?>"></td>
   <td><?php echo $product_title; ?>
    <br>
    <img src="images/<?php echo $product_image; ?>" width="60" height="60">
    </td>
   <td>

    <input type="number" id="qty" name="qty" min="1" max="10000" />
   </td>

   <?php
   error_reporting(0);
if (isset($_POST['update_cart'])){

$qty=$_POST['qty'];

$update_qty="update cart set qty='$qty'";
$run_qty=mysqli_query($con, $update_qty);
$_SESSION['qty']=$qty;
$total=$total*$qty;

 

}
 ?>

   </td>
   <td>
     
   <?php echo "Ksh".$single_price;  ?>
   </td>
  
   <td></td>  
   
 
 </tr>
 
 
 <?php
 
 }
   }
 ?>
 
  <tr align="right">
   <td colspan="4"><b>Total:</b></td>

   <td><?php echo"Ksh&nbsp;".$total;   ?></td>
   
   </tr>
   
   
   <tr align="center">
   
   <td colspan="2"><input type="submit" name="update_cart" value="Update Cart"

    style="background-color: #212529;
  border: none;
  color: white;
  padding: 15px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;">
   </td>
   

  <br><br>
   <td>

      <a href="products.php" style="background-color: #212529;
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;"
  >Continue Shopping</a>

  </td>
  &nbsp; &nbsp;
  <td>

      <a href="checkout.php" style="background-color: #212529;
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"
  >Checkout</a>

  </td>
  


   </tr>

 </table>
 
 
 
</form>




    

 <?php
 // Turn off all error reporting
error_reporting(0);


  global $con;
 $ip = getIp();
 

 
 if(isset($_POST['update_cart'])){
 
   foreach($_POST['remove'] as $remove){
   
       $delete_product = "delete from cart where p_id='$remove' AND ip_add='$ip'";
       $run_delete = mysqli_query($con, $delete_product);
       echo $ip;
       if($run_delete){
       
        echo "<script>window.open('cart.php','_self')</script>"    ;  
       
      }
   
    
}
function update_cart(){

if(isset($_POST['continue'])){

 echo "<script>window.open('allproducts.php','_self')</script>"    ;  
}
}
  
echo @$up_cart=update_cart();

}

?>


</div>

    <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Welcome Customer!</i><br>Shopping cart</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;Items <br />
          <span class="border_cart"></span>Subtotal:<span class="price"><?php total_price(); ?> </span> </div>
        <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shop.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
       
       <br>
     
        <!-- end of right content -->
</div>

</div>

</body>
</html>
