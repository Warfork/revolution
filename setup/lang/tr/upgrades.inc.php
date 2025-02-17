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
$_lang['add_moduser_classkey'] = 'Moduser türevlerini desteklemek için class_key alanı eklendi.';
$_lang['added_cachepwd'] = 'Cachepwd alanı eklendi erken devrim bültenleri eksik.';
$_lang['added_content_ft_idx'] = 'Yeni `content_ft_idx`, `uzun metinli`, `açıklama`, `ıntrotext`, `içerik` alanlarında tam metin dizini eklendi.';
$_lang['allow_null_properties'] = 'Null için izin ver \' [[+class]] \'.\' özellik \'.';
$_lang['alter_activeuser_action'] = 'ModActiveUser `eylem` alanı daha uzun eylem etiketleri izin vermek için değiştirildi.';
$_lang['alter_usermessage_messageread'] = 'ModUserMessage `messageread` alanı `okuma`olarak değiştirildi.';
$_lang['alter_usermessage_postdate'] = 'ModUserMessage `postdate` alan bir int için bir DATETİME ve `date_sent`adını değiştirdi.';
$_lang['alter_usermessage_subject'] = 'ModUserMessage `konu` alanından VARCHAR(60) VARCHAR(255) için değiştirildi.';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'Bağlayıcı içeriği kaldırıldı ACL.';
$_lang['connector_acls_not_removed'] = 'Bağlayıcı içerik ACL kaldırılması.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Bağlayıcı içerik silinemedi.';
$_lang['data_remove_error'] = '`[[+class]]` sınıfından veri silinirken hata oluştu.';
$_lang['data_remove_success'] = '`[[+class]]` sınıfından veri başarıyla silindi.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'ModLexiconEntry `createdon` NULL izin vermek için değiştirildi.';
$_lang['lexiconentry_focus_alter'] = 'ModLexiconEntry `odak` VARCHAR(100) İNT(10) için değiştirildi.';
$_lang['lexiconentry_focus_alter_int'] = 'Güncelleştirilmiş modLexiconEntry` odak \' sütun verileri dizeden yeni int yabancı anahtar modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'ModLexiconFocus `id` sütunu eklendi.';
$_lang['lexiconfocus_add_pk'] = '`Id` sütununa modLexiconFocus PRIMARY KEY eklendi.';
$_lang['lexiconfocus_alter_pk'] = 'ModLexiconFocus `isim` BIRINCIL ANAHTARdan BENZERSIZ ANAHTAR değiştirildi';
$_lang['lexiconfocus_drop_pk'] = 'Modexiconfocus BIRINCIL ANAHTAR düştü.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'Yeniden adlandırılmış tablo \'[[+old]]\' için \'[[+new]]\'.';
$_lang['remove_fulltext_index'] = 'Kaldırılan tam metin dizini \'[[+index]]\'.';
$_lang['systemsetting_xtype_fix'] = 'ModSystemSettings için xtypes başarıyla düzeltildi.';
$_lang['transportpackage_manifest_text'] = 'Değiştirilmiş sütun `bildirim` METINden MEDİUMTEXT `[[+class]]\'.';
$_lang['update_closure_table'] = 'Sınıf için kapanış tablosu verileri güncelleştiriliyor \'[[+class]]\'.';
$_lang['update_table_column_data'] = 'Sütundaki güncellenmiş veriler [[+column]] masada [[+table]] ( [[+class]] )';
$_lang['iso_country_code_converted'] = 'Kullanıcı profili ülke adlarını ISO kodlarına başarıyla dönüştürdü.';
$_lang['legacy_cleanup_complete'] = 'Eski dosya temizlenmesi tamamlandı.';
$_lang['legacy_cleanup_count'] = '[[+files]] dosyası(dosyaları) ve [[+folders]] klasörü(klasörleri) kaldırıldı.';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Error removing the copy to clipboard flash file.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'System Setting `[[+key]]` removed.';
$_lang['system_setting_cleanup_failed'] = 'System Setting `[[+key]]` could not be removed.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'System Setting `[[+key]]` updated.';
$_lang['system_setting_update_failed'] = 'System Setting `[[+key]]` could not be updated.';
$_lang['system_setting_rename_key_success'] = 'Successfully renamed the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Failed to rename the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
