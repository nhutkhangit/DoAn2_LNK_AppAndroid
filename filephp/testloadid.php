<?php
	include "connect.php";
 /**
 * 
 */

	$mangspmoinhat=array();
	$query ="SELECT *from ttkhachhang order by id desc limit 1";
	$data = mysqli_query($conn,$query);
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($mangspmoinhat,new sanphammoinhat(
			$row['id'],
			$row['tenkhachhang'],
			$row['sodienthoai'],
			$row['email']
		));
	}
	// echo json_encode($mangspmoinhat);
	$chuoijson=json_decode(json_encode($mangspmoinhat));
	echo $chuoijson[0]->id;
 	class sanphammoinhat{
 		function sanphammoinhat($id,$tenkhachhang,$sodienthoai,$email){
 				$this->id=$id;
 				$this->tenkhachhang=$tenkhachhang;
 				$this->sodienthoai=$sodienthoai;
 				$this->email=$email;
 			}
 	}
?>