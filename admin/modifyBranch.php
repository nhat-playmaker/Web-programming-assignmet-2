<?php
    include("connectdb.php");
?>
<?php
    $name = $address = $tel = $fax = $time = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $address = test_input($_POST["address"]);
        $tel = test_input($_POST["tel"]);
        $fax = test_input($_POST["fax"]);
        $time = test_input($_POST["time"]);
        $sql = "UPDATE branches SET BranchName='".$name."', Addr='".$address."', Tel='".$tel."', Fax='".$fax."', WorkingTime='".$time."' WHERE BranchId=".$_GET["BranchId"]."";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("Location: branch.php");
        }
        else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>