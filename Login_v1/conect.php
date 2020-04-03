<?php
	$connection_string= "host=ec2-50-17-90-177.compute-1.amazonaws.com port=5432 dbname=d407vgcnrpaf5a user=hpowntnstdvtxn password=ce575d94c9186dcebf41700064bf46466a94e1e5e1e1c5d40819dbbe9bd8ddf2";
	$conn=pg_connect($connection_string);
	if(!$conn){
		echo "đm đ kết nối đc";
	}else{
		echo "Kết nối thành công";
	}

?>