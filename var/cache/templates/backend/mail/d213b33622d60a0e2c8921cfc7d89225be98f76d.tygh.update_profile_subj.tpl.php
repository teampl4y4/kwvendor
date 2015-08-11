<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:48:55
         compiled from "/Users/joshteam/marketplace/design/backend/mail/templates/profiles/update_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201305960955ca0b5745b779-27232114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd213b33622d60a0e2c8921cfc7d89225be98f76d' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/mail/templates/profiles/update_profile_subj.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201305960955ca0b5745b779-27232114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b574a9c62_97204030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b574a9c62_97204030')) {function content_55ca0b574a9c62_97204030($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('update_profile_notification'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("update_profile_notification");?>
<?php }} ?>
