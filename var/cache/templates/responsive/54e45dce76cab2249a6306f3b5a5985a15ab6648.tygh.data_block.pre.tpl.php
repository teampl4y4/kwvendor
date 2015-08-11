<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:55:13
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/addons/discussion/hooks/companies/data_block.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95245922855ca0cd13397b4-69064097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e45dce76cab2249a6306f3b5a5985a15ab6648' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/addons/discussion/hooks/companies/data_block.pre.tpl',
      1 => 1439304465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95245922855ca0cd13397b4-69064097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_rating' => 0,
    'company' => 0,
    'average_rating' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0cd13cbed1_08093576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0cd13cbed1_08093576')) {function content_55ca0cd13cbed1_08093576($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['company']->value['average_rating']) {?>
    <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['average_rating'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']) {?>
    <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'is_link'=>true), 0);?>

<?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/data_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/data_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['company']->value['average_rating']) {?>
    <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['average_rating'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']) {?>
    <?php $_smarty_tpl->tpl_vars['average_rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'is_link'=>true), 0);?>

<?php }?>

<?php }
}?><?php }} ?>
