<?php
$con = mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($con,'e-shop');
mysqli_query($con,'set names utf8');
?>