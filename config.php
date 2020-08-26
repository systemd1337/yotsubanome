<?php
/*
Pixmicat! : åœ–å’ªè²“è²¼åœ–ç‰ˆç¨‹å¼
http://pixmicat.openfoundry.org/
ç‰ˆæ¬Šæ‰€æœ‰ Â© 2005-2009 Pixmicat! Development Team

ç‰ˆæ¬Šè²æ˜Žï¼š
æ­¤ç¨‹å¼æ˜¯åŸºæ–¼ãƒ¬ãƒƒãƒ„PHP!<http://php.s3.to/>çš„gazou.phpã€
åŒè‘‰ã¡ã‚ƒã‚“<http://www.2chan.net>çš„futaba.phpæ‰€æ”¹å¯«ä¹‹è¡ç”Ÿè‘—ä½œç¨‹å¼ï¼Œå±¬æ–¼è‡ªç”±è»Ÿé«”ï¼Œ
ä»¥The Clarified Artistic Licenseä½œç‚ºç™¼ä½ˆæŽˆæ¬Šæ¢æ¬¾ã€‚
æ‚¨å¯ä»¥éµç…§The Clarified Artistic Licenseä¾†è‡ªç”±ä½¿ç”¨ã€æ•£æ’­ã€ä¿®æ”¹æˆ–è£½æˆè¡ç”Ÿè‘—ä½œã€‚
æ›´è©³ç´°çš„æ¢æ¬¾åŠå®šç¾©è«‹åƒè€ƒéš¨é™„"LICENSE"æ¢æ¬¾å‰¯æœ¬ã€‚

ç™¼ä½ˆé€™ä¸€ç¨‹å¼çš„ç›®çš„æ˜¯å¸Œæœ›å®ƒæœ‰ç”¨ï¼Œä½†æ²’æœ‰ä»»ä½•æ“”ä¿ï¼Œç”šè‡³æ²’æœ‰é©åˆç‰¹å®šç›®çš„è€Œéš±å«çš„æ“”ä¿ã€‚
é—œæ–¼æ­¤ç¨‹å¼ç›¸é—œçš„å•é¡Œè«‹ä¸è¦è©¢å•ãƒ¬ãƒƒãƒ„PHP!åŠåŒè‘‰ã¡ã‚ƒã‚“ã€‚

å¦‚æžœæ‚¨æ²’æœ‰éš¨è‘—ç¨‹å¼æ”¶åˆ°ä¸€ä»½The Clarified Artistic Licenseå‰¯æœ¬ï¼Œ
è«‹ç€è¦½http://pixmicat.openfoundry.org/license/ä»¥å–å¾—ä¸€ä»½ã€‚
*/

$config = array();
//++++include_once('lib/lib_language.php'); // language system for youbi

/*
yotsubanome development status
Î± = core under development [Database management] [core html output]
Î² = module system under development & Î±testing & multi BBS development
Î³ = language documentation and comments & Î² testing
Î´ = clean up and testing & Î³ testing and finishing

><

//comment guide
//---- removed
//==== ????
//++++---- QUICK AND DIRTY
//++++ planned to be added on

sparky4 made alot of changes with out following the guide lines
TODO:
	1. when pixmicat release 6 comes out, upgrade the code with all fixes.... (this will be a long prossess)
	2. import functions ported to yotsubanome's standards testing. (then export it to a module)
	3. multiboard system. DEFINE => $config_(DEFINE)
	4. core board execution option.
	5. Warning: touch(): Unable to create file ../img.csv_loog0 because Permission denied /var/www/+4/test/lib/pio/pio.logflockp.php #554
	6. Orginize the system files better
	7. a flexible HTML output (TXT BBS)
	8. TXT BBS FUNCTIONALITY AND APPEARANCE
	9. TEMPLATE UPDATEING to pixmica release 6?

	10. flexible time system
	11. Kb and b display properly in admin management functions

ChangeLog:
----------------------
2012/7/11
-[yotsubanome.php] added forced nanashi (BETA)
-[config.php] DEFINE => $config_(DEFINE)

2012/5/17
-[yotsubanome.php] fixed a bug at line 1398

2011/3/21
-[config.php & yotsubanome.php] time system is more flexible

2011/3/6
-[system wide] hide_btn is a bitch (the back ground is variablish now)

2011/3/4
-[config.php] multiBBS conversion has started with $config['KB']

2011/2/24
-[lib_css.php] created ()
-[lib_env.php] created

2011/2/20
-[yotsubanome.php] error system and found bugs rewt5
-[lib_common.php] error system and found bugs rewt5

2011/2/20
-[yotsubanome.php] fix post 0 page 0 index.htm bug

2011/2/18
-[lib_common.php] credit was given where credit was due w

2011/2/17
-[yotsubanome.php] Minor changes and fixes: added TEMP_DIR to init();
-[env.php] Created
-{lib/lib_common.php] very minor fix

2011/2/16
-[x.php] applied

2011/2/12
-[x.php] Created

2011/2/11
-[futaba2pio.php] Added more functionality
-[yotsubanome.php] Fixed comment too long click "here" bug
*/

//error_reporting(E_ALL);  //Show the cursed errors








if(is_file('../../conk/.pass.php')) include('../../conk/.pass.php'); // The password file sparky4 uses this line until the stable release is released


/*---- Part 1ï¼šç¨‹å¼åŸºæœ¬è¨­å®š ----*/
// ä¼ºæœå™¨å¸¸æ…‹è¨­å®š
if(!defined("PHP_SELF")) define("PHP_SELF", 'yotsubanome.php'); // ã“ã®ã‚¹ã‚¯ãƒªãƒ—ãƒˆå // ä¸»ç¨‹å¼å (è‹¥æ˜¯ä¿®æ”¹äº†ä¸»ç¨‹å¼åï¼Œè«‹é…åˆä¿®æ”¹)
//----define("TIME_ZONE", '-6'); // æ™‚å€è¨­å®š (GMTæ™‚å€ï¼Œåƒç…§ http://wwp.greenwichmeantime.com/ )
if(version_compare(PHP_VERSION, '5.0.0', '>=')){ // PHP5+
	date_default_timezone_set("America/Chicago");
}
$config['DATE_FORMAT'] = "Y/m/d"; // date format
//++++$config['YOUBI'] = array(_T('sun'),_T('mon'),_T('tue'),_T('wed'),_T('thu'),_T('fri'),_T('sat')); // week format
$config['TIME_FORMAT'] = 'H:i:s'; // time format
//----define("EN_SEC", 1); // æ™‚é–“è¡¨ç¤ºã«ã€Œç§’ã€ã‚’å«ã‚ã‚‹  å«ã‚ã‚‹:1 å«ã‚ãªã„:0
if(!defined("PIXMICAT_LANGUAGE")) define("PIXMICAT_LANGUAGE", 'en_US'); // èªžç³»èªžå®š // ja_JP en_US zh_TW
define("HTTP_UPLOAD_DIFF", 50); // HTTPä¸Šå‚³æ‰€æœ‰ä½å…ƒçµ„èˆ‡å¯¦éš›ä½å…ƒçµ„ä¹‹å…è¨±èª¤å·®å€¼
ini_set("memory_limit", '8M'); // PHPé‹è¡Œçš„æœ€å¤§è¨˜æ†¶é«”ä½¿ç”¨é‡ (phpå…§å®š8M / å»ºè­°32M)

// FileIOè¨­å®š
define("FILEIO_BACKEND", 'normal'); // FileIOå¾Œç«¯æŒ‡å®š
define("FILEIO_INDEXLOG", 'fileioindex.daty'); // FileIOç´¢å¼•è¨˜éŒ„æª” (å„²å­˜åœ¨æœ¬æ©Ÿç«¯)
define("FILEIO_PARAMETER", ''); // FileIOåƒæ•¸ (æœ¬æ©Ÿç«¯å„²å­˜)
//define("FILEIO_PARAMETER", serialize(array('ftp.example.com', 21, 'demo', 'demo', 'PASV', '/pwd/', 'http://www.example.com/~demo/pwd/', true))); // FileIOåƒæ•¸ (FTP)
//define("FILEIO_PARAMETER", serialize(array('00000000000000000000000000000000'))); // FileIOåƒæ•¸ (ImageShack)
//define("FILEIO_PARAMETER", serialize(array('http://www.example.com/~demo/satellite.cgi', true, '12345678', 'http://www.example.com/~demo/src/', true))); // FileIOåƒæ•¸ (Satellite)

// PIOè³‡æ–™ä¾†æºè¨­å®š
if(!defined("CONNECTION_STRING")){ // incase you use a different database in a different board
define("CONNECTION_STRING", 'log://img.csv_loog:tree.csv_loog/'); // PIO é€£ç·šå­—ä¸² (Log)
 define("CONNECTION_STRING", 'mysql://imageboard:root@localhost/yotsubanome/img_loog/'); // PIO é€£ç·šå­—ä¸² (MySQL)
//define("CONNECTION_STRING", 'sqlite://yotsubanome.db/img_loog/'); // PIO é€£ç·šå­—ä¸² (SQLite)
//++++ sql lite3 had a bug fix in relese 5 of pixmicat
//define("CONNECTION_STRING", 'pgsql://yotsubanome:pass@localhost/yotsubanome/img_loog/'); // PIO é€£ç·šå­—ä¸² (PostgreSQL)
}

// CSV Data file names
// daty = yotsubanome data file
// loog = yotsubanome log file
define("LUT_CACHE", 'lutcache.daty');
define("SIZE_CACHE", 'sizecache.daty');
//----define("CSVSS", '_css.csv_daty');
define("CSV_SS", 'stylesheets.daty');

/*---- Part 2ï¼šæ¿é¢å„é …ç´°éƒ¨åŠŸèƒ½è¨­å®š ----*/
define("IMG_DIR", 'src/'); // ç”»åƒä¿å­˜ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã€‚futaba.phpã‹ã‚‰è¦‹ã¦ // åœ–ç‰‡å­˜æ”¾ç›®éŒ„
define("THUMB_DIR", 'thumb/'); //ã‚µãƒ ãƒã‚¤ãƒ«ä¿å­˜ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒª // é è¦½åœ–å­˜æ”¾ç›®éŒ„
define("PHP_SELF2", 'index.htm'); // å…¥ã‚Šå£ãƒ•ã‚¡ã‚¤ãƒ«å // å…¥å£æª”å
define("PHP_EXT", '.htm'); // 1ãƒšãƒ¼ã‚¸ä»¥é™ã®æ‹¡å¼µå­ // ç¬¬ä¸€é ä»¥å¾Œç”Ÿæˆæª”æ¡ˆä¹‹å‰¯æª”å

$config['TITLE'] = 'ç”»åƒæŽ²ç¤ºæ¿';
if(!defined("TITLE")) define("TITLE", $config['TITLE']); // ã‚¿ã‚¤ãƒˆãƒ« // ç¶²é æ¨™é¡Œ
define("TITLECOM", ''); // <small>TITLECOM</small>
define("SHOWTITLEIMG", 0); // Show the title image (rotating:2 yes:1 no:0)
define("SHOWTITLETXT", 1); // Show the title text (yes:1 no:0)
define("TITLEIMG", 'logo.gif'); // Title image (point to php file if rotating)
define("HOME", '../'); // ã€Œãƒ›ãƒ¼ãƒ ã€ã¸ã®ãƒªãƒ³ã‚¯ // å›žé¦–é çš„é€£çµ
define("TOP_LINKS", ''); // é é¢å³ä¸Šæ–¹çš„é¡å¤–é€£çµï¼Œè«‹ç›´æŽ¥ä»¥[<a href="ç¶²å€" rel="_blank">åç¨±</a>]æ ¼å¼éµå…¥ï¼Œå¦‚æžœä¸éœ€è¦é–‹æ–°è¦–çª—å¯åˆªé™¤relä¸€æ®µ
if(!defined("ADMIN_PASS")) define("ADMIN_PASS", 'yotsubanome'); // ç®¡ç†è€…ãƒ‘ã‚¹ // ç®¡ç†å“¡å¯†ç¢¼
define("IDSEED", 'idã®ç¨®'); // idã®ç¨® // ç”ŸæˆIDä¹‹éš¨æ©Ÿç¨®å­
define("TRIP_KEY", 'â—†');
define("TRIP_KEY_FAKE", 'â—‡');

