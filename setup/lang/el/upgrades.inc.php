<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Added new `[[+column]]` column to [[+table]].';
$_lang['add_index'] = 'Added new index on `[[+index]]` for table [[+table]].';
$_lang['alter_column'] = 'Modified column `[[+column]]` in table [[+table]].';
$_lang['add_moduser_classkey'] = 'Προσθήκη πεδίου class_key για υποστήριξη παραγώγων modUser.';
$_lang['added_cachepwd'] = 'Προσθήκη του πεδίου cachepwd που έλειπε από τις παλαιότερες εκδόσεις του Revolution.';
$_lang['added_content_ft_idx'] = 'Προσθήκη ευρετηρίου κειμένου `content_ft_idx` στα πεδία `pagetitle`, `longtitle`, `description`, `introtext` και `content`.';
$_lang['allow_null_properties'] = 'Πλέον επιτρέπεται κενή τιμή για το `[[+class]]`.`properties`.';
$_lang['alter_activeuser_action'] = 'Το πεδίο `action` του modActiveUser τροποποιήθηκε για να επιτρέπει ονόματα περισσότερων χαρακτήρων για τις ενέργειες.';
$_lang['alter_usermessage_messageread'] = 'Αλλαγή του πεδίου `messageread` του modUserMessage σε `read`.';
$_lang['alter_usermessage_postdate'] = 'Αλλαγή του πεδίου `postdate` του modUserMessage από INT σε DATETIME και με όνομα `date_sent`.';
$_lang['alter_usermessage_subject'] = 'Αλλαγή του πεδίου `subject` του modUserMessage από VARCHAR(60) σε VARCHAR(255).';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'Removed connector context ACLs.';
$_lang['connector_acls_not_removed'] = 'Could not remove connector context ACLs.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Could not remove connector context.';
$_lang['data_remove_error'] = 'Error removing data for class `[[+class]]`.';
$_lang['data_remove_success'] = 'Successfully removed data from table for class `[[+class]]`.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'Changed modLexiconEntry `createdon` to allow NULL.';
$_lang['lexiconentry_focus_alter'] = 'Changed modLexiconEntry `focus` from VARCHAR(100) to INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Updated modLexiconEntry `focus` column data from string to new int foreign key from modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'Added modLexiconFocus `id` column.';
$_lang['lexiconfocus_add_pk'] = 'Added modLexiconFocus PRIMARY KEY to `id` column.';
$_lang['lexiconfocus_alter_pk'] = 'Changed modLexiconFocus `name` from PRIMARY KEY to UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'Dropped modLexiconFocus PRIMARY KEY.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'Renamed table `[[+old]]` to `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Removed full-text index `[[+index]]`.';
$_lang['systemsetting_xtype_fix'] = 'Successfully fixed xtypes for modSystemSettings.';
$_lang['transportpackage_manifest_text'] = 'Modified column `manifest` to TEXT from MEDIUMTEXT on `[[+class]]`.';
$_lang['update_closure_table'] = 'Updating closure table data for class `[[+class]]`.';
$_lang['update_table_column_data'] = 'Updated data in column [[+column]] of table [[+table]] ( [[+class]] )';
$_lang['iso_country_code_converted'] = 'Οι χώρες στο προφίλ των χρηστών μετατράπηκαν σε κωδικούς ISO με επιτυχία.';
$_lang['legacy_cleanup_complete'] = 'Ο καθαρισμός του παλιού αρχείου έχει ολοκληρωθεί.';
$_lang['legacy_cleanup_count'] = 'Διαγράφηκαν τα αρχεία: [[+files]] και οι φακέλοι: [[+folders]].';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Παρουσιάστηκε σφάλμα κατά την κατάργηση του αρχείου flash.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'Η Ρύθμιση Συστήματος `[[+key]]` αφαιρέθηκε.';
$_lang['system_setting_cleanup_failed'] = 'Η Ρύθμιση Συστήματος `[[+key]]` δεν μπόρεσε να αφαιρεθεί.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'Η Ρύθμιση Συστήματος `[[+key]]` ενημερώθηκε.';
$_lang['system_setting_update_failed'] = 'Η Ρύθμιση Συστήματος `[[+key]]` δεν μπόρεσε να ενημερωθεί.';
$_lang['system_setting_rename_key_success'] = 'Το System Setting key μετονομάστηκε με επιτυχία από το `[[+old_key]]` σε `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Αποτυχία μετονομασίας του System Setting key από `[[+old_key]]` σε `[[+new_key]]`.';
