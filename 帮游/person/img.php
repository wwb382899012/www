<?php


$str = 'dd';
$font_file = "arial.ttf";//字体设置部分linux的路径
$text  = $str; //要显示的字符串
$font_size = 14; //字体大小
$arr = imagettfbbox($font_size,0,$font_file,$text); //确定会变化的字符串的位置
$text_width = ($arr[2]-$arr[0])+10; //字符串文本框长度
$text_height = ($arr[3]-$arr[5])+50; ////字符串文本框高度
 
$im = imagecreate($text_width,$text_height);
$white = imagecolorallocate($im,255,255,255);
imagecolortransparent($im,$white);  //imagecolortransparent() 设置具体某种颜色为透明色，若注释
$blue = imagecolorallocate($im,0,0,0);
 
$arr = imagettftext($im,$font_size,0,0,$text_height-50,$blue,$font_file,$text);
imageline($im,$arr[0],$arr[1],$arr[2],$arr[3],$blue);
//imagettftext($im,12,0,0,20,$black,"c:\windows\Fonts\simhei.ttf",$url);//字体设置windows的路径
 
header("Content-type:image/png");
imagepng($im);
imagedestroy($im);