// ç®¡ç†å“¡ã‚­ãƒ£ãƒƒãƒ—(Cap)è¨­å®š (å•Ÿç”¨æ¢ä»¶ï¼šé–‹å•Ÿä½¿ç”¨ï¼›åç¨±è¼¸å…¥è­˜åˆ¥åç¨±ï¼ŒE-mailè¼¸å…¥#å•Ÿå‹•å¯†ç¢¼)
$config['CAP.ENABLE'] = true; // æ˜¯å¦ä½¿ç”¨ç®¡ç†å“¡ã‚­ãƒ£ãƒƒãƒ— (ä½¿ç”¨ï¼štrue ä¸ä½¿ç”¨ï¼šfalse)
if(!$config['CAP.NAME'] && !$config['CAP.PASSWORD']){
	$config['CAP.NAME'] = 'futaba'; // ç®¡ç†å“¡ã‚­ãƒ£ãƒƒãƒ—è­˜åˆ¥åç¨±
	$config['CAP.PASSWORD'] = 'futaba'; // ç®¡ç†å“¡ã‚­ãƒ£ãƒƒãƒ—å•Ÿå‹•å¯†ç¢¼ (åœ¨E-mailä¸€æ¬„è¼¸å…¥#å•Ÿå‹•å¯†ç¢¼)
}
$config['CAP.SUFFIX'] = ' â—†'; // ç®¡ç†å“¡ã‚­ãƒ£ãƒƒãƒ—å¾Œç¶´å­—å…ƒ (è«‹å‹™å¿…æœ‰â˜…ä»¥ä¾¿ç¨‹å¼é˜²æ­¢å½é€ ï¼Œæˆ–å¯è‡ªè¡Œä¿®æ”¹ç¨‹å¼çš„é˜²å½é€ éƒ¨ä»½)
$config['CAP.SUFFIX.FAKE'] = ' â—‡'; // false capcode suffix
$config['CAP.ISHTML'] = true; // ç®¡ç†å“¡ã‚­ãƒ£ãƒƒãƒ—å•Ÿå‹•å¾Œå…§æ–‡æ˜¯å¦æŽ¥å—HTMLæ¨™ç±¤ (æ˜¯ï¼štrue å¦ï¼šfalse)

// åŠŸèƒ½åˆ‡æ›
define("USE_THUMB", 1); // ã‚µãƒ ãƒã‚¤ãƒ«ã‚’ä½œã‚‹  ã™ã‚‹:1 ã—ãªã„:0 // ä½¿ç”¨é è¦½åœ–æ©Ÿèƒ½ (ä½¿ç”¨ï¼š1 ä¸ä½¿ç”¨ï¼š0)
define("STYLEBAR", 1); // location of style bar [CSS decoration style for the pages] (top & bottom:1 bottom:0)
define("USE_FLOATFORM", 0); // æ–°å¢žæ–‡ç« è¡¨å–®ä½¿ç”¨è‡ªå‹•éš±è— (æ˜¯ï¼š1 å¦ï¼š0)
define("USE_SEARCH", 0); // é–‹æ”¾æœå°‹åŠŸèƒ½ (æ˜¯ï¼š1 å¦ï¼š0)
define("OPTION", 0); // allow options to show up (yes:1 no:0)
define("USE_UPSERIES", 1); // æ˜¯å¦å•Ÿç”¨é€£è²¼æ©Ÿèƒ½ [é–‹ä¸»é¡Œå¾Œè‡ªå‹•æŒ‡å‘åˆ°ä¸»é¡Œä¸‹ä»¥æ–¹ä¾¿é€£è²¼] (æ˜¯ï¼š1 å¦ï¼š0)
define("RESIMG", 1); // ãƒ¬ã‚¹ã«ã‚‚ç”»åƒã‚’æ·»ä»˜ã§ãã‚‹ã‚ˆã†ã«ã™ã‚‹ æ·»ä»˜å¯èƒ½:1 æ·»ä»˜ä¸å¯:0 // å›žæ‡‰é™„åŠ åœ–æª”æ©Ÿèƒ½ (é–‹å•Ÿï¼š1 é—œé–‰ï¼š0)
//++++define("RES_MARK", 'â€¦'); // ãƒ¬ã‚¹ã®é ­ã«ä»˜ã‘ã‚‹æ–‡å­—åˆ—
define("AUTO_LINK", 1); // URLè‡ªå‹•ãƒªãƒ³ã‚¯ã‚’è¡Œã†  ã™ã‚‹:1 ã—ãªã„:0 // è¨Žè«–ä¸²æ–‡å­—å…§çš„URLæ˜¯å¦è‡ªå‹•ä½œæˆè¶…é€£çµ (æ˜¯ï¼š1 å¦ï¼š0)
define("KILL_INCOMPLETE_UPLOAD", 1); // è‡ªå‹•åˆªé™¤ä¸Šå‚³ä¸å®Œæ•´é™„åŠ åœ–æª” (æ˜¯ï¼š1 å¦ï¼š0)
$config['ALLOW_NOPASS'] = 0; // å‰Šé™¤ã‚­ãƒ¼ã®å…¥åŠ›ã‚’ãƒã‚§ãƒƒã‚¯ã™ã‚‹  ã™ã‚‹:1 ã—ãªã„:0
$config['ALLOW_NOSUB'] = 1; // é¡Œåçœç•¥æ™‚æ‹’çµ¶ã™ã‚‹  ã™ã‚‹:1 ã—ãªã„:0
$config['ALLOW_NONAME'] = 1; // åå‰çœç•¥æ™‚æ‹’çµ¶ã™ã‚‹  å¼·åˆ¶çš„ã«åå‰ã‚’ãƒãƒƒã‚¯:2 ã™ã‚‹:1 ã—ãªã„:0 // æ˜¯å¦æŽ¥å—åŒ¿åç™¼é€ (å¼·åˆ¶ç åï¼š2 æ˜¯ï¼š1 å¦ï¼š0)
$config['ALLOW_NOCOM'] = 1; // æœ¬æ–‡çœç•¥æ™‚æ‹’çµ¶ã™ã‚‹  ã™ã‚‹:1 ã—ãªã„:0
// ã‚‚ã—ã€æœ‰åŠ¹ã«ã—ãŸå ´åˆã€æ³¨æ„æ›¸ãã‚’æ›¸ãã“ã¨ã‚’ãŠå‹§ã‚ã—ã¾ã™ã€‚
//if(!defined"DISP_ID"))
define("DISP_ID", 0); // IDã‚’è¡¨ç¤ºã™ã‚‹  å¼·åˆ¶:2 ã™ã‚‹:1 ã—ãªã„:0 // é¡¯ç¤ºID (å¼·åˆ¶é¡¯ç¤ºï¼š2 é¸æ“‡æ€§é¡¯ç¤ºï¼š1 æ°¸é ä¸é¡¯ç¤ºï¼š0)
define("CLEAR_SAGE", 0); // ä½¿ç”¨ä¸æŽ¨æ–‡æ¨¡å¼æ™‚æ¸…é™¤E-mailä¸­çš„ã€Œsageã€é—œéµå­— (æ˜¯ï¼š1 å¦ï¼š0)
define("USE_QUOTESYSTEM", 1); // æ˜¯å¦æ‰“é–‹å¼•ç”¨ç€è¦½ç³»çµ± [è‡ªå‹•è½‰æ›>>No.xxxxæ–‡å­—æˆé€£çµä¸¦å°Žå¼•] (æ˜¯ï¼š1 å¦ï¼š0)
//++++----
//define("KB", 1); // Kilobytes or Bytes on the image file size display (Kilobytes:1 Bytes:0)
$config['KB'] = false; // Kilobytes or Bytes on the image file size display (Kilobytes:true Bytes:false)
//++++----
define("SHOW_IMGWH", 1); // æ˜¯å¦é¡¯ç¤ºé™„åŠ åœ–æª”ä¹‹åŽŸæª”é•·å¯¬å°ºå¯¸ (æ˜¯ï¼š1 å¦ï¼š0)
define("SHOW_FILENAME", 1); // æ˜¯å¦é¡¯ç¤ºé™„åŠ åœ–æª”ä¹‹åŽŸæª”æ–‡ä»¶å (æ˜¯ï¼š1 å¦ï¼š0)
define("USE_CATEGORY", 0); // æ˜¯å¦é–‹å•Ÿä½¿ç”¨é¡žåˆ¥æ¨™ç±¤åˆ†é¡žåŠŸèƒ½ (æ˜¯ï¼š1 å¦ï¼š0)
// Bugs in catagory system w
define("USE_RE_CACHE", 1); // æ˜¯å¦ä½¿ç”¨å›žæ‡‰é é¢é¡¯ç¤ºå¿«å–åŠŸèƒ½ (æ˜¯ï¼š1 å¦ï¼š0)
if(!defined("USE_XHTML")) define("USE_XHTML", 1); // æ˜¯å¦å›žå‚³ XHTML æª”é ­è®“ç€è¦½å™¨ä»¥æ›´åš´æ ¼çš„æ–¹å¼è§£æž [åƒ…é™ç€è¦½å™¨æ”¯æ´è€…] (æ˜¯ï¼š1 å¦ï¼š0)

// æ¨¡çµ„è¼‰å…¥
$ModuleList = array();
//$ModuleList[] = 'mod_rss';

$ModuleList[] = 'mod_adminenhance';//<- ? help me please
$ModuleList[] = 'mod_archiver';
$ModuleList[] = 'mod_audit';
$ModuleList[] = 'mod_bbcode';

//$ModuleList[] = 'mod_captcha';
$ModuleList[] = 'mod_catalog';//<-sparky4 needs here .... HELP
//$ModuleList[] = 'mod_code';//<- missing JS and CSS files
$ModuleList[] = 'mod_code_prettify';//<-sparky4 is here missing CSS file

//$ModuleList[] = 'mod_dummy'; //<- null module?
//$ModuleList[] = 'mod_edit';//<-important
//$ModuleList[] = 'mod_eggpoll';
//$ModuleList[] = 'mod_exif';
//$ModuleList[] = 'mod_imgsizelimit';
//$ModuleList[] = 'mod_mobile';
//$ModuleList[] = 'mod_neta';
//$ModuleList[] = 'mod_opentag';
//$ModuleList[] = 'mod_paint';
//$ModuleList[] = 'mod_pm';
//$ModuleList[] = 'mod_pushpost';
//$ModuleList[] = 'mod_readonly';
//$ModuleList[] = 'mod_recaptcha';
//$ModuleList[] = 'mod_robottrap';
//$ModuleList[] = 'mod_rss';
//$ModuleList[] = 'mod_sectrip';
//$ModuleList[] = 'mod_shoutbox';
//$ModuleList[] = 'mod_showhide';
//$ModuleList[] = 'mod_showip';
//$ModuleList[] = 'mod_siokara';
//$ModuleList[] = 'mod_tag';
//$ModuleList[] = 'mod_threadlist';
//$ModuleList[] = 'mod_threadorder';
//$ModuleList[] = 'mod_tripcheck';
//$ModuleList[] = 'mod_typepad_antispam';
//$ModuleList[] = 'mod_userrepair';
//$ModuleList[] = 'mod_vipquality';

