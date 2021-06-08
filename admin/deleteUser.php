<?php
    include("connectdb.php");
?>
<?php
    if (isset($_GET['UserId'])) {
        $sql = "DELETE FROM users WHERE UserId=".$_GET['UserId']."";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header('Location: index.php');
        }
        else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
    
?>