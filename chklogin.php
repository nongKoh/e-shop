<?php include 'connect.php';
    session_start();  ?>
<meta charset="UTF-8">
<?php


	$query = "select * from member where Username_member='$_POST[username]' and Password_member='$_POST[password]'";
#   ฟังชั่นในการเช็คข้อมูล  member ให้เช็คว่า Username_member และ  Password_member มีข้อมูลในฐานข้อมลหรือไม่

//print_r($query);
//die();

	$result = mysqli_query($con,$query);#ทำการอ่านค่าที่เก็บอยู่$query



	if (mysqli_num_rows($result)>0)  #เป็นการนับจำนวนแถวที่อยู่ในฐานข้อมูล


 {
	$rs = mysqli_fetch_array($result);

	$_SESSION['sess_id'] = session_id();
	$_SESSION['mid'] = $rs['id_member'];
	$_SESSION['mtype'] = $rs['type_member'];
	$_SESSION['mname'] = $rs['name_member'];
	$_SESSION['uname'] = $rs['Username_member'];
	$_SESSION['email'] = $rs['email_member'];
	$_SESSION['gender'] = $rs['gender_member'];
	$_SESSION['address'] = $rs['address_member'];
	$_SESSION['tel'] = $rs['phone_member'];
	$_SESSION['line'] = $rs['line_member'];
	
 		if ($_SESSION['mtype']==3) { 
 			header('location:index.php');
	 	} 
		 elseif($_SESSION['mtype']==2)	 {
            header('location:index.php');
				 
		 }
		 else{
			header('location:index.php');
		 }


} else {
	
	echo "<script>
	alert('ชื่อผู้ใช้หรือรหัสผิด');
	location.href = 'index.php';
	</script>";
}
?>