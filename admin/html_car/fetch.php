<?php
include_once("config.php");
//fetch_data.php

$CarId = 1;

$query = "
	SELECT * FROM `comment` WHERE `Car`=1
";

$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);
if (!$result){
	echo "False";
}
else {
	while ($row = mysqli_fetch_array($result))
	{
		echo "
		<div class='form-group'>
            <label class='form-label'>".$row['User']."</label>
            <input type='text' class='form-control' placeholder='".$row['Content']."'>
        </div>
		";
	}
}

?>