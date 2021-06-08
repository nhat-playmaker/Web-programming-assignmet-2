<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="script.js"></script>
</head>
<body>
    <?php
        if (!isset($_SESSION["username"])) {
            header("Location: login.php");
        }
        include("connectdb.php");
    ?>
    <div class='col-lg-10 mx-auto bg-light'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home-menu" aria-controls="home-menu" aria-expanded="false" aria-label="label">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="home-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="product.php">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">USER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="branch.php">BRANCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <p class='h5 text-center bg-dark text-white'>LIST OF USERS</p>
        <div class='row justify-content-center'>
            <?php
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-sm-6 col-md-4'>
                            <img class='img-thumbnail mx-auto d-block' src='".$row["ImageUrl"]."' alt='Avatar' onerror=this.src='../images/male.jpg'>
                            <p><b>User Id: </b>".$row["UserId"]."<br>
                                <b>Full Name: </b>".$row["FirstName"]." ".$row["LastName"]."
                            </p>
                            <button class='btn btn-primary btn-block' data-toggle='modal' data-target='#Id".$row["UserId"]."'>View Info</button>
                            <div class='modal fade' id='Id".$row["UserId"]."' tabindex='-1' aria-labelledby='Label".$row["UserId"]."' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='Label".$row["UserId"]."'>User Id: ".$row["UserId"]."</h5>
                                            <button class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <p><b>Username: </b>".$row["Username"]."</p>
                                            <p><b>First Name: </b>".$row["FirstName"]."</p>
                                            <p><b>Last Name: </b>".$row["LastName"]."</p>
                                            <p><b>Age: </b>".$row["Age"]."</p>
                                            <p><b>Gender: </b>".$row["Gender"]."</p>
                                            <p><b>Email: </b>".$row["Email"]."</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                            <button class='btn btn-danger'><a class='text-white text-decoration-none' data-toggle='modal' data-target='#Warning".$row["UserId"]."'>Delete</a></button>
                                            <div class='modal fade' id='Warning".$row["UserId"]."' tabindex='-1' aria-labelledby='Warn".$row["UserId"]."' aria-hidden='true'>
                                                <div class='modal-dialog modal-dialog-centered'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title text-danger' id='Warn".$row["UserId"]."'>Warning</h5>
                                                            <button class='close' data-dismiss='modal' aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <p>Are you sure to delete this account?</p>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button class='btn btn-secondary' data-dismiss='modal'>No</button>
                                                            <button class='btn btn-danger'><a class='text-white text-decoration-none' href='deleteUser.php?UserId=".$row["UserId"]."'>Yes</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>";
                    }
                }
                $conn->close();
            ?>
        </div>
    </div>
</body>
</html>