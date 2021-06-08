<style>
	<?php include("css/style.css") ?>
</style>

<?php

//fetch_data.php



include('database_connection.php');

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
			<div class="col-sm-3 col-lg-3 col-md-3">
				<div class="car_box">

					<img src="images/'. $row['carImage'] .'" alt="" class="img-responsive" >
					<div class="car_name"><h5 align="center"><strong><a href="#">'. $row['carName'] .'</a></strong></h5></div> 

					<h4 style="text-align:center;" class="text-danger" >'. $res.' VND</h4>
					<p class="disp-info">
					Mẫu xe : '. $row['carType'].' <br />
					Nhãn hiệu : '. $row['carBrand'] .' <br />
					Nhiên liệu : '. $row['carFuel'] .' <br />
					Số chỗ ngồi : '. $row['carSeat'] .' <br/>
					Xuất xứ: '. $row['carOrigin'].'  </p>

					<div class="btn-inline">
						<form method="post" action="editCar.php">
							<input type="text" value="' . $row['carID'] .'" name ="editCarID" hidden>
							<input type="submit" name="btn-edit" id="btn-edit" class="btn btn-success" value="EDIT" />
						</form>
					</div>

					<div class="btn-inline">
						<form method="post" action="delCar.php">
							<input type="text" value="' . $row['carID'] .'" name ="delCarID" hidden>
							<input type="submit" name="btn-del" id="btn-del" class="btn btn-danger" value="DELETE" />
						</form>
					</div>


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
