<?php

require_once ("DBconfig.php");


// Get the incoming information from the raw input
$data = file_get_contents("php://input");

$json = json_decode($data, true);

$uplink_message = $json['uplink_message'];
   $latitude = $uplink_message['decoded_payload']['latitude'];
   $longitude = $uplink_message['decoded_payload']['longitude'];



$sqlCommand = "INSERT INTO gps_data(latitude,longitude) VALUES ('$latitude','$longitude')";


        mysqli_query($conn, $sqlCommand);

     //   $arr = array('response' => "1");
// echo json_encode($arr);
 
 echo "1";

?>
