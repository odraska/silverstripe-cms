<?php

/**
 * Hebrew (Israel) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('he_IL', $lang) && is_array($lang['he_IL'])) {
	$lang['he_IL'] = array_merge($lang['en_US'], $lang['he_IL']);
} else {
	$lang['he_IL'] = $lang['en_US'];
}

$lang['he_IL']['AssetAdmin']['CHOOSEFILE'] = 'בחר קובץ';
$lang['he_IL']['AssetAdmin']['DELETEDX'] = ' %s קבצים נמחקו.%s
';
$lang['he_IL']['AssetAdmin']['FILESREADY'] = 'קבצים המוכנים להעלאה';
$lang['he_IL']['AssetAdmin']['FOLDERDELETED'] = 'תיקיה נמחקה.';
$lang['he_IL']['AssetAdmin']['FOLDERSDELETED'] = 'תיקיות נמחקו.';
$lang['he_IL']['AssetAdmin']['MENUTITLE'] = 'קבצים ותמונות';
$lang['he_IL']['AssetAdmin']['MENUTITLE'] = 'קבצים ותמונות';
$lang['he_IL']['AssetAdmin']['MOVEDX'] = '%s קבצים הועברו';
$lang['he_IL']['AssetAdmin']['NEWFOLDER'] = 'תיקיהחדשה';
$lang['he_IL']['AssetAdmin']['NOTEMP'] = 'לא קיימת תיקיה זמנית עבור העלאת קבצים. יש להגדיר את המשתנה upload_tmp_dir בקובץ php.ini.';
$lang['he_IL']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'לא היה מה להעלות';
$lang['he_IL']['AssetAdmin']['NOWBROKEN'] = 'בעמודים אלה קיימים כעת קישורים מתים:';
$lang['he_IL']['AssetAdmin']['NOWBROKEN2'] = 'נשלח אימייל לאחראים והם יתקנו דפים אלה.';
$lang['he_IL']['AssetAdmin']['SAVEDFILE'] = 'הקובץ %s נשמר';
$lang['he_IL']['AssetAdmin']['SAVEFOLDERNAME'] = 'שמור שם תיקיה';
$lang['he_IL']['AssetAdmin']['THUMBSDELETED'] = 'כל התמונות המוקטנות שאינן בשימוש נמחקו';
$lang['he_IL']['AssetAdmin']['UPLOAD'] = 'קבצים להעלאה מצוינים מתחת';
$lang['he_IL']['AssetAdmin']['UPLOADEDX'] = '%s קבצים הועלו';
$lang['he_IL']['AssetAdmin_left.ss']['CREATE'] = 'צור';
$lang['he_IL']['AssetAdmin_left.ss']['DELETE'] = 'מחק';
$lang['he_IL']['AssetAdmin_left.ss']['DELFOLDERS'] = 'מחק תיקיות מסומנות';
$lang['he_IL']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'אפשר סידור ע"י גרור והשלך';
$lang['he_IL']['AssetAdmin_left.ss']['FOLDERS'] = 'תיקיות';
$lang['he_IL']['AssetAdmin_left.ss']['GO'] = 'סע';
$lang['he_IL']['AssetAdmin_left.ss']['SELECTTODEL'] = 'סמן את התיקיות שברצונך למחוק ולאחר מכן לחץ על הכפתור המסומן';
$lang['he_IL']['AssetAdmin_left.ss']['TOREORG'] = 'בכדי לארגן מחדש את תיקיות המידע שלכם גררו אותן על פי רצונכם';
$lang['he_IL']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'נא לבחור עמוד מהעמודה בצד שמאל';
$lang['he_IL']['AssetAdmin_right.ss']['WELCOME'] = 'ברוכים הבאים אל';
$lang['he_IL']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'אין לך אישור להעלות לתיקייה זו';
$lang['he_IL']['AssetTableField']['CREATED'] = 'הועלה לראשונה';
$lang['he_IL']['AssetTableField']['DIM'] = 'מידות';
$lang['he_IL']['AssetTableField']['FILENAME'] = 'שם הקובץ';
$lang['he_IL']['AssetTableField']['IMAGE'] = 'תמונה';
$lang['he_IL']['AssetTableField']['LASTEDIT'] = 'שונה לאחרונה';
$lang['he_IL']['AssetTableField']['MAIN'] = 'ראשי';
$lang['he_IL']['AssetTableField']['NOLINKS'] = 'קובץ זה לא קשור מאף עמוד';
$lang['he_IL']['AssetTableField']['OWNER'] = 'בעל הקובץ';
$lang['he_IL']['AssetTableField']['PAGESLINKING'] = 'העמודים הבאים מתקשרים לקובץ זה';
$lang['he_IL']['AssetTableField']['SIZE'] = 'גודל';
$lang['he_IL']['AssetTableField.ss']['DELFILE'] = 'מחק את הקובץ';
$lang['he_IL']['AssetTableField.ss']['DRAGTOFOLDER'] = 'גרור לתיקיה משמאל כדי להעביר את הקובץ';
$lang['he_IL']['AssetTableField.ss']['EDIT'] = 'ערוך פריט';
$lang['he_IL']['AssetTableField.ss']['SHOW'] = 'הצג פריט';
$lang['he_IL']['AssetTableField']['TITLE'] = 'כותרת';
$lang['he_IL']['AssetTableField']['TYPE'] = 'סוג';
$lang['he_IL']['AssetTableField']['URL'] = 'כתובת הדף';
$lang['he_IL']['CMSMain']['ACCESS'] = 'גישה ל \'%s\' (%s)';
$lang['he_IL']['CMSMain']['ACCESSALLINTERFACES'] = 'גישה לכל ממשקי המערכת';
$lang['he_IL']['CMSMain']['CANCEL'] = 'בטל';
$lang['he_IL']['CMSMain']['CHOOSEREPORT'] = 'תבחר דו"ח';
$lang['he_IL']['CMSMain']['COMPARINGV'] = 'אתה משווה בין גרסה #%d ל  #%d
';
$lang['he_IL']['CMSMain']['COPYPUBTOSTAGE'] = 'האם אתה בטוח שברצונך להעתיק את התוכן המפורסם לאתר שבעריכה?';
$lang['he_IL']['CMSMain']['DELETE'] = 'מחיקה מאתר הטיוטה';
$lang['he_IL']['CMSMain']['DESCREMOVED'] = 'והבנים של %s';
$lang['he_IL']['CMSMain']['EMAIL'] = 'דוא"ל';
$lang['he_IL']['CMSMain']['GO'] = 'התקדם';
$lang['he_IL']['CMSMain']['MENUTITLE'] = 'תוכן האתר';
$lang['he_IL']['CMSMain']['MENUTITLE'] = 'תכני האתר';
$lang['he_IL']['CMSMain']['METADESCOPT'] = 'תאור';
$lang['he_IL']['CMSMain']['METAKEYWORDSOPT'] = 'מילות מפתח';
$lang['he_IL']['CMSMain']['NEW'] = 'חדש';
$lang['he_IL']['CMSMain']['NOCONTENT'] = 'אין תוכן';
$lang['he_IL']['CMSMain']['OK'] = 'אשר';
$lang['he_IL']['CMSMain']['PAGENOTEXISTS'] = 'עמוד זה אינו קיים במערכת';
$lang['he_IL']['CMSMain']['PRINT'] = 'הדפס';
$lang['he_IL']['CMSMain']['PUBALLCONFIRM'] = 'נא לפרסם את כל העמודים באתר, תוך העתקת כל הטיוטות לגרסה הסופית';
$lang['he_IL']['CMSMain']['PUBALLFUN'] = 'פרסם הכל';
$lang['he_IL']['CMSMain']['PUBALLFUN2'] = 'לחיצת כפתור זה מקבילה לאישור פרסום על כל העמודים באתר. הכפתור נועד לאישורים גורפים שבאו בעקבות עריכה נרחבת באתר דוגמת ההגדרות הראשוניות כאשר נוצר אתר זה';
$lang['he_IL']['CMSMain']['PUBPAGES'] = 'בוצע: d% דפים פורסמו.';
$lang['he_IL']['CMSMain']['REMOVED'] = '\'%s\'%s נמחק מהאתר';
$lang['he_IL']['CMSMain']['REMOVEDFD'] = 'הוסר מגרסת הטיוטה לאתר זה';
$lang['he_IL']['CMSMain']['REMOVEDPAGE'] = '\'s%\' הוסר מהאתר המפורסם';
$lang['he_IL']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '\'$s\' הוסר מאתר הטיוטה';
$lang['he_IL']['CMSMain']['REPORT'] = 'דו"ח';
$lang['he_IL']['CMSMain']['RESTORED'] = 'שוחזר בהצלחה';
$lang['he_IL']['CMSMain']['ROLLBACK'] = 'שחזר לגרסה זו';
$lang['he_IL']['CMSMain']['ROLLEDBACKPUB'] = 'שוחזר לגירסא המפורסמת. מספר הגרסא החדשה הוא #%d';
$lang['he_IL']['CMSMain']['ROLLEDBACKVERSION'] = 'שוחזר לגירסה  #%d. הגירסה הנוכחית היא  #%d';
$lang['he_IL']['CMSMain']['SAVE'] = 'שמור';
$lang['he_IL']['CMSMain']['STATUSOPT'] = 'סטטוס';
$lang['he_IL']['CMSMain']['TOTALPAGES'] = 'עמודים';
$lang['he_IL']['CMSMain']['VERSIONSNOPAGE'] = 'עמוד זה לא נמצא';
$lang['he_IL']['CMSMain']['VIEWING'] = 'אתה צופה בגרסה  #%d, נוצר ב%s';
$lang['he_IL']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'שם הכפתור לא נמצא';
$lang['he_IL']['CMSMain_dialog.ss']['NOLINKED'] = 'לא נמצא window.linkedObject בכדי להפנות את לחיצת הכפתור בחזרה לחלון הראשי';
$lang['he_IL']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'התווסף לטיוטה ולא פורסם';
$lang['he_IL']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'הוסף קריטריון..';
$lang['he_IL']['CMSMain_left.ss']['BATCHACTIONS'] = 'פעולות אצווה';
$lang['he_IL']['CMSMain_left.ss']['CHANGED'] = 'שונה';
$lang['he_IL']['CMSMain_left.ss']['CLOSEBOX'] = 'לחץ לסגירה';
$lang['he_IL']['CMSMain_left.ss']['COMPAREMODE'] = 'מצב השוואה (לחץ 2 מתחת)';
$lang['he_IL']['CMSMain_left.ss']['CREATE'] = 'צור';
$lang['he_IL']['CMSMain_left.ss']['DEL'] = 'נמחק';
$lang['he_IL']['CMSMain_left.ss']['DELETECONFIRM'] = 'מחק עמודים מסומנים';
$lang['he_IL']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'נמחק מהטיוטה אך נותר באתר המפורסם';
$lang['he_IL']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'נערך באתר הטיוטה אך לא פורסם';
$lang['he_IL']['CMSMain_left.ss']['EDITEDSINCE'] = 'נערך מאז';
$lang['he_IL']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'אפשר סידור מחדש על ידי גרור והשלך';
$lang['he_IL']['CMSMain_left.ss']['GO'] = 'התקדם';
$lang['he_IL']['CMSMain_left.ss']['KEY'] = 'מפתח:';
$lang['he_IL']['CMSMain_left.ss']['NEW'] = 'חדש';
$lang['he_IL']['CMSMain_left.ss']['OPENBOX'] = 'נא ללחוץ';
$lang['he_IL']['CMSMain_left.ss']['PAGEVERSIONH'] = 'גרסאות קודמות';
$lang['he_IL']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'פרסם את הדפים הנבחרים';
$lang['he_IL']['CMSMain_left.ss']['SEARCH'] = 'חיפוש';
$lang['he_IL']['CMSMain_left.ss']['SEARCHTITLE'] = 'חפש ב כתובת, כותרת, כותרת תפריט, &amp; תוכן';
$lang['he_IL']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'בחר את הדפים שברצונך לשנות  &amp; ואז לחץ על פעולה:';
$lang['he_IL']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'הצג רק דפים ששונו';
$lang['he_IL']['CMSMain_left.ss']['SHOWUNPUB'] = 'הצג טיוטות';
$lang['he_IL']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'תוכן ומבנה האתר';
$lang['he_IL']['CMSMain_left.ss']['SITEREPORTS'] = 'דו"חות אתר';
$lang['he_IL']['CMSMain_right.ss']['CHOOSEPAGE'] = 'בחר מהתפריט משמאל';
$lang['he_IL']['CMSMain_right.ss']['WELCOMETO'] = 'ברוכים הבאים ל';
$lang['he_IL']['CMSMain_versions.ss']['AUTHOR'] = 'יוצר';
$lang['he_IL']['CMSMain_versions.ss']['NOTPUB'] = 'לא מפורסם';
$lang['he_IL']['CMSMain_versions.ss']['PUBR'] = 'מפרסם';
$lang['he_IL']['CMSMain_versions.ss']['UNKNOWN'] = 'לא ידוע';
$lang['he_IL']['CMSMain_versions.ss']['WHEN'] = 'כאשר';
$lang['he_IL']['CommentAdmin']['ACCEPT'] = 'אשר';
$lang['he_IL']['CommentAdmin']['APPROVED'] = 'אושרו %s תגובות';
$lang['he_IL']['CommentAdmin']['APPROVEDCOMMENTS'] = 'תגובות מאושרות';
$lang['he_IL']['CommentAdmin']['AUTHOR'] = 'מחבר';
$lang['he_IL']['CommentAdmin']['COMMENT'] = 'תגובה';
$lang['he_IL']['CommentAdmin']['COMMENTS'] = 'תגובות';
$lang['he_IL']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'תגובות הממתינות לאישור';
$lang['he_IL']['CommentAdmin']['DATEPOSTED'] = 'תאריך פרסום';
$lang['he_IL']['CommentAdmin']['DELETE'] = 'מחק';
$lang['he_IL']['CommentAdmin']['DELETEALL'] = 'מחק הכל';
$lang['he_IL']['CommentAdmin']['DELETED'] = 'נמחקו %s תגובות';
$lang['he_IL']['CommentAdmin']['MARKASNOTSPAM'] = 'סמן כ"לא ספאם"';
$lang['he_IL']['CommentAdmin']['MARKEDNOTSPAM'] = '%s תגובות סומנו כ-"לא ספאם"';
$lang['he_IL']['CommentAdmin']['MARKEDSPAM'] = '%s תגובות סומנו כספאם';
$lang['he_IL']['CommentAdmin']['MENUTITLE'] = 'הערות';
$lang['he_IL']['CommentAdmin']['MENUTITLE'] = 'תגובות';
$lang['he_IL']['CommentAdmin']['NAME'] = 'שם';
$lang['he_IL']['CommentAdmin']['PAGE'] = 'דף';
$lang['he_IL']['CommentAdmin']['SPAM'] = 'ספאם';
$lang['he_IL']['CommentAdmin']['SPAMMARKED'] = 'סמן כספאם';
$lang['he_IL']['CommentAdmin_left.ss']['COMMENTS'] = 'תגובות';
$lang['he_IL']['CommentAdmin_right.ss']['WELCOME1'] = 'ברוכ/ה הבא/ה ל';
$lang['he_IL']['CommentAdmin_right.ss']['WELCOME2'] = 'ניהול תגובות. בחר תיקיה מהעץ מימין.';
$lang['he_IL']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'מאושר';
$lang['he_IL']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'ממתין לאישור';
$lang['he_IL']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'תגובות';
$lang['he_IL']['CommentAdmin_SiteTree.ss']['SPAM'] = 'ספאם';
$lang['he_IL']['CommentTableField']['FILTER'] = 'סנן';
$lang['he_IL']['CommentTableField']['SEARCH'] = 'חיפוש';
$lang['he_IL']['CommentTableField.ss']['APPROVE'] = 'אשר';
$lang['he_IL']['CommentTableField.ss']['APPROVECOMMENT'] = 'אשר תגובה זו';
$lang['he_IL']['CommentTableField.ss']['DELETE'] = 'מחק';
$lang['he_IL']['CommentTableField.ss']['DELETEROW'] = 'מחק שורה זו';
$lang['he_IL']['CommentTableField.ss']['EDIT'] = 'ערוך';
$lang['he_IL']['CommentTableField.ss']['MARKASSPAM'] = 'סמן תגובה זו כספאם';
$lang['he_IL']['CommentTableField.ss']['MARKNOSPAM'] = 'סמן תגובה זו כ "לא ספאם"';
$lang['he_IL']['CommentTableField.ss']['NOITEMSFOUND'] = 'לא נמצאו רשומות';
$lang['he_IL']['CommentTableField.ss']['SPAM'] = 'ספאם';
$lang['he_IL']['ComplexTableField']['CLOSEPOPUP'] = 'סגור חלון';
$lang['he_IL']['ComplexTableField']['SUCCESSADD'] = '%s %s %s הוסף';
$lang['he_IL']['ImageEditor.ss']['ACTIONS'] = 'פעולות';
$lang['he_IL']['ImageEditor.ss']['ADJUST'] = 'התאם';
$lang['he_IL']['ImageEditor.ss']['APPLY'] = 'החל';
$lang['he_IL']['ImageEditor.ss']['BLUR'] = 'טשטש';
$lang['he_IL']['ImageEditor.ss']['BRIGHTNESS'] = 'בהירות';
$lang['he_IL']['ImageEditor.ss']['CANCEL'] = 'בטל';
$lang['he_IL']['ImageEditor.ss']['CONTRAST'] = 'ניגודיות';
$lang['he_IL']['ImageEditor.ss']['CROP'] = 'גזור';
$lang['he_IL']['ImageEditor.ss']['CURRENTACTION'] = 'פעולה@nbsp;נוכחית';
$lang['he_IL']['ImageEditor.ss']['EDITFUNCTIONS'] = 'ערוך&nbsp;פונקציות';
$lang['he_IL']['ImageEditor.ss']['EFFECTS'] = 'אפקטים';
$lang['he_IL']['ImageEditor.ss']['EXIT'] = 'יציאה';
$lang['he_IL']['ImageEditor.ss']['GAMMA'] = 'גאמא';
$lang['he_IL']['ImageEditor.ss']['GREYSCALE'] = 'גווני אפור';
$lang['he_IL']['ImageEditor.ss']['HEIGHT'] = 'גובה';
$lang['he_IL']['ImageEditor.ss']['REDO'] = 'בצע מחדש';
$lang['he_IL']['ImageEditor.ss']['ROT'] = 'סובב';
$lang['he_IL']['ImageEditor.ss']['SAVE'] = 'שמור תמונה';
$lang['he_IL']['ImageEditor.ss']['SEPIA'] = 'חום כהה';
$lang['he_IL']['ImageEditor.ss']['UNDO'] = 'בטל';
$lang['he_IL']['ImageEditor.ss']['UNTITLED'] = 'מסמך ללא שם';
$lang['he_IL']['ImageEditor.ss']['WIDTH'] = 'רוחב';
$lang['he_IL']['LeftAndMain']['CHANGEDURL'] = 'הכתובת שונתה ל  \'%s\'
';
$lang['he_IL']['LeftAndMain']['HELP'] = 'עזרה';
$lang['he_IL']['LeftAndMain']['PAGETYPE'] = 'סוג העמוד';
$lang['he_IL']['LeftAndMain']['PERMAGAIN'] = 'התנתקת מהמערכת. לחיבור מחדש נא להזין שם וסיסמה';
$lang['he_IL']['LeftAndMain']['PERMALREADY'] = 'צר לנו, אך לא תוכל לגשת לחלק זה של מערכת ניהול התוכן. אם ברצונך להתחבר למערכת בתור משתמש אחר נא להשתמש בתיבה בעמוד זה';
$lang['he_IL']['LeftAndMain']['PERMDEFAULT'] = 'נא לבחור בשיטת וידוא והזן פרטיך למערכת';
$lang['he_IL']['LeftAndMain']['PLEASESAVE'] = 'נא לשמור עמוד זה. העמוד לא עודכן מכיוון ולא עודכן.';
$lang['he_IL']['LeftAndMain']['REQUESTERROR'] = 'שגיאה בבקשה';
$lang['he_IL']['LeftAndMain']['SAVED'] = 'נשמר';
$lang['he_IL']['LeftAndMain']['SAVEDUP'] = 'שמור';
$lang['he_IL']['LeftAndMain']['SITECONTENTLEFT'] = 'תוכן האתר';
$lang['he_IL']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'זה ה';
$lang['he_IL']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'גירסת המערכת הנוכחית';
$lang['he_IL']['LeftAndMain.ss']['ARCHS'] = 'אתר מאופסן';
$lang['he_IL']['LeftAndMain.ss']['DRAFTS'] = 'גרסת טיוטה';
$lang['he_IL']['LeftAndMain.ss']['EDIT'] = 'ערוך';
$lang['he_IL']['LeftAndMain.ss']['EDITINCMS'] = 'ערוך דף זה ';
$lang['he_IL']['LeftAndMain.ss']['EDITPROFILE'] = 'פרופיל';
$lang['he_IL']['LeftAndMain.ss']['LOADING'] = 'טוען...';
$lang['he_IL']['LeftAndMain.ss']['LOGGEDINAS'] = 'מחובר כ';
$lang['he_IL']['LeftAndMain.ss']['LOGOUT'] = 'התנתק';
$lang['he_IL']['LeftAndMain.ss']['PUBLIS'] = 'אתר מפורסם/סופי';
$lang['he_IL']['LeftAndMain.ss']['REQUIREJS'] = 'בכדי להשתמש במערכת ניהול התוכן javascript צריך להיות מופעל';
$lang['he_IL']['LeftAndMain.ss']['SSWEB'] = 'אתר סילברסטרייב';
$lang['he_IL']['LeftAndMain.ss']['VIEWINDRAFT'] = 'צפה בדף זה באתר הטיוטה';
$lang['he_IL']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'צפה בדף זה באתר החי';
$lang['he_IL']['LeftAndMain.ss']['VIEWPAGEIN'] = 'תצוגת עמוד:';
$lang['he_IL']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = '\'%s\' פורסם בהצלחה';
$lang['he_IL']['LeftAndMain']['STATUSTO'] = 'המצב שונה ל \'%s\'
';
$lang['he_IL']['MemberList.ss']['FILTER'] = 'מיין';
$lang['he_IL']['MemberList_PageControls.ss']['DISPLAYING'] = 'מציג';
$lang['he_IL']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'חברים רשומים';
$lang['he_IL']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'חברים רשומים';
$lang['he_IL']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'חברים רשומים';
$lang['he_IL']['MemberList_PageControls.ss']['OF'] = 'מ - ';
$lang['he_IL']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'חברים רשומים';
$lang['he_IL']['MemberList_PageControls.ss']['TO'] = 'אל';
$lang['he_IL']['MemberList_PageControls.ss']['VIEWFIRST'] = 'צפה בראשון';
$lang['he_IL']['MemberList_PageControls.ss']['VIEWLAST'] = 'צפה באחרון';
$lang['he_IL']['MemberList_PageControls.ss']['VIEWNEXT'] = 'צפה בבא';
$lang['he_IL']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'צפה בקודמים';
$lang['he_IL']['MemberList_Table.ss']['EMAIL'] = 'כתובת דואר אלקטרוני';
$lang['he_IL']['MemberList_Table.ss']['FN'] = 'שם פרטי';
$lang['he_IL']['MemberList_Table.ss']['PASSWD'] = 'סיסמא';
$lang['he_IL']['MemberList_Table.ss']['SN'] = 'שם משפחה';
$lang['he_IL']['MemberTableField']['ADD'] = 'הוסף';
$lang['he_IL']['MemberTableField']['ADDEDTOGROUP'] = 'חבר הוסף לקבוצה';
$lang['he_IL']['MemberTableField']['ADDINGFIELD'] = 'הוספה נכשלה';
$lang['he_IL']['MemberTableField']['FILTER'] = 'סנן';
$lang['he_IL']['MemberTableField']['SEARCH'] = 'חיפוש';
$lang['he_IL']['MemberTableField.ss']['ADDNEW'] = 'הוסף';
$lang['he_IL']['ModelAdmin']['ADDBUTTON'] = 'הוסף';
$lang['he_IL']['ModelAdmin']['ADDFORM'] = 'מלא טופס זה והוסף %s לבסיס הנתונים.';
$lang['he_IL']['ModelAdmin']['CHOOSE_COLUMNS'] = 'בחירת עמודות לתוצאה';
$lang['he_IL']['ModelAdmin']['CLEAR_SEARCH'] = 'נקוי חיפוש';
$lang['he_IL']['ModelAdmin']['CREATEBUTTON'] = 'צור \'%s\'';
$lang['he_IL']['ModelAdmin']['DELETE'] = 'מחק';
$lang['he_IL']['ModelAdmin']['DELETEDRECORDS'] = '%s פריטים נמחקו';
$lang['he_IL']['ModelAdmin']['FOUNDRESULTS'] = 'נמצאו %s רשומות מתאימות';
$lang['he_IL']['ModelAdmin']['GOBACK'] = 'אחורה';
$lang['he_IL']['ModelAdmin']['GOFORWARD'] = 'קדימה';
$lang['he_IL']['ModelAdmin']['IMPORT'] = 'ייבא מקובץ CSV';
$lang['he_IL']['ModelAdmin']['IMPORTEDRECORDS'] = '%s פריטים יובאו בהצלחה.';
$lang['he_IL']['ModelAdmin']['ITEMNOTFOUND'] = 'הפריט המבוקש לא נמצא';
$lang['he_IL']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\'  נטען עבור עריכה.';
$lang['he_IL']['ModelAdmin']['NOCSVFILE'] = 'בחר קובץ CSV לייבוא';
$lang['he_IL']['ModelAdmin']['NOIMPORT'] = 'לא נמצאו פריטים לייבוא';
$lang['he_IL']['ModelAdmin']['NORESULTS'] = 'לא נמצאו רשומות';
$lang['he_IL']['ModelAdmin']['SAVE'] = 'שמור';
$lang['he_IL']['ModelAdmin']['SEARCHRESULTS'] = 'תוצאות חיפוש';
$lang['he_IL']['ModelAdmin']['SELECTALL'] = 'בחר הכל';
$lang['he_IL']['ModelAdmin']['SELECTNONE'] = 'נקה בחירה';
$lang['he_IL']['ModelAdmin']['UPDATEDRECORDS'] = '%s פריטים עודכנו.';
$lang['he_IL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'עמודות בבסיס הנתונים';
$lang['he_IL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'הצג מפרט עבור %s';
$lang['he_IL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'קשרים';
$lang['he_IL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'מפרט עבור %s';
$lang['he_IL']['ModelAdmin_right.ss']['WELCOME1'] = 'ברוך/ה הבא/ה ל %s. אנא בחר/י דף מהעמודה הימנית.';
$lang['he_IL']['PageComment']['Comment'] = 'תגובה';
$lang['he_IL']['PageComment']['COMMENTBY'] = 'הערה של \'s%\' על s%';
$lang['he_IL']['PageComment']['IsSpam'] = 'ספאם?';
$lang['he_IL']['PageComment']['Name'] = 'שם נוסף';
$lang['he_IL']['PageComment']['NeedsModeration'] = 'האם דרוש סינון?';
$lang['he_IL']['PageComment']['PLURALNAME'] = 'תגובות לדף';
$lang['he_IL']['PageComment']['SINGULARNAME'] = 'תגובה לדף';
$lang['he_IL']['PageCommentInterface']['COMMENTERURL'] = 'כתובת האתר שלך';
$lang['he_IL']['PageCommentInterface']['POST'] = 'רשומה';
$lang['he_IL']['PageCommentInterface']['SPAMQUESTION'] = 'שאלת אבטחה: %s';
$lang['he_IL']['PageCommentInterface.ss']['COMMENTS'] = 'הערות';
$lang['he_IL']['PageCommentInterface.ss']['NEXT'] = 'הבא';
$lang['he_IL']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'אין עדיין הערות לעמוד זה ';
$lang['he_IL']['PageCommentInterface.ss']['POSTCOM'] = 'הוסף את ההערה שלך';
$lang['he_IL']['PageCommentInterface.ss']['PREV'] = 'הקודם';
$lang['he_IL']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'ערוץ RSS עבור כל התגובות';
$lang['he_IL']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'ערוץ RSS עבור תגובות בדף זה';
$lang['he_IL']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'צפה בכל התגובות';
$lang['he_IL']['PageCommentInterface']['YOURCOMMENT'] = 'תגובות';
$lang['he_IL']['PageCommentInterface']['YOURNAME'] = 'שמך';
$lang['he_IL']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'שאלת אבטחה: %s';
$lang['he_IL']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'תגובתך נשלחה והיא מחכה לאישור';
$lang['he_IL']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'ההודעה שפרסמת היא:';
$lang['he_IL']['PageCommentInterface_Form']['SPAMDETECTED'] = 'התגלה ספאם!';
$lang['he_IL']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'אשר הערה זו';
$lang['he_IL']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'הערה זו אינה ספאם';
$lang['he_IL']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'הערה זו היא ספאם';
$lang['he_IL']['PageCommentInterface_singlecomment.ss']['PBY'] = 'נשלח על ידי';
$lang['he_IL']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'הסר הערה זו';
$lang['he_IL']['ReportAdmin']['MENUTITLE'] = 'דוחות';
$lang['he_IL']['ReportAdmin_left.ss']['REPORTS'] = 'דו"חות';
$lang['he_IL']['ReportAdmin_right.ss']['WELCOME1'] = 'ברוך הבא ל';
$lang['he_IL']['ReportAdmin_right.ss']['WELCOME2'] = 'איזור דיווח. אנא בחר דוח משמאל';
$lang['he_IL']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'דוחות';
$lang['he_IL']['SecurityAdmin']['ADDMEMBER'] = 'הוסף חבר';
$lang['he_IL']['SecurityAdmin']['EDITPERMISSIONS'] = 'ערוך הרשאות וכתובות IP לכל קבוצה';
$lang['he_IL']['SecurityAdmin']['MENUTITLE'] = 'אבטחה';
$lang['he_IL']['SecurityAdmin']['MENUTITLE'] = 'אבטחה';
$lang['he_IL']['SecurityAdmin']['NEWGROUP'] = 'קבוצה חדשה';
$lang['he_IL']['SecurityAdmin']['SAVE'] = 'שמור';
$lang['he_IL']['SecurityAdmin']['SGROUPS'] = 'קבוצות אבטחה';
$lang['he_IL']['SecurityAdmin_left.ss']['CREATE'] = 'צור';
$lang['he_IL']['SecurityAdmin_left.ss']['DEL'] = 'מחק';
$lang['he_IL']['SecurityAdmin_left.ss']['DELGROUPS'] = 'מחק את הקבוצות שנבחרו';
$lang['he_IL']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'אפשר סידור ע"י גרור והשלך';
$lang['he_IL']['SecurityAdmin_left.ss']['GO'] = 'סע';
$lang['he_IL']['SecurityAdmin_left.ss']['SECGROUPS'] = 'קבוצות אבטחה';
$lang['he_IL']['SecurityAdmin_left.ss']['SELECT'] = 'בחר בעמודים שברצונך למחוק ולאחר לחץ על הכפתור למטה';
$lang['he_IL']['SecurityAdmin_left.ss']['TOREORG'] = 'בכדי לארגן את האתר שלך , גרור את העמודים לפי הצורך';
$lang['he_IL']['SecurityAdmin_right.ss']['WELCOME1'] = 'ברוך הבא ל';
$lang['he_IL']['SecurityAdmin_right.ss']['WELCOME2'] = 'איזור אבטחה. אנא בחר קבוצה משמאל';
$lang['he_IL']['SideReport']['EMPTYPAGES'] = 'עמודים ריקים';
$lang['he_IL']['SideReport']['LAST2WEEKS'] = 'עמודים שנערכו בשבועיים האחרונים';
$lang['he_IL']['SideReport']['REPEMPTY'] = 'הדוח %s ריק';
$lang['he_IL']['SideReport']['TODO'] = 'מטלות';
$lang['he_IL']['StaticExporter']['BASEURL'] = 'כתובת בסיס';
$lang['he_IL']['StaticExporter']['EXPORTTO'] = 'ייצא לתיקיה זו';
$lang['he_IL']['StaticExporter']['FOLDEREXPORT'] = 'תיקייה ליצוא';
$lang['he_IL']['StaticExporter']['NAME'] = 'מייצא ';
$lang['he_IL']['TableListField_PageControls.ss']['DISPLAYING'] = 'מציג';
$lang['he_IL']['TableListField_PageControls.ss']['OF'] = 'מתוך';
$lang['he_IL']['TableListField_PageControls.ss']['TO'] = 'עד';
$lang['he_IL']['TableListField_PageControls.ss']['VIEWFIRST'] = 'הצג ראשון';
$lang['he_IL']['TableListField_PageControls.ss']['VIEWLAST'] = 'הצג אחרון';
$lang['he_IL']['TableListField_PageControls.ss']['VIEWNEXT'] = 'הצג את הבא';
$lang['he_IL']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'הצג את הקודם';
$lang['he_IL']['ThumbnailStripField']['NOFLASHFOUND'] = 'לא נמצאו קבצי פלאש';
$lang['he_IL']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'לא נמצאו קבצי פלאש ב ';
$lang['he_IL']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'לא נמצאו תמונות ב ';
$lang['he_IL']['ThumbnailStripField']['NOIMAGESFOUND'] = 'לא נמצאו תמונות';
$lang['he_IL']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(בחר תיקייה מלמעלה)';
$lang['he_IL']['ViewArchivedEmail.ss']['CANACCESS'] = 'אתה יכול להכנס לארכיון האתר בקישור הזה:';
$lang['he_IL']['ViewArchivedEmail.ss']['HAVEASKED'] = 'ביקשת לצפות בתוכן האתר שלנו ב';
$lang['he_IL']['WidgetAreaEditor.ss']['AVAILABLE'] = 'וויג\'טים קיימים';
$lang['he_IL']['WidgetAreaEditor.ss']['INUSE'] = 'וויג\'טים בשימוש';
$lang['he_IL']['WidgetAreaEditor.ss']['NOAVAIL'] = 'לא קיימים וויג\'טים';
$lang['he_IL']['WidgetAreaEditor.ss']['TOADD'] = 'על מנת להוסיף וויג\'טים, יש לגרור אותם מהעמודה מימין לכאן';
$lang['he_IL']['WidgetEditor.ss']['DELETE'] = 'מחק';

