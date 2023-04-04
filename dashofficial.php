<?php
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ekID</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
    <div class="container-fluid">
        <div class="row" style="background-color: #5D3FD3">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashofficial.php">ekID</a><br><br>
                    <?php
                    
                    ?>
                    <a class="navbar-brand">ekID</a><br><br>
                </div>
            </nav>
        </div>
        <br><br>
        <div class="row">
            <h4>Active Applications</h4><br>
        </div>
        <hr>
        <div class="row">
            <!-- Card Representation -->
            <div class="card-columns">
            <?php
                $stmt = "SELECT * FROM user WHERE status1 IS NULL";
                $result = mysqli_query($db, $stmt);
                while($resul=mysqli_fetch_assoc($result)) {
                    echo "<div class='card'>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <img src=".$resul['photo']." alt=".$resul['firstname']." style='width:100%'>
                                </div>
                                <div class='col-md-6'>
                                    <p>Name: ".$resul['firstname']." ".$resul['midname']." ".$resul['lastname']."</p>
                                    <p>Date of Birth (Y/M/D): ".$resul['dob']."</p>
                                    <p>Address: ".$resul['address1']."</p>
                                    <form method='post' action='verifyapp.php'>
                                        <input type='hidden' name='userid' value='".$resul['id']."'>
                                        <input type='submit' name='verifybtn' value='Verify'>
                                    </form>
                                </div>
                            </div>
                        </div>";
                }
            ?>
            </div>
        </div>
        <br><br>
        <div class="row">
            <h4>Verified Applications</h4><br>
        </div>
        <hr>
        <div class="row">
            <div class="card-columns">
            <?php
                $stmt2 = "SELECT * FROM user WHERE status1 = 'Accepted'";
                $result2 = mysqli_query($db, $stmt2);
                while($resul2=mysqli_fetch_assoc($result2)) {
                    echo "<div class='card'>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <img src=".$resul2['photo']." alt=".$resul2['firstname']." style='width:70%; margin-top: 5%'>
                                </div>
                                <div class='col-md-6'>
                                    <p>Name: ".$resul2['firstname']." ".$resul2['midname']." ".$resul2['lastname']."</p>
                                    <p>Date of Birth (Y/M/D): ".$resul2['dob']."</p>
                                    <p>Address: ".$resul2['address1']."</p>
                                    <p>Status: Accepted</p>
                                </div>
                            </div>
                        </div>";
                }
            ?>
            </div>
        </div>
        <br><br>
        <div class="row">
            <h4>Denied Applications</h4><br>
        </div>
        <hr>
        <div class="row">
            <div class="card-columns">
            <?php
                $stmt3 = "SELECT * FROM user WHERE status1 = 'Rejected'";
                $result3 = mysqli_query($db, $stmt3);
                while($resul3=mysqli_fetch_assoc($result3)) {
                    echo "<div class='card'>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <img src=".$resul3['photo']." alt=".$resul3['firstname']." style='width:70%; margin-top: 5%'>
                                </div>
                                <div class='col-md-6'>
                                    <p>Name: ".$resul3['firstname']." ".$resul3['midname']." ".$resul3['lastname']."</p>
                                    <p>Date of Birth (Y/M/D): ".$resul3['dob']."</p>
                                    <p>Address: ".$resul3['address1']."</p>
                                    <p>Status: Rejected</p>
                                </div>
                            </div>
                          </div>";
                }
                ?>
            </div>
        </div>
    </div>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/my-login.js"></script>
</body>
</html>
