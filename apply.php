<?php
require 'dbconn.php';
include('WhatsappAPI.php'); 
 
 session_start();

 if(!isset($_SESSION['email'])){
        
    echo"<script>alert('You need to login First!');</script>";
    echo"<script> window.location.href = 'login.php'; </script> " ;
    
 }else{

if(isset($_POST['schemebtn'])){

    $schemeId = $_POST['schemeid'];
    $userMail = $_SESSION['email'];
    $username = $_SESSION['name'];
    $phone = $_SESSION['phone'];

    $schemename = "MKSY";

    switch ($schemeId) {
    case "1":
        $schemename = "Meal Bill Assistance";
        break;
    case "2":
        $schemename = "Niradhar Vrudh Sahay";
        break;
    case "3":
        $schemename = "Mukhyamantri Amrutum Yojna";
        break;
    case "4":
        $schemename = "Coaching Assistance";
        break;
    case "5":
        $schemename = "MYSY";
        break;
    case "6":
        $schemename = "Digital Gujarat";
        break;
    case "7":
        $schemename = "MKSY";
        break;
    default:
        echo "Random";
    }
    
    $stmt = "INSERT INTO `applied` (`name`,`email`, `schemeid`,`status`) VALUES ( '$username','$userMail', '$schemeId','1') ";
    $result = mysqli_query($conn, $stmt); 
    

    if($result){

            // $wp = new WhatsappAPI("3712", "2b63640f1ae4060e1dc29412af0d60b473a94934"); // create an object of the WhatsappAPI class with your user id and api key

            // $number = '+91'.$phone; // NOTE: Phone Number should be with country code
            // $message = 'You have applied for the scheme successfully'; // You can use WhatsApp Code to compose text messages like *bold*, ~Strikethrough~, ```Monospace```
            //$media_url = 'https://lienzo.s3.amazonaws.com/images/8150716b94bdf1e235300c5f3036f383-invoice-template-pdf-grey-1.png'; // Direct global accessible URL of the file, image, docs etc.
            // Max file size should be 10MB otherwise you may get error.
            //$group_name = 'My Test Group 😋';
            //$caption = 'Its my Caption'; // For media files



        /*

        UNCOMMENT YOUR REQUIRED FUNCTIONS FROM BELOW

        */

        // Send Text Message to number
        // $status = $wp->sendText($number, $message);

        // Send PDF, Documents, File, Images etc  Message to number
        // $status = $wp->sendFromURL($number, $media_url, $caption);

        // Send Text message in Group
        //$status = $wp->sendTextInGroup($group_name, $message);
        // Send Media message in Group
        //$status = $wp->sendFromURLInGroup($group_name, $media_url, $caption);

        // $status = json_decode($status);

        // if($status->status == 'error'){
        //     echo $status->response;
        // }elseif($status->status == 'success'){
        //     echo 'Success <br />';
        //     echo $status->response;
        // }else{
        // print_r($status);
        // }
        $query = "SELECT * FROM users WHERE email = '$userMail'" ;
        $result = mysqli_query($conn, $query);
        $res = mysqli_fetch_assoc($result);
        $fnma = $res['fname'];
        $gen = $res['gender'];
        $caste = $res['cast'];
        $dis = $res['district'];
        $age = $res['age'];


        $sqla = "INSERT INTO `applied` (  `name`, `email`, `schemeid`, `status`, `date`, `gender`, `cast`, `district`, `age`) VALUES ('$fnma', $userMail, '$schemeId', 1, current_timestamp(), '$gen', '$caste', '$dis', '$age')";
        $resul = mysqli_query($conn, $sqla);

        
        header("Location: inner-page.php");
}else{
        echo"fail";


    }
}
 }

?>  