<?php
/**
 * Access Policy English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['template_group'] = 'テンプレートグループ';
$_lang['active_of'] = '[[+active]] of [[+total]]';
$_lang['active_permissions'] = '有効な権限';
$_lang['no_policy_option'] = ' （ポリシーなし） ';
$_lang['permission'] = 'Permission';
$_lang['permission_err_ae'] = 'すでにこのポリシーに登録されている権限です。';
$_lang['permission_err_nf'] = '不明な権限です。';
$_lang['permission_err_ns'] = '権限が指定されていません。';
$_lang['permission_err_remove'] = 'An error occurred while trying to delete this permission.';
$_lang['permission_err_save'] = '権限を保存しようとしてエラーが発生しました。';
$_lang['permission_remove_confirm'] = 'Are you sure you want to delete this permission?';
$_lang['permissions'] = '権限';
$_lang['permissions_desc'] = 'さまざまな権限を束ねた「アクセスポリシー」をここで管理します。アクセスポリシーはユーザーグループに割り当てることができます。';
$_lang['policies'] = 'アクセスポリシー';
$_lang['policy'] = 'アクセスポリシー';
$_lang['policy_data'] = 'ポリシーデータ';
$_lang['policy_desc'] = 'アクセスポリシーは、MODXの特定のアクションの許可や制限を行います。';
$_lang['policy_desc_name'] = 'アクセスポリシーの名前';
$_lang['policy_desc_description'] = 'Optional. A short description of the Access Policy. Also you might use lexicon keys here.';
$_lang['policy_desc_template'] = 'このアクセスポリシーで使用する、ポリシーテンプレートを選択してください。ポリシーで設定可能な権限は、ここで選択したひな型から読み込まれます。';
$_lang['policy_desc_lexicon'] = '省略可。このアクセスポリシーの権限を翻訳する際に使用するレキシコントピック。';
$_lang['policy_duplicate_confirm'] = 'ポリシーと全てのデータを複製しますか？';
$_lang['policy_err_ae'] = '`[[+name]]`という名前のアクセスポリシーはすでに存在しています。別の名前を指定してください。';
$_lang['policy_err_nf'] = '不明なポリシーです。';
$_lang['policy_err_ns'] = 'ポリシーが指定されていません。';
$_lang['policy_err_remove'] = 'An error occurred while trying to delete the Policy.';
$_lang['policy_err_save'] = 'ポリシーの保存時に、エラーが発生しました。';
$_lang['policy_import_msg'] = 'ポリシーとしてインポートするXMLファイルを選択してください。ファイルは有効なポリシーXMLフォーマットである必要があります。';
$_lang['policy_management'] = 'アクセスポリシー';
$_lang['policy_management_msg'] = 'アクセスポリシーは、MODXの様々なアクションに対する権限を管理します。';
$_lang['policy_name'] = 'ポリシー名';
$_lang['policy_property_create'] = 'アクセスポリシープロパティを作成';
$_lang['policy_property_new'] = 'Create Policy Property';
$_lang['policy_property_remove'] = 'アクセスポリシープロパティの削除';
$_lang['policy_property_specify_name'] = 'ポリシープロパティ名を指定してください。:';
$_lang['policy_remove_confirm'] = 'Are you sure you want to delete this Access Policy?';
$_lang['policy_remove_multiple_confirm'] = 'Are you sure you want to delete these Access Policies? This is irreversible.';
$_lang['policy_template'] = 'ポリシーテンプレート';
$_lang['policy_template_desc'] = 'ポリシーテンプレートは、個々のアクセスポリシーで設定可能なアクセス許可のひな型を定義します。ここでは、テンプレートに特定の権限を追加や削除が行えます。なお、テンプレートから削除された権限は、そのテンプレートを使用する全てのアクセスポリシーからも削除されるため、注意してください。';
$_lang['policy_template_desc_name'] = 'このポリシーテンプレートの名称';
$_lang['policy_template_desc_description'] = 'Optional. A short description of the Access Policy Template. Also you might use lexicon keys here.';
$_lang['policy_template_lexicon'] = 'Lexicon Topic';
$_lang['policy_template_desc_lexicon'] = '省略可。このポリシーテンプレートの権限を翻訳する際に使用するレキシコントピック。';
$_lang['policy_template_desc_template_group'] = 'ポリシーテンプレートを使用するグループ。';
$_lang['policy_template_duplicate_confirm'] = 'このポリシーテンプレートを複製してよろしいですか？';
$_lang['policy_template_err_ae'] = '`[[+name]]`という名前のポリシーテンプレートはすでに存在します。他の名前を指定してください。';
$_lang['policy_template_err_nf'] = '不明なポリシーテンプレートです。';
$_lang['policy_template_err_ns'] = 'ポリシーテンプレートを指定してください。';
$_lang['policy_template_err_remove'] = 'An error occurred while trying to delete the Policy Template.';
$_lang['policy_template_err_save'] = 'ポリシーテンプレートの保存時、エラーが発生しました。';
$_lang['policy_template_import_msg'] = 'インポートするひな型のファイルを選択してください。ファイルは、';
$_lang['policy_template_remove_confirm'] = 'Are you sure you want to delete this Policy Template? It will delete all Policies attached to this Template as well - this could break your MODX installation if any active Policies are attached to this Template.';
$_lang['policy_template_remove_confirm_in_use'] = 'Are you sure you want to delete this Policy Template? It will delete all Policies attached to this Template as well - this could break your MODX installation if any active Policies are attached to this Template.<br><br><strong>This template is used by existing Policies ([[+count]] in total). Are you sure you want to delete this template and all attached policies?</strong>';
$_lang['policy_template_remove_multiple_confirm'] = 'Are you sure you want to delete these Policy Templates? It will delete all Policies attached to these Templates as well - this could break your MODX installation if any active Policies are attached to these Templates.';
$_lang['policy_template_remove_multiple_confirm_in_use'] = 'Are you sure you want to delete these Policy Templates? It will delete all Policies attached to these Templates as well - this could break your MODX installation if any active Policies are attached to these Templates.<br><br><strong>Some of selected templates are still used by existing Policies ([[+count]] in total). Are you sure you want to delete these template and all attached policies?</strong>';
$_lang['policy_templates'] = 'ポリシーテンプレート';
$_lang['policy_templates.intro_msg'] = '個々のアクセスポリシーで指定可能な権限は、このポリシーテンプレートから読み込まれます。';
$_lang['policy_template_administrator_desc'] = 'Context administration policy template with all permissions.';
$_lang['policy_template_resource_desc'] = 'Resource Policy Template with all attributes.';
$_lang['policy_template_object_desc'] = 'Object Policy Template with all attributes.';
$_lang['policy_template_element_desc'] = 'Element Policy Template with all attributes.';
$_lang['policy_template_mediasource_desc'] = 'Media Source Policy Template with all attributes.';
$_lang['policy_template_context_desc'] = 'Context Policy Template with all attributes.';
$_lang['policy_template_namespace_desc'] = 'Namespace Policy Template with all attributes.';
$_lang['policy_template_group_administrator_desc'] = 'All admin policy templates.';
$_lang['policy_template_group_object_desc'] = 'All Resource-based policy templates.';
$_lang['policy_template_group_resource_desc'] = 'All Object-based policy templates.';
$_lang['policy_template_group_element_desc'] = 'All Element-based policy templates.';
$_lang['policy_template_group_mediasource_desc'] = 'All Media Source-based policy templates.';
$_lang['policy_template_group_namespace_desc'] = 'All Namespace based policy templates.';
$_lang['policy_template_group_context_desc'] = 'All Context based policy templates.';
$_lang['policy_resource_desc'] = 'MODX Resource Policy with all attributes.';
$_lang['policy_administrator_desc'] = 'Context administration policy with all permissions.';
$_lang['policy_load_only_desc'] = 'A minimal policy with permission to load an object.';
$_lang['policy_load_list_and_view_desc'] = 'Provides load, list and view permissions only.';
$_lang['policy_object_desc'] = 'An Object policy with all permissions.';
$_lang['policy_element_desc'] = 'MODX Element policy with all attributes.';
$_lang['policy_content_editor_desc'] = 'Context administration policy with limited, content-editing related Permissions, but no publishing.';
$_lang['policy_media_source_admin_desc'] = 'Media Source administration policy.';
$_lang['policy_media_source_user_desc'] = 'Media Source user policy, with basic viewing and using - but no editing - of Media Sources.';
$_lang['policy_developer_desc'] = 'Context administration policy with most Permissions except Administrator and Security functions.';
$_lang['policy_context_desc'] = 'A standard Context policy that you can apply when creating Context ACLs for basic read/write and view_unpublished access within a Context.';
$_lang['policy_hidden_namespace_desc'] = 'Hidden Namespace policy, will not show Namespace in lists.';
$_lang['policy_count'] = 'Policy Count';
