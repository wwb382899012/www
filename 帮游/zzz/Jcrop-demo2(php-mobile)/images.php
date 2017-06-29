<?php

define( 'ROOT_PATH', realpath(dirname(__FILE__)).'/' ); //路径可以修改为自动获取

class Images{
	//裁剪图片
	function cutImage($image,$x,$y,$w,$h)
	{
		$info = $this->getImageInfo( $image);
		if( !$info ){
			$ret['result_code'] = 102;
			$ret['result_des'] = "图片不存在";
		} else {
			$width = $srcWidth = $info['width'];
			$height = $srcHeight = $info['height'];
			$type = empty($type)?$info['type']:$type;
			$type = strtolower($type);
			unset($info);
			// 载入原图
			$createFun = 'imagecreatefrom'.($type=='jpg'?'jpeg':$type);
			$srcImg     = $createFun($image);
			//创建缩略图
			if($type!='gif' && function_exists('imagecreatetruecolor'))
				$thumbImg = imagecreatetruecolor($width, $height);
			else
				$thumbImg = imagecreate($width, $height);
			// 复制图片
			if(function_exists("imagecopyresampled"))
				imagecopyresampled($thumbImg, $srcImg, 0, 0, 0, 0, $width, $height, $srcWidth,$srcHeight);
			else
				imagecopyresized($thumbImg, $srcImg, 0, 0, 0, 0, $width, $height,  $srcWidth,$srcHeight);
			if('gif'==$type || 'png'==$type) {

				$background_color  =  imagecolorallocate($thumbImg,  0,255,0);
				imagecolortransparent($thumbImg,$background_color);
			}
			// 对jpeg图形设置隔行扫描
			if('jpg'==$type || 'jpeg'==$type) 
				imageinterlace($thumbImg,1);
			// 生成图片
			$imageFun = 'image'.($type=='jpg'?'jpeg':$type);
			$thumbname01 = str_replace("ori", "200", $image);
			$thumbname02 = str_replace("ori", "130", $image);
			$thumbname03 = str_replace("ori", "112", $image);
			$imageFun($thumbImg,$thumbname01,100);
			$imageFun($thumbImg,$thumbname02,100);
			$imageFun($thumbImg,$thumbname03,100);
			$thumbImg01 = imagecreatetruecolor(200,200);
			imagecopyresampled($thumbImg01,$thumbImg,0,0,$x,$y,200,200,$w,$h);
			
			$thumbImg02 = imagecreatetruecolor(130,130);
			imagecopyresampled($thumbImg02,$thumbImg,0,0,$x,$y,130,130,$w,$h);
			
			$thumbImg03 = imagecreatetruecolor(112,112);
			imagecopyresampled($thumbImg03,$thumbImg,0,0,$x,$y,112,112,$w,$h);
			
			$imageFun($thumbImg01,$thumbname01,100);
			$imageFun($thumbImg02,$thumbname02,100);
			$imageFun($thumbImg03,$thumbname03,100);
			imagedestroy($thumbImg01);
			imagedestroy($thumbImg02);
			imagedestroy($thumbImg03);
			imagedestroy($thumbImg);
			imagedestroy($srcImg);
			$re=array(
				"big"   => str_replace(ROOT_PATH, "", $thumbname01),
				"middle"=> str_replace(ROOT_PATH, "", $thumbname02),
				"small" => str_replace(ROOT_PATH, "", $thumbname03)
			);
			return $re;
		}
	}
	
	function resize( $ori )
	{
		if( preg_match('/^http:\/\/[a-zA-Z0-9]+/', $ori ) ){
			return $ori;
		}
		$info = getImageInfo( ROOT_PATH . $ori );
		if( $info ){
			//上传图片后切割的最大宽度和高度
			$width = 500;
			$height = 500;
			$scrimg = ROOT_PATH . $ori;
			if( $info['type']=='jpg' || $info['type']=='jpeg' ){
				$im = imagecreatefromjpeg( $scrimg );
			}
			if( $info['type']=='gif' ){
				$im = imagecreatefromgif( $scrimg );
			}
			if( $info['type']=='png' ){
				$im = imagecreatefrompng( $scrimg );
			}
			if( $info['width']<=$width && $info['height']<=$height ){
				return;
			} else {
				if( $info['width'] > $info['height'] ){
					$height = intval( $info['height']/($info['width']/$width) );
				} else {
					$width = intval( $info['width']/($info['height']/$height) );
				}
			}
			$newimg = imagecreatetruecolor( $width, $height );
			imagecopyresampled( $newimg, $im, 0, 0, 0, 0, $width, $height, $info['width'], $info['height'] );
			imagejpeg( $newimg, ROOT_PATH . $ori );
			imagedestroy( $im );
		}
		return;
    }
    //图像信息
	function getImageInfo( $img )
	{
		$imageInfo = getimagesize($img);
		if( $imageInfo!== false) {
			$imageType = strtolower(substr(image_type_to_extension($imageInfo[2]),1));
			$info = array(
					"width"		=>$imageInfo[0],
					"height"	=>$imageInfo[1],
					"type"		=>$imageType,
					"mime"		=>$imageInfo['mime'],
			);
			return $info;
		}else {
			return false;
		}
    }
}