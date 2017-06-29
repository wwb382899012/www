<?php 

//phpinfo();

$s = new SphinxClient;
$s->setServer("192.168.10.202", 9312);
$s->setMatchMode(SPH_MATCH_ANY);
$s->setMaxQueryTime(3);

$res = $s->query("1",'*');


$ids = array_keys($res['matches']);



print_r($res);echo "<br /><br />";

print_r($ids);echo "<br /><br />";


 ?>