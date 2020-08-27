<?php
define("S_HOME", 'Home');           //Forwards to home page
define("S_ADMIN", 'Manage');          //Forwards to Management Panel
define("S_ARCHIVELOG", 'Archive');          //Forwards to Archive List
define("S_ARTICLE", 'List');          //Forwards to Thread List
define("S_RETURN", 'Return to '.TITLE);          //Returns to image board
define("S_POSTING", 'Posting mode: Reply');        //Prints message in red bar atop the reply screen
define("S_EDITING", 'Posting mode: Edit');        //Prints message in yellow bar atop the edit screen
define("S_EDITED", 'Edited post');        //Prints message below yellow bar atop the edit screen
define("S_NOTAGS", 'HTML tags are allowed.');        //Prints message on Management Board
define("S_NEWT", 'New Thread');           //Describes New Thread
define("S_NEWT_", 'New Thread');           //Describes New Thread in thread list box
define("S_SPOILERS", 'Spoilers');        //Describes Spoilers
define("S_NAME", 'Name');           //Describes name field
define("S_EMAIL", 'E-mail');          //Describes e-mail field
define("S_SUBJECT", 'Subject');          //Describes subject field
define("S_SUBMIT", 'Submit');          //Describes submit button
define("S_COMMENT", 'Comment');          //Describes comment field
define("S_UPLOADFILE", 'File');          //Describes file field
define("S_NOFILE", 'No File');          //Describes file/no file checkbox
define("S_DELPASS", 'Password');          //Describes password field
define("S_DELEXPL", '(Password used for post and file deletion and editing)');       //Prints explanation for password box (to the right)
define("S_OPTION", 'Option');    // options
define("S_OPTIONAL", 'optional');    // optional
define("S_GIFPNGSTOP", '<font size="-1"> Animation stop</font>'); // gif/png stop text
define("S_OR",'<font size="-1"> or </font>');    //the or in gif/png stop text
define("S_REQUIRE", 'Required');
define("S_NONAMEF", 'No Name field');
define("S_IDDISP", 'ID Display');
define("S_RETURNTO", 'Noko');
define("S_SPAMTRAP", 'Leave these fields empty (spam trap):');

