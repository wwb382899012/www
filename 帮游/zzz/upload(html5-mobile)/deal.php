<?php
//http://yunzhu.iteye.com/blog/2177923
//var_dump($_FILES);
move_uploaded_file($_FILES["imageUpload"]["tmp_name"], "upload/" . $_FILES["imageUpload"]["name"]); 
echo "Stored in: " . "upload/" . $_FILES["imageUpload"]["name"]; 
?>