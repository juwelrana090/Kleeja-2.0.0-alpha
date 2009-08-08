<?php
//
// kleeja language
// Arabic
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();



$lang = array_merge($lang, array(
	'HOME' => 'البداية',
	'DIR' => 'rtl',
	'INDEX' => 'الرئيسية',
	'SITE_CLOSED' => 'الموقع مغلق !',
	'STOP_FOR_SIZE' => 'متوقف حالياً !',
	'SIZES_EXCCEDED' => 'الحجم الكلي للمركز استنفذ .. سوف نعود قريباً',
	'ENTER_CODE_IMG' => 'أدخل ما تراه بالصورة داخل الصندوق',
	'SAFE_CODE' => 'تفعيل الكود الأمني في التحميل',
	'LAST_VISIT' => 'آخر زيارة لك',
	'FLS_LST_VST_SEARCH' => 'عرض الملفات منذ آخر زيارة',
	'IMG_LST_VST_SEARCH' => 'عرض الصور منذ آخر زيارة',
	'NEXT' => 'التالي',
	'PREV' => 'السابق',
	'INFORMATION' => 'تعليمات',
	'WELCOME' => 'أهلا بك في مركز التحميل',
	'KLEEJA_VERSION' => 'إصدار كليجا',
	'NUMBER_ONLINE' => 'المتصفحون حالياً',
	'NUMBER_UONLINE' => 'أعضاء',
	'NUMBER_VONLINE' => 'زوار',
	'USERS_SYSTEM' => 'نظام المستخدمين',
	'ERROR_NAVIGATATION' => 'خطأ بالتوجه..',

	'USER_LOGIN' => 'تسجيل الدخول',
	'LOGIN' => 'دخول',
	'USERNAME' => 'اسم المستخدم',
	'PASSWORD' => 'كلمة المرور',
	'EMPTY_USERNAME' => 'حقل اسم المستخدم فارغ',
	'EMPTY_PASSWORD' => 'حقل كلمة المرور فارغ',
	'LOSS_PASSWORD' => 'نسيت كلمة المرور؟',
	'LOGINED_BEFORE' => 'أنت داخل بالفعل',
	'LOGOUT' => 'خروج',
	'EMPTY_FIELDS' => 'خطأ.. حقول ناقصة !',
	'LOGIN_SUCCESFUL' => 'لقد تم الدخول بنجاح',
	'LOGIN_ERROR' => 'خطأ.. لا يمكن الدخول !',
	
	'REGISTER_CLOSED' => 'نأسف.. التسجيل مقفل حالياً',
	'PLACE_NO_YOU' => 'منطقة محظورة',
	'REGISTERED_BEFORE' => 'لقد قمت بالتسجيل سابقاً',
	'REGISTER' => 'تسجيل عضوية',
	'EMAIL' => 'البريد الإلكتروني',
	'VERTY_CODE' => 'كود الأمان :',
	'NOTE_CODE' => 'ادخل الأحرف الموجود في الصورة بالشكل الصحيح مرتبة بشكل دقيق.',
	'WRONG_EMAIL' => 'بريد خاطيء',
	'WRONG_NAME' => 'الاسم يجب أن يكون أكبر من 4 أحرف وغير طويل',
	'WRONG_LINK' => 'رابط خاطيء..',
	'EXIST_NAME' => 'الاسم موجود مسبقاً',
	'EXIST_EMAIL' => 'البريد موجود مسبقاً',
	'WRONG_VERTY_CODE' => 'كود الأمان خاطيء',
	'CANT_UPDATE_SQL' => 'لا يمكن التحديث لقاعدة البيانات',
	'CANT_INSERT_SQL' => 'لا يمكن إدخال المعلومات لقاعدة البيانات',
	'REGISTER_SUCCESFUL' => 'شكراً لتسجيلك معناً',
	'LOGOUT_SUCCESFUL' => 'تم الخروج بنجاح',
	'LOGOUT_ERROR' => 'هناك مشكلة بالخروج',
	
	'FILECP' => 'إدارة الملفات',
	'DEL_SELECTED' => 'حذف المحدد',
	'EDIT_U_FILES' => 'إدارة ملفاتك',
	'FILES_UPDATED' => 'تم تحديث الملفات بنجاح',
	'PUBLIC_USER_FILES' => 'مجلد ملفات العضو',
	'FILEUSER' => 'مجلد ملفات عضو',
	'GO_FILECP' => 'اضغط هنا لإدارة ملفاتك هذه',
	'YOUR_FILEUSER' => 'مجلدك',
	'COPY_AND_GET_DUD' => 'انسخ الرابط وأعطه لأصدقائك ليطلعوا على مجلدك ',
	'CLOSED_FEATURE' => 'خاصية مغلقة',
	'USERFILE_CLOSED' => 'خاصية مجلدات المستخدمين مغلقة !',
	
	'PFILE_4_FORUM' => 'قم بالذهاب للمنطقة الأعضاء لتغيير بياناتك',
	'USER_PLACE' => 'منطقة أعضاء',
	
	'PROFILE' => 'ملفك الشخصي',
	'EDIT_U_DATA' => 'تحديث بياناتك',
	'PASS_ON_CHANGE' => 'كلمة المرور.. عند التغيير فقط',
	'OLD' => 'القديمة',
	'NEW' => 'الجديدة',
	'NEW_AGAIN' => 'تكرار الجديدة',
	'UPDATE' => 'تحديث',
	'PASS_O_PASS2' => 'كلمة المرور القديمة مهمة واكتب كلمتا المرور الجديدتان بدقة',
	'DATA_CHANGED_O_LO' => 'تم تحديث بياناتك وسوف تستخدم بدخولك القادم',
	'DATA_CHANGED_NO' => 'لم تحدث بياناتك.. لن تتغير المعلومات',
	'LOST_PASS_FORUM' => 'اذهب للمنتدى واسترجع كلمة المرور',
	'GET_LOSTPASS' => 'استعادة كلمة المرور',
	'E_GET_LOSTPASS' => 'لاستعادة كلمة المرور يجب أن تكتب البريد الالكتروني المسجل لدينا',
	'WRONG_DB_EMAIL' => 'لا يوجد بريد كهذا في قاعدة البيانات لدينا',
	'GET_LOSTPASS_MSG' => "لقد قمت بطلب  إستعادة كلمة مرورك , لكن لتجنب السبام قم بالظغط على الرابط التالي لتأكيدها : \r\n %1\$s \r\n كلمة المرور الجديده : %2\$s",
	'CANT_SEND_NEWPASS' => 'خطأ.. لم يتم إرسال كلمة المرور الجديدة!',
	'OK_SEND_NEWPASS' => 'تم إرسال كلمة المرور الجديدة..',
	'OK_APPLY_NEWPASS' => 'تم ضبط كلمة المرور الجديده , يمكنك الآن الدخول بها .',
	'GUIDE' => 'الملفات المسموحة',
	'GUIDE_VISITORS' => 'الملفات المسموحة للزوار وامتداداتها :',
	'GUIDE_USERS' => 'الملفات المسموحة للأعضاء وامتداداتها :',
	'EXT' => 'الامتداد',
	'SIZE' => 'الحجم',
	'REPORT' => 'تقرير مخالفة لشروط الخدمة',
	'YOURNAME' => 'اسمك',
	'URL' => 'الرابط',
	'REASON' => 'السبب',
	'NO_ID' => 'لم تحدد ملف..!!',
	'NO_ME300RES' => 'رجاءً.. حقل السبب لا يمكن ملأه بأكثر من 300 حرف!!',
	'THNX_REPORTED' => 'تم التبليغ.. شكراً لاهتمامك',
	'RULES' => 'شروط الخدمة',
	'NO_RULES_NOW' => 'لا يوجد قوانين حالياً',
	'E_RULES' => 'هذه هي شروط مركز التحميل',
	'CALL' => 'اتصل بنا',
	'SEND' => 'أرسل',
	'TEXT' => 'نص الرسالة',
	'NO_ME300TEXT' => 'رجاءً.. حقل النص لا يمكن ملأه بأكثر من 300 حرف!!',
	'THNX_CALLED' => 'تم الإرسال. . سوف يتم الرد قريباً',
	'NO_DEL_F' => 'نأسف.. خاصية الحذف المباشر معطلة من المدير',
	'E_DEL_F' => 'الحذف المباشر',
	'WRONG_URL' => 'خطأ.. في الرابط..',
	'CANT_DEL_F' => 'خطأ.. لايمكن حذف الملف.. ربما معلوماتك خاطئة او قد تم حذف مسبقاً',
	'CANT_DELETE_SQL' => 'لا يمكن الحذف من قاعدة البيانات',
	'DELETE_SUCCESFUL' => 'تم الحذف بنجاح',
	'STATS' => 'إحصائيات المركز',
	'STATS_CLOSED' => 'صفحة الإحصائيات معطلة من المدير!',
	'FILES_ST' => 'تم  تحميل ',
	'FILE' => 'ملف',
	'USERS_ST' => 'عدد الأعضاء',
	'USER' => 'عضو',
	'SIZES_ST' => 'حجم كل الملفات',
	'LSTFLE_ST' => 'آخر مارفع',
	'LSTDELST' => 'آخر فحص للملفات الخاملة',
	'S_C_T' => 'زوار اليوم',
	'S_C_Y' => 'زوار أمس',
	'S_C_A' => 'عدد الزوار كلياً',
	'LAST_1_H' => 'هذه الإحصائيات لقبل ساعة من الآن',
	'DOWNLAOD' => 'تحميل',
	'FILE_FOUNDED' => 'تم إيجاد الملف .. ',
	'WAIT' => 'انتظر رجاءً ..',
	'CLICK_DOWN' => 'اضغط هنا لتنزيل الملف',
	'JS_MUST_ON' => 'لا بد من تفعيل الجافا سكربت في  متصفحك !!',
	'FILE_INFO' => 'معلومات عن الملف',
	'FILENAME' => 'اسم الملف',
	'FILESIZE' => 'حجم الملف',
	'FILETYPE' => 'نوع الملف',
	'FILEDATE' => 'تاريخ الملف',
	'FILEUPS' => 'عدد التحميلات',
	'FILEREPORT' => 'تبليغ  ملف مخالف : إرسال تقرير مخالفة',
	'FILE_NO_FOUNDED' => 'لم نتمكن من إيجاد الملف..!!',
	'IMG_NO_FOUNDED' => 'لم نتمكن من إيجاد الصورة..!!',
	'NOT_IMG' => 'ليست صورة.. هذا ملف!!',
	'MORE_F_FILES' => 'هذا آخر حد يمكنك تحميله',
	'DOWNLOAD_F' => '[ رفع الملفات ]',
	'DOWNLOAD_T' => '[ سحب الملفات من رابط ]',
	'PAST_URL_HERE' => '[ ألصق الرابط هنا ]',
	'SAME_FILE_EXIST' => 'هذا الملف موجود مسبقا',
	'NO_FILE_SELECTED' => 'لم تقم بإختيار ملف!!',
	'WRONG_F_NAME' => 'اسم الملف يحتوي على أحرف غير مسموحة .. الرجاء تغيير اسم الملف والمحاولة من جديد ',
	'FORBID_EXT' => ' هذا الامتداد غير مسموح ',
	'SIZE_F_BIG' => 'الحجم للملف المختار يجب أن يكون أقل من',
	'CANT_CON_FTP' => 'لايمكن الاتصال بـ ',
	'URL_F_DEL' => 'رابط الحذف',
	'URL_F_THMB' => 'رابط المصغرة',
	'URL_F_FILE' => 'رابط الملف',
	'URL_F_IMG' => 'رابط الصورة المباشر',
	'URL_F_BBC' => 'رابط للمنتديات',
	'IMG_DOWNLAODED' => 'تم تحميل الصورة بنجاح',
	'FILE_DOWNLAODED' => 'تم تحميل الملف بنجاح',
	'CANT_UPLAOD' => 'خطأ.. لم يتم تحميل الملف  لأسباب غير معروفة',
	'NEW_DIR_CRT' => 'لقد تم انشاء مجلد جديد',
	'PR_DIR_CRT' => 'لم يتم اعطاء التصريح للمجلد',
	'CANT_DIR_CRT' => 'لم يتم إنشاء مجلد تلقائياً.. قم بإنشاءه انت',
	'AGREE_RULES' => 'أوافق على شروط المركز',
	'CHANG_TO_URL_FILE' => 'تبديل طريقة التحميل.. رابط أو إدخال',
	'URL_CANT_GET' => 'خطأ في جلب الملف من الرابط',
	'ADMINCP' => 'مركز التحكم',
	'JUMPTO' => 'انتقل إلى',
	'GO_BACK_BROWSER' => 'رجوع للخلف',
	'U_R_BANNED' => 'لقد تم حظر الآي بي هذا..',
	'U_R_FLOODER' => 'لقد قمت بتخطي عدد مرات عرض الصفحة بالوقت المحدد..',
	'U_NOT_ADMIN' => 'يجب أن تملك صلاحية الإدارة',
	'UPDATE_CONFIG' => 'تحديث الإعدادات',
	'YES' => 'نعم',
	'NO' => 'لا',
	'NO_CHANGE' => 'بلا تغيير',
	'CHANGE_MD5' => 'تغيير مع دالة MD5',
	'CHANGE_TIME' => 'تغيير مع دالة TIME',
	'SITENAME' => 'إسم المركز',
	'SITEMAIL' => 'بريد المركز',
	'SITEMAIL2' => 'بريد التبليغات , المراسلات',
	'SITEURL' => 'رابط المركز(مع /)',
	'FOLDERNAME' => 'إسم مجلد التحميل',
	'PREFIXNAME' => 'بادئة أسماء الملفات',
	'FILESNUM' => 'عدد ملفات التحميل',
	'SITECLOSE' => 'إغلاق المركز',
	'CLOSEMSG' => 'رسالة الإغلاق',
	'LANGUAGE' => 'اللغة',
	'DECODE' => 'تغيير إسم الملف',
	'STYLE' => 'ستايل المركز',
	'SEC_DOWN' => 'الثواني قبل بدء التحميل',
	'STATFOOTER' => 'إحصائيات الصفحة بالفوتر',
	'GZIP' => 'gzip مسرع',
	'GOOGLEANALYTICS' => '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
	'WELCOME_MSG' => 'كلمة الترحيب',
	'USER_SYSTEM' => 'نظام العضوية',
	'NORMAL' => 'عادي',
	'ENAB_REG' => 'فتح التسجيل',
	'TOTAL_SIZE' => 'أقصى حجم كلي بالميقا',
	'THUMBS_IMGS' => 'تفعيل مصغرات الصور',
	'WRITE_IMGS' => 'تفعيل ختم الصور',
	'ID_FORM' => 'شكل الـ ID',
	'IDF' => 'الاساسي',
	'IDFF' => 'اسم الملف',
	'IDFD' => 'مباشر',
	'DEL_URL_FILE' => 'تفعيل رابط الحذف المباشر',
	'WWW_URL' => 'تفعيل التحميل من رابط',
	'ALLOW_STAT_PG' => 'تفعيل صفحة الإحصائيات',
	'ALLOW_ONLINE' => 'تفعيل عرض المتواجدون الآن',
	'DEL_F_DAY' => 'حذف الملفات الخاملة كذا يوم',
	'MOD_WRITER' => 'Mod Rewrite',
	'MOD_WRITER_EX' => 'روابط كـHTML..',
	'NUMFIELD_S' => 'رجاءاً .. الحقول الرقمية .. يجب أن تكون رقمية !!',
	'CONFIGS_UPDATED' => 'تم تحديت الإعدادات بنجاح',
	'UPDATE_EXTS' => 'تحديث الامتدادات',
	'GROUP' => 'المجموعة',
	'SIZE_G' => 'الحجم [ز]',
	'SIZE_U' => 'الحجم [م]',
	'ALLOW_G' => 'سماح [ز]',
	'ALLOW_U' => 'سماح [م]',
	'E_EXTS' => '<b><font color="#008000">[&nbsp;ز&nbsp;]&nbsp;:&nbsp;  تعني الزوار</font></b>&nbsp;/&nbsp;<b><font color="#D80000">[&nbsp;م&nbsp;]&nbsp;:&nbsp; تعني الأعضاء </font></b>&nbsp;/&nbsp;<i>الأحجام تضبط بالكليوبايت</i>',
	'UPDATED_EXTS' => 'تم تحديث الإمتدادات بنجاح',
	'UPDATE_FILES' => 'تحديث الملفات',
	'BY' => 'من',
	'FILDER' => 'مجلد',
	'DELETE' => 'حذف',
	'GUST' => 'زائر',
	'UPDATE_REPORTS' => 'تحديث التبليغات',
	'NAME' => 'الإسم',
	'CLICKHERE' => 'اضغط هنا',
	'TIME' => 'الوقت',
	'E_CLICK' => 'اضغط على أحد المختارات لتظهر هنا!',
	'IP' => 'IP',
	'REPLY' => '[ رد ]',
	'REPLY_REPORT' => 'رد على تبليغ',
	'U_REPORT_ON' => 'بسبب تبليغك في ',
	'BY_EMAIL' => 'بواسطة البريد ',
	'ADMIN_REPLIED' => 'فقد قام المدير بالرد التالي',
	'CANT_SEND_MAIL' => 'لا يمكن إرسال رد بريدي',
	'IS_SEND_MAIL' => 'تم إرسال الرد البريدي',
	'REPORTS_UPDATED' => 'تم تحديث التبليغات',
	'UPDATE_CALSS' => 'تحديث المراسلات',
	'REPLY_CALL' => 'رد على رسالة',
	'REPLIED_ON_CAL' => 'بخصوص مراسلتك ',
	'CALLS_UPDATED' => 'تم تحديث المراسلات',
	'IS_ADMIN' => 'مدير',
	'UPDATE_USERS' => 'تحديث المستخدمين',
	'USERS_UPDATED' => 'تم تحديث المستخدمين',
	'E_BACKUP' => 'اختر الجداول التي تريد تضمينها في النسخة الاحتياطية ومن ثم اضغط على تحميل',
	'TAKE_BK' => 'أخذ نسخة',
	'REPAIRE_TABLE' => '[جداول] تم إصلاح ',
	'REPAIRE_F_STAT' => '[إحصائيات] تم إعادة إحتساب عدد الملفات',
	'REPAIRE_S_STAT' => '[إحصائيات] تم إعادة إحتساب حجم الملفات ',
	'REPAIRE_CACHE' => '[كاش] تم حذف  ..',
	'KLEEJA_CP' => 'لوحة تحكم [ كليجا ]',
	'GENERAL_STAT' => 'إحصائيات عامة',
	'SIZE_STAT' => 'إحصائيات الحجم',
	'OTHER_INFO' => 'معلومات أخرى',
	'AFILES_NUM' => 'عدد جميع الملفات',
	'AFILES_SIZE' => 'الحجم الإجمالي لجميع الملفات',
	'AUSERS_NUM' => 'عدد الأعضاء',
	'LAST_GOOGLE' => 'آخر زيارة لجوجل',
	'GOOGLE_NUM' => 'زيارات جوجل',
	'LAST_YAHOO' => 'آخر زيارة للياهو',
	'YAHOO_NUM' => 'زيارات الياهو',
	'KLEEJA_CP_W' => 'أهلا وسهلاً بك عزيزي <b style="color:#FF0000">[ %s ]</b> في لوحة التحكم لمركز التحميل <b>كليجا</b> ..!',
	'USING_SIZE' => 'الحجم المستخدم حتى الآن',
	'PHP_VER' => 'إصدار php',
	'MYSQL_VER' => 'إصدار mysql',
	'N_IMGS' => 'الصور',
	'N_ZIPS' => 'ملفات الضغط',
	'N_TXTS' => 'ملفات النصوص',
	'N_DOCS' => 'مستندات',
	'N_RM' => 'RealMedia',
	'N_WM' => 'WindowsMedia',
	'N_SWF' => 'ملفات الفلاش',
	'N_QT' => 'QuickTime',
	'N_OTHERFILE' => 'ملفات أخرى',
	'LOGOUT_CP_OK' => 'تم مسح جلستك الإدارية وبقي صلاحياتك الأخرى..',
	'RETURN_HOME' => '&lt;&lt;  رجوع للمركز',
	'R_CONFIGS' => 'إعدادات المركز',
	'R_CPINDEX' => 'بداية لوحة التحكم',
	'R_EXTS' => 'إعدادات الإمتدادات',
	'R_FILES' => 'التحكم بالملفات',
	'R_REPORTS' => 'التحكم بالتبليغات',
	'R_CALLS' => 'التحكم بالمراسلات',
	'R_USERS' => 'التحكم بالأعضاء',
	'R_BCKUP' => 'نسخة احتياطية',
	'R_REPAIR' => 'صيانة شاملة',
	'R_LGOUTCP' => 'مسح جلسة الإدارة',
	'R_BAN' => 'التحكم بالحظر',
	'BAN_EXP1' => 'قم بتحرير الآيبيات المحظورة وإضافة الجديد من هنا..',
	'BAN_EXP2' => 'إستخدم رمز النجمة (*)لاستبدال الارقام ..إذا كنت تريد الحظر الشامل ..وأستخدم الفاصل (|) للفصل بين الآيبيات',
	'UPDATE_BAN' => 'حفظ تعديلات الحظر',
	'BAN_UPDATED' => 'تم تحديث قائمة الحظر بنجاح..',
	'R_RULES' => 'التحكم بشروط الخدمة',
	'RULES_EXP' => 'من هنا تستطيع تعديل الشروط التي سوف تظهر للزوار والأعضاء',
	'UPDATE_RULES' => 'تحديث الشروط',
	'RULES_UPDATED' => 'تم تحديث الشروط بنجاح..',
	'R_SEARCH' => 'بحث متقدم',
	'SEARCH_FILES' => 'بحث عن الملفات',
	'SEARCH_SUBMIT' => 'بحث الآن',
	'LAST_DOWN' => 'آخر تحميل',
	'TODAY' => 'اليوم',
	'DAYS' => 'أيام',
	'WAS_B4' => 'كان قبل',
	'BITE' => 'بايت',
	'SEARCH_USERS' => 'بحث عن مستخدمين',
	'R_IMG_CTRL' => 'تحكم بالصور فقط',
	'ENABLE_USERFILE' => 'تفعيل مجلدات المستخدمين',
	'R_EXTRA' => 'هيدر وفوتر إضافي',
	'EX_HEADER_N' => 'الهيدر الإضافي.. وهو ما يظهر أسفل الهيدر الأصلي ..',
	'EX_FOOTER_N' => 'الفوتر الإضافي.. وهو ما يظهر أعلى الفوتر الأصلي ..',
	'UPDATE_EXTRA' => 'تحديث الإضافات القوالبية',
	'EXTRA_UPDATED' => 'تم تحديث الإضافات القوالبية',
	'R_STYLES' => 'الستايلات',
	'STYLES_EXP' => 'لتعديل أو حذف ستايل قم بتحديده من أسفل',
	'SHOW_TPLS' => 'عرض القوالب',
	'SUBMIT' => 'موافق',
	'EDIT' => 'تعديل',
	'TPL_UPDATED' => 'تم تحديث القالب',
	'TPL_DELETED' => 'تم حذف القالب',
	'NO_TPL_SHOOSED' => 'لم تقم بإختيار قالب !!!',
	'NO_TPL_NAME_WROTE' => 'لم تقم بكتابة اسم قالب !!!',
	'ADD_NEW_STYLE' => 'إنشاء ستايل جديد',
	'EXPORT_AS_XML' => 'تصدير كـ xml',
	'NEW_STYLES_EXP' => 'قم بتحميل الستايل من ملف xml',
	'NEW_STYLE_ADDED' => 'تمت إضافة الستايل بنجاح ',
	'ERR_IN_UPLOAD_XML_FILE' => 'هناك خطأ في تحميل الملف!',
	'ERR_UPLOAD_XML_FILE_NO_TMP' => 'هناك خطأ في تحميل الملف!',
	'ERR_UPLOAD_XML_NO_CONTENT' => 'الملف لا يحوي محتويات !',
	'ERR_XML_NO_G_TAGS' => 'الملف لا يحوي بعض الوسوم المهمة !',
	'STYLE_DELETED' => 'لقد تم حذف الستايل بنجاح',
	'STYLE_1_NOT_FOR_DEL' => 'لا يمكن حذف الستايل الأساسي في كليجا ...',
	'ADD_NEW_TPL' => 'أضف قالب جديد',
	'ADD_NEW_TPL_EXP' => 'قم بكتابة إسم القالب الجديد ...',
	'TPL_CREATED' => 'لقد تم إنشاء القالب الجديد ...',
	
	 'R_LANGS' => 'كلمات وعبارات',
	'WORDS_UPDATED' => 'لقد تم تحديث الكلمات...',
	
	'PLUGINS' => 'إضافات برمجية',
	'PLUGINS_EX' => 'الإضافات البرمجية السريعة .. قم بحذفها او تعطيلها من هنا',
	'DISABLE' => 'تعطيل',
	'ENABLE' => 'تفعيل',
	'ADD_NEW_PLUGIN' => 'أضف إضافة برمجية جديدة',
	'ADD_NEW_PLUGIN_EXP' => 'قم بتحميل ملف الإضافة البرمجيةxml ..',
	'PLUGIN_DELETED' => 'لقد تم حذف الإضافة البرمجية...',
	'PLGUIN_DISABLED_ENABLED' => 'لقد تم تفعيل \ تعطيل الإضافة البرمجية..',
	'NO_PLUGINS' => 'لا يوجد أي إضافات برمجية ..',
	'NEW_PLUGIN_ADDED' => 'لقد تمت إضافة الإضافة البرمجية .. <br /> لاحظ : بعض الإضافات البرمجية يأتي معها ملفات تحتاج لنقلها لمجلد كليجا.',
	'PLUGIN_EXISTS_BEFORE' => 'الاضافه هذه موجوده سابقاً بنفس الاصدار أو أعلى ولاتحتاج تحديث !',
	'PLUGIN_UPDATED_SUCCESS' => 'لقد تم تحديث الإضافه لأخر إصدار تم رفعه ...',
	
	'R_CHECK_UPDATE' => 'فحص عن تحديثات',
	'ERROR_CHECK_VER' => 'خطأ: لا يمكن جلب معلومات عن آخر نسخة في هذه اللحظة، حاول مجدداً لاحقا!.',
	'UPDATE_KLJ_NOW' => 'يجب أن تقوم بتحديث نسختك إلى آخر نسخة الآن، قم بالذهاب لموقع كليجا لمعلومات أكثر .',
	'U_LAST_VER_KLJ' => 'أنت تستخدم آخر نسخة من كليجا. شكراً لمتابعة نسختك بإستمرار.',
	
	//rc6
	'U_USE_PRE_RE' 			=> 'أنت تستخدم نسخة تطويرية لم تصدر حتى الآن , اضغط <a href="http://www.kleeja.com/bugs/">هنا</a> لإخبارنا بأي أخطاء برمجية وثغرات قد تقابلك.',
	'STYLE_IS_DEFAULT'		=> 'استايل افتراضي',
	'MAKE_AS_DEFAULT'		=> 'اجعله افتراضي',
	'TPLS_RE_BASIC'			=>	'قوالب أساسية', 
	'TPLS_RE_MSG'			=>	'قوالب التنبية', 
	'TPLS_RE_USER'			=>	'قوالب متعلقة بالمستخدم', 
	'TPLS_RE_OTHER'			=>	'قوالب أخرى',
	'STYLE_NOW_IS_DEFAULT' 	=> 'تم جعل الاستايل ستايل افتراضي',
	'STYLE_DIR_NOT_WR'		=>	'مجلد الستايل %s غير قابل للكتابة , أي انك لا تستطيع التعديل على القوالب إلا بعد تعديل تصريح المجلد إلى تصريح كتابة كـ 777.',
	'TPL_PATH_NOT_FOUND' 	=> 'القالب  %s غير موجود !',
	'NO_CACHED_STYLES'		=> 'لا يوجد أي قوالب مخزنة حالياً !',
	'OPEN'					=> 'افتح',
	'SEARCH_FOR'			=> 'ابحث عن',
	'REPLACE_WITH'			=> 'استبدل بـ',
	'REPLACE_TO_REACH'		=> 'حتى الكود تصل الكود التالي',
	'ADD_AFTER'				=> 'أضف بعدها',
	'ADD_AFTER_SAME_LINE'	=> 'أضف بعده في نفس السطر',
	'ADD_BEFORE'			=> 'أضف قبله',
	'ADD_BEFORE_SAME_LINE'	=> 'أضف قبله في نفس السطر',
	'ADD_IN'				=> 'أضف فيه بعد إنشاءه',
	'CACHED_STYLES_DELETED'	=>'تم حذف القوالب المخزنة .',
	'CACHED_STYLES'			=>' القوالب المخزنة',
	'DELETE_CACHED_STYLES'	=>'حذف القوالب المخزنة',
	'CACHED_STYLES_DISC'	=>	'القوالب المخزنة هي تعديلات متبقية من الإضافات لم يتم اضافتها اما بسبب الصلاحيات او عدم وجود كلمة البحث المناسبة ، لذا يجب عليه تركيبها بقوالبك يدوياً %s .',
	'UPDATE_NOW_S'			=>	'انت تستخدم نسخة قديمة من كليجا، قم بالترقية فوراً، نسختك الحالية هي %1$s والنسخة الجديدة هي %2$s .',
	'ADD_NEW_EXT'			=> 'أضف امتداد جديد',
	'ADD_NEW_EXT_EXP'		=> 'قم بكتابة الامتداد , واختيار مجموعته',
	'EMPTY_EXT_FIELD'		=>	'حقل الامتداد فارغ!', 
	'NEW_EXT_ADD'			=>	'تم إضافة الامتداد الجديد ',
	'NEW_EXT_EXISTS_B4'		=>	'الامتداد الجديد %s موجود مسبقاً !.',
	'KILOBYTE'				=> 'كيلوبايت',
	'NOT_SAFE_FILE'			=> 'نظام كليجا المتطور اكتشف أن هذا الملف غير آمن  ويحتوي على أكواد خبيثه  .. !!!',
	'CONFIG_WRITEABLE' 		=> 'ملف config.php قابل للكتابة حالياً ونوصي وبشدة تغيير التصريح له ل640 أو على الأقل 644.',
	'NOTE'					=>	'ملاحظة',
	'WARN'					=>	'انتبه',
	'NO_KLEEJA_COPYRIGHTS'	=> 'يبدوا أنك أزلت حقوق كليجا من الفوتر بالخطأ،  قم بإرجاعها لكي نستطيع إكمال التطوير وتقديم السكربت مجانا، لو أردت شراء رخصة إزالة الحقوق  %s.',
	'USERS_NOT_NORMAL_SYS'	=> 'نظام العضويات الحالي ليس النظام العادي ، أي أن الأعضاء الحاليين لا يمكن تحريرهم من هنا بل من السكربت الذي تم ربط كليجا به، هؤلا الأعضاء يتبعون لنظام العضويات العادي.',
	'ARE_YOU_SURE_DO_THIS'	=> 'هل أنت متأكد من القيام بهذه العملية؟',
	'SITE_FOR_MEMBER_ONLY'	=> 'المركز للأعضاء فقط ، قم بالتسجيل أو بالدخول حتى تتمكن من التحميل.',
	'DIMENSIONS_THMB'		=> 'أبعاد المصغرات',
	'AUTH_INTEGRATION_N_UTF8_T'	=> '%s ليست utf8',
	'AUTH_INTEGRATION_N_UTF8' => '%s يجب أن يكون ترميز قاعدة البيانات الخاصة به utf8 لكي يتم الربط مع كليجا!.',
	'SCRIPT_AUTH_PATH_WRONG'	=> 'مسار السكربت %s الذي تم ربط عضويات كليجا معه خاطئ ,قم بضبطه',
	'SHOW_MY_FILECP'		=> 'السماح بعرض ملفاتي',
	'PASS_ON_CHANGE'		=> 'تغيير كلمة المرور',
	'MOST_EVER_ONLINE'		=> 'اكثر عدد تواجد بالمركز كان',
	'ON'					=> 'في',
	'LAST_REG'				=> 'اخر عضو مسجل',
	'NEW_USER'				=> 'عضو جديد',
	'LIVEXTS'				=> 'صيغ مباشره , افصلهم باستخدام الفاصله',
	'MUST_LOGIN'			=> 'يجب عليك أستخدام اسم مستخدم وكلمة مرور صحيحتين لتسجيل الدخول للوحة تحكم الإدارة.',
	
	'ADD_UPLAD_A'			=> 'إضافة المزيد من الحقول',
	'ADD_UPLAD_B'			=> 'حذف الحقول',
	'COPYRIGHTS_X'			=> 'جميع الحقوق محفوظة',
	'ADMIN_DELETE_FILE_ERR'	=> 'حدث خطا غير متوقع اثناء محاولة حذف الملفات .. !',
	'NO_FILE_USER'			=> 'لا يوجد أي ملفات في حساب العضوية حتى الآن .. !',
	'ADMIN_DELETE_FILE_OK'	=> 'تم حذف كافة ملفات العضو',
	'ADMIN_DELETE_FILES'	=> 'حذف كل ملفات العضوية',
	
	'KLJ_MORE_PLUGINS'	=> array('قم بالحصول على الكثير من الاضافات من مركز الاضافات في موقع كليجا ,<a target="_blank" href="http://www.kleeja.com/plugins/">إضغط هنا للذهاب لهناك</a> .',
								'هل أنت مطور ؟ هل قمت بتطوير اضافات لكليجا وتريد عرضها للأخرين أو تريد بيعها في مركز كليجا للاضافات ؟ اذن <a target="_blank" href="http://www.kleeja.com/plugins/">إضغط هنا للذهاب لهناك</a>. ',
								),
	'KLJ_MORE_STYLES'	=> array('قم بالحصول على الكثير من الستايلات من معرض الستايلات في موقع كليجا ,<a target="_blank" href="http://www.kleeja.com/styles/">إضغط هنا للذهاب لهناك</a> .',
							 'هل أنت مصمم ؟ هل تريد عرض ستايلاتك في في معرض كليجا للجميع مجانا او بمقابل ؟  إذن <a target="_blank" href="http://www.kleeja.com/styles/">إضغط هنا للذهاب لهناك</a> .',
							 ),
	'CHECK_ALL'	 => 'تحديد الكل',
	'BCONVERTER' => 'آلة حاسبة لتحويل الأحجام',
	'NO_HTACCESS_DIR_UP'		=> 'لايوجد ملف .htaccess في مجلد التحميل  "%s", هذا يعني انه لو تم رفع اكواد خبيثه فسيتمكن المخترق  من تشغيلها وقد يحدث امور لاتحمد عقباها !',
	'NO_HTACCESS_DIR_UP_THUMB'	=> 'لايوجد ملف .htaccess في مجلد المصغرات داخل مجلد التحميل "%s", هذا يعني انه لو تم رفع اكواد خبيثه فسيتمكن المخترق المخترق  من تشغيلها وقد يحدث امور لاتحمد عقباها  !',
	'COOKIE_DOMAIN' 			=> 'نطاق السكاكر',
	'COOKIE_NAME' 				=> 'بادئة السكاكر',
	'COOKIE_PATH' 				=> 'مسار السكاكر',
	'COOKIE_SECURE'				=> 'تفعيل السكاكر الآمانة',
	'BROSWERF'					=> 'استعراض الملفات',
	'REMME'						=> 'تذكرني',
	'HOUR'						=> 'ساعة',
	'5HOURS'					=> '5 ساعات',
	'DAY'						=> 'يوم',
	'WEEK'						=> 'اسبوع',
	'MONTH'						=> 'شهر',
	'YEAR'						=> 'سنه',
	'ADMINISTRATORS'			=> 'استعراض جميع العضويات التي تملك صلاحيات دخول لوحة التحكم .. !',
	'INVALID_FORM_KEY'			=> 'نموذج خاطئ , او انك تعديت الوقت المسموح فيه لملأ النموذج.',
	'REFRESH_CAPTCHA'			=> 'إضغط لتحديث الصوره بواحده جديده',
	'CHOSE_F'					=> 'فضلا قم بإختيار ملف واحد على الاقل',
	'NO_REPEATING_UPLOADING'	=> 'لايمكنك رفع نفس الملفات على التوالي !.',
	'FILES_DELETED' 			=> 'تم حذف الملفات المحدده بنجاح !',
	'GUIDE_GROUPS' 			    => 'مجموعة',
	'ALL_FILES' 			    => 'عدد جميع الملفات',
	'SHOWFILESBYIP'				=> 'عرض الملفات لهذا الـ IP', 
	'DELETEALLRES'				=> 'حذف كل النتائج',
	'ADMIN_DELETE_FILES_OK'     => 'تم حذف %s ملف بنجاح',
	'ADMIN_DELETE_FILES_NOF'	=> 'لاتوجد نتائج للقيام بعملية الحذف',
	'NOT_EXSIT_USER'			=> 'عفواً العضو الذي تبحث عنه غير موجود في قاعدة البيانات .. ربما أنك تحاول الوصول لعضوية غير موجودة او محذوفة !!!!',
	'ADMIN_DELETE_NO_FILE'		=> 'هذا المستخدم لا يملك ملفات لحذفها ! .',
	'WAIT_LOADING'				=> 'فضلاً انتظر ... جاري رفع الملفات على السيرفر ..',
	'NOTICECLOSED'				=> 'تنبيه : المركز مغلق',
	'CONFIG_KLJ_MENUS_OTHER'	=> 'خيارات اخرى',
	'CONFIG_KLJ_MENUS_GENERAL'	=> 'خيارات عامة',
	'CONFIG_KLJ_MENUS_ALL'		=> 'عرض كل الخيارات',
	'CONFIG_KLJ_MENUS_UPLOAD'	=> 'اعدادات التحميل',
	'CONFIG_KLJ_MENUS_INTERFACE'=> 'خيارات الواجهه والتصميم',
	
));
