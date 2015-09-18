<?php /* Smarty version Smarty-3.0.4, created on 2015-09-18 07:18:56
         compiled from "/Applications/MAMP/htdocs/big-ears-splash/manager/templates/default/element/tv/renders/input/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50518982155fb9ec07b7582-70595749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d33a94c894d1c0aaa5f4eeb1f3b1ea841b680b' => 
    array (
      0 => '/Applications/MAMP/htdocs/big-ears-splash/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1439958290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50518982155fb9ec07b7582-70595749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<select id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('urls')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
?>
	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null)==$_smarty_tpl->getVariable('selected')->value){?>selected="selected"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
</option>
<?php }} ?>
</select>
<input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text"
	value="<?php echo $_smarty_tpl->getVariable('tv')->value->get('processedValue');?>
"
	onchange="MODx.fireResourceFormChange();"
	class="textfield x-form-text x-form-field"
	style="width: 283px;"
/>
<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
	MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));

    var fld = MODx.load({
        xtype: 'combo'
        ,transform: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix'
        ,id: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix'
        ,triggerAction: 'all'
        ,width: 100
        ,allowBlank: false
        ,maxHeight: 300
        ,typeAhead: false
        ,forceSelection: false
        ,msgTarget: 'under'
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });

	fld.wrap.applyStyles({
		display: "inline-block"
	});
});
// ]]>
</script>