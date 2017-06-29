<?php
//php 接收表单提交信息并打印
if( isset( $_REQUEST['do']) ){
  var_dump($_REQUEST);
  var_dump($_FILES);
  die();
}
 
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>FormData Test - jb51.net</title>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
  </head>
  <body>
    <form id="form">
      <input type="file" name="file" id="file" />
      <input type="text" name="name" id="" value="脚本之家" />
      <input type="text" name="blog" id="" value="http://jb51.net" />
      <input type="submit" name="do" id="do" value="submit" />
    </form>
    <script>
    $("form").submit(function(e){
      e.preventDefault();
       
      //空对象然后添加
      var fd = new FormData();
      fd.append("name", "脚本之家");
      fd.append("blog", "http://jb51.net");
      fd.append("file", document.getElementById("file"));
      //fd.append("file", $(":file")[0].files[0]); //jQuery 方式
      fd.append("do", "submit");
       
      //通过表单对象创建 FormData
      var fd = new FormData(document.getElementById("form"));
      //var fd = new FormData($("form:eq(0)")[0]); //jquery 方式
       
      //XMLHttpRequest 原生方式发送请求
      var xhr = new XMLHttpRequest();    
      xhr.open("POST" ,"" , true);
      xhr.send(fd);
      xhr.onload = function(e) {
        if (this.status == 200) {
          alert(this.responseText);
        };
      };
      return;
      //jQuery 方式发送请求
      $.ajax({
        type:"post",
        //url:"",
        data: fd,
        processData: false,
        contentType: false
      }).done(function(res){
        console.log(res);
      });
       
      return false;
    });
    </script>
  </body>
</html>