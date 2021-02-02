<?php /* Smarty version 2.6.11, created on 2021-02-01 09:20:15
         compiled from modules/Emails/templates/addressBook.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Emails/templates/addressBook.tpl', 38, false),)), $this); ?>
<div style='padding:5px;'>
    <button class="button" onclick="SUGAR.email2.addressBook.selectContactsDialogue();" id="selectContacts"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_ENTRIES'), $this);?>
</button>
</div>
<div id="contactsFilterDiv" class="addressbookSearch">
<span> <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ADDRESS_BOOK_FILTER']; ?>
:&nbsp;<input size="10" type="text" class='input' id="contactsFilter" onkeyup="SUGAR.email2.addressBook.filter(this);">
	       <button class="button" onclick="SUGAR.email2.addressBook.clear();"> 
	       <?php echo $this->_tpl_vars['app_strings']['LBL_CLEAR_BUTTON_LABEL']; ?>
 </button>
</span>
</div>
<div id="contacts"></div>