// å°éŽ–è¨­å®š
define("BAN_CHECK", 1); // ç¶œåˆæ€§å°éŽ–æª¢æŸ¥åŠŸèƒ½ (é—œé–‰ï¼š0, é–‹å•Ÿï¼š1)
$BANPATTERN = array(); // æ‹’çµ¶ã™ã‚‹ãƒ›ã‚¹ãƒˆ // IP/Hostnameå°éŽ–é»‘åå–®
$DNSBLservers = array(0, 'sbl-xbl.spamhaus.org', 'list.dsbl.org', 'bl.blbl.org', 'bl.spamcop.net'); // DNSBLä¼ºæœå™¨åˆ—è¡¨ (é¦–é …ï¼šä½¿ç”¨ä¼ºæœå™¨å€‹æ•¸)
$DNSBLWHlist = array(); // DNSBLç™½åå–® (è«‹è¼¸å…¥IPä½ç½®)
$BAD_STRING = array("dummy_string","dummy_string2"); // æ‹’çµ¶ã™ã‚‹æ–‡å­—åˆ— // é™åˆ¶å‡ºç¾ä¹‹æ–‡å­—
$BAD_FILEMD5 = array("dummy","dummy2"); // æ‹’çµ¶ã™ã‚‹ãƒ•ã‚¡ã‚¤ãƒ«ã®md5 // é™åˆ¶ä¸Šå‚³é™„åŠ åœ–æª”ä¹‹MD5æª¢æŸ¥ç¢¼

// é™„åŠ åœ–æª”é™åˆ¶
define("MAX_KB", 36000); // æŠ•ç¨¿å®¹é‡åˆ¶é™ KBï¼ˆphpã®è¨­å®šã«ã‚ˆã‚Š2Mã¾ã§ // æŠ•ç¨¿å®¹é‡åˆ¶é™ KBï¼ˆphpã®è¨­å®šã«ã‚ˆã‚Š2Mã¾ã§ // é™„åŠ åœ–æª”ä¸Šå‚³å®¹é‡é™åˆ¶KB (phpå…§å®šç‚ºæœ€é«˜2MB)
define("STORAGE_LIMIT", 0); // é™„åŠ åœ–æª”ç¸½å®¹é‡é™åˆ¶åŠŸèƒ½ (å•Ÿå‹•ï¼š1 é—œé–‰ï¼š0)
define("STORAGE_MAX", 30000); // é™„åŠ åœ–æª”ç¸½å®¹é‡é™åˆ¶ä¸Šé™å¤§å° (å–®ä½ï¼šKB)
define("ALLOW_UPLOAD_EXT", 'GIF|JPG|PNG|BMP|SWF|TXT|SVG'); // æŽ¥å—ä¹‹é™„åŠ åœ–æª”å‰¯æª”å (é€å‡ºå‰è¡¨å–®æª¢æŸ¥ç”¨ï¼Œç”¨ | åˆ†éš”)

// é€£çºŒæŠ•ç¨¿æ™‚é–“é™åˆ¶
define("RENZOKU", 4); // é€£ç¶šæŠ•ç¨¿ç§’æ•° // é€£çºŒæŠ•ç¨¿é–“éš”ç§’æ•¸
define("RENZOKU2", 13); // ç”»åƒé€£ç¶šæŠ•ç¨¿ç§’æ•° // é€£çºŒè²¼åœ–é–“éš”ç§’æ•¸

// é è¦½åœ–ç‰‡ç›¸é—œé™åˆ¶
define("MAX_W", 240); // æŠ•ç¨¿ã‚µã‚¤ã‚ºå¹…ï¼ˆã“ã‚Œä»¥ä¸Šã¯widthã‚’ç¸®å° // è¨Žè«–ä¸²æœ¬æ–‡é è¦½åœ–ç‰‡å¯¬åº¦ (è¶…éŽå‰‡è‡ªå‹•ç¸®å°)
define("MAX_H", 240); // æŠ•ç¨¿ã‚µã‚¤ã‚ºé«˜ã• // è¨Žè«–ä¸²æœ¬æ–‡é è¦½åœ–ç‰‡é«˜åº¦
define("MAX_RW", 240); // æŠ•ç¨¿ã‚µã‚¤ã‚ºå¹…ï¼ˆã“ã‚Œä»¥ä¸Šã¯widthã‚’ç¸®å° // è¨Žè«–ä¸²å›žæ‡‰é è¦½åœ–ç‰‡å¯¬åº¦ (è¶…éŽå‰‡è‡ªå‹•ç¸®å°)
define("MAX_RH", 240); // æŠ•ç¨¿ã‚µã‚¤ã‚ºé«˜ã• // è¨Žè«–ä¸²å›žæ‡‰é è¦½åœ–ç‰‡é«˜åº¦
//++++define("MIN_W", 2); // minimal width size
//++++define("MIN_H", 2); // minimal hieght size
//++++define("MAX_DIMENSION", 9000); // maximum dimentions
define("THUMB_Q", 84); // é è¦½åœ–ç‰‡ä¹‹å“è³ª (1-100, å»ºè­°é è¨­75ï¼Œè¶Šé«˜å“è³ªè¶Šå¥½ä½†æª”æ¡ˆä¹Ÿè¶Šå¤§)

// å¤–è§€è¨­å®š
$ADDITION_INFO = ""; // å¯åœ¨è¡¨å–®ä¸‹é¡¯ç¤ºé¡å¤–æ–‡å­—
$LIMIT_SENSOR = array('ByPostCountCondition'=>9000); // æ–‡ç« è‡ªå‹•åˆªé™¤æ©Ÿåˆ¶è¨­å®š
define("TEMPLATE_FILE", TPLT_DIR.'inc_yo.tplt'); // æ¨£æ¿ä½ç½®
define("CSSFILE", "yotsubanome.css"); // default CSS file name
define("FAV_ICON", '<link rel="shortcut icon" href="'.ICON_DIR.'favicon.ico" />'); // favicon file name
define("PAGE_DEF", 16); // ä¸€ãƒšãƒ¼ã‚¸ã«è¡¨ç¤ºã™ã‚‹è¨˜äº‹ // ä¸€é é¡¯ç¤ºå¹¾ç¯‡è¨Žè«–ä¸²
define("ADMIN_PAGE_DEF", 20); // ç®¡ç†æ¨¡å¼ä¸‹ï¼Œä¸€é é¡¯ç¤ºå¹¾ç­†è³‡æ–™
define("RE_DEF", 8); // ã€Œãƒ¬ã‚¹çœç•¥ã€ã‚’è¡¨ç¤ºã™ã‚‹ãƒ¬ã‚¹ã®æ•° // ä¸€ç¯‡è¨Žè«–ä¸²æœ€å¤šé¡¯ç¤ºä¹‹å›žæ‡‰ç­†æ•¸ (è¶…éŽå‰‡è‡ªå‹•éš±è—ï¼Œå…¨éƒ¨éš±è—ï¼š0)
define("RE_PAGE_DEF", 40); // å›žæ‡‰æ¨¡å¼ä¸€é é¡¯ç¤ºå¹¾ç­†å›žæ‡‰å…§å®¹ (åˆ†é ç”¨ï¼Œå…¨éƒ¨é¡¯ç¤ºï¼š0)
define("MAX_RES", 1000); // å¼·åˆ¶sageãƒ¬ã‚¹æ•° // å›žæ‡‰ç­†æ•¸è¶…éŽå¤šå°‘å‰‡ä¸è‡ªå‹•æŽ¨æ–‡ (é—œé–‰ï¼š0)
define("MAX_AGE_TIME", 0); // å¼·åˆ¶sageã¾ã§ã®æ™‚é–“   0ã§å¼·åˆ¶sageãªã— // è¨Žè«–ä¸²å¯æŽ¥å—æŽ¨æ–‡çš„æ™‚é–“ç¯„åœ (å–®ä½ï¼šå°æ™‚ï¼Œè¨Žè«–ä¸²å­˜åœ¨è¶…éŽæ­¤æ™‚é–“å‰‡å›žæ‡‰çš†ä¸å†è‡ªå‹•æŽ¨æ–‡ é—œé–‰ï¼š0)
define("COMM_MAX", 18000); // å…§æ–‡æŽ¥å—Bytesæ•¸ (æ³¨æ„ï¼šä¸­æ–‡å­—ç‚º2Bytes)
$config['LINE_NUMBER'] = 24; // 1ãƒ¬ã‚¹ã«è¡¨ç¤ºã™ã‚‹è¡Œæ•° (ã—ãªã„ï¼š0) // The number of lines in the comment feild that are displayed in the index (unlimited:0)
define("NO_TEXTONLY", 0); // no text only? behavior with the no image switch (Ost [Eastern]:2 Futaba:1 Yotsubanome [OLD]:0)
define("BR_CHECK", 0); // æ”¹è¡Œã‚’æŠ‘åˆ¶ã™ã‚‹è¡Œæ•° ã—ãªã„:0 // æ–‡å­—æ›è¡Œè¡Œæ•¸ä¸Šé™ (ä¸é™ï¼š0)
define("STATIC_HTML_UNTIL", -1); // æ›´æ–°æ–‡ç« æ™‚è‡ªå‹•ç”Ÿæˆçš„éœæ…‹ç¶²é è‡³ç¬¬å¹¾é æ­¢ (å…¨éƒ¨ç”Ÿæˆï¼š-1 åƒ…å…¥å£é ï¼š0)
define("GZIP_COMPRESS_LEVEL", 4); // PHPå‹•æ…‹è¼¸å‡ºé é¢ä½¿ç”¨Gzipå£“ç¸®å±¤ç´š (é—œé–‰ï¼š0 å•Ÿå‹•ï¼š1ï½ž9ï¼ŒæŽ¨è–¦å€¼ï¼š3)
$config['DEFAULT_NOTITLE'] = 'ç„¡é¡Œ'; // çœç•¥æ™‚ã®é¡Œå // é è¨­æ–‡ç« æ¨™é¡Œ
if(!$config['DEFAULT_NONAME'])
$config['DEFAULT_NONAME'] = 'ã¨ã—ã‚ã'; // çœç•¥æ™‚ã®åå‰ // é è¨­æ–‡ç« åç¨±
$config['DEFAULT_NOCOMMENT'] = 'æœ¬æ–‡ãªã—'; // çœç•¥æ™‚ã®æœ¬æ–‡ // é è¨­æ–‡ç« å…§æ–‡

/*---- Part 3ï¼šAnti-SPAM é˜²æ­¢åžƒåœ¾è¨Šæ¯æ©Ÿå™¨äººç™¼æ–‡ ----*/
/* æ¬„ä½é™·é˜± (Field Trap)
ä»‹ç´¹ï¼š
æ©Ÿå™¨äººæœƒé‡å°å¸¸è¦‹çš„æ¬„ä½åç¨±é€å‡ºåžƒåœ¾è³‡æ–™ï¼Œå°‡é€™äº›å¸¸è¦‹çš„æ¬„ä½è£½æˆé™·é˜±ï¼Œ
å¦è¨­åç¨±æ€ªç•°çš„æ¬„ä½ç‚ºæ­£ç¢ºæ¬„ä½ï¼Œä»¥é¿å…ç›´æŽ¥çš„æ”»æ“Šã€‚
é˜²æ­¢æ©Ÿå™¨äººå­¸ç¿’çš„å¯èƒ½ï¼Œè«‹éš”ä¸€æ®µæ™‚é–“ä¿®æ”¹åº•ä¸‹æ¬„ä½å€¼ï¼Œå»ºè­°è‹±æ•¸å¤§å°å¯«éš¨æ©Ÿ6ï½ž10å€‹ (é¿å…ç‰¹æ®Šç¬¦è™Ÿã€ç¬¬ä¸€ä½ä¸èƒ½ç‚ºæ•¸å­—)ã€‚
*/
define("FT_NAME", 'bvUFbdrIC'); // åç¨±æ¬„ä½
define("FT_EMAIL", 'ObHGyhdTR'); // E-mailæ¬„ä½
define("FT_SUBJECT", 'SJBgiFbhj'); // æ¨™é¡Œæ¬„ä½
define("FT_COMMENT", 'pOBvrtyJK'); // å…§æ–‡æ¬„ä½







