<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phonenumber'];
$a=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];


include 'connection.php';
$query = "insert into login(username,password,usertype,status) values('$username','$password','buyer','1')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into buyerreg(loginid,name,email,address,phonenumber) values('$logid','$name','$email','$a','$number')";
mysqli_query($con, $sql);
echo"<script>alert('Registration Sucessfull');window.location='login.php';</script>";


?>