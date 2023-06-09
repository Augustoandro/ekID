<?php
                # Includes the autoloader for libraries installed with composer
                require __DIR__ . '/vendor/autoload.php';
                # Imports the Google Cloud client library
                use Google\Cloud\Storage\StorageClient;

                # Your Google Cloud Platform project ID

$privateKeyFileContent = '{
    "type": "service_account",
    "project_id": "ekid-382122",
    "private_key_id": "8c1ff3094c004a37e370c5fc02c3c4d39cc5da94",
    "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCo7/sn6UEI0Ntz\nFh/9cSXyA8o+w2cs2sucRTXx0dlLFGHzV+F91E5kdGv5YDP6GG6UVolrORf6CTwx\nBm8H9tgmHW6z3NENGZ6+tPRG+pVf1eMLt9xzVg1xy9q8+Pm+IhfiqAS/sa/F67o1\n3Yn3H1FEOu4IMBLn58LyyHBi9j9S4JbUZJ/2R0OABCLAPp5GhEy1lrdK2UJWBDKA\n7j19EqWt2i1tTSembqVYUKdQov2fzqs5dMKarFqWV2/6tr83FjkuqdJ92gMi5lB1\nV5D0BFw1ZYHz+eBL/RtOL/12WswPJhcE46/0M4KxBEooIsoAFgsi8QxPyXcX7fwD\nEapHWNNrAgMBAAECggEAAZKKQerX4h8fi8iu74r4EXKblU34TeCTeJbkU6XiYeKE\nruEohiVNvX2f66hLk45aqSLNEKRtZrRjTQmESwyvIluvxhjOEVMluRyyEV8PuN6i\nyF8jvCcW5PJCzPN8T5q9oixyLt6Whj8Vcp7nQ9eUyA/MW2MnKeVsWRoogaNNH5ZX\nsGhKYLHVBUiU8hJF3vWdFEjnilDEEbIJiV3yFoaRnW1urByHkn/CsJMDJnVEInV+\n/XiIhCPxTbnifiFKyyAVY+Oy/m0FyqAu/H4sCB6T+afTWIbsPsJCnt8h84+vlM/W\n+1KqFT736yYt7h9E5bG5eaWsx+6ds0u3mKolFiTCkQKBgQDcDNCaUnEtuOSd8HVM\nT4nIVPKrO6bN2itKCN3JVb/n3HIVQTL4xFDTbmI5sJ3Oawv8KqbitLJ/UjV+fcL1\nb6yt6wEeZ+kyXKuLHHmUH3Myg3lCTA7p+8eRpt9WgU8E65GLH8IB0mSDZQQOaiib\nI0Iwx4SmECLL87QIgMHyiXyMtwKBgQDEiXmsQYuAvuWCBP45G0lmNCmThWqHmFch\ny2Brj/cxpikaCt0LMvk6sPsiTm3ajDUQ2vcCB1t0KnQbcvhvyz2uhzBOePn1A4Me\nCKSxKsN72kuDfq1dr66p6boQbGKXFmTKW6CrptK0i7/9gQqKyUL+tm3l/m9tESp3\n9xa/LLfi7QKBgQCj9DBhK1gElyRPwV/EUeb5CsIcbz+jVRC4As8tOeTYntmpmICf\n9bW7Mx2gmkWaDQxLAISDmdr9HoWZD575PBHPK7ATtZx816tA5SB5Cs3ML0Vj7kOW\ndvCFR25Uh9gWdGZm4Gyu6tHVTKivDM3geW7R5XaiPJeQmq3jP/xB98qDFQKBgAZm\nS5X2VGqOzL5dF0IYx10Smb/5+iwMI9ov2yXlfDEbrf7xF52DvWXR2XuWfjE9m4S+\n/IgOYUX5E+rI5ZoOTiXetQ35FnqJ8L0LnwE92TuxMgBIIbEJRXC28Z4TSWqOCh4k\nuaidOAM1Ab1pdERspUfR/OYeUNaGVpGtdAoplJtJAoGAIBo5fw7awBzOyfGAVvpo\nQwZwOpLQASp4fvAm8KTLWfwa2Li9qW+02pNbgdRH2r4nn9Q5zlKPH3PHnpgW3FDg\ng7k91Trhs6duCX4LpMtfmfffKy6IyYFIlQuaieZXSv8jwp2/nwNGZeiO3DY1YbyH\nVr3HSa/tLvarbvA2nCoAvIA=\n-----END PRIVATE KEY-----\n",
    "client_email": "forcloudstore@ekid-382122.iam.gserviceaccount.com",
    "client_id": "109150599967337463728",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/forcloudstore%40ekid-382122.iam.gserviceaccount.com"
  }';
# Instantiates a client


/**
 * Upload a file.
 *
 * @param string $bucketName The name of your Cloud Storage bucket.
 *        (e.g. 'my-bucket')
 * @param string $objectName The name of your Cloud Storage object.
 *        (e.g. 'my-object')
 * @param string $source The path to the file to upload.
 *        (e.g. '/path/to/your/file')
 */
$bucketName = 'userdocs1729';

function upload_object(string $bucketName, string $objectName, string $source): void
{
   $storage = new StorageClient([
    'keyFile' => json_decode($privateKeyFileContent, true)
   ]); 
   $file = fopen($source, 'r');
   $bucket = $storage->bucket($bucketName);
   $object = $bucket->upload($file, [
        'name' => $objectName
   ]);
   printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
}

if (isset($_POST['registerbtn']) && $_POST['registerbtn'] == 'Register') {
    if (isset($_FILES['photo']) && isset($_FILES['photoid']) && isset($_FILES['addproof']) && isset($_FILES['dobproof'])) {
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

    $photo1 = strval($photo['name']);
    $photoid1 = strval($photoid['name']);
    $addproof1 = strval($addproof['name']);
    $dobproof1 = strval($dobproof['name']);

    $photo2 = strval($photo['tmp_name']);
    $photoid2 = strval($photoid['tmp_name']);
    $addproof2 = strval($addproof['tmp_name']);
    $dobproof2 = strval($dobproof['tmp_name']);
    
    echo $photo2;
    echo $photoid2;
    echo $addproof2;
    echo $dobproof2;

    upload_object($bucketName, $photo1, $photo2);
    upload_object($bucketName, $photoid1, $photoid2);
    upload_object($bucketName, $addproof1, $addproof2);
    upload_object($bucketName, $dobproof1, $dobproof2);
/**
 * $photo1 = strval($photo['name']);
  *  $photoid1 = strval($photoid['name']);
  *  $addproof1 = strval($addproof['name']);
  *  $dobproof1 = strval($dobproof['name']);

   * $stmt = "INSERT INTO user (email, password1, firstname, midname, lastname, address1, dob, photo, photoid, addproof, dobproof) VALUES ('$email', '$password', '$firstname', '$midname', '$lastname', '$address', '$dob', '$photo1', '$photoid1', '$addproof1', '$dobproof1')";
   * mysqli_query($db, $stmt);
 */
    
    echo "Details Submitted Successfully";
    unset($_FILES['photo']);
    unset($_FILES['photoid']);
    unset($_FILES['addproof']);
    unset($_FILES['dobproof']);
    unset($_POST['registerbtn']);

    /**
     * curl -X POST --data-binary @OBJECT_LOCATION -H "Authorization: Bearer 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" -H "Content-Type: multipart/related" "https://storage.googleapis.com/upload/storage/v1/b/userdocs1729/o?uploadType=media&name=OBJECT_NAME"
     */
    }
    
}
?>