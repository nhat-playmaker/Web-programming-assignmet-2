<?php
include_once("config.php");
//fetch_data.php
$Username = $_POST['Username'];
$Password = $_POST['Password'];


$query = "
	SELECT * FROM users WHERE Username = '$Username' AND Password = '$Password'
";

$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);
if ($row==0){
	echo "False";
}
else {
	while ($row = mysqli_fetch_array($result))
	{
		echo $row['UserId'].','.$row['Username'].','.$row['Password'].','.$row['FirstName'].','.$row['LastName'].','.$row['Age'].','.$row['Gender'].','.$row['Email'].','.$row['ImageUrl'];
	}
}

?>