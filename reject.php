<?php
session_start();
require 'dbconn.php';
$email = $_POST['vinulal'];
$schemeid = $_SESSION['schemeid'];
$sql = "UPDATE `applied` SET `statu` = '0' WHERE email = '$email' AND schemeid = '$schemeid'";
if ($result = mysqli_query($conn, $sql)) {
    header('Refresh: 1; url=view_app.php');
    exit;
  }

?>