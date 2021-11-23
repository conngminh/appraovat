<?php
$hostName='localhost';
$userName='root';
$userPass='';
$dbName='appraovat';
$conn=mysqli_connect($hostName,$userName,$userPass,$dbName);
if(!$conn)
{
echo "connection failed";
}
else
{
    echo "connection succes";
}
?>