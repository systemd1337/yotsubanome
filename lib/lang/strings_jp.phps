<?php
define("S_HOME", 'ホーム');
define("S_ADMIN", '管理用');
define("S_ARCHIVELOG", '過去ログ');
define("S_ARTICLE", '一覧');
define("S_RETURN", TITLE.' - 掲示板に戻る');
define("S_POSTING", 'レス送信モード');
define("S_EDITING", '編集モード');
define("S_EDITED", '編集する記事');
define("S_NOTAGS", 'タグがつかえます');
define("S_NEWT", '新スレッド');
define("S_NEWT_", '新スレッド');
define("S_SPOILERS", 'スポイラーズ');
define("S_NAME", 'おなまえ');
define("S_EMAIL", 'E-mail');
define("S_SUBJECT", '題　　名');
define("S_SUBMIT", '送信する');
define("S_COMMENT", 'コメント');
define("S_UPLOADFILE", '添付File');
define("S_NOFILE", '画像なし');
define("S_DELPASS", '削除キー');
define("S_DELEXPL", '(記事削除などの編集用。英数字で8文字以内)');
define("S_OPTION", 'オプション');
define("S_OPTIONAL", 'オプショナル');
define("S_GIFPNGSTOP", '<font size="-1">アニメ停止</font>');
define("S_OR", '<font size="-1">又は</font>');
define("S_REQUIRE", '必須');
define("S_NONAMEF", '名前欄なし');
define("S_IDDISP", '強制ID表示');
define("S_RETURNTO", 'スレに戻る');
define("S_SPAMTRAP", 'これらの欄は空白のままで(スパムトラップ)：');

