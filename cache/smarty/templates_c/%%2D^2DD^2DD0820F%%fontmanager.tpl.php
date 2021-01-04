<?php /* Smarty version 2.6.11, created on 2021-01-03 09:37:01
         compiled from modules/Configurator/tpls/fontmanager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Configurator/tpls/fontmanager.tpl', 41, false),array('function', 'sugar_getimagepath', 'modules/Configurator/tpls/fontmanager.tpl', 79, false),)), $this); ?>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/yui/build/paginator/paginator-min.js'), $this);?>
'></script>
<?php echo '
<style type="text/css">
    .yui-pg-container {
        background: none;
    }
</style>
'; ?>

<p>
<?php echo $this->_tpl_vars['MODULE_TITLE']; ?>

</p>
<form enctype="multipart/form-data" name="fontmanager" method="POST" action="index.php" id="fontmanager">
<input type="hidden" name="module" value="Configurator">
<input type="hidden" name="action" value="FontManager">
<input type="hidden" name="action_type" value="">
<input type="hidden" name="filename" value="">
<input type="hidden" name='return_action' value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
<span class='error'><?php echo $this->_tpl_vars['error']; ?>
</span>
<br>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td align="left">
            <input title="<?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
" accessKey="" class="button" type="button" name="gobackbutton" value="  <?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
  " id="gobackbutton">&nbsp;
            <input title="<?php echo $this->_tpl_vars['MOD']['LBL_ADD_FONT']; ?>
" accessKey="" class="button" type="button" name="addFontbutton" value="  <?php echo $this->_tpl_vars['MOD']['LBL_ADD_FONT']; ?>
  " id="addFontbutton">
        </td>
    </tr>
</table>

<br>
<div id="YuiListMarkup"></div>
<br>

</form>
<?php echo '
<script type="text/javascript">
var removeFormatter = function (el, oRecord, oColumn, oData) {
    if(oRecord._oData.type != "';  echo $this->_tpl_vars['MOD']['LBL_FONT_TYPE_CORE'];  echo '" && oRecord._oData.fontpath != "';  echo $this->_tpl_vars['K_PATH_FONTS'];  echo '"){
        el.innerHTML = \'<a href="#" name="deleteButton" onclick="return false;"><img border="0" align="absmiddle" alt="delete" src="';  echo smarty_function_sugar_getimagepath(array('file' => "delete_inline.gif"), $this); echo '"/>'; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_REMOVE'];  echo '<\\/a>\';
    }
};
YAHOO.util.Event.onDOMReady(function() {
'; ?>

	var fontColumnDefs = <?php echo $this->_tpl_vars['COLUMNDEFS']; ?>
;
    var fontData = <?php echo $this->_tpl_vars['DATASOURCE']; ?>
;
<?php echo '
	var fontDataSource = new YAHOO.util.DataSource(fontData);
	fontDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
    fontDataSource.responseSchema = ';  echo $this->_tpl_vars['RESPONSESCHEMA'];  echo ';
    var oConfigs = {
        paginator: new YAHOO.widget.Paginator({
            rowsPerPage:15
        })
    };
    var fontDataTable = new YAHOO.widget.DataTable("YuiListMarkup", fontColumnDefs, fontDataSource, oConfigs);

    fontDataTable.subscribe("linkClickEvent", function(oArgs){
        if(oArgs.target.name == "deleteButton"){
            if(confirm(\'';  echo $this->_tpl_vars['MOD']['LBL_JS_CONFIRM_DELETE_FONT'];  echo '\')){
            	   document.getElementById("fontmanager").action.value = "deleteFont";
            	   document.getElementById("fontmanager").filename.value = this.getRecord(oArgs.target)._oData.filename;
            	   document.getElementById("fontmanager").submit();
            }
        }
    });
    
    document.getElementById(\'gobackbutton\').onclick=function(){
        if(document.getElementById("fontmanager").return_action.value != ""){
        	document.location.href=\'index.php?module=Configurator&action=\' + document.getElementById("fontmanager").return_action.value;
        }else{
        	document.location.href=\'index.php?module=Configurator&action=SugarpdfSettings\';
        }
    };
    document.getElementById(\'addFontbutton\').onclick=function(){
    	document.location.href=\'index.php?module=Configurator&action=addFontView\';
    };
    
});
'; ?>

</script>