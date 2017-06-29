<?php
$con = mysql_connect("192.168.10.202","bangu","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bangu", $con);

$result = mysql_query("SELECT * FROM u_admin");

while($row = mysql_fetch_array($result))
  {
  //echo $row['FirstName'] . " " . $row['LastName'];
  echo "1";
  }

mysql_close($con);
?>