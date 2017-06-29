<?php


/*
function idcard_check($id)
{
    if ( ! preg_match('/^\d{18}$|^\d{17}X$/', $id) ) {
        return false;
    }
 
    $id = str_split($id);
    $x  = array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2);
    $y  = array(1,0,'X',9,8,7,6,5,4,3,2);
 
    $sum = 0;
    foreach ($x as $k=>$v) {
        $sum += $id[$k]*$v;
    }
    return (string)$y[$sum%11]===$id[count($id)-1];
}

$re=idcard_check('36073519910221081x');
var_dump($re);*/



/*
//$a=base64_encode('1234'.'mtk');
$b=base64_decode('MTAxMzM2MWIxdQ==');
//echo $a;
echo $b;*/


$name="51ubang.com";
$ip=gethostbyname($name);
var_dump($ip);

