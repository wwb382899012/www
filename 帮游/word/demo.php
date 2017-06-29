<?php
include_once('MhtFile.php');

/**
 * ����HTML�����ȡword�ĵ�����
 * ����һ������Ϊmht���ĵ����ú���������ļ����ݲ���Զ������ҳ���е�ͼƬ��Դ
 * �ú�����������MhtFileMaker
 * �ú��������img��ǩ����ȡsrc������ֵ�����ǣ�src������ֵ���뱻���Ű�Χ����������ȡ
 * 
 * @param string $content HTML����
 * @param string $absolutePath ��ҳ�ľ���·�������HTML�������ͼƬ·��Ϊ���·������ô����Ҫ��д������������øú����Զ���ɾ���·����������������Ҫ��/����
 * @param bool $isEraseLink �Ƿ�ȥ��HTML�����е�����
* by www.jb51.net
 */
function getWordDocument( $content , $absolutePath = "" , $isEraseLink = true )
{
    $mht = new MhtFileMaker();
    if ($isEraseLink)
        $content = preg_replace('/<a\s*.*?\s*>(\s*.*?\s*)<\/a>/i' , '$1' , $content);   //ȥ������
    $images = array();
    $files = array();
    $matches = array();
    //����㷨Ҫ��src�������ֵ����ʹ������������
    if ( preg_match_all('/<img[.\n]*?src\s*?=\s*?[\"\'](.*?)[\"\'](.*?)\/>/i',$content ,$matches ) )
    {
        $arrPath = $matches[1];
        for ( $i=0;$i<count($arrPath);$i++)
        {
            $path = $arrPath[$i];
            $imgPath = trim( $path );
            if ( $imgPath != "" )
            {
                $files[] = $imgPath;
                if( substr($imgPath,0,7) == 'http://')
                {
                    //�������ӣ�����ǰ׺
                }
                else
                {
                    $imgPath = $absolutePath.$imgPath;
                }
                $images[] = $imgPath;
            }
        }
    }
    $mht->AddContents("tmp.html",$mht->GetMimeType("tmp.html"),$content);

    for ( $i=0;$i<count($images);$i++)
    {
        $image = $images[$i];
        if ( @fopen($image , 'r') )
        {
            $imgcontent = @file_get_contents( $image );
            if ( $content )
                $mht->AddContents($files[$i],$mht->GetMimeType($image),$imgcontent);
        }
        else
        {
            echo "file:".$image." not exist!<br />";
        }
    }

    return $mht->GetFile();
}


$html=file_get_contents('http://www.1b1u.com/admin/t33/login/trip?id=29696');
$fileContent = getWordDocument($html,"http://www.jb51.net/Music/etc/");
//1��ֱ�ӱ���
/*$fp = fopen("test.doc", 'w');
fwrite($fp, $fileContent);
fclose($fp); */ 

//2������
header("Content-Type:   application/msword");       
header("Content-Disposition:   attachment;   filename=doc.doc"); //ָ���ļ�����  
header("Pragma:   no-cache");
header("Expires:   0");
echo $fileContent;

