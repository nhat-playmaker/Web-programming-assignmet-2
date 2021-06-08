<?php
    include("connectdb.php");
?>
<?php
    if (isset($_GET['BranchId'])) {
        $sql = "DELETE FROM branches WHERE BranchId=".$_GET['BranchId']."";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header('Location: branch.php');
        }
        else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
    
?>