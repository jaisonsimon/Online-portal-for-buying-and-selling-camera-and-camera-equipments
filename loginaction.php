<?php
include 'connection.php';
session_start();


$name=$_POST["username"];
$pass=$_POST["password"];
$str="select * from login where username='$name' and password='$pass'";
$result=  mysqli_query($con, $str);
$data=  mysqli_fetch_array($result);
$_SESSION["loginid"]=$data['loginid'];
$_SESSION["username"]=$data['username'];
 if($data['username']==$name && $data['password']==$pass)

{
   if($data['usertype']=="admin")
    {
    	$_SESSION["loginid"]=$data['loginid'];
        header("location: admin/index.php");
    }
    else if($data['usertype']=="buyer" && $data['status']=="1")
    {
    	$_SESSION["loginid"]=$data['loginid'];
        header("location:buyer/index.php");
    }
    else if($data['usertype']=="seller" && $data['status']=="1")
    {
        $_SESSION["loginid"]=$data['loginid'];
        header("location:seller/index.php");
    }
    



 else {
        echo "<script>alert('not approved');window.location='login.php'</script>";    
    }
}
else
{
    echo "<script>alert('invalid username or password');window.location='login.php'</script>";
}

?>