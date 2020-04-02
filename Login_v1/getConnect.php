<?php
	$connection_string= "host=ec2-54-197-48-79.compute-1.amazonaws.com port=5432 dbname=d122repi78kaui user=ggsohzyyzfnwpc password=4e756f3562eb875e991c09ddb68ced9f39d8757c77355e8965c4ef93520b749f ";
	$conn=pg_connect($connection_string);
	if(!$conn){
		echo "đm đ kết nối đc";
	}else{
		echo "Kết nối thành công";
	}

//Save vào cho tao 
	//Tạo cho tao file home

?>
