<?php
header("Content-type: text/html; charset=utf-8"); 

$host = "127.0.0.1";
$port = 25005;

$message = isset($_POST['message'])==true?$_POST['message']:'reply';
$type = isset($_POST['type'])==true?$_POST['type']:'2';  //1是发，2是收


set_time_limit(0); // don't timeout!

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n"); // create socket

$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");  // bind socket to port

$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");  // start listening for connections



$spawn = socket_accept($socket) or die("Could not accept incoming connection\n"); // accept incoming connections

if($type=="2")
{
$input = socket_read($spawn, 1024) or die("Could not read input\n");
echo json_encode(array('reply'=>$input,'code'=>'0'));  
}
elseif($type=="1")
{
socket_write($spawn,$message) or die("Could not write output\n"); // reverse client input and send back
echo json_encode(array('message'=>$message,'code'=>'0'));
}

// close sockets
socket_close($spawn);
socket_close($socket);
