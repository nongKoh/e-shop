<?php 
ob_start();
session_start(); 
?>
<meta charset="UTF-8">
<?php

$sys_title = 'ระบบหลังร้าน 7-buy';
$date_member=date("Y-m-d H:i:s");


$con = mysqli_connect('localhost','root','gerrardxlk1') or die(mysql_error());
mysqli_select_db($con,'e-shop');
mysqli_query($con,'set names utf8');
date_default_timezone_set("Asia/Bangkok");




/*----------------------------------------*/



?>