if(!defined("LOGFILE")) define("LOGFILE", 'img.cgi');  //ƒƒOƒtƒ@ƒCƒ‹–¼
if(!defined("TREEFILE")) define("TREEFILE", 'tree.cgi');  //ƒƒOƒtƒ@ƒCƒ‹–¼
if(!defined("IMG_DIR")) define("IMG_DIR", 'src/');  //‰æ‘œ•Û‘¶ƒfƒBƒŒƒNƒgƒŠBfutaba.php‚©‚çŒ©‚Ä
if(!defined("THUMB_DIR")) define("THUMB_DIR",'thumb/');  //ƒTƒ€ƒlƒCƒ‹•Û‘¶ƒfƒBƒŒƒNƒgƒŠ
if(!defined("ARCH_DIR")) define("ARCH_DIR",'../arch/');    // Archive direcory
if(!defined("TEMP_DIR")) define("TEMP_DIR", '../temp/');  //tmp directory
if(!defined("TITLE")) define("TITLE", '64chan');  //ƒ^ƒCƒgƒ‹i<title>'.TITLE.'</title>‚ÆTOPj
if(!defined("TITLECOM")) define("TITLECOM", '');  // <small>TITLECOM</small>
if(!defined("SHOWTITLEIMG")) define("SHOWTITLEIMG", 2);   //show the title image (0=no 1=yes 2=rotating)
if(!defined("SHOWTITLETXT")) define("SHOWTITLETXT", 1);   //(leave at 0)
if(!defined("TITLEIMG")) define("TITLEIMG", 'logo.jpg');			//Title image (point to php file if rotating)
if(!defined("CHANNERU")) define("CHANNERU", 'Žl—t‚Ì‰èž‚¿‚á‚ñ‚Ë‚é');    // channeru name
if(!defined("HOME")) define("HOME",  '../');   //uƒz[ƒ€v‚Ö‚ÌƒŠƒ“ƒN
if(!defined("MAX_KB")) define("MAX_KB", '9000');   //“Še—e—Ê§ŒÀ KBiphp‚ÌÝ’è‚É‚æ‚è2M‚Ü‚Å
if(!defined("MAX_W")) define("MAX_W",  '240');   //“ŠeƒTƒCƒY•i‚±‚êˆÈã‚Íwidth‚ðk¬
if(!defined("MAX_H")) define("MAX_H",  '240');   //“ŠeƒTƒCƒY‚‚³
if(!defined("MAXR_W")) define("MAXR_W",  '240');   //“ŠeƒTƒCƒY•i‚±‚êˆÈã‚Íwidth‚ðk¬
if(!defined("MAXR_H")) define("MAXR_H",  '240');   //“ŠeƒTƒCƒY‚‚³
if(!defined("MIN_W")) define("MIN_W", 2);    //minimal width size
if(!defined("MIN_H")) define("MIN_H", 2);    //minimal hieght size
if(!defined("MAX_DIMENSION")) define("MAX_DIMENSION", 9000);    //maximum dementions
if(!defined("PAGE_DEF")) define("PAGE_DEF", '16');   //ˆêƒy[ƒW‚É•\Ž¦‚·‚é‹LŽ–
if(!defined("LOG_MAX")) define("LOG_MAX",  '4004');  //ƒƒOÅ‘ås”
//----
//ŠÇ—ƒpƒXƒtƒH[ƒ€‚ð o‚·:0 o‚³‚È‚¢:1
if(!defined("PASS_FSP")) define("PASS_FSP", 0);
//ŠÇ—ŽÒƒl[ƒ€ƒpƒX
if(!defined("PASS_FM_PS")) define("PASS_FM_PS", 'mod');    //íœl‚Ì–¼‘O
if(!defined("PASS_FA_PS")) define("PASS_FA_PS", 'admin');    //ŠÇ—l‚Ì–¼‘O
if(!defined("NUKEPASS1")) define("NUKEPASS1", 'BOMBEM');  //1st nuke panel password
if(!defined("NUKEPASS2")) define("NUKEPASS2", 'BOMBIT');    //2nd nuke panel password
if(!defined("ADMIN_PASS")) define("ADMIN_PASS", 'lolicon2495');  //ŠÇ—ŽÒƒpƒX
if(!defined("MOD_PASS")) define("MOD_PASS", 'mod_pass');         //íœŽÒƒpƒX
if(!defined("MCAPCODE")) define("MCAPCODE", '</b></font>&nbsp;<font class="mod" color="#680f08">'.CHANNERU.'&nbsp;<u>##&nbsp;'.S_MODERATOR.'&nbsp;##</u>');
if(!defined("M4CAPCODE")) define("M4CAPCODE", '<font class="mod" color="#680f08">'.S_MODERATOR.'</font>');
//mod capcode  '.CHANNERU.'&nbsp;<u>##&nbsp;'.S_MODERATOR.'&nbsp;##</u></font>
if(!defined("ACAPCODE")) define("ACAPCODE", '</b></font>&nbsp;<font class="admin" color="#0080ff">'.CHANNERU.'&nbsp;<u>##&nbsp;'.S_ADMINISTRATOR.'&nbsp;##</u>');
if(!defined("A4CAPCODE")) define("A4CAPCODE", '<font class="admin" color="#0080ff">'.S_ADMINISTRATOR.'</font>');
//admin capcode  '.CHANNERU.'&nbsp;<u>##&nbsp;'.S_ADMINISTRATOR.'&nbsp;##</u></font>
//----
if(!defined("PHP_SELF")) define("PHP_SELF", 'yotsubanome.php'); //‚±‚ÌƒXƒN	ƒŠƒvƒg–¼
if(!defined("PHP_SELF2")) define("PHP_SELF2", 'yotsuba.htm'); //“ü‚èŒûƒtƒ@ƒCƒ‹–¼
if(!defined("PHP_SELF3")) define("PHP_SELF3", 'index.php'); //“ü‚èŒûƒtƒ@ƒCƒ‹–¼2
if(!defined("IIII")) define("IIII", "<META HTTP-EQUIV=\"refresh\" content=\"0;URL=".PHP_SELF."\">"); //0.htm contents
if(!defined("ENCODE")) define("ENCODE", "Shift_JIS");    //encodeing of pages
if(!defined("FAVICON")) define("FAVICON", ICON_DIR."4leaf.png");    //icon of pages
if(!defined("PHP_EXT")) define("PHP_EXT", '.htm');  //1ƒy[ƒWˆÈ~‚ÌŠg’£Žq
if(!defined("PHP_EXT2")) define("PHP_EXT2", '.html');  //$timeŠg’£Žq
if(!defined("RENZOKU")) define("RENZOKU", '4');   //˜A‘±“Še•b”
if(!defined("RENZOKU2")) define("RENZOKU2", '13');  //‰æ‘œ˜A‘±“Še•b”
if(!defined("MAX_RES")) define("MAX_RES", '9000');  //‹­§sageƒŒƒX”
if(!defined("ARCHIVE")) define("ARCHIVE", 1);        //archive old threads? no:0 yes:1
if(!defined("ARCH_FILE")) define("ARCH_FILE", $_SERVER['PHP_SELF']);    //board directory defined
$archny = ARCH_FILE;
$archny = str_replace("/",  "+", $archny);  // / ¨ + for file system compatibility
$archny = str_replace(PHP_SELF,  "", $archny);  //remove php file name
if(!defined("ARCHFILE")) define("ARCHFILE", ARCH_DIR.$archny.'arch.log');    //archive log of the board directory

//---------------------------- text board switch!!!!
if(!defined("TEMPLATE")) define("TEMPLATE", 0);  //0 =Gazou BBS template 1 =textboard template This is a very important switch
if(!defined("UP_IMG")) define("UP_IMG", 1);  //Use images yes:1 no i want a text board:0 This is a very important switch
//---------------------------- seriously

if(!defined("USE_THUMB")) define("USE_THUMB", 1);  //ƒTƒ€ƒlƒCƒ‹‚ðì‚é ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("GIF_ONLY")) define("GIF_ONLY", 0);                   // 0:not just gif files are allowed 1:only *.gif files are allowed
if(!defined("PROXY_CHECK")) define("PROXY_CHECK", 0);  //proxy‚Ì‘ž‚Ý‚ð§ŒÀ‚·‚é y:1 n:0
if(!defined("DISP_ID")) define("DISP_ID", 0);  //ID‚ð•\Ž¦‚·‚é ‹­§:2 ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("IDSEED")) define("IDSEED", 'id‚ÌŽí');  //id‚ÌŽí
if(!defined("LINK")) define("LINK", 0);    //Futaba channeru like advertisement? "ƒŠƒ“ƒN:::" 0:no 1:yes
if(!defined("WW")) define("WW", 80);    //wordwarp2 charater line <br /> number
if(!defined("NO_TEXTONLY")) define("NO_TEXTONLY", 0);    //no text only?
if(!defined("BR_")) define("BR_", 1);    // \n ¨ <br /> n=0 y=1

if(!BR_){
if(!defined("BR_CHECK")) define("BR_CHECK", 16); }  //‰üs‚ð—}§‚·‚és” ‚µ‚È‚¢:0
if(!defined("TRIPKEY")) define("TRIPKEY", 'Ÿ');                  //key before tripcode
if(!defined("TRIP_KEY")) define("TRIP_KEY", 'ž');                  //copied key before tripcode
if(!defined("CSSFILE")) define("CSSFILE", CSS_DIR."yotsubanome.css");    //location of the css file [make blank if you want futaba look]

if(!defined("PASS_CHECK")) define("PASS_CHECK", 0);				// íœƒL[‚Ì“ü—Í‚ðƒ`ƒFƒbƒN‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("SUB_CHECK")) define("SUB_CHECK",  0);				// ‘è–¼È—ªŽž‹‘â‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("NAME_CHECK")) define("NAME_CHECK", 0);			// –¼‘OÈ—ªŽž‹‘â‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("COM_CHECK")) define("COM_CHECK",  0);				// –{•¶È—ªŽž‹‘â‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
// ‚à‚µA—LŒø‚É‚µ‚½ê‡A’ˆÓ‘‚«‚ð‘‚­‚±‚Æ‚ð‚¨Š©‚ß‚µ‚Ü‚·B

if(!defined("EN_AUTOLINK")) define("EN_AUTOLINK", 1);		// URLŽ©“®ƒŠƒ“ƒN‚ðs‚¤  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("EN_SEC")) define("EN_SEC", 1);					// ŽžŠÔ•\Ž¦‚Éu•bv‚ðŠÜ‚ß‚é  ŠÜ‚ß‚é:1 ŠÜ‚ß‚È‚¢:0
if(!defined("EN_SAGE_START")) define("EN_SAGE_START", 1);				// ƒXƒŒŽå‹­§sage‹@”\‚ðŽg—p‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("MAX_PASSED_HOUR")) define("MAX_PASSED_HOUR", 0);			// ‹­§sage‚Ü‚Å‚ÌŽžŠÔ   0‚Å‹­§sage‚È‚µ
if(!defined("ADMIN_SAGE")) define("ADMIN_SAGE", 1);				// ŠÇ—ŽÒ‹­§sageˆ—  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("NOTICE_SAGE")) define("NOTICE_SAGE", 1);				// ‹­§sage‚ð’m‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0

if(!defined("MAX_LINES_SHOWN")) define("MAX_LINES_SHOWN", 24);
if(!defined("DESC")) define("DESC", '4 leaf sprout channel');  //description of the pages
if(!defined("KEYW")) define("KEYW", '4,leaf,sprout,channel,');  //keywords 
if(!defined("BACKGROUND_IMG")) define("BACKGROUND_IMG", '');         //what will that back ground image be

