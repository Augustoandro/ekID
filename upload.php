<?php
include ('config.php');
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

if (isset($_POST['registerbtn']) && $_POST['registerbtn'] == 'Register')
{
    if (isset($_FILES['photo']) && isset($_FILES['photoid']) && isset($_FILES['addproof']) && isset($_FILES['dobproof']))
    {
        # get details of the uploaded file
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $midname = $_POST['midname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $photo = $_FILES['photo'];
        $photoid = $_FILES['photoid'];
        $addproof = $_FILES['addproof'];
        $dobproof = $_FILES['dobproof'];

        #$myemail = $_SESSION['message'];
        #$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
        #$fileName = $_FILES['uploadedFile']['name'];
        #$fileSize = $_FILES['uploadedFile']['size'];
        #$fileType = $_FILES['uploadedFile']['type'];
        #$fileNameCmps = explode(".", $fileName);
        #$fileExtension = strtolower(end($fileNameCmps));

        $photoTmpPath = $_FILES['photo']['tmp_name'];
        $photoidTmpPath = $_FILES['photoid']['tmp_name'];
        $addproofTmpPath = $_FILES['addproof']['tmp_name'];
        $dobproofTmpPath = $_FILES['dobproof']['tmp_name'];

        $photoName = $_FILES['photo']['name'];
        $photoidName = $_FILES['photoid']['name'];
        $addproofName = $_FILES['addproof']['name'];
        $dobproofName = $_FILES['dobproof']['name'];

        $photoSize = $_FILES['photo']['size'];
        $photoidSize = $_FILES['photoid']['size'];
        $addproofSize = $_FILES['addproof']['size'];
        $dobproofSize = $_FILES['dobproof']['size'];

        $photoType = $_FILES['photo']['type'];
        $photoidType = $_FILES['photoid']['type'];
        $addproofType = $_FILES['addproof']['type'];
        $dobproofType = $_FILES['dobproof']['type'];

        $photoNameCmps = explode(".", $photoName);
        $photoidNameCmps = explode(".", $photoidName);
        $addproofNameCmps = explode(".", $addproofName);
        $dobproofNameCmps = explode(".", $dobproofName);

        $photoExtension = strtolower(end($photoNameCmps));
        $photoidExtension = strtolower(end($photoidNameCmps));
        $addproofExtension = strtolower(end($addproofNameCmps));
        $dobproofExtension = strtolower(end($dobproofNameCmps));

        #sanitize file-name
        $newphotoName = $photoName;
        $newphotoidName = $photoidName;
        $newaddproofName = $addproofName;
        $newdobproofName = $dobproofName;

        #check if file has one of the following extensions
        $allowedfileExtensions = array('jpg', 'png', 'pdf');

        if (in_array($photoExtension, $allowedfileExtensions) && in_array($photoidExtension, $allowedfileExtensions) && in_array($addproofExtension, $allowedfileExtensions) && in_array($dobproofExtension, $allowedfileExtensions))
        {
            $uploadFileDir = 'uploadedFiles/';
            $photoDest_path = $uploadFileDir . $newphotoName;
            $photoidDest_path = $uploadFileDir. $newphotoidName;
            $addproofDest_path = $uploadFileDir. $newaddproofName;
            $dobproofDest_path = $uploadFileDir. $newdobproofName;

            move_uploaded_file($photoTmpPath, $photoDest_path);
            move_uploaded_file($photoidTmpPath, $photoidDest_path);
            move_uploaded_file($addproofTmpPath, $addproofDest_path);
            move_uploaded_file($dobproofTmpPath, $dobproofDest_path);
            
            $stmt = "INSERT INTO user (email, password1, firstname, midname, lastname, address1, dob, photo, photoid, addproof, dobproof) VALUES ('$email', '$password', '$firstname', '$midname', '$lastname', '$address', '$dob', '$photoDest_path', '$photoidDest_path', '$addproofDest_path', '$dobproofDest_path')";
            mysqli_query($db, $stmt);
            $cmd_bucket1 = "gcloud storage cp ".$photoDest_path." gs://userdocs1729/";
            shell_exec($cmd_bucket1);
            sleep(5);
            $cmd_bucket2 = "gcloud storage cp ".$photoidDest_path." gs://userdocs1729/";
            shell_exec($cmd_bucket2);
            sleep(5);
            $cmd_bucket3 = "gcloud storage cp ".$addproofDest_path." gs://userdocs1729/";
            shell_exec($cmd_bucket3);
            sleep(5);
            $cmd_bucket4 = "gcloud storage cp ".$dobproofDest_path." gs://userdocs1729/";
            shell_exec($cmd_bucket4);
            sleep(5);
        }
        else
        {
            $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
    }
}

$_SESSION['message'] = $message;
header("Location: signupuser.php");
?>