<?php
include ('config.php');
if (isset($_POST['acceptbtn'])) {
    $stmt = "UPDATE user SET status1 = 'Accepted' WHERE id =".$_POST['userid'];
    mysqli_query($db, $stmt);
}
else {
    if (isset($_POST['rejectbtn'])) {
        $stmt = "UPDATE user SET status1 = 'Rejected' WHERE id =".$_POST['userid'];
        mysqli_query($db, $stmt);
    }
}
header("Location: statupdate.php");
?>