if(!defined("SPOILERS")) define("SPOILERS", 1);                    // Spoilers
if(!defined("SECURE")) define("SECURE", 0);    //Secure the nuke panel y=1 n=0
if(!defined("CHANBAN")) define("CHANBAN", 0);    // banned from viewing index:1 or allowed to view but cannot post:0
if(!defined("USER_WAS_BANNED_FOR_THIS_POST")) define("USER_WAS_BANNED_FOR_THIS_POST", '<b><font color="#ff0000">(USER WAS BANNED FOR THIS POST)</b></font>');    // the infamous (USER WAS BANNED FOR THIS POST) is customizable

if(!defined("NOTPLEA")) define("NOTPLEA", 1);              //this is only for the banpleaboard. [DON'T MESS WITH IT]
if(!defined("NOTREPORT")) define("NOTREPORT", 1);              //this is only for the reportboard. [DON'T MESS WITH IT]
//---------------------------------------------antispam measures
if(!defined("SECURITY")) define("SECURITY", 0);                      // Use captcha yes:1 no:0
// ‚Ê‚±
// “ŠeƒtƒH[ƒ€‚ðÁ‚· y=1 n=0
if(!defined("FORM_HIDDEN")) define("FORM_HIDDEN", 0);
// ƒXƒpƒ€‘Îô
//--------------------------------------------- ƒXƒpƒ€‘Îô

if(!defined("RE_")) define("RE_",  'ReF');				// ƒŒƒX‚Ì“ª‚É•t‚¯‚é•¶Žš—ñ
if(!defined("RES_MARK")) define("RES_MARK",  'c');				// ƒŒƒX‚Ì“ª‚É•t‚¯‚é•¶Žš—ñ
if(!defined("OMIT_RES")) define("OMIT_RES", 8);			// uƒŒƒXÈ—ªv‚ð•\Ž¦‚·‚éƒŒƒX‚Ì”
if(!defined("OMIT_RES_IMG")) define("OMIT_RES_IMG", 0);			// uƒŒƒXÈ—ªv‚ð•\Ž¦‚·‚éƒŒƒX‚Ì”i‰æ‘œ•tƒŒƒX‚Ìê‡j

//ƒŒƒX‰æ‘œ“Y•t‹@”\-------------------------------------------------------------
if(!defined("RESIMG")) define("RESIMG", 1);				// ƒŒƒX‚É‚à‰æ‘œ‚ð“Y•t‚Å‚«‚é‚æ‚¤‚É‚·‚é  “Y•t‰Â”\:1 “Y•t•s‰Â:0
if(!defined("RES_IMG")) define("RES_IMG", RESIMG);
if(!defined("RES_IMG_LIMIT")) define("RES_IMG_LIMIT", 0);		// ƒŒƒX‰æ‘œãŒÀ–‡”
if(!defined("RES_IMG_LIMIT_NOTICE")) define("RES_IMG_LIMIT_NOTICE", 1);		// ƒŒƒX‰æ‘œŽc‚è’m‚·‚é  ‚·‚é:1  ‚µ‚È‚¢:0

if(!defined("BANFILE1")) define("BANFILE1", BANS_DIR.'ipbans.php');   //ip banish
if(!defined("BANFILE2")) define("BANFILE2", BANS_DIR.'spam.php');    //spam decioso
if(!defined("BANFILE3")) define("BANFILE3", BANS_DIR.'filebans.php'); //bad files
if(!defined("BANFILE4")) define("BANFILE4", 'bans.php');              //ip banish
if(NOTPLEA==0){
$banfile4 = './'.BANFILE4;
}
if(NOTPLEA==1){
if(file_exists(BANS_DIR)){
$banfile4 = BANS_DIR.BANFILE4;
  }else{
$banfile4 = HOME.BANFILE4;
    }
}

if(!defined("HEADERFILE")) define("HEADERFILE", HOME.'HEADER.php');      //This is where the header lives.
if(!defined("RULESFILE")) define("RULESFILE", HOME.'RULE.php');          //Location of the rules of this board.
if(!defined("NEWSFILE")) define("NEWSFILE", HOME.'NEWS.php');             //Location of the news of the board.
if(!defined("FOOTERFILE")) define("FOOTERFILE", HOME.'footer.php');          //This is where the footer lives.

if(!defined("CAPTCHAFILE")) define("CAPTCHAFILE", PHP_DIRECTORY.'captcha.php');    //Location of the captcha of the board.
if(!defined("WFFILE")) define("WFFILE", 'wf.cgi');          //This is where the wordfilter log lives.
if(!file_exists(FILTER_DIR)){
$wfwf = HOME.WFFILE;
  }else{
$wfwf = FILTER_DIR.WFFILE;
}

//default board colors
// ƒJƒ‰[ƒŠƒ“ƒO by –G‚¦˜A ------------------------------------------------------
if(!defined("BG_COL")) define("BG_COL",   '#FFFFEE');  // ”wŒiF
if(!defined("TXT_COL")) define("TXT_COL",  '#800000');  // •¶ŽšF
if(!defined("LINK_COL")) define("LINK_COL", '#0000EE');  // ƒŠƒ“ƒNF
if(!defined("VLINK_COL")) define("VLINK_COL",'#0000EE');  // –K–âÏ‚ÝƒŠƒ“ƒNF
if(!defined("ALINK_COL")) define("ALINK_COL",'#00DC00');  // ‘I‘ð‚µ‚½Žž‚ÌF
if(!defined("TIT_COL")) define("TIT_COL",  '#800000');  // ŒfŽ¦”Âƒ^ƒCƒgƒ‹ƒJƒ‰[
if(!defined("TIT_COL")) define("TIT_COL",  '#800000');  // ŒfŽ¦”Âƒ^ƒCƒgƒ‹ƒJƒ‰[
if(!defined("BASE_COL")) define("BASE_COL", '#eeaa88');  // ƒx[ƒXƒJƒ‰[

// ----- ƒŒƒX‹LŽ–ŠÖŒW ----- //
if(!defined("RE_COL")) define("RE_COL",   '#789922');  //„‚ª•t‚¢‚½Žž‚ÌF
if(!defined("RE_COL2")) define("RE_COL2",   '#696969');  //#‚ª•t‚¢‚½Žž‚ÌF
if(!defined("RE_BGCOL")) define("RE_BGCOL", '#f0e0d6');  // ”wŒiƒJƒ‰[
if(!defined("SUB_COL")) define("SUB_COL",  '#cc1105');  // ƒ^ƒCƒgƒ‹ƒJƒ‰[
if(!defined("NAME_COL")) define("NAME_COL", '#117743');  // –¼‘OƒJƒ‰[
if(!defined("LONG_COL")) define("LONG_COL", '#b4b4b0');  // too long colors

// ---- text board colors ---- //
if(!defined("OP_BGCOL")) define("OP_BGCOL", '#efefef');  //text board thread colors
if(!defined("BOX_BGCOL")) define("BOX_BGCOL",'#ccffcc');  //textboard header and footer colors

// ---- host exploit color ---- //
if(!defined("HOST_COL")) define("HOST_COL",'#f60000');
if(!defined("IP_COL")) define("IP_COL",'#f60000');

// ---- other colors ----//
if(!defined("ROW1_COL")) define("ROW1_COL", '#d6d6f6');  // row1 colors
if(!defined("ROW2_COL")) define("ROW2_COL", '#f6f6f6');  //row2 colors
if(!defined("TOMATO_COL")) define("TOMATO_COL", '#FF0000');  //tomato color
if(!defined("TTOPBOX_COL")) define("TTOPBOX_COL", '#80B0F6');  //Thread list top color
if(!defined("TROW1_COL")) define("TROW1_COL", '#D6D00F');  // row1 colors
if(!defined("TROW2_COL")) define("TROW2_COL", '#F6F60F');  //row2 colors
//--------------------------------------------------------------------------------------------
if(!defined("TL")) define("TL", 1);    //Thread Lists? speed? n=0 y=1
if(!defined("FUTABA_S")) define("FUTABA_S", 0);    //futaba speed? n=0 y=1 [this will disable alot of functions]
if(!FUTABA_S){
//•‰‰×ŒyŒ¸htmlŒo—RŠÖŒW---------------------------------------------------------
if(!defined("RES_FILE")) define("RES_FILE", 1);			// ƒŒƒX‚ðhtmlŒo—R‚É‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("RES_DIR")) define("RES_DIR", './');			// ƒŒƒXhtmlŠi”[ƒfƒBƒŒƒNƒgƒŠ
//Do not change RES_DIR //major glitches will appear
}else{
if(!defined("RES_FILE")) define("RES_FILE", 0);
if(!defined("RES_DIR")) define("RES_DIR", './');			// ƒŒƒXhtmlŠi”[ƒfƒBƒŒƒNƒgƒŠ
//Do not change RES_DIR //major glitches will appear
}
// ƒc[ƒ‹”ð‚¯htmlŒo—RŠÖŒW-------------------------------------------------------
if(!defined("IMG_REFER")) define("IMG_REFER", 1);                 // ƒc[ƒ‹”ð‚¯‚É‰æ‘œƒŠƒ“ƒN‚ðhtmlŒo—R‚É‚·‚é  ‚·‚é:1  ‚µ‚È‚¢:0
if(!defined("IMG_REF_DIR")) define("IMG_REF_DIR", 'ref/');                 // Œo—RæhtmlŠi”[ƒfƒBƒŒƒNƒgƒŠ

if(!defined("LIGHTBOX")) define("LIGHTBOX", 1);    //lightbox?   n=0 y=1
if(!LIGHTBOX){
$bbte = "target=_blank";
  }else{
$bbte = "rel=lightbox";
  }
if(!defined("NOTJUST_IMG")) define("NOTJUST_IMG", 1);    //Upload besides image based files  n=0 y=1
if(NOTJUST_IMG || !1){
$allowext=array('acc','asf','avi','bmp','bz2','c','css','gif','gz','htm','html','flv','flac','ico','it','jpg','lzh','mid','mo3','mod','mov','mp1','mp2','mp3','mp4','mpc','mpg','nsf','ogg','pdf','phps','png','psd','ram','rar','rm','s3m','spc','sid','svg','swf','text','txt','TXT','tmp','temp','torrent','wav','wma','wm','xm','zip','7z');
    }else{
$allowext="";
  }
//**************************************************************************
if(!defined("GCHAN_VIDEO")) define("GCHAN_VIDEO", 1);    //video url support  n=0 y=1*
//**************************************************************************

if(!defined("ENABLE_EXIF")) define("ENABLE_EXIF", 0);
if(!defined("OPTION")) define("OPTION", 1);    //enable options on form()
//--------------------------------------------------------------------------------------------

//ƒXƒŒˆê——•\Ž¦”in=0 y=ƒXƒŒƒbƒh–{”j
//LIMIT‚Ì”’l‚ª‰º‚Ìê‡ALIMIT‚Ì”’l‚ÅƒJƒbƒg‚³‚ê‚Ü‚·B(LIMIT—Dæ)
//LIMIT‚Ì”’l‚ª 0 ‚Ìê‡ATHREAD_IHIRAN‚Ì”’l‚ÅƒJƒbƒg‚³‚ê‚Ü‚·B
if(!defined("THREAD_IHIRAN")) define("THREAD_IHIRAN", 40);

//ƒXƒŒˆê——•\Ž¦ðŒ
// 0: ‘è–¼‚ªƒfƒtƒHƒ‹ƒg‚È‚ç“à—e‚ðˆø—pi‘Sƒy[ƒWƒAƒ“ƒJ[ƒŠƒ“ƒN‚ ‚èj
// 1: 1ˆÈã‚ÍTOPƒy[ƒWˆÈŠOƒy[ƒWƒAƒ“ƒJ[ƒŠƒ“ƒN–³‚µiƒXƒŒ‚Ì¸~‚ªŒƒ‚µ‚¢‚Æ–³ˆÓ–¡‚Ìˆ×j
// 2: ‹­§“I‚É“à—e‚ðˆø—p / 3: ‹­§“I‚É‘è–¼‚ðˆø—p
if(!defined("SUB_IHIRAN")) define("SUB_IHIRAN", 0);

