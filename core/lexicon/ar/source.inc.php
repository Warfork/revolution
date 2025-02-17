<?php
/**
 * Sources English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['access'] = 'صلاحيات الوصول';
$_lang['base_path'] = 'المسار الأساسي';
$_lang['base_path_relative'] = 'المسار الأساسي ذو الصلة؟';
$_lang['base_url'] = 'URL الأساسي';
$_lang['base_url_relative'] = 'URL الأساسي ذو الصلة؟';
$_lang['minimum_role'] = 'الدور الأدنى';
$_lang['path_options'] = 'خيارات المسار';
$_lang['policy'] = 'السياسة';
$_lang['source'] = 'مصدر الوسائط';
$_lang['source_access_add'] = 'إضافة مجموعة مستخدم';
$_lang['source_access_remove'] = 'Delete Access';
$_lang['source_access_remove_confirm'] = 'Are you sure you want to delete Access to this Source for this User Group?';
$_lang['source_access_update'] = 'Edit Access';
$_lang['source_description_desc'] = 'وصف مختصر لمصدر الوسائط.';
$_lang['source_err_ae_name'] = 'يوجد مصدر وسائط بهذا الاسم مسبقاً! الرجاء تحديد اسم جديد.';
$_lang['source_err_nf'] = 'لم يتم العثور على مصدر الوسائط!';
$_lang['source_err_init'] = 'Could not initialize "[[+source]]" Media Source!';
$_lang['source_err_nfs'] = 'لا يمكن العثور على مصدر وسائط مع المعرف: [[+id]].';
$_lang['source_err_ns'] = 'الرجاء تحديد مصدر الوسائط.';
$_lang['source_err_ns_name'] = 'الرجاء تحديد اسم لمصدر الوسائط.';
$_lang['source_name_desc'] = 'اسم مصدر الوسائط.';
$_lang['source_properties.intro_msg'] = 'إدارة خصائص هذا المصدر بالأسفل.';
$_lang['source_remove_confirm'] = 'Are you sure you want to delete this Media Source? This might break any TVs you have assigned to this source.';
$_lang['source_remove_multiple_confirm'] = 'هل أنت متأكد من أنك تريد حذف مصدر الوسائط هذا؟ قد يؤدي هذا إلى عطب عناصر القالب التي قمت بإسنادها لهذا المصدر.';
$_lang['source_type'] = 'نوع المصدر';
$_lang['source_type_desc'] = 'النمط، أو السواقة لمصدر الوسائط. المصدر سوف يستخدم هذه السواقة ليتصل إليها عند جمع بياناتها. مثال: ملف النظام سوف يجمع الملفات من ملف النظام. S3 سوف يحصل على الملفات من حزمة S3.';
$_lang['source_type.file'] = 'ملف نظام';
$_lang['source_type.file_desc'] = 'مصدر معتمد على ملف النظام للبحث ضمن ملفات المخدم.';
$_lang['source_type.s3'] = 'أمازون S3';
$_lang['source_type.s3_desc'] = 'البحث ضمن حزمة أمازون S3.';
$_lang['source_type.ftp'] = 'File Transfer Protocol';
$_lang['source_type.ftp_desc'] = 'Navigates an FTP remote server.';
$_lang['source_types'] = 'أنواع المصدر';
$_lang['source_types.intro_msg'] = 'هذه لائحة بجميع أنواع مصدر الوسائط المثبتة التي تمتلكها ضمن نسخة مودكس الخاص بك.';
$_lang['source.access.intro_msg'] = 'هنا يمكنك تقييد مصدر وسائط إلى مجموعات مستخدم محددة وتطبيق السياسات على مجموعات المستخدم هذه. مصدر الوسائط بدون مجموعات مستخدم مربوطة معه متاح لجميع مستخدمي المدير.';
$_lang['sources'] = 'مصادر الوسائط';
$_lang['sources.intro_msg'] = 'إدارة جميع مصادر الوسائط الخاصة بك هنا.';
$_lang['user_group'] = 'مجموعة المستخدم';

/* file source type */
$_lang['allowedFileTypes'] = 'أنواع الملفات المسموحة';
$_lang['prop_file.allowedFileTypes_desc'] = 'في حالة الضبط، سوف يقيد الملفات المعروضة فقط على اللواحق المحددة. الرجاء تحدد لائحة مفصولة، دون النقاط السابقة للواحق.';
$_lang['basePath'] = 'المسارالاساس';
$_lang['prop_file.basePath_desc'] = 'The file path to point the Source to, for example: assets/images/<br>The path may depend on the "basePathRelative" parameter';
$_lang['basePathRelative'] = 'المسار الاساس النسبي';
$_lang['prop_file.basePathRelative_desc'] = 'اذا كان المسار الأساسي أعلاه ليس ذو صلة مع مسار تثبيت مودكس، اضبط هذا على لا.';
$_lang['baseUrl'] = 'العنوان الاساس';
$_lang['prop_file.baseUrl_desc'] = 'The URL that this source can be accessed from, for example: assets/images/<br>The path may depend on the "baseUrlRelative" parameter';
$_lang['baseUrlPrependCheckSlash'] = 'إضافة البادئة الشرطة المائلة للعنوان الاساس';
$_lang['prop_file.baseUrlPrependCheckSlash_desc'] = 'اذا كانت القيمة true، مودكس فقط سوف يعتمد مسبقاً  على baseUrl اذا لم يوجد (/) في بداية URL  عند عرض عنصر القالب. مفقيد لإعداد قيمة عنصر القالب خارج baseUrl.';
$_lang['baseUrlRelative'] = 'العنوان الاساس النسبي';
$_lang['prop_file.baseUrlRelative_desc'] = 'اذا كان إعداد URL الأساسي أعلاه ليس ذو صلة مع URL تثبيت مودكس، اضبط هذا على لا.';
$_lang['imageExtensions'] = 'إمتداد الصور';
$_lang['prop_file.imageExtensions_desc'] = 'سلسلة مفصولة من لواحق الملفات للاستخدام كصور. مودكس سيحاول جعل صور مصغرة من الملفات مع هذه اللواحق.';
$_lang['skipFiles'] = 'تخطّي الملفات';
$_lang['prop_file.skipFiles_desc'] = 'سلسلة مفصولة. مودكس سوف يتجاوز ويخفي الملفات والمجلدات التي تطابق أي من هذا.';
$_lang['skipExtensions'] = 'skipExtensions';
$_lang['prop_file.skipExtensions'] = 'A comma-separated list of extensions. MODX will not show files that match any of these.';
$_lang['thumbnailQuality'] = 'جودة الصور المصغّرة';
$_lang['prop_file.thumbnailQuality_desc'] = 'جودة الصورة المصغرة المعروضة، في نطاق 0-100.';
$_lang['thumbnailType'] = 'نوع الصور المصغّرة';
$_lang['prop_file.thumbnailType_desc'] = 'نوع الصورة لعرض الصور المصغرة على أساسه.';
$_lang['prop_file.visibility_desc'] = 'Default visibility for new files and folders.';
$_lang['no_move_folder'] = 'The Media Source driver does not support moving of folders at this time.';

