<?php 
//importing required files 
require_once 'Firebase.php';
require_once 'Push.php'; 

$response = array(); 
$push = new Push($_GET['title'], $_GET['message'],null);
$mPushNotification = $push->getPush();
$devicetoken = "cQKCYVcM36E:APA91bHztus3rBrR4jc_MhC8gLp8GGeer2D3w3_H0zQ5dJj4e5RDNJMWRUqNGOxrU_Xyp1N-oB9PQ36uM0Zdb6MGDQdjmt6XLqBSgGJAfpgxcSRBirzuQsNEslncM-UCUkjw9y4PvHeB";
$firebase = new Firebase(); 
 //sending push notification and displaying result 
 echo $firebase->send($devicetoken, $mPushNotification);
?>