//È—ªƒy[ƒW”: 5ƒXƒŒ10ƒy[ƒW‚È‚ç5x10=50B0ƒy[ƒW•ª‚Ì5ƒXƒŒ‚ð‘«‚µ55‚Æ‚·‚é
//       ¨         LIMIT(55) = (PAGE_DEF:5 * ƒy[ƒW”:10) + PAGE_DEF:5
//‘SŒ•\Ž¦‚Ìê‡‚ÍLOG_MAX‚ÌÝ’è‚Æ“¯‚¶‚É‚µ‚Ä‚¨‚¯‚Î—Ç‚¢
//0=‰º‚Ìƒy[ƒWŒJ‚è‰z‚µƒe[ƒuƒ‹“P‹Ž (MAX_THREAD‚ð•K‚¸Žw’è‚µ‚Ä‰º‚³‚¢)
if(!defined("LIMIT")) define("LIMIT", 9000);

//“Še‡‚Éƒ\[ƒgŒÅ’è ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("NATURAL_SORT")) define("NATURAL_SORT", 0);
//threads are displayed in numeracle order and not according to the tree line  n=0 y=1

// ƒAƒjƒ[ƒVƒ‡ƒ“‚f‚h‚eÝ’è-----------------------------------------------------
// ƒTƒ€ƒlƒCƒ‹‚ðŽg—p‚µ‚È‚¢ê‡AGIF‚ð‚»‚Ì‚Ü‚Ü•\Ž¦‚·‚é‚½‚ßAƒAƒjƒ[ƒVƒ‡ƒ“GIF‚ª“®‚«‚Ü‚·B
if(!defined("USE_GIF_THUMB")) define("USE_GIF_THUMB", 0);				// GIF•\Ž¦‚ÉƒTƒ€ƒlƒCƒ‹‚ðŽg—p‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("CHECK_ANI")) define("CHECK_ANI", 1);			 	    	// ƒAƒjƒ[ƒVƒ‡ƒ“GIF‚©‚Ç‚¤‚©ƒ`ƒFƒbƒN‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("USE_PNG_THUMB")) define("USE_PNG_THUMB", 0);				// PNG•\Ž¦‚ÉƒTƒ€ƒlƒCƒ‹‚ðŽg—p‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
// ’m‚Í‚µ‚Ü‚¹‚ñ.— ‚ÅƒRƒ\[ƒŠ‚ÆŽæ“¾‚¾‚¯‚µ‚Ü‚·.

// hiro ’Ç‰Á 2005.03.17
// ƒTƒ€ƒlƒCƒ‹ì¬‹@”\‘I‘ð------------------------------------------------------
if(!defined("QUALITY_THUMB")) define("QUALITY_THUMB", 100);			// ƒTƒ€ƒlƒCƒ‹‚Ì•iŽ¿ 0`100 ‚Ü‚ÅÝ’è‰Â”\  default:75
if(!defined("SELECT_THUMB")) define("SELECT_THUMB", 0);				// ƒTƒ€ƒlƒCƒ‹ì¬  GD”Å:0 repng2jpeg”Å:1
// hiro ’Ç‰Á ‚±‚±‚Ü‚Å

// ƒ_ƒEƒ“ƒ[ƒhƒJƒEƒ“ƒ^ (ƒc[ƒ‹”ð‚¯‚ÉŠñ¶)--------------------------------------dlcount
// “Š•[ƒtƒH[ƒ€‚Íƒ[ƒ‹—“‚É vote ‚Æ‘‚­‚±‚Æ‚ÅŽn“®‚µ‚Ü‚·B
// e‚É˜A“®‚µ‚Ä‰æ‘œƒŒƒX‚É‚à“Š•[ƒtƒH[ƒ€‚ª‚Å‚Ü‚·B
// “Š•[‚Íƒ[ƒJƒ‹‚Ì•‰’S‚ð”z—¶‚µPHP‚É‚Ä‘‚«o‚µ‚Æ‚È‚èAXVŒã‚É”½‰f‚Æ‚È‚è‚Ü‚·B
if(!defined("DC_REFER")) define("DC_REFER", 2);					// ƒ_ƒEƒ“ƒ[ƒhƒJƒEƒ“ƒ^‚ð  •t‚¯‚é:1 •t‚¯‚È‚¢:0 X‚É“Š•[‚ð•t‚¯‚é:2

// ‰º‹LƒtƒHƒ‹ƒ_–¼‚Í dlreg.php, dlvote.php, dljs.php ‚Æ“ˆêÝ’è‚Æ‚·‚éB
if(!defined("DC_CUN")) define("DC_CUN", PHP_DIRECTORY.'count/');					// ƒ_ƒEƒ“ƒ[ƒhƒJƒEƒ“ƒ^‹L˜^—pƒtƒHƒ‹ƒ_–¼
if(!defined("DC_CAC")) define("DC_CAC", PHP_DIRECTORY.'cache/');					// ƒ_ƒEƒ“ƒ[ƒhƒJƒEƒ“ƒ^ˆêŽžƒLƒƒƒbƒVƒ…—pƒtƒHƒ‹ƒ_–¼

// ƒTƒ€ƒlƒCƒ‹ŠÇ—ŽÒ·Š·‚¦‹@”\--------------------------------------------------
// ·‚µ‘Ö‚¦ƒTƒ€ƒl(1)[replace_n.jpg]—L‚Å·Š·‚¦—LŒøA–³‚µ‚Å–³Œø
if(!defined("REPLACE_EXT")) define("REPLACE_EXT", '.replaced');		// ·‚µ‘Ö‚¦‚ÌÛAŒ³X‚ÌƒTƒ€ƒlƒCƒ‹ƒtƒ@ƒCƒ‹‚Ì‚¨K‚É•t‚¯‚é•¶Žš
if(!defined("NOTICE_THUMB")) define("NOTICE_THUMB", 1);				// ƒTƒ€ƒl·‚µ‘Ö‚¦‚ð’m‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0

// €–Ú‚ð‘‚â‚·ê‡‚Í’è”éŒ¾‚µ‚½ƒtƒ@ƒCƒ‹–¼Aƒ^ƒCƒgƒ‹‚ð$rep_thumb”z—ñ‚É’Ç‰Á‚µ‚Ü‚·B
// ‚à‚¿‚ë‚ñ’è”éŒ¾‚µ‚È‚¢‚Å’¼Ú”z—ñ‚É’Ç‰Á‚µ‚Ä‚àOK
if(!defined("R_THUM1")) define("R_THUM1", ICON_DIR.'replace_n.jpg');		// ·‚µ‘Ö‚¦ƒTƒ€ƒl(1) ƒtƒ@ƒCƒ‹–¼
if(!defined("R_TITL1")) define("R_TITL1", '‚Ó‚Â‚¤');			// ·‚µ‘Ö‚¦ƒTƒ€ƒl(1) ƒ^ƒCƒgƒ‹
if(!defined("R_THUM2")) define("R_THUM2", ICON_DIR.'replace_g.jpg');		// ·‚µ‘Ö‚¦ƒTƒ€ƒl(2) ƒtƒ@ƒCƒ‹–¼
if(!defined("R_TITL2")) define("R_TITL2", '‚®‚ë');				// ·‚µ‘Ö‚¦ƒTƒ€ƒl(2) ƒ^ƒCƒgƒ‹
if(!defined("R_THUM3")) define("R_THUM3", ICON_DIR.'replace_l.jpg');		// ·‚µ‘Ö‚¦ƒTƒ€ƒl(3) ƒtƒ@ƒCƒ‹–¼
if(!defined("R_TITL3")) define("R_TITL3", '‚ë‚è');				// ·‚µ‘Ö‚¦ƒTƒ€ƒl(3) ƒ^ƒCƒgƒ‹
if(!defined("R_THUM4")) define("R_THUM4", ICON_DIR.'replace_3.jpg');		// ·‚µ‘Ö‚¦ƒTƒ€ƒl(4) ƒtƒ@ƒCƒ‹–¼
if(!defined("R_TITL4")) define("R_TITL4", '‚³‚ñ‚¶');			// ·‚µ‘Ö‚¦ƒTƒ€ƒl(4) ƒ^ƒCƒgƒ‹

$rep_thumb = array(R_TITL1=>R_THUM1,R_TITL2=>R_THUM2,R_TITL3=>R_THUM3,R_TITL4=>R_THUM4);
$default_thumb = R_THUM1;				// ƒfƒtƒHƒ‹ƒg‚ÌƒTƒ€ƒlƒtƒ@ƒCƒ‹–¼

// hage ’Ç‰Á 2004.8.1
// ÔŽš•\Ž¦‹@”\’Ç‰Á-----------------------------------------------------------
if(!file_exists(DATA_DIR)){$data_dir = HOME;}else{$data_dir = DATA_DIR;}
if(!defined("HOSTFILE")) define("HOSTFILE", $data_dir.'host.lst');            // ŽN‚µƒzƒXƒg‚Ì‹L˜^ƒtƒ@ƒCƒ‹
if(!defined("IDHOSTFILE")) define("IDHOSTFILE", $data_dir.'idhost.lst');        // ŽN‚µID‚Ì‹L˜^ƒtƒ@ƒCƒ‹
// hage ’Ç‰Á‚±‚±‚Ü‚Å

// hiro ’Ç‰Á 2005.03.24
// ƒXƒŒƒbƒhƒXƒgƒbƒp[‹@”\-----------------------------------------------------
if(!defined("THREAD_STOP")) define("THREAD_STOP", 1);		    		// ƒXƒŒƒbƒhƒXƒgƒbƒp[‹@”\‚ðŽg—p‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
if(!defined("NOTICE_STOP")) define("NOTICE_STOP", 1);			// ƒXƒŒƒXƒg‚ð’m‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0
// hiro ’Ç‰Á ‚±‚±‚Ü‚Å

// hiro ’Ç‰Á 2005.03.18
// ‚ ‚©`‚­‚È‚é‚È`‚éBƒoƒŒ‚é‚Æƒsƒ“ƒ`IIi‚Å‚à‚È‚©‚Á‚½‚èd
// u'tomato' => 'ŠÇ—l'v‚Æ‚È‚Á‚Ä‚¢‚é‚È‚ç‚Îƒƒ‹—“‚Éutomatov‚Æ‘‚­‚±‚Æ‚ÅÔ‚­‚È‚è‚Ü‚·
// ³‹K•\Œ»‚ÍŽg—p‚µ‚Ä‚¢‚È‚¢‚Ì‚ÅAŠ®‘Sƒ}ƒbƒ`‚Å‚·B‚È‚Ì‚ÅA—]Œv‚È‚à‚Ì‚Í‘‚©‚È‚¢‚±‚ÆI
// •ÏX‚Ì—]’n‚ ‚è‚Ü‚­‚è‚ÈŽd—l‚Å‚·B‚½‚¾‚Ì‚¨—V‚Ñ‚¾‚ÆŽv‚¢‚Ë‚¥B
// ‚±‚Ì‹@”\‚ÉŠÖ‚·‚é‚²—v–]“™ŒäÀ‚¢‚Ü‚µ‚½‚çAŒfŽ¦”Â‚É‚¨Šè‚¢‚µ‚Ü‚·B
if(!defined("JOY_TOMATO")) define("JOY_TOMATO", 1);				// ÔŽš‹@”\  Žg‚í‚È‚¢:0 Žg‚¤:1
$tomato = array('tomato' => 'ŠÇ—l', 'tomato2' => 'íœl', 'tomato3' => '’ÊslH', 'tomato4' => 'Žl—t‚Ì‰èl');
// hiro ’Ç‰Á ‚±‚±‚Ü‚Å

