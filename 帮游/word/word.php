<?php
class word
{ 
    function start()
    {
        ob_start();
        echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"
        xmlns:w="urn:schemas-microsoft-com:office:word"
        xmlns="http://www.w3.org/TR/REC-html40">';
    }
    function save($path)
    {

        echo "</html>";
        $data = ob_get_contents();
        ob_end_clean();

        $this->wirtefile ($path,$data);
    }

    function wirtefile ($fn,$data)
    {
        $fp=fopen($fn,"wb");
        fwrite($fp,$data);
        fclose($fp);
    }
}

$html = ' 
<table width=600 cellpadding="6" cellspacing="1" bgcolor="#336699"> 
<tr bgcolor="White"> 
  <td>PHP10086</td> 
  <td><a href="http://www.jb51.net" target="_blank" >http://www.jb51.net</a></td> 
</tr> 
<tr bgcolor="red"> 
  <td>PHP10086</td> 
  <td><a href="http://www.jb51.net" target="_blank" >http://www.jb51.net</a></td> 
</tr> 
<tr bgcolor="White"> 
  <td colspan=2 > 
  PHP10086<br> 
  ��׵�PHP����������վ 
  <img src="http://www.jb51.net/wp-content/themes/WPortal-Blue/images/logo.gif"> 
  </td> 
</tr> 
</table> 
'; 

//�������� 
for($i=1;$i<=3;$i++){ 
    $word = new word(); 
    $word->start(); 
    //$html = "aaa".$i; 
    $wordname = 'PHP�̳���վ--jb51.net'.$i.".doc"; 
    echo $html; 
    $word->save($wordname); 
    ob_flush();//ÿ��ִ��ǰˢ�»��� 
    flush(); 
}