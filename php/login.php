<?php

$uname=$_GET["uname"];
$pwd=$_GET["pwd"];
$coon=mysqli_connect("localhost","root","","k");
$selectsql="select * from user";
$result=mysqli_query($coon,$selectsql);
if($result){
    echo"<script>alert('登录成功');location.href='../home.html';</script>";
}else{
    echo"<script>alert('登录失败');location.href='login.html';</script>";
}
?>