<?php


require_once ("DBconfig.php");


// Get the incoming information from the raw input
$data = file_get_contents("php://input");

$json = json_decode($data, true);


$received_at = date('Y-m-d H:i:s');

//application information
$end_device_ids = $json['end_device_ids'];
   $device_id = $end_device_ids['device_id']; 
   $application_id = $end_device_ids['application_ids']['application_id'];

//payload information
$uplink_message = $json['uplink_message']; 
   $f_port = $uplink_message['f_port'];
   $f_cnt = $uplink_message['f_cnt'];
   $latitude = $uplink_message['decoded_payload']['latitude'];
   $longitude = $uplink_message['decoded_payload']['longitude'];

  
     //LoRaWAN network  information
$data_rate = $json['data_rate'];
   $bandwidth = $data_rate['lora']['bandwidth'];
   $spreading_factor = $data_rate['lora']['spreading_factor'];
   $coding_rate = $settings['coding_rate'];
   $frequency = $settings['frequency'];


   $sqlCommand = "INSERT INTO gps_data(device_id, application_id,received_at, f_port, f_cnt, latitude,longitude, bandwidth, spreading_factor, coding_rate, frequency) VALUES ('$device_id','$application_id','$received_at', '$f_port','$f_cnt', '$latitude','$longitude', '$bandwidth', '$spreading_factor','$coding_rate','$frequency')";


        mysqli_query($conn, $sqlCommand);

     //   $arr = array('response' => "1");
// echo json_encode($arr);
 
 echo "1";

?>
