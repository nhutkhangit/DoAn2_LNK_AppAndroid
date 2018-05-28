<?php
	include "connect.php";
	$tenkhachhang=$_POST['tenkhachhang'];
	$sodienthoai=$_POST['sodienthoai'];
	$email=$_POST['email'];
	$query="INSERT INTO ttkhachhang VALUES(null,'$tenkhachhang','$sodienthoai','$email')";
	if(mysqli_query($conn,$query)) {
		
	}
	else{
		echo "lỗi ròi";
	}
?>