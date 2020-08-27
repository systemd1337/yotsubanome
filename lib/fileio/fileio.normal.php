<?php
/**
 * FileIO Normal 本機儲存 API
 *
 * 以本機硬碟空間作為圖檔儲存的方式，並提供一套方法供程式管理圖片
 *
 * @package PMCLibrary
 * @version $Id: fileio.normal.php 393 2007-04-30 11:25:29Z scribe $
 * @date $Date: 2007-04-30 19:25:29 +0800 (星期一, 30 四月 2007) $
 */

class FileIO{
	var $path, $imgPath, $thumbPath;

	/* private 藉由檔名分辨圖檔存放位置 */
	function _getImagePhysicalPath($imgname){
		return (substr($imgname, -5)=='s.jpg' ? $this->thumbPath : $this->imgPath).$imgname;
	}

	function FileIO($parameter='', $ENV){
		$this->path = $ENV['PATH'];
		$this->imgPath = $this->path.$ENV['IMG'];
		$this->thumbPath = $this->path.$ENV['THUMB'];
	}

	function init(){
		return true;
	}

	function imageExists($imgname){
		return file_exists($this->_getImagePhysicalPath($imgname));
	}

	function deleteImage($imgname){
		if(is_array($imgname)){ foreach($imgname as $i){ if(!@unlink($this->_getImagePhysicalPath($i))) return false; } return true; }
		else{ return @unlink($this->_getImagePhysicalPath($imgname)); }
	}

	function uploadImage($imgname='', $imgpath='', $imgsize=0){
		return false;
	}

	function getImageFilesize($imgname){
		return @filesize($this->_getImagePhysicalPath($imgname));
	}

	function getImageURL($imgname){
		return $this->getImageLocalURL($imgname);
	}
}
?>