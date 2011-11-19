<?php

/**
 * Arabic (Saudi Arabia) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('ar_SA', $lang) && is_array($lang['ar_SA'])) {
	$lang['ar_SA'] = array_merge($lang['en_US'], $lang['ar_SA']);
} else {
	$lang['ar_SA'] = $lang['en_US'];
}

$lang['ar_SA']['']['CHOOSEPAGE'] = 'فضلاً اختر أي عنصر من الجهة اليسرى';
$lang['ar_SA']['AssetAdmin']['CHOOSEFILE'] = 'اختر ملف';
$lang['ar_SA']['AssetAdmin']['DELETEDX'] = 'ملفات محذوفة %s. %s';
$lang['ar_SA']['AssetAdmin']['FILESREADY'] = 'ملفات جاهزة للرفع:';
$lang['ar_SA']['AssetAdmin']['FOLDERDELETED'] = 'مجلد محذوف';
$lang['ar_SA']['AssetAdmin']['FOLDERSDELETED'] = 'مجلدات محذوفة';
$lang['ar_SA']['AssetAdmin']['MENUTITLE'] = 'ملفات و صور';
$lang['ar_SA']['AssetAdmin']['MENUTITLE'] = 'الملفات و الصور';
$lang['ar_SA']['AssetAdmin']['MOVEDX'] = 'نقل الملفات %s';
$lang['ar_SA']['AssetAdmin']['NEWFOLDER'] = 'مجلد جديد';
$lang['ar_SA']['AssetAdmin']['NOTEMP'] = 'لايوجد مجلد مؤقت للمرفوعات. فضلأً حدد upload_tmp_dir في php.ini';
$lang['ar_SA']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'لا يوجد ما يمكن رفعه';
$lang['ar_SA']['AssetAdmin']['NOWBROKEN'] = 'الصفحات التالية تحتوي روابط معطوبة';
$lang['ar_SA']['AssetAdmin']['NOWBROKEN2'] = 'تمت مراسلة الإدارة و سيتم تصليح الأخطاء في الصفحات';
$lang['ar_SA']['AssetAdmin']['SAVEDFILE'] = 'ملف محفوظ %s';
$lang['ar_SA']['AssetAdmin']['SAVEFOLDERNAME'] = 'احفظ اسم المجلد';
$lang['ar_SA']['AssetAdmin']['THUMBSDELETED'] = 'جميع المصغرات الغير مستخدمة تم حذفها';
$lang['ar_SA']['AssetAdmin']['UPLOAD'] = 'رفع الملفات التالية';
$lang['ar_SA']['AssetAdmin']['UPLOADEDX'] = 'الملفات التي تم رفعها %s';
$lang['ar_SA']['AssetAdmin_left.ss']['CREATE'] = 'إنشاء';
$lang['ar_SA']['AssetAdmin_left.ss']['DELETE'] = 'حذف';
$lang['ar_SA']['AssetAdmin_left.ss']['DELFOLDERS'] = 'احذف المجلدات المحددة';
$lang['ar_SA']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'السماح بتغيير الترتيب عن طريق الإمساك و الإفلات';
$lang['ar_SA']['AssetAdmin_left.ss']['FILESYSTEMSYNC'] = 'إضافة ملفات أخرى';
$lang['ar_SA']['AssetAdmin_left.ss']['FILESYSTEMSYNC_DESC'] = 'SilverStripe يحافظ على قاعدة البيانات الخاصة بها من الملفات والصور المخزنة في الأصول الخاصة بك / مجلد. فوق هذا الزر لتحديث قاعدة البيانات ، إذا تم إضافة الملفات إلى الأصول / مجلد من SilverStripe خارج، على سبيل المثال، إذا كان لديك تم الرفع الملفات عن طريق بروتوكول نقل الملفات.';
$lang['ar_SA']['AssetAdmin_left.ss']['FOLDERS'] = 'مجلدات';
$lang['ar_SA']['AssetAdmin_left.ss']['GO'] = 'اذهب';
$lang['ar_SA']['AssetAdmin_left.ss']['SELECTTODEL'] = 'اختر الملجدات التي تريد حذفها ثم اضغط على الزر بالأسفل';
$lang['ar_SA']['AssetAdmin_left.ss']['TOREORG'] = 'لإعادة ترتيب المجلدات, حركها للمنطقة المحددة';
$lang['ar_SA']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'فضلاً اختر ضفحة من القائمة';
$lang['ar_SA']['AssetAdmin_right.ss']['WELCOME'] = 'أهلاً بك في';
$lang['ar_SA']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'لا تملك صلاحيات لرفع الملفات إلى هذا المجلد';
$lang['ar_SA']['AssetAdmin_uploadiframe.ss']['TITLE'] = 'إطار رفع الصور';
$lang['ar_SA']['AssetTableField']['CREATED'] = 'أول المرفوعات';
$lang['ar_SA']['AssetTableField']['DIM'] = 'الأبعاد';
$lang['ar_SA']['AssetTableField']['FILENAME'] = 'اسم الملف';
$lang['ar_SA']['AssetTableField']['IMAGE'] = 'الصورة';
$lang['ar_SA']['AssetTableField']['LASTEDIT'] = 'آخر التعديلات';
$lang['ar_SA']['AssetTableField']['MAIN'] = 'الرئيسة';
$lang['ar_SA']['AssetTableField']['NODATAFOUND'] = 'لا توجد %s';
$lang['ar_SA']['AssetTableField']['NOLINKS'] = 'هذا الملف لا يملك روابط من أي صفحة';
$lang['ar_SA']['AssetTableField']['OWNER'] = 'المالك';
$lang['ar_SA']['AssetTableField']['PAGESLINKING'] = 'الصفحات التالية تربط بهذا املف';
$lang['ar_SA']['AssetTableField']['SIZE'] = 'الحجم';
$lang['ar_SA']['AssetTableField.ss']['DELFILE'] = 'احذف هذا الملف';
$lang['ar_SA']['AssetTableField.ss']['DRAGTOFOLDER'] = 'حرك الملف للمجلد الذي تريد نقله إليه';
$lang['ar_SA']['AssetTableField.ss']['EDIT'] = 'تعديل المصدر asset';
$lang['ar_SA']['AssetTableField.ss']['SHOW'] = 'إظهار المصدر asset';
$lang['ar_SA']['AssetTableField']['TITLE'] = 'العنوان';
$lang['ar_SA']['AssetTableField']['TYPE'] = 'النوع';
$lang['ar_SA']['AssetTableField']['URL'] = 'الرابط';
$lang['ar_SA']['BrokenLinksReport']['Any'] = 'أي';
$lang['ar_SA']['BrokenLinksReport']['BROKENLINKS'] = 'تقرير الروابط المكسورة';
$lang['ar_SA']['BrokenLinksReport']['CheckSite'] = 'اختيار الموقع';
$lang['ar_SA']['BrokenLinksReport']['CheckSiteDropdownDraft'] = 'مسودة الموقع';
$lang['ar_SA']['BrokenLinksReport']['CheckSiteDropdownPublished'] = 'الموقع المنشور';
$lang['ar_SA']['BrokenLinksReport']['ColumnDateLastModified'] = 'تاريخ آخر تعديل';
$lang['ar_SA']['BrokenLinksReport']['ColumnDateLastPublished'] = 'تاريخ آخر نشر';
$lang['ar_SA']['BrokenLinksReport']['ColumnProblemType'] = 'نوع المشكلة';
$lang['ar_SA']['BrokenLinksReport']['ColumnURL'] = 'رابط';
$lang['ar_SA']['BrokenLinksReport']['HasBrokenFile'] = 'يحتوى ملف مكسور';
$lang['ar_SA']['BrokenLinksReport']['HasBrokenLink'] = 'يحتوى مرابط مكسور';
$lang['ar_SA']['BrokenLinksReport']['HasBrokenLinkAndFile'] = 'يحتوى ملف ورابط مكسور';
$lang['ar_SA']['BrokenLinksReport']['HoverTitleEditPage'] = 'تعديل صفحة';
$lang['ar_SA']['BrokenLinksReport']['PageName'] = 'اسم الصفحة';
$lang['ar_SA']['BrokenLinksReport']['ReasonDropdown'] = 'مشكلة للتأكد';
$lang['ar_SA']['BrokenLinksReport']['ReasonDropdownBROKENFILE'] = 'ملف مكسور';
$lang['ar_SA']['BrokenLinksReport']['ReasonDropdownBROKENLINK'] = 'الررواب المكسورة';
$lang['ar_SA']['BrokenLinksReport']['ReasonDropdownRPBROKENLINK'] = 'معيد توجيه الصفحة يشير الى صفحة غير موجودة..';
$lang['ar_SA']['BrokenLinksReport']['ReasonDropdownVPBROKENLINK'] = 'الصفحة الظاهرية تشير الى صفحة غير موجودة..';
$lang['ar_SA']['BrokenLinksReport']['RedirectorNonExistent'] = 'معيد توجيه الصفحة يشير الى صفحة غير موجودة..';
$lang['ar_SA']['BrokenLinksReport']['VirtualPageNonExistent'] = 'الصفحة الظاهرية تشير الى صفحة غير موجودة..';
$lang['ar_SA']['CMSBatchActions']['DELETED_DRAFT_PAGES'] = 'حذف %d  صفحة من مسودة الموقع ، %d فشل';
$lang['ar_SA']['CMSBatchActions']['DELETED_PAGES'] = '%d من الصفحات المحذوفة من الموقع المنشور';
$lang['ar_SA']['CMSBatchActions']['DELETE_DRAFT_PAGES'] = 'حذف من مسودة الموقع';
$lang['ar_SA']['CMSBatchActions']['DELETE_PAGES'] = 'حذف من الصفحة المنشورة';
$lang['ar_SA']['CMSBatchActions']['DELETING_DRAFT_PAGES'] = 'حذف صفحات مختارة من مسودة الموقع';
$lang['ar_SA']['CMSBatchActions']['DELETING_PAGES'] = 'حذف الصفحات المحددة من قائمة الصفحات المنشورة';
$lang['ar_SA']['CMSBatchActions']['PUBLISHED_PAGES'] = '%d من الصفحات المنشورة';
$lang['ar_SA']['CMSBatchActions']['PUBLISHING_PAGES'] = 'الصفحات المنشورة';
$lang['ar_SA']['CMSBatchActions']['PUBLISH_PAGES'] = 'النشر';
$lang['ar_SA']['CMSBatchActions']['UNPUBLISHED_PAGES'] = '%d من الصفحات غير المنشورة';
$lang['ar_SA']['CMSBatchActions']['UNPUBLISHING_PAGES'] = 'صفحات غير منشورة';
$lang['ar_SA']['CMSBatchActions']['UNPUBLISH_PAGES'] = 'غير منشور';
$lang['ar_SA']['CMSMain']['ACCESS'] = 'الدخول إلى %s (%s)';
$lang['ar_SA']['CMSMain']['ACCESSALLINTERFACES'] = 'الدخول إلى جميع واجهات إدارة المحتوى';
$lang['ar_SA']['CMSMain']['ACCESSALLINTERFACESHELP'] = 'ينقض أكثر من توصيف الوصول المحدد';
$lang['ar_SA']['CMSMain']['ACCESS_HELP'] = 'سماح بعرض لقسم يحتوي على صفحة الشجرة والمحتوى. يمكن التعامل معها عرض وتحرير الأذونات من خلال القائمه المنسدله للروابط محددة صفحة، فضلا عن فصل "أذونات المحتوى".';
$lang['ar_SA']['CMSMain']['CANCEL'] = 'إلغاء';
$lang['ar_SA']['CMSMain']['CHOOSEREPORT'] = 'اختر تقرير';
$lang['ar_SA']['CMSMain']['COMPARINGV'] = 'مقارنة الإصدارات %s و %s';
$lang['ar_SA']['CMSMain']['COPYPUBTOSTAGE'] = 'هل ترغب فعلاً في نسخ المحتوى المنشور إلى الموقع ';
$lang['ar_SA']['CMSMain']['DELETE'] = 'حذف من مسودة الموقع';
$lang['ar_SA']['CMSMain']['DESCREMOVED'] = 'و %s أصول سابقة';
$lang['ar_SA']['CMSMain']['EMAIL'] = 'البريد الإلكتروني';
$lang['ar_SA']['CMSMain']['GO'] = 'اذهب';
$lang['ar_SA']['CMSMain']['MENUTITLE'] = 'محتوى الموقع';
$lang['ar_SA']['CMSMain']['MENUTITLE'] = 'محتوى الموقع';
$lang['ar_SA']['CMSMain']['MENUTITLEOPT'] = 'تسمية الإطار العلوي';
$lang['ar_SA']['CMSMain']['METADESCOPT'] = 'الوصف';
$lang['ar_SA']['CMSMain']['METAKEYWORDSOPT'] = 'الكلمات المفتاحية';
$lang['ar_SA']['CMSMain']['NEW'] = 'جديد';
$lang['ar_SA']['CMSMain']['NOCONTENT'] = 'لا يوجد محتوى';
$lang['ar_SA']['CMSMain']['OK'] = 'نعم';
$lang['ar_SA']['CMSMain']['PAGENOTEXISTS'] = 'هذه الصفحة غير موجودة';
$lang['ar_SA']['CMSMain']['PRINT'] = 'الطباعة';
$lang['ar_SA']['CMSMain']['PUBALLCONFIRM'] = 'فضلاً قم بنشر كل صفحة من صفحات الموقع';
$lang['ar_SA']['CMSMain']['PUBALLFUN'] = '"نشر الجميع"خاصية ';
$lang['ar_SA']['CMSMain']['PUBALLFUN2'] = 'الضغط على هذا الزر يعني الذهاب لكل صفحة و نشرها.  It\'s
intended to be used after there have been massive edits of the content, such as when the site was
first built.';
$lang['ar_SA']['CMSMain']['PUBPAGES'] = 'تمت العملية : تم نشر %d صفحات';
$lang['ar_SA']['CMSMain']['REMOVED'] = '\'%s\'%s محذوفة من الموقع المباشر';
$lang['ar_SA']['CMSMain']['REMOVEDFD'] = 'حذف من الموقع المسودة';
$lang['ar_SA']['CMSMain']['REMOVEDPAGE'] = 'إلغاء \'%s\' من الموقع المنشور';
$lang['ar_SA']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '\'%s\' محذوف من مسودة الموقع';
$lang['ar_SA']['CMSMain']['REPORT'] = 'التقرير';
$lang['ar_SA']['CMSMain']['RESTORED'] = 'تم تخزين \'%s\' بنجاح';
$lang['ar_SA']['CMSMain']['ROLLBACK'] = 'عودة إلى هذا الإصدار';
$lang['ar_SA']['CMSMain']['ROLLEDBACKPUB'] = 'عودة للإصدار المنشور . الإصدار الجديد يحمل الرقم #%d';
$lang['ar_SA']['CMSMain']['ROLLEDBACKVERSION'] = 'عودة للإصدار #%d. الإصدار الجديد يحمل الرقم #%d';
$lang['ar_SA']['CMSMain']['SAVE'] = 'حفظ';
$lang['ar_SA']['CMSMain']['STATUSOPT'] = 'الحالة';
$lang['ar_SA']['CMSMain']['TITLEOPT'] = 'العنوان';
$lang['ar_SA']['CMSMain']['TOTALPAGES'] = 'مجموع الصفحات';
$lang['ar_SA']['CMSMain']['VERSIONSNOPAGE'] = 'لا يمكن إيجاد الصفحة رقم #%d';
$lang['ar_SA']['CMSMain']['VIEWING'] = 'أنت الآن تشاهد الإصدار #%s. إنشاء  %s بواسطة %s';
$lang['ar_SA']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'لم يتم العثور على اسم الزر';
$lang['ar_SA']['CMSMain_dialog.ss']['NOLINKED'] = 'لم يتم العثور على window.linkedObject لإعادة المتصفح للصفحة الرئيسة';
$lang['ar_SA']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'تمت الإضافة إلى مسودة الموقع ولم تنشر بعد';
$lang['ar_SA']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'أضف معيار ...';
$lang['ar_SA']['CMSMain_left.ss']['BATCHACTIONS'] = 'الإجراءات';
$lang['ar_SA']['CMSMain_left.ss']['CHANGED'] = 'تم التغيير';
$lang['ar_SA']['CMSMain_left.ss']['CLEAR'] = 'مسح';
$lang['ar_SA']['CMSMain_left.ss']['CLEARTITLE'] = 'مسح كلمات البحث وعرض جميع العناصر';
$lang['ar_SA']['CMSMain_left.ss']['CLOSEBOX'] = 'اضغط لإغلاق الصفحة';
$lang['ar_SA']['CMSMain_left.ss']['COMPAREMODE'] = 'وضع المقارنة ( اضغط 2 للأسفل )';
$lang['ar_SA']['CMSMain_left.ss']['CREATE'] = 'إنشاء';
$lang['ar_SA']['CMSMain_left.ss']['DEL'] = 'محذوف';
$lang['ar_SA']['CMSMain_left.ss']['DELETECONFIRM'] = 'احذف الصفحة المحددة';
$lang['ar_SA']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'تم حذفها من مسودة الموقع لكنها موجودة في الموقع الأصلي';
$lang['ar_SA']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'تم تعديلها في مسودة الموقع ولم تنشر بعد';
$lang['ar_SA']['CMSMain_left.ss']['EDITEDSINCE'] = 'معدل منذ';
$lang['ar_SA']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'السماح بتغيير الترتيب عن طريق الإمساك و الإفلات';
$lang['ar_SA']['CMSMain_left.ss']['GO'] = 'اذهب';
$lang['ar_SA']['CMSMain_left.ss']['HIDDEN'] = 'مخفي';
$lang['ar_SA']['CMSMain_left.ss']['KEY'] = 'الكلمة المفتاحية :';
$lang['ar_SA']['CMSMain_left.ss']['NEW'] = 'جديد';
$lang['ar_SA']['CMSMain_left.ss']['NOTINMENU'] = 'مستبعد من القائمة';
$lang['ar_SA']['CMSMain_left.ss']['OPENBOX'] = 'اضغط لفتح هذا الصندوق';
$lang['ar_SA']['CMSMain_left.ss']['PAGEVERSIONH'] = 'تاريخ إصدارات الصفحة';
$lang['ar_SA']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'انشر الصفحات المختارة';
$lang['ar_SA']['CMSMain_left.ss']['SEARCH'] = 'بحث';
$lang['ar_SA']['CMSMain_left.ss']['SEARCHTITLE'] = 'ابحث في الروابط , العناوين ,عناوين القوائم , و المحتويات';
$lang['ar_SA']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'اختر الصفحات التي ترغب بتغييرها &amp; ثم اختر التنفيذ';
$lang['ar_SA']['CMSMain_left.ss']['SHOWITEMS'] = 'عرض:';
$lang['ar_SA']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'اعرض الصفحات المعدلة فقط';
$lang['ar_SA']['CMSMain_left.ss']['SHOWUNPUB'] = 'إظهار الإصدارات الغير منشورة';
$lang['ar_SA']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'محتوى و هيكلة الموقع';
$lang['ar_SA']['CMSMain_left.ss']['SITEREPORTS'] = 'تقارير الموقع';
$lang['ar_SA']['CMSMain_right.ss']['CHOOSEPAGE'] = 'فضلاً اختر صفحة من القائمة';
$lang['ar_SA']['CMSMain_right.ss']['WELCOMETO'] = 'أهلاً بك في';
$lang['ar_SA']['CMSMain_versions.ss']['AUTHOR'] = 'الكاتب';
$lang['ar_SA']['CMSMain_versions.ss']['NOTPUB'] = 'غير منشور';
$lang['ar_SA']['CMSMain_versions.ss']['PUBR'] = 'الناشر';
$lang['ar_SA']['CMSMain_versions.ss']['UNKNOWN'] = 'غير معروف';
$lang['ar_SA']['CMSMain_versions.ss']['WHEN'] = 'عند';
$lang['ar_SA']['CMSSiteTreeFilter']['ALL'] = 'كل العناصر';
$lang['ar_SA']['CMSSiteTreeFilter']['CHANGEDPAGES'] = 'الصفحة المستبدلة';
$lang['ar_SA']['CMSSiteTreeFilter']['DELETEDPAGES'] = 'كل الصفحات بما فيها المحذوفة';
$lang['ar_SA']['CMSSiteTreeFilter']['SEARCH'] = 'البحث';
$lang['ar_SA']['CommentAdmin']['ACCEPT'] = 'موافقة';
$lang['ar_SA']['CommentAdmin']['APPROVED'] = 'التعليقات الموافق عليها %s';
$lang['ar_SA']['CommentAdmin']['APPROVEDCOMMENTS'] = 'تعليقات تمت الموافقة عليها';
$lang['ar_SA']['CommentAdmin']['AUTHOR'] = 'الكاتب';
$lang['ar_SA']['CommentAdmin']['COMMENT'] = 'التعليق';
$lang['ar_SA']['CommentAdmin']['COMMENTERURL'] = 'الرابط';
$lang['ar_SA']['CommentAdmin']['COMMENTS'] = 'التعليقات';
$lang['ar_SA']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'تعليقات بانتظار موافقة الإدارة';
$lang['ar_SA']['CommentAdmin']['DATEPOSTED'] = 'تدوين التاريخ';
$lang['ar_SA']['CommentAdmin']['DELETE'] = 'حذف';
$lang['ar_SA']['CommentAdmin']['DELETEALL'] = 'حذف الجميع';
$lang['ar_SA']['CommentAdmin']['DELETED'] = 'التعليقات المحذوفة %s';
$lang['ar_SA']['CommentAdmin']['MARKASNOTSPAM'] = 'كرسالة غير مزعجة';
$lang['ar_SA']['CommentAdmin']['MARKEDNOTSPAM'] = 'التعليقات %s كرسائل غير مزعجة';
$lang['ar_SA']['CommentAdmin']['MARKEDSPAM'] = 'التعليقات %s كرسائل مزعجة';
$lang['ar_SA']['CommentAdmin']['MENUTITLE'] = 'تعليقات';
$lang['ar_SA']['CommentAdmin']['MENUTITLE'] = 'التعليقات';
$lang['ar_SA']['CommentAdmin']['NAME'] = 'الاسم';
$lang['ar_SA']['CommentAdmin']['PAGE'] = 'الصفحة';
$lang['ar_SA']['CommentAdmin']['SPAM'] = 'رسائل مزعجة';
$lang['ar_SA']['CommentAdmin']['SPAMMARKED'] = 'كرسالة مزعجة';
$lang['ar_SA']['CommentAdmin_left.ss']['COMMENTS'] = 'التعليقات';
$lang['ar_SA']['CommentAdmin_right.ss']['WELCOME1'] = 'مرحباً بك في';
$lang['ar_SA']['CommentAdmin_right.ss']['WELCOME2'] = 'إدارة التعليقات. فضلاً اختر المجلد من القائمة على الجانب الأيسر';
$lang['ar_SA']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'موافق عليه';
$lang['ar_SA']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'بانتظار موافقة الإدارة';
$lang['ar_SA']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'التعليقات';
$lang['ar_SA']['CommentAdmin_SiteTree.ss']['SPAM'] = 'رسائل مزعجة';
$lang['ar_SA']['CommentTableField']['FILTER'] = 'تصفية';
$lang['ar_SA']['CommentTableField']['SEARCH'] = 'بحث';
$lang['ar_SA']['CommentTableField.ss']['APPROVE'] = 'يوافق';
$lang['ar_SA']['CommentTableField.ss']['APPROVECOMMENT'] = 'موافقة على التعليق';
$lang['ar_SA']['CommentTableField.ss']['DELETE'] = 'حذف';
$lang['ar_SA']['CommentTableField.ss']['DELETEROW'] = 'حذف هذا الصف';
$lang['ar_SA']['CommentTableField.ss']['EDIT'] = 'تعديل';
$lang['ar_SA']['CommentTableField.ss']['HAM'] = 'لحم خنزير';
$lang['ar_SA']['CommentTableField.ss']['MARKASSPAM'] = 'التعليق كرسالة مزعجة';
$lang['ar_SA']['CommentTableField.ss']['MARKNOSPAM'] = 'هذا التعليق ليس رسالة مزعجة';
$lang['ar_SA']['CommentTableField.ss']['NOITEMSFOUND'] = 'لم يتم العثور على عناصر';
$lang['ar_SA']['CommentTableField.ss']['SPAM'] = 'رسائل مزعجة';
$lang['ar_SA']['ComplexTableField']['CLOSEPOPUP'] = 'إغلاق النافذة';
$lang['ar_SA']['ComplexTableField']['SUCCESSADD'] = 'إضافة %s %s %s';
$lang['ar_SA']['Group']['IMPORTTABTITLE'] = 'استيراد';
$lang['ar_SA']['Group']['RolesAddEditLink'] = 'قوانين التعديل/الإضافة';
$lang['ar_SA']['GroupImportForm']['Help1'] = '<p>استيراد واحد أو أكثر من المجموعات في <em>CSV</em>تهيئة (قيم مفصولة بفواصل) <small><ahref="#" class="toggle-advanced">إظهار استخدام المتقدم</a></small></p>';
$lang['ar_SA']['GroupImportForm']['ResultCreated'] = 'إنشاء مجموعات %d';
$lang['ar_SA']['GroupImportForm']['ResultDeleted'] = 'حذف مجموعات %d';
$lang['ar_SA']['GroupImportForm']['ResultUpdated'] = 'تحديث مجموعات %d ';
$lang['ar_SA']['ImageEditor.ss']['ACTIONS'] = 'عمليات';
$lang['ar_SA']['ImageEditor.ss']['ADJUST'] = 'تعديل';
$lang['ar_SA']['ImageEditor.ss']['APPLY'] = 'تطبيق';
$lang['ar_SA']['ImageEditor.ss']['BLUR'] = 'تمويه';
$lang['ar_SA']['ImageEditor.ss']['BRIGHTNESS'] = 'إضاءة';
$lang['ar_SA']['ImageEditor.ss']['CANCEL'] = 'إلغاء';
$lang['ar_SA']['ImageEditor.ss']['CONTRAST'] = 'تباين';
$lang['ar_SA']['ImageEditor.ss']['CROP'] = 'اقتصاص';
$lang['ar_SA']['ImageEditor.ss']['CURRENTACTION'] = 'العمل&nbsp;الحالي';
$lang['ar_SA']['ImageEditor.ss']['EDITFUNCTIONS'] = 'تعديل&nbsp;الخصائص';
$lang['ar_SA']['ImageEditor.ss']['EFFECTS'] = 'تأثيرات';
$lang['ar_SA']['ImageEditor.ss']['EXIT'] = 'خروج';
$lang['ar_SA']['ImageEditor.ss']['GAMMA'] = 'غاما';
$lang['ar_SA']['ImageEditor.ss']['GREYSCALE'] = 'درجات الرمادي';
$lang['ar_SA']['ImageEditor.ss']['HEIGHT'] = 'طول';
$lang['ar_SA']['ImageEditor.ss']['REDO'] = 'تقدم';
$lang['ar_SA']['ImageEditor.ss']['ROT'] = 'تدوير';
$lang['ar_SA']['ImageEditor.ss']['SAVE'] = 'حفظ صورة';
$lang['ar_SA']['ImageEditor.ss']['SEPIA'] = 'بني داكن';
$lang['ar_SA']['ImageEditor.ss']['UNDO'] = 'تراجع';
$lang['ar_SA']['ImageEditor.ss']['UNTITLED'] = 'مستند بدون عنوان';
$lang['ar_SA']['ImageEditor.ss']['WIDTH'] = 'عرض';
$lang['ar_SA']['LeftAndMain']['CANT_REORGANISE'] = 'لا تملك الصلاحية لتعديل شجرة الموقع. تعديلاتك لن يتم حفظها';
$lang['ar_SA']['LeftAndMain']['CHANGEDURL'] = 'تم تغيير الرابط إلى \'%s\'';
$lang['ar_SA']['LeftAndMain']['HELP'] = 'مساعدة';
$lang['ar_SA']['LeftAndMain']['PAGETYPE'] = 'نوع الصفحة:';
$lang['ar_SA']['LeftAndMain']['PERMAGAIN'] = 'تم خروجك من النظام بنجاح. للدخول مرة أخرى أدحل البريد الإلكتروني و الرقم السري بالأسفل';
$lang['ar_SA']['LeftAndMain']['PERMALREADY'] = 'عذراً , لكن لا يمكنك الوصول لهذا القسم من النظام. يتوجب عليك الدخول بصلاحية أخرى';
$lang['ar_SA']['LeftAndMain']['PERMDEFAULT'] = 'أدخل البريد الإلكتروني و الرقم السري للوصول إلى نظام إدارة المحتوى';
$lang['ar_SA']['LeftAndMain']['PLEASESAVE'] = 'فضلاً احفظ الصفحة: هذه الصفحة لا يمكن تحديثها لأنها لم تحفظ بعد';
$lang['ar_SA']['LeftAndMain']['REQUESTERROR'] = 'خطأً في الطلب';
$lang['ar_SA']['LeftAndMain']['SAVED'] = 'محفوظ';
$lang['ar_SA']['LeftAndMain']['SAVEDUP'] = 'محفوظ';
$lang['ar_SA']['LeftAndMain']['SITECONTENTLEFT'] = 'محتوى الموقع';
$lang['ar_SA']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'هذا';
$lang['ar_SA']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'الإصدار الذي تعمل عليه حالياً يعتبر تقنياً فرع CVS';
$lang['ar_SA']['LeftAndMain.ss']['ARCHS'] = 'موقع مفهرس';
$lang['ar_SA']['LeftAndMain.ss']['DRAFTS'] = 'موقع مسودة';
$lang['ar_SA']['LeftAndMain.ss']['EDIT'] = 'تعديل';
$lang['ar_SA']['LeftAndMain.ss']['EDITINCMS'] = 'تعديل هذه الصفحة في نظام إدارة المحتوى';
$lang['ar_SA']['LeftAndMain.ss']['EDITPROFILE'] = 'الملف الشخصي';
$lang['ar_SA']['LeftAndMain.ss']['LOADING'] = 'تحميل ...';
$lang['ar_SA']['LeftAndMain.ss']['LOGGEDINAS'] = 'الدخول كـ';
$lang['ar_SA']['LeftAndMain.ss']['LOGOUT'] = 'خروج';
$lang['ar_SA']['LeftAndMain.ss']['PUBLIS'] = 'موقع منشور';
$lang['ar_SA']['LeftAndMain.ss']['REQUIREJS'] = 'النظام يتطلب تفعيل الجافاسكربت في متصفحك';
$lang['ar_SA']['LeftAndMain.ss']['SSWEB'] = 'موقع SilverStripe';
$lang['ar_SA']['LeftAndMain.ss']['VIEWINDRAFT'] = 'تعديل الصفحة في مسودة الموقع';
$lang['ar_SA']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'مشاهدة الصفحة في الموقع المنشور';
$lang['ar_SA']['LeftAndMain.ss']['VIEWPAGEIN'] = 'عرض الصفحة:';
$lang['ar_SA']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = 'تم نشر \'%s\' بنجاح';
$lang['ar_SA']['LeftAndMain']['STATUSTO'] = 'تم تغيير الحالة إلى \'%s\'';
$lang['ar_SA']['LeftAndMain_right.ss']['WELCOMETO'] = 'مرحياً بكـ';
$lang['ar_SA']['MathSpamProtection']['EIGHT'] = 'ثمانية';
$lang['ar_SA']['MathSpamProtection']['EIGHTEEN'] = 'ثمانية عشر';
$lang['ar_SA']['MathSpamProtection']['ELEVEN'] = 'إحدى عشر';
$lang['ar_SA']['MathSpamProtection']['FIFTEEN'] = 'خمسة عشر';
$lang['ar_SA']['MathSpamProtection']['FIVE'] = 'خمسة';
$lang['ar_SA']['MathSpamProtection']['FOUR'] = 'اربعة';
$lang['ar_SA']['MathSpamProtection']['FOURTEEN'] = 'أربعة عشر';
$lang['ar_SA']['MathSpamProtection']['NINE'] = 'تسعة';
$lang['ar_SA']['MathSpamProtection']['ONE'] = 'واحد';
$lang['ar_SA']['MathSpamProtection']['SEVEN'] = 'سبعة';
$lang['ar_SA']['MathSpamProtection']['SEVENTEEN'] = 'سبعة عشر';
$lang['ar_SA']['MathSpamProtection']['SIX'] = 'ستة';
$lang['ar_SA']['MathSpamProtection']['SIXTEEN'] = 'ستة عشر';
$lang['ar_SA']['MathSpamProtection']['TEN'] = 'عشرة';
$lang['ar_SA']['MathSpamProtection']['THIRTEEN'] = 'ثلاثة عشر';
$lang['ar_SA']['MathSpamProtection']['THREE'] = 'ثلاثة';
$lang['ar_SA']['MathSpamProtection']['TWELVE'] = 'اثنا عشر';
$lang['ar_SA']['MathSpamProtection']['TWO'] = 'اثنان';
$lang['ar_SA']['MathSpamProtection']['WHATIS'] = 'ما هو %s زائد %s ؟';
$lang['ar_SA']['MathSpamProtection']['ZERO'] = 'صفر';
$lang['ar_SA']['MemberImportForm']['ResultCreated'] = 'إنشاء %d أعضاء';
$lang['ar_SA']['MemberImportForm']['ResultDeleted'] = 'حذف %d أعضاء';
$lang['ar_SA']['MemberImportForm']['ResultNone'] = 'بدون تغيير';
$lang['ar_SA']['MemberImportForm']['ResultUpdated'] = 'تحديث %d أعضاء';
$lang['ar_SA']['MemberList.ss']['FILTER'] = 'رشح';
$lang['ar_SA']['MemberList_PageControls.ss']['DISPLAYING'] = 'عرض';
$lang['ar_SA']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'الأعضاء';
$lang['ar_SA']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'الأعضاء';
$lang['ar_SA']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'الأعضاء';
$lang['ar_SA']['MemberList_PageControls.ss']['OF'] = 'من';
$lang['ar_SA']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'الأعضاء';
$lang['ar_SA']['MemberList_PageControls.ss']['TO'] = 'إلى';
$lang['ar_SA']['MemberList_PageControls.ss']['VIEWFIRST'] = 'عرض الأول';
$lang['ar_SA']['MemberList_PageControls.ss']['VIEWLAST'] = 'عرض الأخير';
$lang['ar_SA']['MemberList_PageControls.ss']['VIEWNEXT'] = 'مشاهدة التالي';
$lang['ar_SA']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'عرض السابق';
$lang['ar_SA']['MemberList_Table.ss']['EMAIL'] = 'البريد الإلكتروني';
$lang['ar_SA']['MemberList_Table.ss']['FN'] = 'الاسم الأول';
$lang['ar_SA']['MemberList_Table.ss']['PASSWD'] = 'كلمة المرور';
$lang['ar_SA']['MemberList_Table.ss']['SN'] = 'اسم العائلة';
$lang['ar_SA']['MemberTableField']['ADD'] = 'إضافة';
$lang['ar_SA']['MemberTableField']['ADDEDTOGROUP'] = 'إضافة عضو إلى المجموعة';
$lang['ar_SA']['MemberTableField']['ADDINGFIELD'] = 'فشل الإضافة';
$lang['ar_SA']['MemberTableField']['DeleteTitleText'] = 'حذف  نت هذه المجموعة';
$lang['ar_SA']['MemberTableField']['DeleteTitleTextDatabase'] = 'حذف من قاعدة البيانات و كل المجموعات';
$lang['ar_SA']['MemberTableField']['ERRORADDINGUSER'] = 'هناك خطأ عند إضافة عضو جديد إلى المجموعة : %s';
$lang['ar_SA']['MemberTableField']['FILTER'] = 'تصفية';
$lang['ar_SA']['MemberTableField']['SEARCH'] = 'بحث';
$lang['ar_SA']['MemberTableField.ss']['ADDNEW'] = 'إضافة جديد';
$lang['ar_SA']['MemberTableField.ss']['NOITEMSFOUND'] = 'لاتوجد نتائج';
$lang['ar_SA']['ModelAdmin']['ADDBUTTON'] = 'إضافة';
$lang['ar_SA']['ModelAdmin']['ADDFORM'] = 'أكمل هذا النموذج لإضافة  %s إلى قاعدة البيانات';
$lang['ar_SA']['ModelAdmin']['CHOOSE_COLUMNS'] = 'اختر أعمدة النتائج';
$lang['ar_SA']['ModelAdmin']['CLEAR_SEARCH'] = 'تجديد البحث';
$lang['ar_SA']['ModelAdmin']['CREATEBUTTON'] = 'إنشاء %s';
$lang['ar_SA']['ModelAdmin']['DELETE'] = 'حذف';
$lang['ar_SA']['ModelAdmin']['DELETEDRECORDS'] = 'سجلات محذوفة %s';
$lang['ar_SA']['ModelAdmin']['FOUNDRESULTS'] = 'البحث %s نتائج مطابقة';
$lang['ar_SA']['ModelAdmin']['GOBACK'] = 'عودة';
$lang['ar_SA']['ModelAdmin']['GOFORWARD'] = 'تقدم';
$lang['ar_SA']['ModelAdmin']['IMPORT'] = 'استيراد من CSV';
$lang['ar_SA']['ModelAdmin']['IMPORTEDRECORDS'] = 'استيراد %s سجل';
$lang['ar_SA']['ModelAdmin']['ITEMNOTFOUND'] = 'لايمكن إيجاد هذا العنصر';
$lang['ar_SA']['ModelAdmin']['LOADEDFOREDITING'] = 'تحميل  \'%s\' للتعديل';
$lang['ar_SA']['ModelAdmin']['NOCSVFILE'] = 'فضلاً استعرض ملف CSV للاستيراد';
$lang['ar_SA']['ModelAdmin']['NOIMPORT'] = 'لايوجد شيء للاستيراد';
$lang['ar_SA']['ModelAdmin']['NORESULTS'] = 'لا نتائج';
$lang['ar_SA']['ModelAdmin']['SAVE'] = 'حفظ';
$lang['ar_SA']['ModelAdmin']['SEARCHFOR'] = 'البحث عن :';
$lang['ar_SA']['ModelAdmin']['SEARCHRESULTS'] = 'بحث النتائج';
$lang['ar_SA']['ModelAdmin']['SELECTALL'] = 'تحديد الكل';
$lang['ar_SA']['ModelAdmin']['SELECTNONE'] = 'غير محدد';
$lang['ar_SA']['ModelAdmin']['UPDATEDRECORDS'] = 'سجلات محدثة %s';
$lang['ar_SA']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'أعمددة قواعد البيانات';
$lang['ar_SA']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'عرض مواصفات %s';
$lang['ar_SA']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'العلاقات';
$lang['ar_SA']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'مواصفات %s';
$lang['ar_SA']['ModelAdmin_right.ss']['WELCOME1'] = 'مرحباً بك في %s. فضلاً اختر أحد المدخلات من القائمة اليسرى';
$lang['ar_SA']['ModelSidebar.ss']['ADDLISTING'] = 'إضافة';
$lang['ar_SA']['ModelSidebar.ss']['IMPORT_TAB_HEADER'] = 'استيراد';
$lang['ar_SA']['ModelSidebar.ss']['SEARCHLISTINGS'] = 'البحث';
$lang['ar_SA']['PageComment']['Comment'] = 'التعليقات';
$lang['ar_SA']['PageComment']['COMMENTBY'] = 'تم التعليق بواسطة \'%s\' على %s';
$lang['ar_SA']['PageComment']['IsSpam'] = 'رسالة مزعجة ؟';
$lang['ar_SA']['PageComment']['Name'] = 'اسم الكاتب';
$lang['ar_SA']['PageComment']['NeedsModeration'] = 'تحتاج موافقة ؟';
$lang['ar_SA']['PageComment']['PLURALNAME'] = 'تعليقات الصفحة';
$lang['ar_SA']['PageComment']['SINGULARNAME'] = 'تعليق الصفحة';
$lang['ar_SA']['PageCommentInterface']['COMMENTERURL'] = 'رابط موقعك';
$lang['ar_SA']['PageCommentInterface']['DELETEALLCOMMENTS'] = 'حذف كافة التلعيقات من هذه الصفحة';
$lang['ar_SA']['PageCommentInterface']['POST'] = 'التدوينة';
$lang['ar_SA']['PageCommentInterface']['SPAMQUESTION'] = 'سؤال الحماية من الرسائل المصاحبة: %s';
$lang['ar_SA']['PageCommentInterface.ss']['COMMENTLOGINERROR'] = 'لا تستطيع كتابة التعليقات حتى تقوم بعملية التسجيل';
$lang['ar_SA']['PageCommentInterface.ss']['COMMENTPERMISSIONERROR'] = 'يجب أن تملك مستوى الصلاحيات المناسب للقيام بالتعديل';
$lang['ar_SA']['PageCommentInterface.ss']['COMMENTPOSTLOGIN'] = 'الدخول ';
$lang['ar_SA']['PageCommentInterface.ss']['COMMENTS'] = 'التعليقات';
$lang['ar_SA']['PageCommentInterface.ss']['COMMENTSDISABLED'] = 'إضافة التعليقات معطلة';
$lang['ar_SA']['PageCommentInterface.ss']['NEXT'] = 'التالي';
$lang['ar_SA']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'لايوجد أحد علق على هذه التدوينة';
$lang['ar_SA']['PageCommentInterface.ss']['POSTCOM'] = 'نشر تعليقك';
$lang['ar_SA']['PageCommentInterface.ss']['PREV'] = 'السابق';
$lang['ar_SA']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'الملخصات لكل التعليقات';
$lang['ar_SA']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'ملخضات التعليقات على هذه الصفحة';
$lang['ar_SA']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'مشاهدة جميع التعليقات';
$lang['ar_SA']['PageCommentInterface']['YOURCOMMENT'] = 'التعليقات';
$lang['ar_SA']['PageCommentInterface']['YOURNAME'] = 'اسمك';
$lang['ar_SA']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'سؤال الحماية من الرسائل المزعجة : %s';
$lang['ar_SA']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'تم إرسال التعليق وبانتظار موافقة الإدارة';
$lang['ar_SA']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'الرسالة التي دونتها كانت:';
$lang['ar_SA']['PageCommentInterface_Form']['SPAMDETECTED'] = 'العثور على رسائل مزعجة';
$lang['ar_SA']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'الموافقة على التعليق';
$lang['ar_SA']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'هذا التعليق ليس رسالة مزعجة';
$lang['ar_SA']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'هذا التعليق رسالة مزعجة';
$lang['ar_SA']['PageCommentInterface_singlecomment.ss']['PBY'] = 'دونت بواسطة';
$lang['ar_SA']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'حذف التعليق';
$lang['ar_SA']['Permission']['CMS_ACCESS_CATEGORY'] = 'الوصل لنظام إدارة المحتوى';
$lang['ar_SA']['Permissions']['PERMISSIONS_CATEGORY'] = 'تصاريح القاعدة والوصول';
$lang['ar_SA']['ReportAdmin']['MENUTITLE'] = 'التقارير';
$lang['ar_SA']['ReportAdminForm']['FILTERBY'] = 'فرز عبر';
$lang['ar_SA']['ReportAdmin_left.ss']['REPORTS'] = 'التقارير';
$lang['ar_SA']['ReportAdmin_right.ss']['WELCOME1'] = 'أهلاً بك في';
$lang['ar_SA']['ReportAdmin_right.ss']['WELCOME2'] = 'قسم التقارير. فضلاً اختر تقريراً من القائمة';
$lang['ar_SA']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'التقارير';
$lang['ar_SA']['SecurityAdmin']['ACCESS_HELP'] = 'السماح بعرض واضافة وتعديلات المستخدمين ، فضلا عن تعيين أذونات والقواعد لهم.';
$lang['ar_SA']['SecurityAdmin']['ADDMEMBER'] = 'إضافة عضو';
$lang['ar_SA']['SecurityAdmin']['APPLY_ROLES'] = 'تطبيق القواعد على المجموعات';
$lang['ar_SA']['SecurityAdmin']['APPLY_ROLES_HELP'] = 'القدرة على تحرير الأدوار المسندة إلى مجموعة. يتطلب "الحصول على إذن \'قسم الأمن\'.';
$lang['ar_SA']['SecurityAdmin']['EDITPERMISSIONS'] = 'تعديل الصلاحيات و رقم الآي بي لكل مجموعة';
$lang['ar_SA']['SecurityAdmin']['EDITPERMISSIONS_HELP'] = 'القدرة على تحرير أذونات وعناوين بروتوكول الإنترنت لمجموعة. يتطلب "الحصول على إذن \'قسم  الأمن\'';
$lang['ar_SA']['SecurityAdmin']['MemberListCaution'] = 'تحذير : إزالة أعضاء من هذه القائمة إزالتها من جميع الفئات وقاعدة البيانات';
$lang['ar_SA']['SecurityAdmin']['MENUTITLE'] = 'حماية';
$lang['ar_SA']['SecurityAdmin']['MENUTITLE'] = 'الأمان';
$lang['ar_SA']['SecurityAdmin']['NEWGROUP'] = 'مجموعة جديدة';
$lang['ar_SA']['SecurityAdmin']['SAVE'] = 'حفظ';
$lang['ar_SA']['SecurityAdmin']['SGROUPS'] = 'مجموعات الأمان';
$lang['ar_SA']['SecurityAdmin']['TABIMPORT'] = 'استيراد';
$lang['ar_SA']['SecurityAdmin']['TABROLES'] = 'قواعد';
$lang['ar_SA']['SecurityAdmin_left.ss']['CREATE'] = 'إنشاء';
$lang['ar_SA']['SecurityAdmin_left.ss']['DEL'] = 'حذف';
$lang['ar_SA']['SecurityAdmin_left.ss']['DELGROUPS'] = 'حذف المجموعات المحددة';
$lang['ar_SA']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'السماح بتغيير الترتيب عن طريق الإمساك و الإفلات';
$lang['ar_SA']['SecurityAdmin_left.ss']['GO'] = 'اذهب';
$lang['ar_SA']['SecurityAdmin_left.ss']['SECGROUPS'] = 'مجموعات الأمان';
$lang['ar_SA']['SecurityAdmin_left.ss']['SELECT'] = 'اختر الصفحات التي ترغب في حذفها ثم اضغط على الزر بالأسفل';
$lang['ar_SA']['SecurityAdmin_left.ss']['TOREORG'] = 'لإعادة ترتيب موقعك , رتب الصفحات بالسحب و الإفلات كما تحب';
$lang['ar_SA']['SecurityAdmin_MemberImportForm']['BtnImport'] = 'استيراد';
$lang['ar_SA']['SecurityAdmin_MemberImportForm']['FileFieldLabel'] = ' CSV ملف <small>(الامتداد المسموح :*.csv )</small>';
$lang['ar_SA']['SecurityAdmin_right.ss']['WELCOME1'] = 'أهلاً بك في';
$lang['ar_SA']['SecurityAdmin_right.ss']['WELCOME2'] = 'قسم إدارة الأمان. فضلاً اختر مجموعة من القائمة';
$lang['ar_SA']['SideReport']['BROKENFILES'] = 'صفحات مع ملفات مكسورة';
$lang['ar_SA']['SideReport']['BROKENLINKS'] = 'صفحات مع روباط مكسورة';
$lang['ar_SA']['SideReport']['BrokenLinksGroupTitle'] = 'تقارير الروابط المكسورة';
$lang['ar_SA']['SideReport']['BROKENREDIRECTORPAGES'] = 'معيد التوجيه الصفحات يشير إلى صفحات محذوفة';
$lang['ar_SA']['SideReport']['BROKENVIRTUALPAGES'] = 'الصفحات الظاهرية تشير إالى صفحات محذوفة';
$lang['ar_SA']['SideReport']['ContentGroupTitle'] = 'تقارير المحتوى';
$lang['ar_SA']['SideReport']['EMPTYPAGES'] = 'صفحات فارغة';
$lang['ar_SA']['SideReport']['LAST2WEEKS'] = 'صفحات تم تعديلها في آخر أسبوعين';
$lang['ar_SA']['SideReport']['OtherGroupTitle'] = 'أخرى';
$lang['ar_SA']['SideReport']['ParameterLiveCheckbox'] = 'التأكد من حيوية الموقع';
$lang['ar_SA']['SideReport']['REPEMPTY'] = 'تقرير %s  فارغ';
$lang['ar_SA']['SideReport']['TODO'] = 'للتنفيذ';
$lang['ar_SA']['StaticExporter']['BASEURL'] = 'الرابط الأساسي';
$lang['ar_SA']['StaticExporter']['EXPORTTO'] = 'تصدير إلى مجلد';
$lang['ar_SA']['StaticExporter']['FOLDEREXPORT'] = 'مجلدات لتصديرها إلى';
$lang['ar_SA']['StaticExporter']['NAME'] = 'المصدر الثابت Exporter';
$lang['ar_SA']['TableListField']['ALL'] = 'الكل';
$lang['ar_SA']['TableListField']['NONE'] = 'لا يوجد';
$lang['ar_SA']['TableListField.ss']['NOITEMSFOUND'] = 'لا توجد عناصر';
$lang['ar_SA']['TableListField.ss']['SORTASC'] = 'فرز في ترتيب تصاعدي';
$lang['ar_SA']['TableListField.ss']['SORTDESC'] = 'فرز في ترتيب تنازلي';
$lang['ar_SA']['TableListField_PageControls.ss']['DISPLAYING'] = 'عرض';
$lang['ar_SA']['TableListField_PageControls.ss']['OF'] = 'من';
$lang['ar_SA']['TableListField_PageControls.ss']['TO'] = 'إلى';
$lang['ar_SA']['TableListField_PageControls.ss']['VIEWFIRST'] = 'عرض الأول';
$lang['ar_SA']['TableListField_PageControls.ss']['VIEWLAST'] = 'عرض الأخير';
$lang['ar_SA']['TableListField_PageControls.ss']['VIEWNEXT'] = 'عرض التالي';
$lang['ar_SA']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'عرض السابق';
$lang['ar_SA']['ThumbnailStripField']['NOFLASHFOUND'] = 'لايوجد ملفات فلاش';
$lang['ar_SA']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'لايوجد ملفات فلاش';
$lang['ar_SA']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'لايوجد صور';
$lang['ar_SA']['ThumbnailStripField']['NOIMAGESFOUND'] = 'لم يتم العثور على الصور';
$lang['ar_SA']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = 'اختر مجلد أو ابحث بالأعلى';
$lang['ar_SA']['ViewArchivedEmail.ss']['CANACCESS'] = 'يمكنك الدخول إلى أرشيف الموقع عن طريق الرابط التالي :';
$lang['ar_SA']['ViewArchivedEmail.ss']['HAVEASKED'] = 'تم طلب مشاهدة محتوى الموقع في';
$lang['ar_SA']['WidgetAreaEditor.ss']['AVAILABLE'] = 'توفير Widgets';
$lang['ar_SA']['WidgetAreaEditor.ss']['AVAILWIDGETS'] = 'انقر على عنوان التطبيق المصغر أدناه لاستخدامها في هذه الصفحة.';
$lang['ar_SA']['WidgetAreaEditor.ss']['INUSE'] = 'Widgets مستخدمة حالياً';
$lang['ar_SA']['WidgetAreaEditor.ss']['NOAVAIL'] = 'حالياً لا يوجد Widgets';
$lang['ar_SA']['WidgetAreaEditor.ss']['TOADD'] = 'لإضافة Widgets, قم بإدراجها من القائمة اليسرى إلى هنا';
$lang['ar_SA']['WidgetAreaEditor.ss']['TOSORT'] = 'لفرز التطبيقات المصغرة المستخدمة حاليا في هذه الصفحة ، اسحبها صعودا وهبوطا.';
$lang['ar_SA']['WidgetDescription.ss']['CLICKTOADDWIDGET'] = 'اضغط لإضافة هذا التطبيق المصغر';
$lang['ar_SA']['WidgetEditor.ss']['DELETE'] = 'حذف';

