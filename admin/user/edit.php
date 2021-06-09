<?php
include_once("config.php");
//fetch_data.php
$UserId = $_POST['UserId'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$ImageUrl = $_POST['ImageUrl'];

$result = mysqli_query($mysqli, "UPDATE `users` SET `Username`='$Username',`Password`='$Password',`FirstName`='$FirstName',`LastName`='$LastName',`Age`='$Age',`Gender`='$Gender',`Email`='$Email',`ImageUrl`='$ImageUrl' WHERE `UserId`='$UserId'");
while ($row = mysqli_fetch_array($result))
	{
		echo $row['UserId'].','.$row['Username'].','.$row['Password'].','.$row['FirstName'].','.$row['LastName'].','.$row['Age'].','.$row['Gender'].','.$row['Email'].','.$row['ImageUrl'];
	}

?>