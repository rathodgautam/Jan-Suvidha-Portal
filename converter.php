<?php

require 'dbconn.php';

$sql = "SELECT * FROM applied2";
$result = mysqli_query($conn, $sql);
$file = fopen("data.csv", "w");
fputcsv($file, array("srno", "name", "email","scheme","status","date","Gender","Cast","District","Age"));

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($file, $row);
}

$file = "data.csv";

if (file_exists($file)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="'.basename($file).'"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));
  readfile($file);
  exit;

} else {
  // handle the case where the file doesn't exist
}


fclose($file); 


mysqli_close($conn);

?>