<?php
$uname=$_GET["uname"];
$pwd=$_GET["pwd"];
$coon=mysqli_connect("localhost","root","","k");
mysqli_query($coon,"set names utf8");
$sql="insert into user(uname,pwd) values('$uname','$pwd')";
$result=mysqli_query($coon,$sql);
if($sql){
echo"<script>alert('注册成功');location.href='../login.html';</script>";
}else{
    echo"<script>alert('注册失败');location.href='register.html';</script>";
}
?>