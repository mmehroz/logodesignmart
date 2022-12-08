<?php
$con=mysqli_connect("localhost","azher_digizel","12_digizel!","azher_digizel");

	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
  if (isset($_POST['paysubm']))
{ 
  $name=$_POST['payname'];
  $email=$_POST['payemail'];
  $pakcge=$_POST['paypakcge'];
  $price=$_POST['payprice'];
  $query="INSERT INTO custom_order(order_name,order_email,order_pakcge,order_price) VALUES ('".$name."','".$email."','".$pakcge."','".$price."')";
  $run=mysqli_query($con,$query);
  var_dump($run);
  
  // if ($run>0) {
  //   echo "<script>alert('Updated');</script>"; 
  // }
  // else{
  //   echo "<script>alert('something wrong');</script>"; 
  // }
}



?>