define("S_FRULES", '<li />Supported file types are: BMP, GIF, JPG, PNG  [YES! BITMAP!] 
<li />Maximum file size allowed is '.MAX_KB.' KB.
<li />'.MAX_W.'x'.MAX_H.' or larger will be thumbnailed.');
/*<li />Images greater than '.MAX_W.'x'.MAX_H.'pixels will be thumbnailed.*/
define("S_MINHWRULES1", '<li />Images smaller than ');
define("S_MAXHWRULES1", '<li />Images greater than ');
define("S_MINHWRULES2", ' pixels are not allowed.');
define("S_MAXHWRULES2", ' pixels are not allowed.');
    //Prints file rules under posting section
define("S_FANIMERULES1", '<li />On the ');
define("S_FANIMERULES2", ' Animation stop, check it for a thumbnail of ');
define("S_FANIMERULES3", ' file.');
define("S_FVOTERULES", '<li />The vote function to the image starts to write 「vote」 in the E-mail column.');
define("S_EDIT_RULE", '<li />If fields are not edited, there will be an ERROR');

/*if(!USE_IMG){
define("S_FRULES_BOX", '</tr></td></table><table border=1 cellspacing=8 cellpadding=4 bgcolor="#ccffcc" align=center>');
}else
define("S_FRULES_BOX", '');*/

define("S_REPORTERR", 'Cannot find reply.');       //Returns error when a reply (res) cannot be found
define("S_TGIF", 'Animation GIF');
define("S_TPNG", 'Animation PNG');
define("S_THUMB", 'Thumbnail displayed, click image for full size.');     //Prints instructions for viewing real source
define("S_NOTHUMB", 'Thumbnail unavailable');
define("S_FILEDELETED", 'File Deleted');
define("S_PICNAME", 'File : ');          //Prints text before upload name/link
define("S_REPLY", 'Reply');          //Prints text for reply link
define("S_NOREPLY", 'It is not possible to Reply');          //Prints text for no reply link
define("S_OLD", 'Marked for deletion (old).');        //Prints text to be displayed before post is marked for deletion, see: retention
define("S_ARCH", 'Marked for archive (old).');        //Prints text to be displayed before post is marked for archive, see: retention
define("S_THUMBR1", 'The thumbnail is being replaced by the manager. Please guess the reason. w');
define("S_THUMBR2", 'When the thumbnail is clicked, former image is displayed.');
define("S_SAGE", 'Sage is being specified for this by the manager. Please guess the reason. w');
define("S_ABBRP", '[#] post[s]'); // [n] post(s) found / hidden
define("S_ABBRI", ' and [#] image[s]'); // [n] image(s) found / hidden
define("S_ABBRC", ' omitted. Click [Reply] to view.');      //Prints text to be shown when replies are hidden
define("S_ABBRT", ' in [#] thread[s]'); // [n] thread(s) found
define("S_ABBRU", ', made by [#] user[s]');
define("S_REPDEL", 'Delete Post');         //Prints text next to S_DELPICONLY (left)
define("S_DELPICONLY", 'File Only Deletion');         //Prints text next to checkbox for file deletion (right)
define("S_EDITKEY", 'Password ');          //Prints text next to password field for edit (left)
define("S_DELETE", 'Delete');          //Defines deletion button's name
define("S_REPORT", 'Report');          //Defines report button's name
define("S_ARTICLE_FIX",'Post Correction');
define("S_ARTICLE_EDIT",'Post Edit');
define("S_PREV", 'Previous');          //Defines previous button
define("S_FIRSTPG", 'Previous');          //Defines previous button
define("S_NEXT", 'Next');           //Defines next button
define("S_LASTPG", 'Next');          //Defines next button
define("S_FOOT", '- <a href="http://php.s3.to" target="_blank">GazouBBS</a> + <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> -'); //Prints footer (leave these credits)
define("S_RELOAD", 'Reload');          //Reloads the image board (refresh)
define("S_UPFAIL", 'Upload failed.');        //Returns error for failed upload (reason: unknown?)
define("S_NOREC", 'Cannot find record.');        //Returns error when record cannot be found
define("S_SAMEPIC", 'Duplicate md5 checksum detected.');      //Returns error when a md5 checksum dupe is detected
define("S_SAMEPICLOCA1", "<br />Already posted <a href=\"");
define("S_SAMEPICLOCA2", "\">here</a>.");
define("S_TOOBIG", 'This image is too large!  Upload something smaller!');
define("S_TOOBIGORNONE", 'Either this image is too big or there is no image at all.  Yeah.');
define("S_UPGOOD", 'File '.$upfile_name.' uploaded!<br /><br />');     //Defines message to be displayed when file is successfully uploaded
define ('S_SCRTHREAD', "Redirecting to your new thread.");
define ('S_SCRPOST', "Redirecting to your post.");
define("S_STRREF", 'String refused.');        //Returns error when a string is refused
define("S_UNJUST", 'Unjust POST.');        //Returns error on an unjust POST - prevents floodbots or ways not using POST method?
define("S_NOPIC", 'No file selected.');        //Returns error for no file selected and override unchecked
define("S_NOTEXT", 'No text entered.');        //Returns error for no text entered in to subject/comment
define("S_MANAGEMENT", 'Manager : ');         //Defines prefix for Manager Post name
define("S_DELETION", 'Deletion');          //Prints deletion message with quotes?
define("S_TOOLONG", 'Field too long.');
define("S_TOOLONGS", 'Subject too long.');
define("S_TOOLONGC", 'Comment too long.'); 
define("S_TOOLONGN", 'Name too long.');
define("S_TOOLONGE", 'Email too long.');        //Returns error for too many characters in a given field
define("S_UNUSUAL", 'Abnormal reply.');        //Returns error for abnormal reply? (this is a mystery!)
define("S_LONGCOMMENT", '「Comment too long. Click ');
define("S_LONGHERE", 'here');
define("S_LONGSEE", ' to view the full text.」');
define("S_BADHOST", 'Host is banned.<br /><a href="../banplea/">Plea</a>');        //Returns error for banned host ($badip string)
define("S_BADIP", 'YOU ARE B&.<br /><a href="../banplea/">Plea</a>');        //Returns error for banned user ($badip string)
define("S_PROXY80", 'Proxy detected on :80.');       //Returns error for proxy detection on port 80
define("S_PROXY8080", 'Proxy detected on :8080.');       //Returns error for proxy detection on port 8080
define("S_SPAMACTI", '<h1>Anti-spam filters triggered.</h1>');       //Returns error for spam detection
define("S_SPAMMESS", '<p>If you are not a spammer, you probably did not leave the Anti-spam field blank. Try editing your post to remove it. Sorry for any inconvenience.</p><br />');       //Returns error message for spam detection
define("S_SUN", 'Sun');           //Defines abbreviation used for "Sunday"
define("S_MON", 'Mon');           //Defines abbreviation used for "Monday"
define("S_TUE", 'Tue');           //Defines abbreviation used for "Tuesday"
define("S_WED", 'Wed');           //Defines abbreviation used for "Wednesday"
define("S_THU", 'Thu');           //Defines abbreviation used for "Thursday"
define("S_FRI", 'Fri');           //Defines abbreviation used for "Friday"
define("S_SAT", 'Sat');           //Defines abbreviation used for "Saturday"
if(!defined("S_NNAME")) define("S_NNAME", 'Name : ');
if(!defined("DEF_SUB")) define("DEF_SUB", '無題');         //Defines what to print if there is no text entered into subject field
if(!defined("DEF_NAME")) define("DEF_NAME", '名無し');          //Defines what to print if there is no text entered in the name field
if(!defined("DEF_COM")) define("DEF_COM", 'キターーーー(^ヮ^)ーーーー！！！！');          //Defines what to print if there is no text entered in the comment field
define("S_NONAME", 'You are no allowed to be'.DEF_NAME);    //Returns error for no name
define("S_NOSUB", 'There is no title.');    //Returns error for no text entered in to subject
define("S_NOCOM", 'There is no text in comment.');    //Returns error for no text entered in to comment
define("S_NOPASS", 'There is no imputed password.');    //Returns error for no password
define("S_RENZOKU1", 'Flood detected, post discarded.');      //Returns error for $sec/post spam filter
define("S_RENZOKU2", 'Flood detected, file discarded.');      //Returns error for $sec/upload spam filter
define("S_RENZOKU3", 'Flood detected, post & file discarded.');        //Returns error for flood? (don't know the specifics)
define("S_DUPE", 'Duplicate file entry detected.');      //Returns error for a duped file (same upload name or same tim/time)
define("S_NOTHREADERR", 'Thread specified does not exist.');     //Returns error when a non-existant thread is accessed
define("S_SCRCHANGE", 'Updating page.');         //Defines message to be displayed when post is successful         //
define("S_BADDELPASS", 'Password incorrect.');       //Returns error for wrong password (when user tries to delete file)
define("S_WRONGPASS", 'Management password incorrect.');      //Returns error for wrong password (when trying to access Manager modes)
define("S_WRONGMANAME", 'Management name is not found.');      //Returns error for wrong name (when trying to access Manager modes)
define("S_RETURNS", 'Return to '.TITLE.'');          //Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
define("S_LOGUPD", 'Update');          //Updates the log/SQLDB by accessing the PHP file
define("S_BNOTBANIP", 'Unable to find record of your IP being banned.');
define("S_BNOTBAN", 'You are not banned!');
define("S_BBAN", 'You have been banned!');

define("S_BBANMESS1", 'You have been permanently banned from ');
define("S_BBANBOARD", '<b>all boards</b>.');
define("S_BBANMESS2", '');
define("S_BBANMESSREA", 'The moderation team supplied the following reason: ');

define("S_BBANMESSB4FORM", "If you believe this is a mistake, you may dispute the matter by posting <a href='".HOME."banplea/post".PHP_EXT2."'>here</a> or the form provided below.");

define("S_BBANMESSVIEWDENY", 'Your appeal was reviewed and denied. You may not appeal this ban again.');
define("S_BBANMESSDENY", 'You may not appeal this ban.');

define("S_MANAMODE", 'Manager Mode');         //Prints heading on top of Manager page
define("S_MANAREPDEL", 'Management Panel');        //Defines Management Panel radio button--allows the user to view the management panel (overview of all posts)
define("S_MANAPOST", 'Manager Post');         //Defines Manager Post radio button--allows the user to post using HTML code in the comment box
define("S_MANASAGE", 'Perma-sage');
define("S_MANATHUMB", 'Thumbnail replacement');
define("S_MANASTOP", 'Thread stop');
define("S_MANAHOST", 'Host/ID display list'); // registration and deletion
define("S_MANAARCH", 'Archive Management');
define("S_MANAREGBAN", 'Ban Management');
define("S_MANADELBAN", 'Unban Management');
define("S_MANAREGWORD", 'Word filter Registration');
define("S_MANADELWORD", 'Word filter Deletion');
define("S_MANALOG", 'Log management');
define("S_FUTARE", 'Log cleaning');
define("S_MANASUB", 'Submit');          //Defines name for submit button in Manager Mode
define("S_MANAVER", 'Verify Management access');
define("S_MANANAME", 'Mod/Admin name');
define("S_MANAPASS", 'Pass');
define("S_MANAREM", 'Remeber my login');
define("S_DELLIST", 'Mark the check box of a post, and push the deletion button to delete it.');         //Prints sub-heading of Management Panel
define("S_SAGELIST", 'Mark the check box of a post, and push the change button to Permasage it.<center>「Sage」and「Sage release」change.<center>「sage」by「Sage start」and「Number sage of loesses」cannot be released.');
define("S_STOPLIST", 'Mark the check box of a post, and push the change button to lock/close it.<br />「Suresuto」and「Suresuto」release" change.<br />');
define("S_THUMBLIST", 'Mark the check box of a post, and push the replacement button to replace the thumbnail.<center>「Selection」and「Selection Release」 change.');
define("S_HOSTREGLIST", "Mark the check in object host's post check box, and push the change button.<br />It is registered in the display host's list.<br />If the host name is not done when it is checked to display the host name, ID is displayed.<br />");
define("S_HOSTDELLIST", "Mark the check box of the host who wants to delete it from the list, and push the change button.<br />It is deleted from the display host's list.");
define("S_WORDFILTERLIST", 'Put the word you want to filter in the red box.<br />Put the filtered word in the blue box.');
define("S_INTO", '->');
define("S_ITDELETES", 'Delete');          //Defines for deletion button in Management Panel
define("S_MDDELETION", 'Delete');
define("S_MDRESET", 'Reset');          //Defines name for field reset button in Management Panel
define("S_MDCHANGE", 'Change');
define("S_MDREPLACE", 'Replace');
define("S_HOSTDIS", 'The host name is displayed');
define("S_HOSTDISLIST", 'Host display list');
define("S_IDDISLIST", 'ID display list');
define("S_SEL", 'Sel');
define("S_HOSTNAME", 'Host name');
define("S_STILLGIF", 'GIF is only made thumbnail');
define("S_STILLPNG", 'PNG is only made thumbnail');
define("S_MDONLYPIC", 'File Only');         //Sets whether or not to delete only file, or entire post/thread

//bann
define("S_PUBREA", 'Public reason : ');
define("S_PRIREA", 'Private note : ');
define("S_BANPLEABLE", 'The ban is cleanable : ');
define("S_MODADMINNAME", 'Name of Mod/Admin : ');
define("S_BANNOTPLEABLE", 'The ban is <b>NOT</b> cleanable : ');
define("S_REQUIRETOBANUSER", 'Required to ban user');
define("S_REQUIRETOBAN", 'Required to ban');
define("S_REQUIRETOBANANY", 'Required to ban anything');

define("S_MANABANISHUSER", 'User banishment?');
define("S_DISPLAYTOMANA", 'This will only be visible to mods and admins');
define("S_DISPLAYTOUSER", 'This will be displayed to banned user');
define("S_MANABADFILE", 'Bad file');
define("S_MANABADWORD", 'Bad word');

define("S_MDTABLE1", '<tr bgcolor="#6080f6"><th>Del</th><th>Post No</th><th>Time</th><th>Subject</th>'); //Explains field names for Management Panel (Delete?->Subject)
define("S_MDTABLE2", '<th>Name</th><th>Comment</th><th>Host / IP</th>'); //Explains names for Management Panel (Name->IP)
define("S_MDTABLE3", '<th>Size<br />(Bytes)</th>'); //Explains names for Management Panel (Size)
define("S_MDTABLE4", '<th>md5</th>'); //Explains names for Management Panel (md5)

define("S_MTTABLE1", '<tr bgcolor="#6080f6"><th>Sel</th><th>Post No</th><th>状態
</th><th>Time</th><th>Subject</th>');

define("S_RESET", 'Reset');          //Sets name for field reset button (global)
define("S_IMGSPACEUSAGE", 'Space used : ');      //Prints space used KB by the board under Management Panel
define("S_YOURIP", 'Your IP Address is : ');
define("S_SUCCESS", 'Success');
define("S_CANNOTWRITE", 'Cannot write to a current directory.<br />');      //Returns error when the script cannot write to the directory, this is used on initial setup--check your chmod (777)
define("S_NOTWRITE", 'Cannot write to directory.<br />');      //Returns error when the script cannot write to the directory, the chmod (777) is wrong
define("S_NOTREAD", 'Cannot read from directory.<br />');      //Returns error when the script cannot read from the directory, the chmod (777) is wrong
define("S_NOTDIR", 'Directory does not exist.<br />');      //Returns error when the script cannot find/read from the directory (does not exist/isn't directory), the chmod (777) is wrong
define("S_VERIFY", 'Verify');                                                         //verification of the capatcha.
define("S_WRONGVERY", 'You entered the wrong verification code!');
define("S_NOTITLE", 'Please enter a title or subject for your post.');
define("S_ANOTFOUND", 'The article is not found or the password is wrong.');
define("S_EDITSAME", 'The content is quite the same. Please change somewhere.');
define("S_CANNOTCORRECT", 'It is not possible to correct this post.');

define("S_TOOBIGRES", 'Picture dimensions is too large.');
define("S_TOOSMALLRES", 'Picture dimensions is too small.');
define("S_FILEEXNOTSUPPORTED", 'File extension not supported');
define("S_FILETYPENOTSUPPORTED", 'File type not supported');

define("S_THUMBV", 'Thumb');
define("S_VIEWA", 'Image 像びゅ～わ～');
define("S_NEWTHREAD", 'Make new thread');
define("S_CAT", 'Catalog');
define("S_CATALOGMODE", 'Catalog Mode');
define("S_LIST", 'Thread List');
define("S_NWAHA", '新着わはー');
define("S_ABOUT", 'ABOUT');
define("S_OGEGE", 'Ogege');
define("S_ALBUM", 'Album');
define("S_TLIST", 'The Thread List is here.');
define("S_SUBLIST", 'Subject List');
define("S_SOURCECODE", 'Source Code');
define("S_ARCHIVEOF", 'Archive of '.TITLE);
define("S_NOARCHIVE", 'There is no archived threads.');

/*smaller files connection*/
define("S_TOTAL_IMG", 'Total Images');
define("S_TOTAL_SURE", 'Total Threads');
define("S_TOTAL_POST", 'Total Posts');

define("S_FUTAPASS", '▼Please input the password.');
define("S_FUTABO1", 'Submit');
define("S_FUTADEL", 'Delete it?');
define("S_FUTA2YOTSU", 'Update it?');
define("S_FUTAGARBAGE", 'The garbage of URL, MAIL, and TIME is removed.<br />
Please execute the log after it backs up without fail.');
define("S_FUTAPROSS", '<b>It was normally processed.</b>');
$copy_log = COPY_LOG;
define("S_FUTAPROSSCOPY", '<br />Please rename <b>'.$copy_log.'</b> after confirming the log as '.LOGFILE.' and replace it.');
define("S_FUTACLEAN", 'Clean');

    //img_view/search
define("S_IMG_VIEW_INFO", 'It links with contribution Thread a check box of the display it on as for the file information. ');
define("S_TEXT_ENGINE", 'Full-text search engine');
define("S_TEXT_ENGINE_INSTALLED", ' installed');
define("S_FILE_INFO_DISP", 'The file information is displayed.');
define("S_FILE_INFO_DISP_BUTTON", 'ポチッとな');
define("S_ALL_TOTAL_IMG", 'The number of all images');
define("S_SURE_IMG", 'The number of op images');
define("S_REPLY_IMG", 'The number of reply images');
define("S_PAGE_DEF", 'Number of one page displays');
define("S_IMG_DISPLAY_TO", 'to');
define("S_IMG_DISPLAY", 'are the images displayed.');
define("S_PIECE", '');

define("S_SEARCH",'Search');
define("S_DISPNO",'Display results：');
define("S_SEARCH_RULE", '・ Please delimit it in space when you specify two or more key words.<br />
・ It retrieves it to the search condition AND A B = It is (A and B. )<br />
・ The retrieval object is article No, a name, a title, a text, and eye column.<br />
・ Capital letters and small letters are distinguished. (A?a) (ABC?aBC)<br />
・ The retrieval word is used four colors repeatedly and displayed with the color. Google style?<br />
・ Please refrain from a strange search strategy as much as possible. The report if there is a bug.<br />
・ The base of this search engine is logoogle.php ver 0.1.1<br />');

define("S_SEARCH_NOT_FOUND", 'did not match any text.');
define("S_SEARCH_PROTIP", 'Search PRO TIP');
define("S_SEARCH_LIST", '- Please confirm whether there are neither an erratum nor an omission of a word in the key word.<br />
- Please use a different key word.<br />
- Please use a more general word.<br />
- Please reduce the number of key words.<br />
- Please doubt my sense.<br />');
define("S_POSTSCRIPT", 'PRO TIP:');
define("S_SEARCH_FIX", 'When it is not good, even if the above-mentioned is tried, please give up bravely. [ENGRISH wwww]');
define("S_KEYWORD_NO_MATCH", 'There was no article that matched to the key word.');

define("S_INLOG", 'In log');
define("S_SEARCH_RESULT", 'Search result |');
define("S_SEARCH_HIT", 'Hits');
define("S_SEARCH_RESULTS", 'Results');
define("S_SEARCH_SUBJECT", 'Subject：');
define("S_SEARCH_NAME", 'Name：');
define("S_SEARCH_DATE", 'Date：');
define("S_SEARCH_PREV", '&lt;&lt;Previous');
define("S_SEARCH_NEXT", 'Next&gt;&gt;');
define("S_IMGRET",'Image retrieval');
define("S_SEARCH_TOOL",'Search tool');
define("S_HELP",'Help');

    //time
define("S_SECONDS", 'seconds');
    //image download counter
define("S_THISIMG",'This image has been downloaded ');
define("S_THISIMGDLTIMES",' time[s].');

// Style tooltip: stuff inside [square brackets] MUST be left as is!
	define ('S_STYLETOOLTIP', "Switch to [what] style");

	// Title of stylesheet management page
	define ('S_ADMIN_STYLESHEETS', "Manage Stylesheets");

		define ('TH_ADMIN_IMPORTED', "Imported from <b>[file]</b>");
		define ('TH_ADMIN_EDITING', "Editing <b>[file]</b>");
		define ('TH_ADMIN_CREATED', "<b>[file]</b> created!");
		define ('TH_ADMIN_UPDATED', "<b>[file]</b> updated!");
		define ('TH_ADMIN_DELETED', "<b>[file]</b> deleted!");

		// Headings for fields
		define ('TH_ADMIN_IS_DEFAULT', "Default?");
		define ('TH_ADMIN_STYLE_DEFAULT', "Make this default");
		define ('TH_ADMIN_FULLNAME', "Full name");
		define ('TH_ADMIN_SHORTNAME', "Short name");
		define ('TH_ADMIN_DISP_ID', '<nobr>ID / Display order</nobr> <nobr>(0 to delete)</nobr>');
		define ('TH_ADMIN_ADDSTYLE', "Add [or modify] stylesheet entry");
			// This goes in [or modify] above
			define ('TH_ADMIN_MODSTYLE', "or modify");
		define ('TH_ADMIN_NEW_FILE', 'File');
		define ('TH_ADMIN_NEW_ID', '<nobr>Display order</nobr> <nobr>(Use existing ID to overwrite)</nobr>');

/*
define("S_SQLCONF", 'MySQL connection failure');  //MySQL connection failure
define("S_SQLDBSF", 'Database error, check SQL settings<br />'); //database select failure
define("S_TCREATE", 'Creating table!<br />\n'); //creating table
define("S_TCREATEF", 'Unable to create table!<br />');  //table creation failed
define("S_SQLFAIL", 'Critical SQL problem!<br />');  //SQL Failure
define("S_UNFILE", 'File type not suported.');
*/
?>
