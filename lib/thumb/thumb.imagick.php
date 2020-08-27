<?php
/**
 * Thumbnail Generate API: Imagick Wrapper
 *
 * 提供程式便於以 Imagick (Imagick Image Library) 生成預覽圖的物件
 *
 * @package PMCLibrary
 * @version $Id: thumb.imagick.php 490 2007-07-26 14:36:47Z scribe $
 * @date $Date: 2007-07-26 22:36:47 +0800 (星期四, 26 七月 2007) $
 */

class ThumbWrapper{
	var $sourceFile, $sourceWidth, $sourceHeight, $thumbWidth, $thumbHeight, $thumbQuality;

	function ThumbWrapper($sourceFile='', $sourceWidth=0, $sourceHeight=0){
		$this->sourceFile = $sourceFile;
		$this->sourceWidth = $sourceWidth;
		$this->sourceHeight = $sourceHeight;
	}

	function getClass(){
		$str = 'Imagick Wrapper';
		if($this->isWorking()){
			$a = new Imagick(); $b = $a->getVersion(); $b = $b['versionString'];
			$str .= ' : '.str_replace(strrchr($b, ' '), '', $b);
			unset($a); unset($b);
		}
		return $str;
	}

	function isWorking(){
		return extension_loaded('imagick') && class_exists('Imagick');
	}

	function setThumbnailConfig($thumbWidth, $thumbHeight, $thumbQuality=50){
		$this->thumbWidth = $thumbWidth;
		$this->thumbHeight = $thumbHeight;
		$this->thumbQuality = $thumbQuality;
	}

	function makeThumbnailtoFile($destFile){
		$returnVal = false;
		if(!$this->isWorking()) return false;
		$image = new Imagick($this->sourceFile);
		$image->setCompressionQuality($this->thumbQuality);
		$image->thumbnailImage($this->thumbWidth, $this->thumbHeight);
		$returnVal = $image->writeImage($destFile);
		unset($image);
		return $returnVal;
	}
}
?>