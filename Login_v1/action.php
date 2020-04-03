<?php
	
	$connection_string= "host=ec2-50-17-90-177.compute-1.amazonaws.com port=5432 dbname=d407vgcnrpaf5a user=hpowntnstdvtxn password=ce575d94c9186dcebf41700064bf46466a94e1e5e1e1c5d40819dbbe9bd8ddf2";
	$conn=pg_connect($connection_string);
	if(!$conn){
		echo "đm đ kết nối đc";
	}else{
		echo "Kết nối thành công";
	}
	// console thu name ra 
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$sql="select * from tblaccount where _name ='$name' and _pass='$pass'";
	$result = pg_query($conn,$sql);
	$row=pg_fetch_row($result);


		if(($row[0]==$name)&&($row[1]==$pass)){
			echo ' Đăng nhập được rồi!!';
			header('location:home.php');
		}else
		{
			echo ' Đ được ';
			echo $sql;
		}
	
?>