<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:48:55
         compiled from "/Users/joshteam/marketplace/design/backend/mail/templates/profiles/update_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16271429155ca0b574c7667-76111229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e98db138e00e31e0cd849fd82500252aaeff04a' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/mail/templates/profiles/update_profile.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16271429155ca0b574c7667-76111229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b574fc6d7_13629295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b574fc6d7_13629295')) {function content_55ca0b574fc6d7_13629295($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('dear','update_profile_notification_header'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("dear");?>
 <?php if ($_smarty_tpl->tpl_vars['user_data']->value['firstname']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(mb_strtolower(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_data']->value['user_type']), 'UTF-8'), ENT_QUOTES, 'UTF-8');
}?>,<br><br>

<?php echo $_smarty_tpl->__("update_profile_notification_header");?>
<br><br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:update_profile")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:update_profile"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:update_profile"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("profiles/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
