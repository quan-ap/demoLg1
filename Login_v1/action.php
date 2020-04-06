<?php
	
	require 'conect.php';
	// console thu name ra 
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$sql="select * from tblaccount where _name ='$name' and _pass='$pass'";
	$result = pg_query($conn,$sql);
	$row=pg_fetch_row($result);


		if(($row[0]==$name)&&($row[1]==$pass)){
			echo ' Đăng nhập được rồi!!';
			header('location:home/home.html');
		}else
		{
			header('location:index.php');
		}
	
?>