<?php
/**
 * Pixmicat! Module System Dispatcher
 *
 * 設定環境變數並初始化物件以供使用
 * 
 * @package PMCLibrary
 * @version $Id: lib_pms.php 468 2007-07-09 09:07:39Z scribe $
 * @date $Date: 2007-07-09 17:07:39 +0800 (星期一, 09 七月 2007) $
 */

$PMSEnv = array( // PMS 環境常數
	'MODULE.PATH' => PHP_DIRECTORY.'module/',
	'MODULE.PAGE' => PHP_SELF.'?mode=module&amp;load=',
	'MODULE.LOADLIST' => $ModuleList
);
require(PHP_DIRECTORY.'lib/pms.php');
$PMS = new PMS($PMSEnv);
?>