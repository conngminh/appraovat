<?php
require 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];

$checkUser="Select * from taikhoan where username='$username' and password='$password'";
$result=mysqli_query($conn,$checkUser);

if(mysqli_num_rows($result)>0)
{
    $response['error']="000";
    $response['message']="login success";

}
else{
    $response['error']="000";
    $response['message']="login failed";
}
echo json_encode($response);
?>