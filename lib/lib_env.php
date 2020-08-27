<?php
/**
 * Yotsubanome Enviorment Library
 *
 * Enviorment Settings
 * Do not change unless you renamed the directories
 *
 * @package PMCLibrary
 * @version $Id$
 * @date $Date$
 */

//define("PHP_DIRECTORY", '../test/'); // yotsubanome "C:\windows\system\"
define("DATA_DIR", PHP_DIRECTORY.'data/'); // data directory
define("CSS_DIR", DATA_DIR.'css/'); // CSS directory
define("ICON_DIR", DATA_DIR.'icon/'); // icon directory [Graphics of the software go here]
define("TEMP_DIR", PHP_DIRECTORY.'temp/'); // upload content temperary directory
define("TPLT_DIR", DATA_DIR.'tplt/'); // template directory
define("JS_DIR", DATA_DIR.'js/'); // javascript directory
define("SALTFILE", DATA_DIR.'salt.php'); // saltfile for secure trip codes
?>
