<?php

include 'images.php';
$images = new images();
if( !$image = $_POST["img"] ){
    $ret['result_code'] = 101;
    $ret['result_des'] = "图片不存在";
} else {
    $image = $image;
    $x = $_POST["x"];
	$y = $_POST["y"];
	$w = $_POST["w"];
	$h = $_POST["h"];
	$re=$images->cutImage($image,$x,$y,$w,$h);
	$ret['result_code'] = 1;
	$ret['result_des'] =$re;
}
echo json_encode($ret);
exit();