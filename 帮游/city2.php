<?php 
header("Content-type: text/html; charset=utf-8"); 
        if (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		}
		elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_X_FORWARDED')) {
			$ip = getenv('HTTP_X_FORWARDED');
		}
		elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		
		}
		elseif (getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		}
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
 
  //echo $_SERVER["HTTP_CLIENT_IP"];
  //echo '<br/>';
  $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=cwnZNPB1ouBCEu9sG423iL63&ip={$ip}&coor=bd09ll");
  $json = json_decode($content,true);
  var_dump($json);
 
 
  /*echo 'log:',$json->{'content'}->{'point'}->{'x'};//按层级关系提取经度数据
  echo '<br/>';
  echo 'lat:',$json->{'content'}->{'point'}->{'y'};//按层级关系提取纬度数据
  echo '<br/>';
  print $json->{'content'}->{'address'};//按层级关系提取address数据*/
?>