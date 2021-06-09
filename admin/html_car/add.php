<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

$User = mysqli_real_escape_string($mysqli, $_POST['UserId']);
$Car = mysqli_real_escape_string($mysqli, $_POST['CarId']);
$Content = mysqli_real_escape_string($mysqli, $_POST['Content']);
	
$result = mysqli_query($mysqli, "INSERT INTO `comment`(`User`, `Car`, `Content`) VALUES ('$User','$Car','$Content')");
	
?>
</body>
</html>
