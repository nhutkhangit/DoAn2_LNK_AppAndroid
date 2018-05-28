<?php
	include "connect.php";
 /**
 * 
 */

	$mangspmoinhat=array();
	$query ="SELECT *from tatcasanpham where idsanpham='2'";
	$data = mysqli_query($conn,$query);
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($mangspmoinhat,new sanphammoinhat(
			$row['id'],
			$row['tensanpham'],
			$row['giasanpham'],
			$row['hinhanhsanpham'],
			$row['motasanpham'],
			$row['idsanpham']
		));
	}
	echo json_encode($mangspmoinhat);
 	class sanphammoinhat{
 		function sanphammoinhat($id,$tensp,$giasp,$hinhanhsp,$motasp,$idsanpham){
 				$this->id=$id;
 				$this->tensp=$tensp;
 				$this->giasp=$giasp;
 				$this->hinhanhsp=$hinhanhsp;
 				$this->motasp=$motasp;
 				$this->idsanpham=$idsanpham;
 			}
 	}
?>