<?php
/**
 * Thumbnail Generate API: MagickWand Wrapper
 *
 * 提供程式便於以 MagickWand for PHP 生成預覽圖的物件
 *
 * @package PMCLibrary
 * @version $Id: thumb.magickwand.php 490 2007-07-26 14:36:47Z scribe $
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
		$str = 'MagickWand Wrapper';
		if($this->isWorking()){
			$a = MagickGetVersion(); $b = $a[0];
			$str .= ' : '.str_replace(strrchr($b, ' '), '', $b);
			unset($a); unset($b);
		}
		return $str;
	}

	function isWorking(){
		return extension_loaded('magickwand') && function_exists('MagickThumbnailImage');
	}

	function setThumbnailConfig($thumbWidth, $thumbHeight, $thumbQuality=50){
		$this->thumbWidth = $thumbWidth;
		$this->thumbHeight = $thumbHeight;
		$this->thumbQuality = $thumbQuality;
	}

	function makeThumbnailtoFile($destFile){
		$returnVal = false;
		if(!$this->isWorking()) return false;
		$image = NewMagickWand();
		MagickReadImage($image, $this->sourceFile);
		MagickSetImageCompressionQuality($image, $this->thumbQuality);
		MagickThumbnailImage($image, $this->thumbWidth, $this->thumbHeight);
		$returnVal = MagickWriteImage($image, $destFile);
		unset($image);
		return $returnVal;
	}
}
?>