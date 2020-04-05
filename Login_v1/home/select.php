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

	while($row = pg_fetch_row($result)) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]." ".$row[2]." ".$row[3]."</td></tr>";
        echo "<div class="product"><div class="product-img"><img src="$row[3]" alt=""><div class="product-label"><span class="sale">-30%</span><span class="new">NEW</span></div></div><div class="product-body"><p class="product-category">$row[0]</p><h3 class="product-name"><a href="">"$row[1]"</a></h3>
												<h4 class="product-price">$row[2] <del class="product-old-price">$row[2]</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>";

    }
    echo "</table>";

pg_close(conn);
?>
