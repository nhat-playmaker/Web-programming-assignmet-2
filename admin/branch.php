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
    <div class='col-lg-10 mx-auto'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home-menu" aria-controls="home-menu" aria-expanded="false" aria-label="label">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="home-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">USER</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="branch.php">BRANCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <p class='h5 text-center bg-dark text-white'>LIST OF BRANCHES</p>
        <div class=''>
            <?php
                $sql = "SELECT * FROM branches";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='d-flex border rounded-lg mb-3 align-items-center p-2'>

                            <div class='mr-auto' type='button' data-toggle='modal' data-target='#Id".$row["BranchId"]."'>".$row["BranchName"]."</div>
                            <div class='modal fade' id='Id".$row["BranchId"]."' tabindex='-1' aria-labelledby='Label".$row["BranchId"]."' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <p class='h5 modal-title text-primary' id='Label".$row["BranchId"]."'>Branch Id: ".$row["BranchId"]."</p>
                                            <button class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <p><b>Branch Name: </b>".$row["BranchName"]."</p>
                                            <p><b>Address: </b>".$row["Addr"]."</p>
                                            <p><b>Tel: </b>".$row["Tel"]."</p>
                                            <p><b>Fax: </b>".$row["Fax"]."</p>
                                            <p><b>Working Time: </b>".$row["WorkingTime"]."</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class='col-3'><button class='btn btn-success mx-auto d-block' data-toggle='modal' data-target='#Mod".$row["BranchId"]."'><i class='fas fa-edit text-white'></i></button></div>
                            <div class='modal fade' id='Mod".$row["BranchId"]."' tabindex='-1' aria-labelledby='".$row["BranchId"]."Label' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <p class='h5 text-primary modal-title' id='".$row["BranchId"]."Label'>Modify Branch ".$row["BranchId"]."</p>
                                            <button class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form id='Form".$row["BranchId"]."' method='POST' action='modifyBranch.php?BranchId=".$row["BranchId"]."'>
                                                <div class='form-group'>
                                                    <input class='form-control' type='text' name='name' placeholder='Branch Name' value='".$row["BranchName"]."' required>
                                                </div>
                                                <div class='form-group'>
                                                    <input class='form-control' type='text' name='address' placeholder='Address' value='".$row["Addr"]."' required>
                                                </div>
                                                <div class='form-group'>
                                                    <input class='form-control' type='text' name='tel' placeholder='Tel' value='".$row["Tel"]."' required>
                                                </div>
                                                <div class='form-group'>
                                                    <input class='form-control' type='text' name='fax' placeholder='Fax' value='".$row["Fax"]."' required>
                                                </div>
                                                <div class='form-group'>
                                                    <input class='form-control' type='text' name='time' placeholder='Working Time' value='".$row["WorkingTime"]."' required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class='modal-footer'>
                                            <button class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                            <button class='btn btn-success' type='submit' form='Form".$row["BranchId"]."'>Modify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='col-3'><button class='btn btn-danger mx-auto d-block' data-toggle='modal' data-target='#Warning".$row["BranchId"]."'><i class='fas fa-trash text-white'></i></button></div>
                            <div class='modal fade' id='Warning".$row["BranchId"]."' tabindex='-1' aria-labelledby='Warn".$row["BranchId"]."' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title text-danger' id='Warn".$row["BranchId"]."'>Warning</h5>
                                            <button class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <p>Are you sure to delete this account?</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <button class='btn btn-secondary' data-dismiss='modal'>No</button>
                                            <button class='btn btn-danger'><a class='text-white text-decoration-none' href='deleteBranch.php?BranchId=".$row["BranchId"]."'>Yes</a></button>
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
        <button class='btn btn-primary mx-auto d-block'><a class='text-white text-decoration-none' data-toggle='modal' data-target='#addBranch'>ADD BRANCH</a></button>
        <div class='modal fade' id='addBranch' tabindex='-1' aria-labelledby='addBranchLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <p class='h5 modal-title' id='addBranchLabel'>Add Branch</p>
                        <button class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <form id='addBranchForm' method='POST' action='<?php echo htmlspecialchars("addBranch.php"); ?>'>
                            <div class='form-group'>
                                <input class='form-control' type='text' name='name' placeholder='Branch Name' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control' type='text' name='address' placeholder='Address' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control' type='text' name='tel' placeholder='Tel' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control' type='text' name='fax' placeholder='Fax' required>
                            </div>
                            <div class='form-group'>
                                <input class='form-control' type='text' name='time' placeholder='Working Time' required>
                            </div>
                        </form>
                    </div>
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button>
                        <button class='btn btn-primary' type='submit' form='addBranchForm'>Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>