/* s3 source type */
$_lang['bucket'] = 'حزمة';
$_lang['prop_s3.bucket_desc'] = 'حزمة S3 لتحميل بيانات النموذج لديك.';
$_lang['prop_s3.key_desc'] = 'مفتاح أمازون لتوثيق الحزمة.';
$_lang['prop_s3.imageExtensions_desc'] = 'سلسلة مفصولة من لواحق الملفات للاستخدام كصور. مودكس سيحاول جعل صور مصغرة من الملفات مع هذه اللواحق.';
$_lang['prop_s3.secret_key_desc'] = 'المفتاح السري لأمازون لتوثيق الحزمة.';
$_lang['prop_s3.skipFiles_desc'] = 'سلسلة مفصولة. مودكس سوف يتجاوز ويخفي الملفات والمجلدات التي تطابق أي من هذا.';
$_lang['prop_s3.thumbnailQuality_desc'] = 'جودة الصورة المصغرة المعروضة، في نطاق 0-100.';
$_lang['prop_s3.thumbnailType_desc'] = 'نوع الصورة لعرض الصور المصغرة على أساسه.';
$_lang['prop_s3.url_desc'] = 'URL نسخة Amazon S3.';
$_lang['prop_s3.endpoint_desc'] = 'Alternative S3-compatible endpoint URL, e.g., "https://s3.<region>.example.com". Review your S3-compatible provider’s documentation for the endpoint location. Leave empty for Amazon S3';
$_lang['prop_s3.region_desc'] = 'منطقة التخزين في أمازون s3. على سبيل المثال: us-west-1';
$_lang['prop_s3.prefix_desc'] = 'Optional path/folder prefix';
$_lang['prop_s3.no_check_bucket_desc'] = 'If set, don\'t attempt to check the bucket exists. It can be needed if the access key you are using does not have bucket creation/list permissions.';
$_lang['s3_no_move_folder'] = 'سواقة S3 لا تدعم تنقل المجلدات في هذا الوقت.';

/* ftp source type */
$_lang['prop_ftp.host_desc'] = 'Server hostname or IP address';
$_lang['prop_ftp.username_desc'] = 'Username for authentication. Can be "anonymous".';
$_lang['prop_ftp.password_desc'] = 'Password of user. Leave empty for anonymous user.';
$_lang['prop_ftp.url_desc'] = 'If this FTP is has a public URL, you can enter its public http-address here. This will also enable image previews in the media browser.';
$_lang['prop_ftp.port_desc'] = 'Port of the server, default is 21.';
$_lang['prop_ftp.root_desc'] = 'The root folder, it will be opened after connection';
$_lang['prop_ftp.passive_desc'] = 'Enable or disable passive ftp mode';
$_lang['prop_ftp.ssl_desc'] = 'Enable or disable ssl connection';
$_lang['prop_ftp.timeout_desc'] = 'Timeout for connection in seconds.';

/* file type */
$_lang['PNG'] = 'PNG';
$_lang['JPG'] = 'JPG';
$_lang['GIF'] = 'GIF';
$_lang['WebP'] = 'WebP';
