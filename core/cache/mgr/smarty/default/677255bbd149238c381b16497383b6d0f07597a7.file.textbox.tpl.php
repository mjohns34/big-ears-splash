<?php /* Smarty version Smarty-3.0.4, created on 2015-09-17 07:39:08
         compiled from "/Applications/MAMP/htdocs/big-ears-splash/manager/templates/default/element/tv/renders/input/textbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121620990155fa51fce1c6f8-22970424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '677255bbd149238c381b16497383b6d0f07597a7' => 
    array (
      0 => '/Applications/MAMP/htdocs/big-ears-splash/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1439958290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121620990155fa51fce1c6f8-22970424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/big-ears-splash/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
"
	<?php echo $_smarty_tpl->getVariable('style')->value;?>

	tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
"
/>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxLength']) ? $_smarty_tpl->getVariable('params')->value['maxLength'] : null)){?>,maxLength: <?php echo (isset($_smarty_tpl->getVariable('params')->value['maxLength']) ? $_smarty_tpl->getVariable('params')->value['maxLength'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minLength']) ? $_smarty_tpl->getVariable('params')->value['minLength'] : null)){?>,minLength: <?php echo (isset($_smarty_tpl->getVariable('params')->value['minLength']) ? $_smarty_tpl->getVariable('params')->value['minLength'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['regex']) ? $_smarty_tpl->getVariable('params')->value['regex'] : null)){?>,regex: new RegExp('<?php echo (isset($_smarty_tpl->getVariable('params')->value['regex']) ? $_smarty_tpl->getVariable('params')->value['regex'] : null);?>
')<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['regexText']) ? $_smarty_tpl->getVariable('params')->value['regexText'] : null)){?>,regexText: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['regexText']) ? $_smarty_tpl->getVariable('params')->value['regexText'] : null);?>
'<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
</script>
