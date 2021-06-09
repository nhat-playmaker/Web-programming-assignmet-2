<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$Username = mysqli_real_escape_string($mysqli, $_POST['Username']);
	$Password = mysqli_real_escape_string($mysqli, $_POST['Password']);
	$Firstname = mysqli_real_escape_string($mysqli, $_POST['Firstname']);
	$Lastname = mysqli_real_escape_string($mysqli, $_POST['Lastname']);
	$Age = mysqli_real_escape_string($mysqli, $_POST['Age']);
	$Gender = mysqli_real_escape_string($mysqli, $_POST['Gender']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
		
	// checking empty fields
	if(empty($Username) || empty($Age) || empty($Password)) {
				
		if(empty($Username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($Age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($Password)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		// $result = mysqli_query($mysqli, "INSERT INTO users('UserId', `Username`, `Password`, `FirstName`, `LastName`, `Age`, `Gender`, `ImageUrl`) VALUES('10', `$Username`, `$Password`, `$Firstname`, `$Lastname`, `$Age`, `$Gender`, '../images/male.jpg')");
		$result = mysqli_query($mysqli, "INSERT INTO `users`(`Username`, `Password`, `FirstName`, `LastName`, `Age`, `Gender`, `Email`, `ImageUrl`) VALUES ('$Username', '$Password', '$Firstname', '$Lastname', '$Age', '$Gender', '','../images/male.jpg')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
