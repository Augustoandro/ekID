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
                    <a class="navbar-brand" href="#">ekID</a><br><br>
                </div>
            </nav>
        </div>
        <br><br>
        <div class="row">
            <h4>Personal Information</h4><br>
        </div>
        <hr>
        <div>
        <?php
        if (isset($_POST['verifybtn'])) {
            $stmt = "SELECT * FROM user WHERE id =".$_POST['userid'];
            $result = mysqli_query($db, $stmt);
            while($resul=mysqli_fetch_assoc($result)) {
                echo "<p>Name: ".$resul['firstname']." ".$resul['midname']." ".$resul['lastname']."</p><br>
                <p>Date of Birth (Y/M/D): ".$resul['dob']."</p><br>
                <p>Address: ".$resul['address1']."</p><br>";
            }
        }
        ?>
        </div><br><br>
        <div>
        <h4>Documents</h4>
        </div>
        <hr>
        <div class="row">
            <div class="card-deck">
                <?php
                if (isset($_POST['verifybtn'])) {
                    $stmt2 = "SELECT * FROM user WHERE id =".$_POST['userid'];
                    $result2 = mysqli_query($db, $stmt2);
                    while($resul2=mysqli_fetch_assoc($result2)) {
                    echo "<div class='card'>
                              <h4 class='card-title'>Photo</h4>
                              <a href='".$resul2['photo']."' target='_blank'><img src='img/document-app-icon.jpg' alt='".$resul2['firstname']."' style='max-width: 400px; max-height: 400px'></a> 
                        </div>
                        <div class='card'>
                            <h4 class='card-title'>Photo ID</h4>
                            <a href='".$resul2['photoid']."' target='_blank'><img src='img/document-app-icon.jpg' alt='".$resul2['firstname']."' style='max-width: 400px; max-height: 400px'></a> 
                        </div>
                        <div class='card'>
                              <h4 class='card-title'>Address Proof</h4>
                            <a href='".$resul2['addproof']."' target='_blank'><img src='img/document-app-icon.jpg' alt='".$resul2['firstname']."' style='max-width: 400px; max-height: 400px'></a> 
                        </div>
                        <div class='card'>
                            <h4 class='card-title'>Date of Birth Proof</h4>
                            <a href='".$resul2['dobproof']."' target='_blank'><img src='img/document-app-icon.jpg' alt='".$resul2['firstname']."' style='max-width: 400px; max-height: 400px'></a> 
                        </div>";
                    }
                }
                ?>
            </div>
            <br><br>
            <div class="text-align: center">
                <form action="processapp.php" method ="post">
                    <?php
                    if (isset($_POST['verifybtn'])) {
                        echo "<input type='hidden' name='userid' value='".$_POST['userid']."'>";
                    }
                    unset($_POST['verifybtn']);
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block" name="acceptbtn" value="Accept Application">
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block" name="rejectbtn" value="Reject Application">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
    </div>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/my-login.js"></script>
</body>
</html>
