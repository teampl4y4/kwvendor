<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:49:17
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/addons/form_builder/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121310753855ca0b6d19e557-15046889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1944146a2d69e40847ca9776d19e2b46cb5fd6' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/addons/form_builder/hooks/index/styles.post.tpl',
      1 => 1439304465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '121310753855ca0b6d19e557-15046889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b6d1dea33_74261948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b6d1dea33_74261948')) {function content_55ca0b6d1dea33_74261948($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/form_builder/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/form_builder/responsive.less"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/form_builder/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/form_builder/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/form_builder/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/form_builder/responsive.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
