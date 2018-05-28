<?php

	define("DBSERVER","localhost");
	define("DBUSERNAME","root");
	define("DBPASSWORD","");
	define("DBDATABASENAME","appbanghangver1");

	$conn=mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBDATABASENAME);
	$conn->set_charset("utf8");
	if (!$conn){
		die('connect error:'.mysqli_connect_errno());
	};

?>