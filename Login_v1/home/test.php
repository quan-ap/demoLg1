<?php
	
require '../conect.php';

	//select
$sql="select * from tblproduct";
$result = pg_query($conn, $sql);
	
	while($row = pg_fetch_row($result) {

        echo $row[0]."</br>";

    }
pg_close($conn);
?>
