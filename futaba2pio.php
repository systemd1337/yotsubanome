<?php
/**
 * Pixmicat! PIO å…¬ç”¨ç¨‹å¼ - Pixmicat!-Log -> Pixmciat-PIO (Log) è³‡æ–™æ ¼å¼è½‰æ›å™¨
 *
 * æœ¬ç¨‹å¼å¯ä»¥è‡ª Log ç‰ˆè½‰æ›æ ¼å¼è‡ª PIO ç‰ˆ Log è³‡æ–™ä¾†æºã€‚
 *
 * æ³¨æ„ï¼šæœ¬ç¨‹å¼æ˜¯çµ¦ Log ç‰ˆèˆŠç¨‹å¼ä½¿ç”¨ä»¥è½‰æ›ï¼Œéžç›´æŽ¥ç”¨åœ¨ PIO æ–°ç‰ˆä¸Šé¢
 *
 * @package PMCUtility
 * @version $Id$
 * @date $Date$
 */

define("PHP_DIRECTORY", '../../core/'); // yotsubanome "C:\windows\system\"
include_once(PHP_DIRECTORY.'config.php');
define('DEL_ZOMBIE', true); // å¦‚æžœæœ‰æ–‡ç« æ²’æœ‰å‡ºç¾åœ¨æ¨¹ç‹€çµæ§‹ï¼Œæ˜¯å¦ä¸è¦è½‰æ›ç›´æŽ¥åˆªé™¤ï¼Ÿ
define('SAVE_LOG', true); // æ˜¯å¦å„²å­˜æ–°çµæ§‹ (èˆŠçµæ§‹å°‡ä¿ç•™ä¸¦æ›´å)
define('LOGFILE', "img.csv_loog");
define('TREEFILE', "tree.csv_loog");

// å„è³‡æ–™å„²å­˜æª”ä½ç½®
$logimg = file(LOGFILE); $logimg_cnt = count($logimg);
$trees = array(); // æ–‡ç« å›žæ‡‰å°æ‡‰ç·¨è™Ÿé™£åˆ— (å›žæ‡‰No. => é¦–ç¯‡No.)
$logtree = array_map('rtrim', file(TREEFILE));
foreach($logtree as $treeline){ // è§£æžæ¨¹ç‹€çµæ§‹è£½æˆå°æ‡‰ç´¢å¼•
	if($treeline=='') continue;
	$tline = explode(',', $treeline); $tline_cnt = count($tline);
	$trees[$tline[0]] = 0;
	for($t = 1; $t < $tline_cnt; $t++){ $trees[$tline[$t]] = $tline[0]; }
}
unset($logtree);

// åœ–æª”å­˜æ”¾ä½ç½®
$dirimg = realpath('.').DIRECTORY_SEPARATOR.IMG_DIR;

/* å–å¾—åœ–æª”çš„å¯¬é•·ä»¥å­˜å…¥è³‡æ–™ */
function getImageWH($imgname){
	global $dirimg;

	$imgpath = $dirimg.$imgname;
	if(!file_exists($imgpath)) return array(0, 0);
	list($width, $height,) = getimagesize($imgpath);
	return array($width, $height); // å›žå‚³å¯¬é«˜é™£åˆ—
}

/* å–å¾—åœ–æª”çš„æª”æ¡ˆå¤§å°å­—ä¸² (å–®ä½ KB) */
function getImageSizeText($imgname){
	global $dirimg;

	$imgpath = $dirimg.$imgname;
	if(!file_exists($imgpath)) return false;
	$imgsize = filesize($imgpath);
	return $imgsize = ($imgsize>=1024) ? (int)($imgsize/1024).' KB' : $imgsize.' B'; // KBå’ŒBçš„åˆ¤åˆ¥ // å›žå‚³æª”æ¡ˆå¤§å°å­—ä¸²
}

/* å–å¾—å›žæ‡‰çš„å°è±¡ç·¨è™Ÿ */
function getReplyTargetNo($no){
	global $trees;

	if(isset($trees[$no])) return $trees[$no];
	return false;
}

/* æ›´æ”¹ log æª”çµæ§‹ */
// OLD: ç·¨è™Ÿ,æ™‚é–“ (ID),åç¨±,E-Mail,æ¨™é¡Œ,å…§æ–‡,ç‹€æ…‹æ——æ¨™,ä¸»æ©Ÿä½ç½®,ç·¨ç¢¼å¾Œæ–‡ç« å¯†ç¢¼,é™„åŠ åœ–æª”é¡žåž‹,é è¦½åœ–å¯¬,é è¦½åœ–é•·,Unixæ™‚é–“æ’®è¨˜,é™„åŠ åœ–æª”MD5,

// SUPER DUPER UBER OLD:
// 0$no,1$now,2$name,3$email,4$sub,5$com,6$url,7$host,8$pwd,9$ext,10$w,11$h,12$time,13$chk
// (futaba)

// SUPER DUPER OLD:
// 0$no,1$now,2$name,3$email,4$sub,5$com,6$url,7$host,8$pwd,9$ext,10$w,11$h,12$time,13$chk,14$ip
// (early yotsubanome)