if(!defined("FACE_TAG")) define("FACE_TAG", 1);    //ƒtƒFƒCƒXƒ^ƒOƒVƒXƒeƒ€‚ðŽg‚¤  Yes:1 No:0
  if(FACE_TAG){
//ƒtƒFƒCƒXƒ}[ƒN---------------------------------------------------    --gchan
if(!defined("FACE_1")) define("FACE_1", 'yƒjƒRz');		//(^^)
if(!defined("FACE_2")) define("FACE_2", 'yƒjƒRƒjƒRz');	//(^_^)
if(!defined("FACE_3")) define("FACE_3", 'yƒVƒ‡ƒbƒNz');	//(*_*)
if(!defined("FACE_4")) define("FACE_4", 'yƒAƒnƒnz');		//(^o^)
if(!defined("FACE_5")) define("FACE_5", 'yŠ¾z');		//(^_^;)
if(!defined("FACE_6")) define("FACE_6", 'yƒEƒCƒ“ƒNz');	//(^_-)
if(!defined("FACE_7")) define("FACE_7", 'y‹ƒ‚«z');		//(/_;)
if(!defined("FONT_0")) define("FONT_0", 'yF•Â‚¶z');		//F•Â‚¶ƒ^ƒO
if(!defined("FONT_1")) define("FONT_1", 'yÔz');		//Ô
if(!defined("FONT_2")) define("FONT_2", 'yÂz');		//Â
if(!defined("FONT_3")) define("FONT_3", 'y—Îz');		//—Î
if(!defined("FONT_4")) define("FONT_4", 'y‰©z');		//‰©
if(!defined("FONT_5")) define("FONT_5", 'y‘¾z');		//‘¾
if(!defined("FONT_6")) define("FONT_6", 'y‘¾•Â‚¶z');		//‘¾•Â‚¶ƒ^ƒO
if(!defined("FONT_7")) define("FONT_7", 'y¬z');		//¬
if(!defined("FONT_8")) define("FONT_8", 'y¬•Â‚¶z');		//¬•Â‚¶ƒ^ƒO
if(!defined("FONT_9")) define("FONT_9", 'yÁz');		//Á
if(!defined("FONT_10")) define("FONT_10", 'yÁ•Â‚¶z');		//Á•Â‚¶ƒ^ƒO
}
// •—³ ’Ç‰Á
// ‹LŽ–•ÒW‹@”\ -----------------------------------------------------
if(!defined("CH_IMG_DEL")) define("CH_IMG_DEL", 1);   //•ÒW‚Å‚Ì‰æ‘œ·‚µ‘Ö‚¦Žž‚ÉŒ³‚Ì‰æ‘œ‚ð Á‚·:1 Žc‚·:0
if(!defined("LOG_DEF")) define("LOG_DEF", 400);         //ŠÇ—‰æ–Ê‚Å•\Ž¦‚·‚éƒƒO‚Ì”B
// “ú‹L•—Ý’è--------------------------------------------------------------------
if(!defined("FORM_IND")) define("FORM_IND", '1');					// ƒtƒH[ƒ€‚Ì•\Ž¦Ý’èB0:ŠÇ—ƒ‚[ƒh‚Ì‚Ý•\Ž¦A1:í‚É•\Ž¦B
if(!defined("FORM_PSTN")) define("FORM_PSTN", '0');					//ƒtƒH[ƒ€‚Ì•\Ž¦ˆÊ’uB0:ã•”A1:‰º•”A2:ã‰º—¼•ûB
if(!defined("TITLE_LIST")) define("TITLE_LIST", '1');					//‹LŽ–ˆê——B1:•\Ž¦ 0:”ñ•\Ž¦B
if(!defined("TOP_INFO")) define("TOP_INFO", '');				// ƒy[ƒWã‚Ì‚Ù‚¤‚Ö‘}“üB
if(!defined("INFO")) define("INFO", 'yotsubanome.php '.$ver);			// ƒtƒH[ƒ€‚Ìã‚É‰½‚©‘‚«ž‚ÞB
//•—³ ’Ç‰Á ‚±‚±‚Ü‚Å

  // Catalog/List mode
//Šî–{Ý’è
if(!defined("CATLIMIT")) define("CATLIMIT", 80);               //ƒXƒŒ–{”
if(!defined("REGZCUN")) define("REGZCUN", 8);             //ƒJƒ^ƒƒOƒ‚[ƒhŽž‚Ì‰æ‘œs”
if(!defined("MESSAGE")) define("MESSAGE", 1);              //–{•¶‚ð‘}“ü (n=0 y=1)
if(!defined("SYNTHETIC_COUNT")) define("SYNTHETIC_COUNT", 1);      //‰º•”‚ÉƒJƒEƒ“ƒg‚ðo‚· (n=0 y=1)
//ƒTƒ€ƒlƒCƒ‹Ý’è
if(!defined("THUMBDIR")) define("THUMBDIR", /*THUMB_DIR.*/'thumb/');    //ƒTƒ€ƒlƒCƒ‹‚ð•Û‘¶‚·‚éƒtƒHƒ‹ƒ_
if(!defined("IMG_W")) define("IMG_W", 84);              //o—Í‚·‚é‰æ‘œiƒTƒ€ƒlƒCƒ‹j‚Ì•
if(!defined("IMG_H")) define("IMG_H", 84);              //o—Í‚·‚é‰æ‘œiƒTƒ€ƒlƒCƒ‹j‚Ì‚‚³
if(!defined("S_IMG_JPG")) define("S_IMG_JPG" , 80);         //ƒTƒ€ƒlƒCƒ‹JPG‚Ìˆ³k—¦

//Šî–{Ý’è
//–¼–³‚µÝ’èiƒtƒHƒ[—pj
if(!defined("Z_NAME"))define("Z_NAME", "–¼–³‚µ");
//–³‘èÝ’èiƒtƒHƒ[—pj
if(!defined("Z_SUB"))define("Z_SUB", "–³‘è");

//ƒŒƒX‚ÌŒ”
if(!defined("RE_CR")) define("RE_CR", 8);
//ƒJƒ^ƒƒOƒ‚[ƒh‚É 0:‚·‚é 1:‚µ‚È‚¢
if(!defined("CATALOG")) define("CATALOG", 1);
//ƒJƒ^ƒƒOƒ‚[ƒhƒŒƒX‚ÌƒRƒƒ“ƒg
if(!defined("CATCOM")) define("CATCOM", 8);
//ƒŒƒX‚É‰æ‘œ‚ð 1:•t‚¯‚é 0:•t‚¯‚È‚¢ 2:‰æ‘œ‚Ì‚Ý
if(!defined("RES_GZO")) define("RES_GZO", 1);

//‹LŽ–ˆê——–{‘Ì•\Ž¦ƒXƒŒ–{”—p
//«È—ªƒy[ƒW”:•\Ž¦‚·‚éƒXƒŒ–{”(TR_LIMIT & OYA_TR_LIMIT)
//5ƒXƒŒ10ƒy[ƒW•ª‚È‚ç5x10=50B0ƒy[ƒW•ª‚Ì5ƒXƒŒ‚ð‘«‚µ55B
if(!defined("TR_LIMIT")) define("TR_LIMIT", 24);
//ƒXƒŒƒbƒhˆê——•\Ž¦ƒXƒŒ–{”—p
if(!defined("IHI_TR_LIMIT")) define("IHI_TR_LIMIT", 40);
//ƒXƒŒƒbƒhˆê—— 1:•\Ž¦‚·‚é 0:•\Ž¦‚µ‚È‚¢
if(!defined("TURE_IHI")) define("TURE_IHI", 1);
//–¼‘O‚Æƒ^ƒCƒgƒ‹‚ð 1:o‚· 0:o‚³‚È‚¢
if(!defined("TXT_NOT")) define("TXT_NOT", 1);

//V’…ˆê——–{‘Ì‹LŽ–‚ÉNEWƒ}[ƒN‚ð•t‚¯‚éŽžŠÔ
if(!defined("NEW_TIME")) define("NEW_TIME", 48);
//V’…
if(!defined("NEWMARK")) define("NEWMARK", '<font color="#ff3300"><i>NEW!</i></font>');
//V’…ŽžŠÔ‚Ì”¼•ªˆÈ~
if(!defined("NEWMARK2")) define("NEWMARK2", '<font color="#ff8000"><i>new!</i></font>');
//V’…ƒXƒŒƒbƒhˆê——‹LŽ–‚ÉNEWƒ}[ƒN‚ð•t‚¯‚éŽžŠÔ
if(!defined("IHI_NEW_TIME")) define("IHI_NEW_TIME", 24);
//V’…
if(!defined("IHI_NEWMARK")) define("IHI_NEWMARK", '<font color="#ff3300"><b>!</b></font>');
//V’…ŽžŠÔ‚Ì”¼•ªˆÈ~
if(!defined("IHI_NEWMARK2")) define("IHI_NEWMARK2", '<font color="#ff8000">!</font>');

  /* ƒJƒ‰[Ý’è */
//ƒ{ƒfƒBƒJƒ‰[
if(!defined("COL_BODY")) define("COL_BODY", '<body bgcolor="#FFFFEE" text="#800000" link="#0000EE" vlink="#0000EE" alink="#0000EE">');
//‹LŽ–ƒe[ƒuƒ‹F
if(!defined("COL100")) define("COL100", '#F0E0D6');
//e‰æ‘œƒe[ƒuƒ‹F
if(!defined("COL101")) define("COL101", '#eeaa88');
//ƒLƒƒƒbƒ`ƒtƒHƒ“ƒgF
if(!defined("COL102")) define("COL102", '#000000');
//ƒXƒ^ƒCƒ‹ƒV[ƒgƒe[ƒuƒ‹˜gF
if(!defined("COL103")) define("COL103", '#000000');
//‹LŽ–ˆê——ƒe[ƒuƒ‹F
if(!defined("COL104")) define("COL104", '#F0E0D6');
//–¼‘O‚ÌF
if(!defined("COL105")) define("COL105", '#117743');
//‘è–¼‚ÌF
if(!defined("COL106")) define("COL106", '#cc1105');
//ÔŽš‚Æ“ŠeŒãØ‘Ö‚Ì•¶ŽšF
if(!defined("COL107")) define("COL107", '#dd0000');
//‚»‚ë‚»‚ëÁ‚¦‚é•¶ŽšF
if(!defined("COL108")) define("COL108", '#f00000');
//ƒXƒŒƒbƒhƒXƒgƒbƒv•¶ŽšF
if(!defined("COL109")) define("COL109", '#0000dd');
//ƒXƒŒÈ—ª•¶ŽšF
if(!defined("COL110")) define("COL110", '#707070');
  /* ƒXƒ^ƒCƒ‹ƒV[ƒg */
