<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:49:20
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/addons/call_requests/blocks/call_request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69542469155ca0b70898cb3-41985466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f37a18215a31cec6d62e3b4e9914b48cbe3f24a' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/addons/call_requests/blocks/call_request.tpl',
      1 => 1439304464,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69542469155ca0b70898cb3-41985466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'phone_number' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b708f0696_51483814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b708f0696_51483814')) {function content_55ca0b708f0696_51483814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('call_requests.request_call','call_requests.request_call'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</span></div>
    <div class="ty-cr-link"><?php echo $_smarty_tpl->getSubTemplate ("addons/call_requests/views/call_requests/components/popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>false,'link_text'=>__("call_requests.request_call")), 0);?>
</div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/blocks/call_request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/blocks/call_request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</span></div>
    <div class="ty-cr-link"><?php echo $_smarty_tpl->getSubTemplate ("addons/call_requests/views/call_requests/components/popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>false,'link_text'=>__("call_requests.request_call")), 0);?>
</div>
</div><?php }?><?php }} ?>
