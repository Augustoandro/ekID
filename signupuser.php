<?php
include ('config.php');
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- <meta name="author" content="Kodinger"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Signup as a User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="img/logo3.png" alt="logo">
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Signup as a User</h4>
                        <form method="POST" class="my-login-validation" action="upload.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password2">Confirm Password
                                </label>
                                <input id="password2" type="password" class="form-control" name="password2" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name
                                </label>
                                <input id="firstname" type="text" class="form-control" name="firstname" required>
                                <div class="invalid-feedback">
                                    First Name is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="midname">Middle Name
                                </label>
                                <input id="midname" type="text" class="form-control" name="midname" required>
                                <div class="invalid-feedback">
                                    Middle Name is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name
                                </label>
                                <input id="lastname" type="text" class="form-control" name="lastname" required>
                                <div class="invalid-feedback">
                                    Last Name is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address with ZIP
                                </label>
                                <input id="address" type="text" class="form-control" name="address" required>
                                <div class="invalid-feedback">
                                    Address with ZIP is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth
                                </label>
                                <input id="dob" type="date" class="form-control" name="dob" required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo
                                </label>
                                <input type="file" name="photo" value="" required>
                                <div class="invalid-feedback">
                                    Please attach a JPG/PNG file
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photoid">Existing Photo ID
                                </label>
                                <input type="file" name="photoid" value="" required>
                                <div class="invalid-feedback">
                                    Please attach a JPG/PNG/PDF file
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="addproof">Address Proof
                                </label>
                                <input type="file" name="addproof" value="" required>
                                <div class="invalid-feedback">
                                    Please attach a JPG/PNG/PDF file
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dobproof">Proof of Date of Birth
                                </label>
                                <input type="file" name="dobproof" value="" required>
                                <div class="invalid-feedback">
                                    Please attach a JPG/PNG/PDF file
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <input type="submit" name="registerbtn" class="btn btn-primary btn-block" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
                <div >
                    <br><a href = "loginpage.php"><button class="btn btn-primary btn-block">Login as User</button></a>
                </div>
                <div>
                    <br><a href = "loginofficial.php"><button class="btn btn-primary btn-block">Login as Org Employee</h4></button></a>
                </div>
            </div>
            <div class="row">
            <p>Notes:</p> 
            <ol>
                <li>In case the applicant does not have a valid Photo ID or Address Proof, he/she may produce a Residence Certificate issued by a Sub-Divisional Officer.</li>
                <li>In case the applicant does not have a valid Proof of Birth, he/she may produce a Medical Certificate for age verification signed by a medical officer with at least a rank of Civil Surgeon.</li>
            </ol>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/my-login.js"></script>
</body>
</html>

