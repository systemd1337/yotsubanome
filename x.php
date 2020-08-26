<?php
/*yotsubanome multiBBS reader
from 2ch PHP script 18c
X v0.0.0.4
*/

//error_reporting(E_ALL); // show all errors for debugging

/* DIR config */
if(!defined("BBSMENU")) define("BBSMENU", 0); // BBSmenu for the frame at BBS home page
if(!defined("INDEXBBS")) define("INDEXBBS", 0); // home page BBS list
if(!BBSMENU && !INDEXBBS){
	define("LISTBBS", 1); // misc. BBS list
	$qazw = '../';
	}else{
	$qazw = './';
	define("LISTBBS", 0); // misc. BBS list
}

/* Config */
if(!defined("PHP_SELF"))define("PHP_SELF", 'yotsubanome.php'); // ã“ã®ã‚¹ã‚¯ãƒªãƒ—ãƒˆå // ä¸»ç¨‹å¼å (è‹¥æ˜¯ä¿®æ”¹äº†ä¸»ç¨‹å¼åï¼Œè«‹é…åˆä¿®æ”¹)
$config['TITLE'] = 'ç”»åƒæŽ²ç¤ºæ¿';

/* BBS SEARCH */
$board = array();
$handle = opendir($qazw);
while(false !== ($file = readdir($handle))){
if($file != 'test')
	if($file != 'my' and $file != 'lite' and $file != 'pg' and $file != 'script' and $file != '.' and $file != '..'){ // do not include system core directory or distribution directory
		if(is_dir($qazw.$file) and is_file($qazw.$file.'/config.php') || is_file($qazw.$file.'/'.PHP_SELF)) array_push($board, $file);
	}
}
closedir($handle);

/* BBS list display */
$bbsi = 0;
$bbsdat = '';
if(BBSMENU && !INDEXBBS){
	foreach($board as $dir){
		if($dir != 'test') include($qazw.$dir.'/config.php');
		$config['TITLE'] = preg_replace('/ï¼ å››è‘‰ã®èŠ½(.*?)/', '', $config['TITLE']);
		$bbsdat .= '<a href="'.$qazw.$dir.'/" target="cont">'.$config['TITLE'].'</a><br>';
//++++	<font color="#ff0099">new</font>
//++++	<font color="#6f0069">old</font>
		$bbsi++;
	}
}
/*if(!BBSMENU && INDEXBBS){
	foreach($board as $dir){
		include('../'.$dir.'/config.php');
		$config['TITLE'] = preg_replace('/ï¼ å››è‘‰ã®èŠ½(.*?)/', '', $config['TITLE']);
		$bbsdat .= '<a href="'.$qazw.$dir.'/">'.$config['TITLE'].'</a><br>';
//++++	<font color="#ff0099">new</font>
//++++	<font color="#6f0069">old</font>
		$bbsi++;
	}
}*/
if(!BBSMENU/* && !INDEXBBS && LISTBBS*/){
	foreach($board as $dir){
		if($dir != 'test') include($qazw.$dir.'/config.php');
		$config['TITLE'] = preg_replace('/ï¼ å››è‘‰ã®èŠ½(.*?)/', '', $config['TITLE']);
		$bbsdat .= '<a href="'.$qazw.$dir.'/">'.$config['TITLE'].'</a><br>';
//++++	<font color="#ff0099">new</font>
//++++	<font color="#6f0069">old</font>
		$bbsi++;
	}
}

/* Print BBS list */
print_r($bbsdat);
//echo $bbsdat;
//if(LISTBBS) print_r($board);
//echo LISTBBS,'<br>';
//echo BBSMENU.'<br>';
//echo INDEXBBS.'<br>';
?>