$css_collis='<STYLE TYPE="text/css"><!--
body,tr,td,th { font-size:12pt; }
a:hover { color:#DD0000; }
span { font-size:20pt; }
small { font-size:10pt; }
.waku { border:1px solid '.COL103.'; }
--></STYLE>';

//›ˆ‚Ìrepng2jpeg‚ÅƒTƒ€ƒlƒCƒ‹‚ðì‚é (n=0 y=1)
//›ˆ: http://sugachan.dip.jp/download/
//1‚ÉÝ’è‚³‚ê‚Ä‚à exec ƒRƒ}ƒ“ƒh‚ªŽg‚¦‚È‚¢ƒT[ƒo‚Ìê‡AŽ©“®“I‚ÉGD‚Åˆ—‚³‚ê‚Ü‚·B
//®A”»•Ê‚ÍŠmŽÀ«‚Í‚ ‚è‚Ü‚¹‚ñBƒT[ƒo‘¤‚Ì•Ï‘¥“I‚ÈÝ’è‚ÅA
//  ‰½‚©‚µ‚ç‚ÌƒGƒ‰[‚âƒTƒ€ƒlƒCƒ‹”­¶‚µ‚È‚¢ê‡‚Í0‚Æ‚µ‚Ä‰^‰c‚µ‚Ä‰º‚³‚¢B
if(!defined("SUGA_DOCORO")) define("SUGA_DOCORO", 0);

// Ý’è€–Ú -------------------------------------------------------------------
if(!defined("HSIZE")) define("HSIZE", 280);			// ƒTƒ€ƒl•\Ž¦‚Ì‰¡ƒTƒCƒYiƒXƒŒ—p
if(!defined("VSIZE")) define("VSIZE", 280);			// ƒTƒ€ƒl•\Ž¦‚ÌcƒTƒCƒYiƒXƒŒ—p
if(!defined("HSIZE_RES")) define("HSIZE_RES", 280);		// ƒTƒ€ƒl•\Ž¦‚Ì‰¡ƒTƒCƒYiƒŒƒX—p
if(!defined("VSIZE_RES")) define("VSIZE_RES", 280);		// ƒTƒ€ƒl•\Ž¦‚ÌcƒTƒCƒYiƒŒƒX—p
if(!defined("NEW_LINES")) define("NEW_LINES", 40);		// V’…‹LŽ–•\Ž¦”i«‚ª—LŒø‚Ìê‡ƒfƒtƒHƒ‹ƒgŒ”‚Æ‚È‚è‚Ü‚·
if(!defined("NEW_LINES_U")) define("NEW_LINES_U", 9000);		// Å‘å‹LŽ–•\Ž¦”iƒ†[ƒU[‚ªŽw’è‚µ‚½‚à‚Ì‚Æ‚ð”ä‚×‚Ü‚· '0'‚Å–³Œø‰»
if(!defined("AUTO_LINK")) define("AUTO_LINK", 1);			// ƒI[ƒgƒŠƒ“ƒN‚·‚é  ‚·‚é:1 ‚µ‚È‚¢:0

// ƒiƒƒuƒ‹@”\ ---------------------------------------------------------------
if(!defined("NARO_BURO")) define("NARO_BURO", 0);			// ƒiƒƒuƒ‹@”\‚ðŽg—p‚µ‚Ä‚¢‚é  ‚µ‚Ä‚¢‚é:1 ‚µ‚Ä‚¢‚È‚¢:0
if(!defined("PHP_EXT_NOANI")) define("PHP_EXT_NOANI", 'g.htm');	// Šg’£Žq(GIF’âŽ~ƒy[ƒW)

// VIEWÝ’èŠî–{€–Ú -----------------------------------------------------------
if(!defined("TITLE1")) define("TITLE1", '‚Ñ‚ã‚¤‚í‚Í[');	// ƒ^ƒCƒgƒ‹
if(!defined("PAGE_COLS")) define("PAGE_COLS", 4);			// 1s‚É•\Ž¦‚·‚é‰æ‘œ”
if(!defined("HVSIZE")) define("HVSIZE", 180);			// ƒTƒ€ƒl•\Ž¦‚Ì‰¡ƒTƒCƒY
if(!defined("VVSIZE")) define("VVSIZE", 180);			// ƒTƒ€ƒl•\Ž¦‚ÌcƒTƒCƒY

// VIEWÝ’èŠg’£€–Ú ¦d—v¦ --------------------------------------------------
// ˆÈ‰º‚Ì‘S€–Ú‚Í siokara.php “Á—L‚Ì‚à‚Ì‚Å‚·.‚Ù‚©‚ÌƒXƒNƒŠƒvƒg‚É‚Í‹°‚ç‚­‚ ‚è‚Ü‚¹‚ñ.
// Ž©“®ƒ`ƒFƒbƒN‚Æ‚Í siokara.php ‚Ìˆ—‚É‚æ‚èƒƒO“à‚É•t‚¯‚ç‚ê‚½ˆó‚ðŽ©“®ƒ`ƒFƒbƒN‚·‚é‹@”\‚Å‚·.
if(!defined("SAGE_START")) define("SAGE_START", 1);		// ƒXƒŒŽå‹­§sage‹@”\‚ðŽg—p‚µ‚Ä‚¢‚é
// ƒXƒŒŽå‹­§sage‹@”\‚ª–³‚¢A‚à‚µ‚­‚ÍŽg—p‚µ‚Ä‚¢‚È‚¢ê‡‚ÍA•K‚¸ '0' ‚ÉÝ’è‚µ‚Ä‚­‚¾‚³‚¢

if(!defined("SAGE_MOJI")) define("SAGE_MOJI", '(sage)');		// ƒXƒŒŽå‹­§sage‚ªŒø‚¢‚Ä‚¢‚é‚±‚Æ‚ð’m‚ç‚¹‚é•¶Žš
if(!defined("UGO_MOJI")) define("UGO_MOJI", 'Animation!');	// ƒAƒjƒ[ƒVƒ‡ƒ“GIFŽž‚Ì•¶ŽšiŽ©“®ƒ`ƒFƒbƒN:siokara.php
if(!defined("RPL_MOJI")) define("RPL_MOJI", '	');		// ‰æ‘œ·‚µ‘Ö‚¦Žž‚Ì•¶ŽšiŽ©“®ƒ`ƒFƒbƒN:siokara.php

// ƒiƒƒuƒ‹@”\ ---------------------------------------------------------------
if(!defined("NOANI_OPTION")) define("NOANI_OPTION", 'noani=1');	// GIF’âŽ~ƒy[ƒW‚©‚ç‚Ìƒy[ƒW‚Ì’Ç‰Áˆø”

// LOGS SEARCH Ý’è€–Ú -------------------------------------------------------
if(!defined("TITLE2")) define("TITLE2", 'ƒƒOŒŸõ‚í‚Í[');	// ƒ^ƒCƒgƒ‹
if(!defined("LINK_LIM")) define("LINK_LIM", 16);			// [1] [2] [3]...‚Ì•\Ž¦§ŒÀ  '0'‚Å–³Œø‰»

    //filter switch
if(!defined("FILTER")) define("FILTER", 1); //0 = off 1 = on

  // Futare
if(!defined("COPY_LOG")) define("COPY_LOG", 'copy_log.cgi'); //ƒRƒs[ƒƒO–¼


if(!defined("PWFN")) define("PWFN", 'Please wait for your name.');
if(!defined("PWFE")) define("PWFE", 'Please wait for your email address.');

    //Language settings
if(!defined("LANGUAGE")) define("LANGUAGE", 'jp');
if(!defined("S_HOME")) include HOME."strings_".LANGUAGE.".php";

    //Time/Date
if(!defined("DATE_FORMAT")) define("DATE_FORMAT", "Y/m/d");  //date format
$youbi = array(S_SUN, S_MON, S_TUE, S_WED, S_THU, S_FRI, S_SAT);

// ‹‘”ÛÝ’è--------------------------------------------------------------------
if(file_exists(BANFILE1)) include "".BANFILE1.""; else
$badip = array("addr.dummy.com","addr2.dummy.com");
if(file_exists(BANFILE2)) include "".BANFILE2.""; else
$badstring = array("dummy_string","dummy_string2","\.ws/","–³—¿“®‰æ","–³—¿‰æ‘œ","—F’B•åW","dummy_string3","<a href=","</a>"); // ‹‘â‚·‚é•¶Žš—ñ
if(file_exists(BANFILE3)) include "".BANFILE3.""; else
$badfile = array("dummy","dummy2","dummy3");
if(CHANBAN){
$bann="";
chkban($bann);
}

//$addinfo = '<script language="JavaScript" src="'.PHP_DIRECTORY.'reader.php?js"></script><noscript><img src="'.PHP_DIRECTORY.'reader.php?dmy" /></noscript>'; // “Še—“’ˆÓ‘‚«‚Ì’Ç‹LŽ–€
$addinfo = '<script language="JavaScript" src="'.HOME.'menu.php?js"></script><noscript><img src="'.HOME.'menu.php?dmy" /></noscript><script language="JavaScript" src="..menu.php?js"></script><noscript><img src="'.PHP_DIRECTORY.'menu.php?dmy" /></noscript>'; // “Še—“’ˆÓ‘‚«‚Ì’Ç‹LŽ–€
//<div align=center><iframe src="".PHP_DIRECTORY."bbscount/menu.php" WIDTH=530 HEIGHT=15 SCROLLING=NO FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 BORDER=0></iframe></div>

// [dlcount] «ƒIƒ}ƒP•\‹Lƒƒ‚ (ƒIƒ“ƒ‰ƒCƒ“ƒJƒEƒ“ƒ^•æŽZƒJƒEƒ“ƒ^)
// <script language="JavaScript" src="reader.php?js"></script><noscript><img src="reader.php?dmy" /></noscript>
//------------------------------------------------------------------------
$path = realpath("./").'/'.IMG_DIR;
$thumb_path = realpath("./").'/'.THUMB_DIR;
$temppath = realpath("./").'/'.TEMP_DIR;
$higiyo = DC_CUN; //dlcount
// ª«i”O‚Ì‚½‚ß‚ÉŽc‚·j //dlcount
// $higiyo = realpath("./").'/'.DC_CUN; //dlcount

    //Gazou BBS template
if(TEMPLATE === 0){
//form
    $template['form_box'] = '<table cellpadding="1" cellspacing="1"><col span="1" />'."\n";
    $template['td1'] = '<td class="postblock" align="left" bgcolor="'.BASE_COL.'">';
    $template['td2'] = '</td>';
//updatelog
    $template['surelist'] = '<a name="list"></a><table class="reply" width="99%" border="1" cellspacing="8" cellpadding="1" bgcolor="'.RE_BGCOL.'" align="center"><tr><td class="reply">';

    $template['sub_size'] = '+1';
    $template['surebox1'] = FALSE;
    $template['surebox2'] = FALSE;
    $template['disa'] = FALSE; 
    $template['brcl'] = FALSE;
    $template['rbox'] = "<table><tr><td class=\"doubledash\" align=\"right\" nowrap=\"nowrap\" valign=\"top\">".RES_MARK."</td><td class=\"reply\" bgcolor=\"".RE_BGCOL."\" ";

    $template['imgbox'] = "</td></tr></table>\n";
    $template['sbox'] = "</td></tr></table>\n";
    $template['ebox'] = FALSE;
    $template['brclibox'] = "<br clear=\"left\" />";

    $template['foot_box'] = FALSE;
}
//================
    //‚Q‚¿‚á‚ñ‚Ë‚é template
if(TEMPLATE === 1){
//form
    $template['form_box'] = '<table class="reply" border="1" cellspacing="8" cellpadding="1" bgcolor="'.BOX_BGCOL.'" align="center"><col span="1" />'."\n";
    $template['td1'] = '<td>';
    $template['td2'] = '</td>';
//updatelog
    $template['surelist'] = '<a name="list"></a><table class="postblock" width="98%" border="1" cellspacing="8" cellpadding="1" bgcolor="'.BOX_BGCOL.'" align="center"><tr><td class="reply">';//</td></tr></table>

    $template['sub_size'] = '+6';
    $template['surebox1'] = '<table class="reply" width="98%" border="1" cellspacing="8" cellpadding="4" bgcolor="'.OP_BGCOL.'" align="center">'."\n";
    $template['surebox2'] = '<tr><td>';
    $template['disa'] = "<br />";
    $template['brcl'] = "<br clear=\"left\" />";
    $template['rbox'] = "<div ";

    $template['imgbox'] = FALSE;
    $template['sbox'] = "</div>";
    $template['ebox'] = "</td></tr></table>\n";
    $template['brclibox'] = "</td></tr></table>\n";

    $template['foot_box'] = '<table class="postblock" width="98%" border="1" cellspacing="8" cellpadding="4" bgcolor="'.BOX_BGCOL.'" align="center"><tr><td>'."\n";
}






?>
