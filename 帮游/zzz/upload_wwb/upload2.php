<?php
//php ���ձ��ύ��Ϣ����ӡ
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
      <input type="text" name="name" id="" value="�ű�֮��" />
      <input type="text" name="blog" id="" value="http://jb51.net" />
      <input type="submit" name="do" id="do" value="submit" />
    </form>
    <script>
    $("form").submit(function(e){
      e.preventDefault();
       
      //�ն���Ȼ�����
      var fd = new FormData();
      fd.append("name", "�ű�֮��");
      fd.append("blog", "http://jb51.net");
      fd.append("file", document.getElementById("file"));
      //fd.append("file", $(":file")[0].files[0]); //jQuery ��ʽ
      fd.append("do", "submit");
       
      //ͨ�������󴴽� FormData
      var fd = new FormData(document.getElementById("form"));
      //var fd = new FormData($("form:eq(0)")[0]); //jquery ��ʽ
       
      //XMLHttpRequest ԭ����ʽ��������
      var xhr = new XMLHttpRequest();    
      xhr.open("POST" ,"" , true);
      xhr.send(fd);
      xhr.onload = function(e) {
        if (this.status == 200) {
          alert(this.responseText);
        };
      };
      return;
      //jQuery ��ʽ��������
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