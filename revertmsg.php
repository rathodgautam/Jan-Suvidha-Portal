<?php
require 'dbconn.php';
include('WhatsappAPI.php'); 
 
session_start();

$phone = $_POST['jinal'];
$message = $_POST['msg'];

$wp = new WhatsappAPI("3712", "2b63640f1ae4060e1dc29412af0d60b473a94934"); 

$number = '+91'.$phone; 
//$message = 'You have applied for the scheme successfully'; // You can use WhatsApp Code to compose text messages like *bold*, ~Strikethrough~, ```Monospace```
//$media_url = 'https://lienzo.s3.amazonaws.com/images/8150716b94bdf1e235300c5f3036f383-invoice-template-pdf-grey-1.png'; // Direct global accessible URL of the file, image, docs etc.
 // Max file size should be 10MB otherwise you may get error.
//$group_name = 'My Test Group 😋';
//$caption = 'Its my Caption'; // For media files



/*

  UNCOMMENT YOUR REQUIRED FUNCTIONS FROM BELOW

*/

// Send Text Message to number
$status = $wp->sendText($number, $message);

// Send PDF, Documents, File, Images etc  Message to number
// $status = $wp->sendFromURL($number, $media_url, $caption);

// Send Text message in Group
//$status = $wp->sendTextInGroup($group_name, $message);
// Send Media message in Group
//$status = $wp->sendFromURLInGroup($group_name, $media_url, $caption);

$status = json_decode($status);

if($status->status == 'error'){
    echo $status->response;
}elseif($status->status == 'success'){
    echo 'Success <br />';
    echo $status->response;
}else{
  print_r($status);
}



echo "<script>window.location.href = 'view_app.php';</script>";



?>
