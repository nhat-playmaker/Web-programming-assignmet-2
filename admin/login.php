<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toyota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <?php
        include("connectdb.php");
    ?>
    <?php
        $err = "";
        $username = $password = "";
        if (isset($_SESSION["username"])) {
            header('Location: index.php');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["username"])) {
                $err = "Please input Username and Password!";
            }
            else {
                $username = test_input($_POST["username"]);  
            }
            if(empty($_POST["password"])) {
                $err = "Please input Username and Password!";
            }
            else {
                $password = test_input($_POST["password"]);
            }
            if ($username != "" && $password != "") {
                $sql = "SELECT * FROM admins where Username='".$username."'";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    $err = "Username or Password is not correct!";
                }
                else {
                    $row = $result->fetch_assoc();
                    if ($row["Password"] != $password) {
                        $err = "Username or Password is not correct!";
                    }
                }
            }  
            if ($err == "") {
                $_SESSION["username"] = $username;
                header('Location: index.php');
            }   
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <div class='container-fluid col-md-10 col-lg-8'>
        <p class="h4 text-center bg-dark text-white">Login</p>
        <form class='' method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
            <div class='form-group'>
                <input class='container-fluid form-control' type='text' name='username' placeholder="Username">   
            </div>
            <div class='form-group'>
                <input class='container-fluid form-control' type='password' name='password' placeholder="Password">
            </div>
            <div class='form-group'>
                <input class='col-4 mx-auto d-block btn btn-primary' type='submit' name='submit' value='Login'>
            <div>
        </form><br>
        <div class='text-danger'><?php echo $err ?></div>
    </div>
</body>
</html>