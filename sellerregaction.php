<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phonenumber'];
$address=$_POST['address'];
$username=$_POST['username'];
$adhar=$_POST['adhar'];
$password=$_POST['password'];


include 'connection.php';
$query = "insert into login(username,password,usertype,status) values('$username','$password','seller','0')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into sellerreg(loginid,name,email,address,phonenumber,adhar) values('$logid','$name','$email','$address','$number','$adhar')";
mysqli_query($con, $sql);
echo"<script>alert('Registration Sucessfull');window.location='login.php';</script>";


?>