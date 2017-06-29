<?php
header("Content-type: text/html; charset=utf-8"); 

$host    = "127.0.0.1";
$port    = 25004;

$message = isset($_POST['message'])==true?$_POST['message']:'hello';
$type = isset($_POST['type'])==true?$_POST['type']:'1';  //1是发，2是收



$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n"); // create socket

$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");   // connect to server

if($type=="1")
{
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n"); // send string to server
echo json_encode(array('message'=>$message,'code'=>'0'));
}
elseif($type=="2")
{
$result = socket_read ($socket, 1024) or die("Could not read server response\n");  // get server response
echo json_encode(array('reply'=>$result,'code'=>'0'));
}

socket_close($socket); // close socket


?>
