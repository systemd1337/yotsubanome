<?php
/**
 * Yotsubanome CSS Library
 *
 * CSS data base loader for main program
 *
 * http://www.magmagateau.com/fuukaba/ is the source of the code
 *
 * @package PMCLibrary
 * @version $Id$
 * @date $Date$
 */

/* css data */
$style_load = false;
$style_bar = '';

if(file_exists(DATA_DIR.CSV_SS)){ // Load FuuR4 CSS data
	$style_data = DATA_DIR.CSV_SS;
	$style_bar .= '[';
	$lines = explode("\n", file_get_contents($style_data));
	foreach($lines as $null => $line){
		if($line != ''){
			list($style_name, $style_short, $style_path, $style_rel) = explode (',', $line);
			$style_path = CSS_DIR.$style_path;
			if(file_exists($style_path)){
				if($style_rel) $style_rel = 'stylesheet';
				else $style_rel = 'alternate stylesheet';
				$style_load .= '<link rel="'.$style_rel.'" type="text/css" href="'.$style_path.'" title="'.$style_name.'" />'."\n";
				$style_js = format_js_var($style_name);
				$style_title = str_replace('[what]', $style_name, _T('style_tooltip'));
				$style_bar .= ' <a href="javascript:set_stylesheet('.$style_js.')" title="'.$style_title.'">'.$style_short.'</a> |';
			}
		}
	}
	$style_bar .= ']';
	// Tidy up trailing seperators and empty brackets
	$style_bar = str_replace('|]', ']', $style_bar);
	$style_bar = str_replace('[] ', '', $style_bar);
	$style_bar = str_replace('[]', '', $style_bar);
}

// Load stylesheet setting from config.php
// if either of the datafiles are missing or empty
if(str_replace('[]', '', $style_bar) == '') $style_load .= '<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSSFILE.'" />';

// style sheet js loader
$jsdonk = 'var style_cookie = "';
$jsdonk .= ($style_bar) ? 'yo_style' : '';
$jsdonk .= '";';
////++++
// CSS data is loaded And we proceed with head()
?>
