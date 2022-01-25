<?php
/**
 * Access Policy English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['template_group'] = 'Template Group';
$_lang['active_of'] = '[[+active]] of [[+total]]';
$_lang['active_permissions'] = 'Active Permissions';
$_lang['no_policy_option'] = ' (no policy) ';
$_lang['permission'] = 'Permission';
$_lang['permission_err_ae'] = 'Permission already exists for this policy.';
$_lang['permission_err_nf'] = 'Permission not found.';
$_lang['permission_err_ns'] = 'Permission not specified.';
$_lang['permission_err_remove'] = 'An error occurred while trying to delete this permission.';
$_lang['permission_err_save'] = 'An error occurred while trying to save this permission.';
$_lang['permission_remove_confirm'] = 'Are you sure you want to delete this permission?';
$_lang['permissions'] = 'Δικαιώματα';
$_lang['permissions_desc'] = 'Here you can define specific permissions that this policy will contain. All user groups with this policy will inherit these permissions.';
$_lang['policies'] = 'Access Policies';
$_lang['policy'] = 'Access Policy';
$_lang['policy_data'] = 'Policy Data';
$_lang['policy_desc'] = 'Access policies are generic policies that restrict or enable certain actions with MODX.';
$_lang['policy_desc_name'] = 'The name of the Access Policy';
$_lang['policy_desc_description'] = 'Optional. A short description of the Access Policy. Also you might use lexicon keys here.';
$_lang['policy_desc_template'] = 'The Policy Template used for this Policy. Policies get their Permission lists from their Template.';
$_lang['policy_desc_lexicon'] = 'Optional. The Lexicon Topic that this Policy uses to translate the Permissions it owns.';
$_lang['policy_duplicate_confirm'] = 'Are you sure you want to duplicate this policy and all of its data?';
$_lang['policy_err_ae'] = 'A Policy already exists with the name `[[+name]]`. Please select another name.';
$_lang['policy_err_nf'] = 'Policy not found.';
$_lang['policy_err_ns'] = 'Policy not specified.';
$_lang['policy_err_remove'] = 'An error occurred while trying to delete the Policy.';
$_lang['policy_err_save'] = 'An error occurred while trying to save the Policy.';
$_lang['policy_import_msg'] = 'Select an XML file to import a Policy from. It must be in the correct XML Policy format.';
$_lang['policy_management'] = 'Access Policies';
$_lang['policy_management_msg'] = 'Access Policies manage how MODX handles permissions for specified actions.';
$_lang['policy_name'] = 'Policy Name';
$_lang['policy_property_create'] = 'Create Access Policy Property';
$_lang['policy_property_new'] = 'Create Policy Property';
$_lang['policy_property_remove'] = 'Delete Access Policy Property';
$_lang['policy_property_specify_name'] = 'Please specify a policy property name:';
$_lang['policy_remove_confirm'] = 'Are you sure you want to delete this Access Policy?';
$_lang['policy_remove_multiple_confirm'] = 'Are you sure you want to delete these Access Policies? This is irreversible.';
$_lang['policy_template'] = 'Policy Template';
$_lang['policy_template_desc'] = 'A Policy Template defines which Permissions will show up in the Permissions grid when editing a specific Policy. You can add or remove specific Permissions from this template below. Note that removing a Permission from a Template will remove it from any Policies that use this Template.';
$_lang['policy_template_desc_name'] = 'The name of the Access Policy Template';
$_lang['policy_template_desc_description'] = 'Optional. A short description of the Access Policy Template. Also you might use lexicon keys here.';
$_lang['policy_template_lexicon'] = 'Lexicon Topic';
$_lang['policy_template_desc_lexicon'] = 'Optional. The Lexicon Topic that this Policy Template uses to translate the Permissions it owns.';
$_lang['policy_template_desc_template_group'] = 'The Policy Template Group to use. This is used when selecting Policies from a dropdown menu; usually they are filtered by template group. Select an appropriate group for your Policy Template.';
$_lang['policy_template_duplicate_confirm'] = 'Are you sure you want to duplicate this Policy Template?';
$_lang['policy_template_err_ae'] = 'A Policy Template already exists with the name `[[+name]]`. Please select another name.';
$_lang['policy_template_err_nf'] = 'Policy Template not found.';
$_lang['policy_template_err_ns'] = 'Policy Template not specified.';
$_lang['policy_template_err_remove'] = 'An error occurred while trying to delete the Policy Template.';
$_lang['policy_template_err_save'] = 'An error occurred while trying to save the Policy Template.';
$_lang['policy_template_import_msg'] = 'Select an XML file to import a Policy Template from. It must be in the correct XML Policy Template format.';
$_lang['policy_template_remove_confirm'] = 'Are you sure you want to delete this Policy Template? It will delete all Policies attached to this Template as well - this could break your MODX installation if any active Policies are attached to this Template.';
$_lang['policy_template_remove_confirm_in_use'] = 'Are you sure you want to delete this Policy Template? It will delete all Policies attached to this Template as well - this could break your MODX installation if any active Policies are attached to this Template.<br><br><strong>This template is used by existing Policies ([[+count]] in total). Are you sure you want to delete this template and all attached policies?</strong>';
$_lang['policy_template_remove_multiple_confirm'] = 'Are you sure you want to delete these Policy Templates? It will delete all Policies attached to these Templates as well - this could break your MODX installation if any active Policies are attached to these Templates.';
$_lang['policy_template_remove_multiple_confirm_in_use'] = 'Are you sure you want to delete these Policy Templates? It will delete all Policies attached to these Templates as well - this could break your MODX installation if any active Policies are attached to these Templates.<br><br><strong>Some of selected templates are still used by existing Policies ([[+count]] in total). Are you sure you want to delete these template and all attached policies?</strong>';
$_lang['policy_templates'] = 'Policy Templates';
$_lang['policy_templates.intro_msg'] = 'This is a list of Policy Templates which define lists of Permissions that are checked or unchecked in specific Policies.';
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