define("S_FRULES", '<li />添付可能：BMP, GIF, JPG, PNG
<li />最大投稿データ-ハは '.MAX_KB.' KB までです。sage機能付き。
<li />'.MAX_W.'x'.MAX_H.'以上は縮小.');
/*<li />画像は横 '.MAX_W.'ピクセル、縦 '.MAX_H.'ピクセルを超えると縮小表示されます。*/
define("S_MINHWRULES1", '<li />');
define("S_MAXHWRULES1", '<li />');
define("S_MINHWRULES2", '画素より小さいイメージズは許容されていません。');
define("S_MAXHWRULES2", '画素のイメージズは許容されていません。');

define("S_FANIMERULES1", '<li />');
define("S_FANIMERULES2", 'は動きます。動かしたい時は投稿時に[');
define("S_FANIMERULES3", 'アニメ停止]のチェックを解除。');
define("S_FVOTERULES", '<li />E-mail 欄に「vote」と書くことで画像に対する投票機能がスタートします。');
define("S_EDIT_RULE", '<li />どこも編集しないとエラーになります。');

/*if(!USE_IMG){
define("S_FRULES_BOX", '</tr></td></table><table border=1 cellspacing=8 cellpadding=4 bgcolor="#ccffcc" align=center>');
}else
define("S_FRULES_BOX", '');*/

define("S_REPORTERR", '該当記事がみつかりません');
define("S_TGIF", 'アニメGIF.');
define("S_TPNG", 'アニメPNG.');
define("S_THUMB", 'サムネイルを表示しています.クリックすると元のサイズを表示します.');
define("S_NOTHUMB", '入手できないサムネイル');
define("S_FILEDELETED", 'ファイル削除にされる');
define("S_PICNAME", '画像タイトル：');
define("S_REPLY", '返信');
define("S_NOREPLY", '返信不可');
define("S_OLD", 'このスレは（古い）ので、もうすぐ消えます。');
define("S_ARCH", 'このスレは（古い）ので、もうすぐアーカイブ。');
define("S_THUMBR1", 'このスレは管理者によりサムネイルが差し替えられています。理由はお察しください。');
define("S_THUMBR2", 'サムネイルをクリックすると元の画像を表示します。');
define("S_SAGE", 'このスレは管理者によりsage指定されています。理由はお察しください。');
define("S_ABBRP", 'レス[#]投稿');
define("S_ABBRI", ' と[#]ファイル');
define("S_ABBRC", '件省略。全て読むには[返信]ボタンを押してください。');
define("S_ABBRT", 'で[#]糸');
define("S_ABBRU", '、作成された[#]人');
define("S_REPDEL", '記事削除');
define("S_DELPICONLY", '記事を残し画像だけ消す');
define("S_EDITKEY", '編集キー');
define("S_DELETE", '削除');
define("S_REPORT", 'レポート');
define("S_ARTICLE_FIX",'記事修正');
define("S_ARTICLE_EDIT",'記事編集');
define("S_PREV", '前のページ');
define("S_FIRSTPG", '最初のページ');
define("S_NEXT", '次のページ');
define("S_LASTPG", '最後のページ');
define("S_FOOT", '- <a href="http://php.s3.to" target=_blank>GazouBBS</a> + <a href="http://www.2chan.net/" target=_blank>futaba</a> + <a href="http://www.mapored.com/futallaby/" target=_blank>futallaby</a> -'); 
define("S_RELOAD", 'リロード');
define("S_UPFAIL", 'アップロードに失敗しました<br />サーバがサポートしていない可能性があります');
define("S_NOREC", 'アップロードに失敗しました<br />画像ファイル以外は受け付けません');
define("S_SAMEPIC", 'アップロードに失敗しました<br />同じ画像がありました');
define("S_SAMEPICLOCA1", "<br /><a href=\"");
define("S_SAMEPICLOCA2", "\">ここ</a>に既に掲示されています");
define("S_TOOBIG", 'アップロードに失敗しました<br />サイズが大きすぎます<br />'.MAX_KB.'Kバイトまで');
define("S_TOOBIGORNONE", 'アップロードに失敗しました<br />画像サイズが大きすぎるか、<br />または画像がありません。');
define("S_UPGOOD", '画像 '.$upfile_name.' のアップロードが成功しました<br /><br />');
define ('S_SCRTHREAD', "新しいスレッドにリダイレクトする。");
define ('S_SCRPOST', "あなたの投稿するにリダイレクトする。");
define("S_STRREF", '拒絶されました(str)');
define("S_UNJUST", '不正な投稿をしないで下さい(post)');
define("S_NOPIC", '画像がありません');
define("S_NOTEXT", '何か書いて下さい');
define("S_MANAGEMENT", '削除');
define("S_DELETION", '削除');
define("S_TOOLONG", ' 本文が長すぎますっ！');
define("S_TOOLONGS", ' 題名が長すぎますっ！');
define("S_TOOLONGC", ' コメントが長すぎますっ！'); 
define("S_TOOLONGN", ' 名前が長すぎますっ！');
define("S_TOOLONGE", ' Email が長すぎますっ！');
define("S_UNUSUAL", '異常です');
define("S_LONGCOMMENT", '「省略されました・・全てを読むには');
define("S_LONGHERE", 'ここ');
define("S_LONGSEE", 'を押してください」');
define("S_BADHOST", '拒絶されました(host)<br /><a href="../banplea/">Plea</a>');
define("S_BADIP", '拒絶されました(ip)<br /><a href="../banplea/">Plea</a>');
define("S_PROXY80", 'ＥＲＲＯＲ！　公開ＰＲＯＸＹ規制中！！(80)');
define("S_PROXY8080", 'ＥＲＲＯＲ！　公開ＰＲＯＸＹ規制中！！(8080)');
define("S_SPAMACTI", '<h1>スパムフィルターが作動しました</h1>');
define("S_SPAMMESS",  '<p>もしあなたが荒らしでなければ、スパム判定用の空欄を変更している可能性があります。投稿を見直して疑わしい箇所を削除してみてください。ご迷惑をおかけします。</p><br />');
define("S_SUN", '日');
define("S_MON", '月');
define("S_TUE", '火');
define("S_WED", '水');
define("S_THU", '木');
define("S_FRI", '金');
define("S_SAT", '土');
if(!defined("S_NNAME")) define("S_NNAME", '');
if(!defined("DEF_SUB")) define("DEF_SUB", '無題');				// 省略時の題名
if(!defined("DEF_NAME")) define("DEF_NAME", '名無し');			// 省略時の名前
if(!defined("DEF_COM")) define("DEF_COM", 'キターーーー(^ヮ^)ーーーー！！！！');			// 省略時の本文
define("S_NONAME", '名前がありません');
define("S_NOSUB", '本文がありません');
define("S_NOCOM", '題名がありません');
define("S_NOPASS", '編集キーが未入力です');
define("S_RENZOKU1", '連続投稿はもうしばらく時間を置いてからお願い致します');
define("S_RENZOKU2", '画像連続投稿はもうしばらく時間を置いてからお願い致します');
define("S_RENZOKU3", '連続投稿はもうしばらく時間を置いてからお願い致します');
define("S_DUPE", 'アップロードに失敗しました<br />同じ画像があります');
define("S_NOTHREADERR", 'スレッドがありません');
define("S_SCRCHANGE", '画面を切り替えます');
define("S_BADDELPASS", '該当記事が見つからないかパスワードが間違っています');
define("S_WRONGPASS", 'パスワードが違います');
define("S_WRONGMANAME", 'ネームパスが違います');
define("S_RETURNS", '掲示板に戻る');
define("S_LOGUPD", 'ログを更新する');
define("S_BNOTBANIP", 'あなたが禁止されていません');
define("S_BNOTBAN", 'あなたが禁止されていません！ ');
define("S_BBAN", 'あなたが禁止されて！');

define("S_BBANMESS1", 'あなたは永久に、');
define("S_BBANBOARD", '<b>すべての板</b>');
define("S_BBANMESS2", 'から禁止されました。');
define("S_BBANMESSREA", '管理チームは以下の理由を提供しました：');

define("S_BBANMESSB4FORM", "あなたがこれが誤りであると信じているならあなたが<a href='".HOME."banplea/post".PHP_EXT2."'>ここ</a>でポスティングでその件について議論できますか、またはフォームは以下に提供されました。");

define("S_BBANMESSVIEWDENY", 'あなたの上告は、見直されて、否定されました。あなたは再びこの禁止令に上告できません。');
define("S_BBANMESSDENY", 'あなたはこの禁止令に上告できません。');

define("S_MANAMODE", '管理モード');
define("S_MANAREPDEL", '記事削除');
define("S_MANAPOST", '管理人投稿');
define("S_MANASAGE", '強制sage処理');
define("S_MANATHUMB", 'サムネイル差し替え');
define("S_MANASTOP", 'スレスト処理');
define("S_MANAHOST", 'ホスト/ID表示リストに登録・削除');
define("S_MANAARCH", '過去ログ管理');
define("S_MANAREGBAN", '禁止令管理');
define("S_MANADELBAN", '削除禁止令管理');
define("S_MANAREGWORD", '単語フィルタ登録');
define("S_MANADELWORD", '単語フィルタ削除');
define("S_MANALOG", 'ログ管理');
define("S_FUTARE", 'ログ掃除');
define("S_MANASUB", ' 認証');
define("S_MANAVER", 'ことを確認します管理アクセス');
define("S_MANANAME", '管理人の名前');
define("S_MANAPASS", 'キー');
define("S_MANAREM", '次回から自動ログイン');
define("S_DELLIST", '削除したい記事のチェックボックスにチェックを入れ、削除ボタンを押して下さい。');
define("S_SAGELIST", 'sage状態を変更したい記事のチェックボックスにチェックを入れ、変更ボタンを押して下さい。<center>「sage」と「sage解除」が切り替わります。<center>「sageスタート」や「レス数sage」による「sage」は解除できません。');
define("S_STOPLIST", 'スレスト状態を変更したい記事のチェックボックスにチェックを入れ、変更ボタンを押して下さい。<br />「スレスト」と「スレスト解除」が切り替わります。');
define("S_THUMBLIST", 'サムネイルを差し替えたい記事のチェックボックスにチェックを入れ、差し替えボタンを押して下さい。<center>「差替」と「差替解除」が切り替わります。');
define("S_HOSTREGLIST", '対象ホストの記事チェックボックスにチェックを入れ、変更ボタンを押して下さい。<br />表示ホストのリストに登録されます。<br />[ホスト名を表示させる]にチェックするとホスト名を、しないとIDを表示します。');
define("S_HOSTDELLIST", 'リストから削除したいホストのチェックボックスにチェックを入れ、変更ボタンを押して下さい。<br />表示ホストのリストから削除されます。');
define("S_WORDFILTERLIST", 'フィルタを適用する赤いボックスで単語を置きます。<br />青色のボックスにフィルタ処理された単語を置きます。');
define("S_INTO", '->');
define("S_ITDELETES", '削除する');
define("S_MDDELETION", '削除');
define("S_MDRESET", 'リセット');
define("S_MDCHANGE", '変更');
define("S_MDREPLACE", '差し替え');
define("S_HOSTDIS", 'ホスト名を表示させる');
define("S_HOSTDISLIST", 'ホスト表示リスト');
define("S_IDDISLIST", 'ID表示リスト');
define("S_SEL", '選択');
define("S_HOSTNAME", 'ホスト名');
define("S_STILLGIF", 'GIFをサムネイル化するだけ');
define("S_STILLPNG", 'PNGをサムネイル化するだけ');
define("S_MDONLYPIC", '画像だけ消す');

//bann
define("S_PUBREA", '公共の理由：');
define("S_PRIREA", 'プライベートメモ：');
define("S_BANPLEABLE", '禁止を洗浄可能です：');
define("S_MODADMINNAME", '管理人の名前：');
define("S_BANNOTPLEABLE", '禁止を洗浄可能で<b>はない</b>：');
define("S_REQUIRETOBANUSER", '必須ユーザーを禁止する');
define("S_REQUIRETOBAN", '必須を禁止する');
define("S_REQUIRETOBANANY", '必須何かを禁止する');

define("S_MANABANISHUSER", 'ユーザー追放？');
define("S_DISPLAYTOMANA", 'これは、管理チームに表示されます');
define("S_DISPLAYTOUSER", 'この禁止ユーザーに表示されます');
define("S_MANABADFILE", 'ファイル悪い');
define("S_MANABADWORD", 'ワード悪い');

define("S_MDTABLE1", '<tr bgcolor="#6080f6"><th>削除</th><th>記事No</th><th>投稿日</th><th>題名</th>');
define("S_MDTABLE2", '<th>投稿者</th><th>コメント</th><th>ホスト名 ／ IP</th>');
define("S_MDTABLE3", '<th>添付<br />(Bytes)</th>');
define("S_MDTABLE4", '<th>md5</th>');

define("S_MTTABLE1", '<tr bgcolor="#6080f6"><th>選択</th><th>記事No</th><th>状態</th><th>投稿日</th><th>題名</th>');

define("S_RESET", 'リセット');
define("S_IMGSPACEUSAGE", '画像データ合計 : ');
define("S_YOURIP", 'あなたのIPは以下の通りです：');
define("S_SUCCESS", '成功');
define("S_CANNOTWRITE", 'カレントディレクトリに書けません<br />');
define("S_NOTWRITE", 'を書けません<br />');
define("S_NOTREAD", 'を読めません<br />');
define("S_NOTDIR", 'がありません<br />');
define("S_VERIFY", '確認');
define("S_WRONGVERY", 'あなたは間違った確認コードを入れました！');
define("S_NOTITLE", 'ポストのためにタイトルか対象を入力してください');
define("S_ANOTFOUND", '該当記事が見つからないかパスワードが間違っています');
define("S_EDITSAME", '内容が全く同じです　どこか変更してください');
define("S_CANNOTCORRECT", '修正不可');

define("S_TOOBIGRES", '画規模は大き過ぎます');
define("S_TOOSMALLRES", '画規模は小き過ぎます');
define("S_FILEEXNOTSUPPORTED", 'サポートされなかったファイル拡張子');
define("S_FILETYPENOTSUPPORTED", 'サポートされなかったファイルタイプ');

define("S_THUMBV", 'サムネイル');
define("S_VIEWA", '画像びゅ～わ～');
define("S_NEWTHREAD", '新規スレッド作成');
define("S_CAT", 'カタログ');
define("S_CATALOGMODE", 'カタログモード');
define("S_LIST", 'スレッド一覧');
define("S_NWAHA", '新着わはー');
define("S_ABOUT", 'ABOUT');
define("S_OGEGE", 'おげげ');
define("S_ALBUM", 'アルバムモード');
define("S_TLIST", 'スレッド一覧はこちら');
define("S_SUBLIST", '題名一覧');
define("S_SOURCECODE", 'ソースコード');
define("S_ARCHIVEOF", TITLE.'のアーカイブ');
define("S_NOARCHIVE", 'スレは格納されません');

/*smaller files connection*/
define("S_TOTAL_IMG", '画像総数');
define("S_TOTAL_SURE", 'スレ本数');
define("S_TOTAL_POST", '記事件数');

define("S_FUTAPASS", '▼パスワードを入力してください.');
define("S_FUTABO1", '認証');
define("S_FUTADEL", '削除しますか？');
define("S_FUTA2YOTSU", '更新しますか？');
define("S_FUTAGARBAGE", 'ＵＲＬ、ＭＡＩＬ、ＴＩＭＥのゴミを取り除きます。<br />
ログは必ずバックアップしてから実行して下さい。');
define("S_FUTAPROSS", '<b>正常に処理されました。</b>');
$copy_log = COPY_LOG;
define("S_FUTAPROSSCOPY", '<br />ログを確認の上、<b>'.$copy_log.'</b>を'.LOGFILE.'とリネームして差し替えて下さい。');
define("S_FUTACLEAN", 'お掃除する');

    //img_view/search
define("S_IMG_VIEW_INFO", 'ファイル情報を表示のチェックボックスオンで投稿スレにリンクします');
define("S_TEXT_ENGINE", '全文検索エンジン');
define("S_TEXT_ENGINE_INSTALLED", '搭載');
define("S_FILE_INFO_DISP", 'ファイル情報を表示');
define("S_FILE_INFO_DISP_BUTTON", 'ポチッとな');
define("S_ALL_TOTAL_IMG", '総画像枚数');
define("S_SURE_IMG", 'スレ画像数');
define("S_REPLY_IMG", 'レス画像数');
define("S_PAGE_DEF", '壱ページ表示数');
define("S_IMG_DISPLAY_TO", 'から');
define("S_IMG_DISPLAY", 'までの画像を表示');
define("S_PIECE", '枚');

define("S_SEARCH",'検 索');
define("S_DISPNO",'表示件数：');
define("S_SEARCH_RULE", '・ キーワードを複数指定する場合は スペース で区切ってください。<br />
・ 検索条件は、AND検索 [A B] = (A かつ B) となっています。<br />
・ 検索対象は、 記事No、名前、題名、本文、目欄 です。<br />
・ 大文字小文字は区別されます。 (A≠a) (ABC≠aBC)<br />
・ 検索単語は４色繰り返し使用して色つきで表示します。google風？<br />
・ 変な検索方法はなるべくお控えください。バグがあればご報告を。<br />
・ この検索エンジンのベースは logoogle.php ver 0.1.1 です。<br />');

define("S_SEARCH_NOT_FOUND", 'に該当する単語が見つかりませんでした。');
define("S_SEARCH_PROTIP", '検索のヒント');
define("S_SEARCH_LIST", '- キーワードに誤字・脱字がないか確かめてください。<br />
- 違うキーワードを使ってみてください。<br />
- より一般的な言葉を使ってみてください。<br />
- キーワードの数を少なくしてみてください。<br />
- 自分のセンスを疑ってみてください。<br />');
define("S_POSTSCRIPT", '追記:');
define("S_SEARCH_FIX", '上記のことを試してもダメな場合は、恐らくもう手遅れなのでしょう。潔くあきらめてください。');
define("S_KEYWORD_NO_MATCH", 'キーワードにマッチする記事がありませんでした。');

define("S_INLOG", 'ログ内');
define("S_SEARCH_RESULT", 'の検索結果');
define("S_SEARCH_HIT", '件中');
define("S_SEARCH_RESULTS", '件目');
define("S_SEARCH_SUBJECT", '題名：');
define("S_SEARCH_NAME", '名前：');
define("S_SEARCH_DATE", '日付：');
define("S_SEARCH_PREV", '&lt;&lt;前へ');
define("S_SEARCH_NEXT", '次へ&gt;&gt;');
define("S_IMGRET",'画像検索');
define("S_SEARCH_TOOL",'検索ツール');
define("S_HELP",'ヘルプ');

    //time
define("S_SECONDS", '秒');
    //image download counter
define("S_THISIMG",'この画像は');
define("S_THISIMGDLTIMES",'回Downloadされています.');

// Style tooltip: stuff inside [square brackets] MUST be left as is!
	define ('S_STYLETOOLTIP', "[what]スタイルへの切り替え");

	// Title of stylesheet management page
	define ('S_ADMIN_STYLESHEETS', "スタイルシートを管理して");

		define ('TH_ADMIN_IMPORTED', "インポートから <b>[file]</b>");
		define ('TH_ADMIN_EDITING', "編集 <b>[file]</b>");
		define ('TH_ADMIN_CREATED', "作成 <b>[file]</b>!");
		define ('TH_ADMIN_UPDATED', "を更新 <b>[file]</b>!");
		define ('TH_ADMIN_DELETED', "削除 <b>[file]</b>!");

		// Headings for fields
		define ('TH_ADMIN_IS_DEFAULT', "デフォルトのですか？");
		define ('TH_ADMIN_STYLE_DEFAULT', "	このデフォルトにする");
		define ('TH_ADMIN_FULLNAME', "本当の名前");
		define ('TH_ADMIN_SHORTNAME', "表示名");
		define ('TH_ADMIN_DISP_ID', '<nobr>ID / 表示順</nobr> <nobr>(タイプ0この項目を削除する)</nobr>');
		define ('TH_ADMIN_ADDSTYLE', "追加 [or modify] スタイルシートのエントリ");
			// This goes in [or modify] above
			define ('TH_ADMIN_MODSTYLE', "または変更");
		define ('TH_ADMIN_NEW_FILE', 'ファイル');
		define ('TH_ADMIN_NEW_ID', '<nobr>表示順</nobr> <nobr>(既存のID番号を使用して、アイテムを上書きする)</nobr>');

/* begin MySQL specific section 
define("S_SQLCONF", '接続失敗');  //MySQL connection failure
define("S_SQLDBSF", 'mysql_select_db失敗<br />'); //database select failure
define("S_TCREATE", 'テーブルを作成します<br />\n'); //creating table
define("S_TCREATEF", 'テーブル作成失敗<br />');  //table creation failed
define("S_SQLFAIL", 'sql失敗<br />');  //SQL Failure
define("S_UNFILE", '対応しないフォーマットです。');
*/
?>
