<?php
$connection_string= "host=ec2-50-17-90-177.compute-1.amazonaws.com port=5432 dbname=d407vgcnrpaf5a user=hpowntnstdvtxn password=ce575d94c9186dcebf41700064bf46466a94e1e5e1e1c5d40819dbbe9bd8ddf2";
	$conn=pg_connect($connection_string);
	if(!$conn){
		echo "đm đ kết nối đc";
	}else{
		echo "Kết nối thành công";
	}

	//select
$sql="select _category,_name,_price,_img from tblproduct";
$result = pg_query($conn, $sql);
echo $result;
if($result>0){
	echo "<table><tr><th>ID</th><th>Name</th></tr>";
	while($row = pg_fetch_row($result)) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]." ".$row[2]." ".$row[3]."</td></tr>";
    }
    echo "</table>";
}else {
    echo "0 results";
}
pg_close(conn);
?>
