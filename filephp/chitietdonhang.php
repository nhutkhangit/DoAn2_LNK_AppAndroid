<?php
	include "connect.php";
	// star xử lý chuổi//////////////////////////////////////////////////////////////////////////////////////////
	$json=$_POST['json'];
		// star lấy id khách hàng-----------------------------------------------------------------
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
	$chuoijsonid=json_decode(json_encode($mangspmoinhat));
	echo $chuoijsonid[0]->id;
 	class sanphammoinhat{
 		function sanphammoinhat($id,$tenkhachhang,$sodienthoai,$email){
 				$this->id=$id;
 				$this->tenkhachhang=$tenkhachhang;
 				$this->sodienthoai=$sodienthoai;
 				$this->email=$email;
 			}
 	}
// end lấy id khách hàng-----------------------------------------------------------------
 $json_array  = json_decode($json, true);
 $elementCount  = count($json_array);

//Object.keys(json).length --> USE
 $dem=count($json_array);
$chuoijson=json_decode($json);
for ($i = 0;$i<$dem; $i++) {
    if ($i >$dem) {
        break;
    }
 //    $dl0= $chuoijson[0]->madonhang;
	// 	$dl1= $chuoijson[0]->masanpham;
	// 	$dl2 =$chuoijson[0]->tensanpham;
	// 	$dl3 =$chuoijson[0]->giasanpham;
	// 	$dl4 =$chuoijson[0]->soluongsanpham;
 //    $query="INSERT INTO dulieumau VALUES(null,
	// 		'$dl0',
	// 		'$dl1',
	// 		'$dl2',
	// 		'$dl3',
	// 		'$dl4')";
	// if(mysqli_query($conn,$query)) {
		
	// }
	// else{
	// 	echo "lỗi ròi";
	// }
  //   	echo $dl0= $chuoijson[$i]->madonhang;
		// echo $dl1= $chuoijson[$i]->masanpham;
		// echo $dl2 =$chuoijson[$i]->tensanpham;
		// echo $dl3 =$chuoijson[$i]->giasanpham;
		// echo $dl4 =$chuoijson[$i]->soluongsanpham;
		// echo "<br/>";
    	$dl0= $chuoijsonid[0]->id;
		$dl1= $chuoijson[$i]->masanpham;
		$dl2 =$chuoijson[$i]->tensanpham;
		$dl3 =$chuoijson[$i]->giasanpham;
		$dl4 =$chuoijson[$i]->soluongsanpham;
    $query="INSERT INTO ttdonhang VALUES(null,
			'$dl0',
			'$dl1',
			'$dl2',
			'$dl3',
			'$dl4')";
	if(mysqli_query($conn,$query)) {
		
	}
	else{
		echo "lỗi ròi";
	}
}


?>