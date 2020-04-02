<?php
	$connection_string= "host= port= dbname= user= password= ";
	$conn=pg_connect(connection_string);
	if(!$conn){
		echo "đm đ kết nối đc";
	}else{
		echo "Đăng nhập thành công";
	}

//Save vào cho tao 

?>
