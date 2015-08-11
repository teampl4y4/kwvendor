<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 18:32:42
         compiled from "/Users/joshteam/marketplace/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61742371555ca159a8a87d7-56461481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8fa97d3b2c48e6a5321139795bb58a12a5807bf' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61742371555ca159a8a87d7-56461481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca159a8aeac1_32855543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca159a8aeac1_32855543')) {function content_55ca159a8aeac1_32855543($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