// SUPER OLD:
// 0$no,1$now,2$name,3$email,4$sub,5$com,6$url,7$host,8$pwd,9$ext,10$w,11$h,12$time,13$chk,14$ip,15$filename,16$mime
// (old yotsubanome)

// OLD:
// 0$no,1$now,2$name,3$email,4$sub,5$com,6$url,7$host,8$pwd,9$ext,10$w,11$h,12$time,13$chk,14$imgsize,15$filename,16$imgW,17$imgH,18$category,19$resto
// (older new yotsubanome)


// NEW: ç·¨è™Ÿ,å›žæ‡‰ç›®æ¨™ç·¨è™Ÿ,é™„åŠ åœ–æª”MD5,é¡žåˆ¥æ¨™ç±¤,Unixæ™‚é–“æ’®è¨˜,é™„åŠ åœ–æª”é¡žåž‹,åœ–æª”å¯¬,åœ–æª”é•·,åœ–æª”å¤§å°,é è¦½åœ–å¯¬,é è¦½åœ–é•·,ç·¨ç¢¼å¾Œæ–‡ç« å¯†ç¢¼,æ™‚é–“ (ID),åç¨±,E-mail,æ¨™é¡Œ,å…§æ–‡,ä¸»æ©Ÿä½ç½®,ç‹€æ…‹æ——æ¨™,
// NEW:
// 0$no,1$resto,2$chk,3$category,4$time,5$ext,6$imgw,7$imgh,8$imgsize,9$filename,10$w,11$h,12$pwd,13$now,14$name,15$email,16$sub,17$com,18$host,19$url
// â†‘ = â†“ the line above is equal to the line below (The line above is the old futaba variable names, and the line below is the new yotsubanome variable names.)
// 0$no,1$resto,2$md5chksum,3$category,4$tim,5$ext,6$imgw,7$imgh,8$imgsize,9$filename,10$tw,11$th,12$pwd,13$now,14$name,15$email,16$sub,17$com,18$host,19$status
// (new yotsubanome)

header('Content-Type: text/plain; charset=utf-8');
$newLine = array(); // æ–°è³‡æ–™æ ¼å¼
$countda = count(explode(',', $logimg[0]));
if(count(explode(',', $logimg[0])) != 15 && count(explode(',', $logimg[0])) != 17 && count(explode(',', $logimg[0])) != 19){
	if($countda = 21) die('File structure error. It\'s already a PIO structure. ['.$countda.']'.var_dump($logimg));
	else die('File structure error. ['.$countda.']'.var_dump($logimg));
}
for($i = 0; $i < $logimg_cnt; $i++){
	$l = explode(',', $logimg[$i]); // èˆŠè³‡æ–™æ ¼å¼ (ç”¨é€—è™Ÿæ‹†é–‹)
	$s = getImageWH($l[12].$l[9]); // åœ–æª”å¯¬é•· (å¯¬, é•·)
	$l[6] = str_replace('_THREADSTOP_', '_TS_', $l[6]); // è¨Žè«–ä¸²åœæ­¢æ——æ¨™è‡ª _THREADSTOP_ æ”¹ç‚º _TS_
	$l[2] = preg_replace('/<(.*?)>/', '', $l[2]); // name crap that breaks HTTP
	$l[2] = preg_replace('/&nbsp;/', '', $l[2]); // name crap that breaks HTTP
	$l[2] = preg_replace('/â—†å››è‘‰(.*?)##(.*?)##/', '', $l[2]); // name crap that breaks HTTP
	if(strstr($l[14], "\n")){ $l[15] = $l[16] = $l[17] = $l[18] = $l[19] = ''; } // from futaba
	if(strstr($l[14], ".") && $l[15] = false || !strstr($l[14], "KB") && !strstr($l[14], "B")){ $l[15] = $l[16] = $l[17] = $l[18] = $l[19] = ''; } // from early yotsubanome
	if(strstr($l[14], ".") && strstr($l[16], "/") || !strstr($l[14], "KB") && !strstr($l[14], "B")){ $l[14] = $l[16] = ''; } // from old yotsubanome
	//++++!if(strstr($l[1], "1969"))
	if(!DEL_ZOMBIE || getReplyTargetNo($l[0]) !== false && $l[1] !== false) $newLine[] = implode(',', array($l[0], getReplyTargetNo($l[0]), $l[13], '', $l[12], $l[9], $s[0], $s[1], getImageSizeText($l[12].$l[9]), $l[15], (int) $l[10], (int) $l[11], $l[8], $l[1], $l[2], $l[3], $l[4], $l[5], $l[7], $l[6], ''))."\r\n";
}

$writeContent = implode('', $newLine);

if(SAVE_LOG){
	rename(LOGFILE, LOGFILE.'.old');
	$fs = fopen(LOGFILE, 'w');
	fwrite($fs, $writeContent);
	fclose($fs);
	die('File save OK. The old file already renamed.');
}else{
	echo $writeContent;
}
?>
