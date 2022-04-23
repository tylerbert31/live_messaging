<?php

$db = new mysqli("localhost","root","","chat");
if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

$result = array();
$message =$_POST['message'];
$from = $_POST['from'];

if(!empty($message) && !empty($from)){
    $sql = "INSERT INTO 'chats' ('message', 'from')  VALUES ('".$message."','".$from."')";
    $result['send_status'] = $db->query($sql);
}

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
