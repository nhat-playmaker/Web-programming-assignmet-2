<style>
	<?php include("../admin/css/style.css") ?>
</style>

<?php

//fetch_data.php



include('connect.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM car_details WHERE carStatus = '1'
	";

	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND carBrand IN('".$brand_filter."')
		";
	}
	if(isset($_POST["fuel"]))
	{
		$fuel_filter = implode("','", $_POST["fuel"]);
		$query .= "
		 AND carFuel IN('".$fuel_filter."')
		";
	}
	if(isset($_POST["seat"]))
	{
		$seat_filter = implode("','", $_POST["seat"]);
		$query .= "
		 AND carSeat IN('".$seat_filter."')
		";
	}
	if(isset($_POST["type"]))
	{
		$type_filter = implode("','", $_POST["type"]);
		$query .= "
		 AND carType IN('".$type_filter."')
		";
	}
	if(isset($_POST["origin"]))
	{
		$origin_filter = implode("','", $_POST["origin"]);
		$query .= "
		 AND carOrigin IN('".$origin_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$price = $row['carPrice'];
			if (strlen($price) == 9) {
				$res = substr($price, 0, 3) . ',' . substr($price, 3, 3) . ',' . substr($price, 6, 3);
			}
			else {
				$res = substr($price, 0, 1) . ',' . substr($price, 1, 3) . '.' . substr($price, 4, 3) . ',' . substr($price, 7, 3);
			}

			$output .= '
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="car_box">

					<img src="../admin/images/'. $row['carImage'] .'" alt="" class="img-fluid" >
					<div class="car_name"><p class="text-center"><strong><a href="../admin/html_car/index.php">'. $row['carName'] .'</a></strong></p></div> 

					<p class="text-danger text-center" >'. $res.' VND</p>
					<p class="disp-info">
					Mẫu xe : '. $row['carType'].' <br />
					Nhãn hiệu : '. $row['carBrand'] .' <br />
					Nhiên liệu : '. $row['carFuel'] .' <br />
					Số chỗ ngồi : '. $row['carSeat'] .' <br/>
					Xuất xứ: '. $row['carOrigin'].'  </p>
					
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>
