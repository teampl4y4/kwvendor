<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 18:26:56
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/blocks/product_list_templates/products_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11134422855ca144048c760-42675860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ceb117605fc0be8f76d71235342e5168b2ac51' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/blocks/product_list_templates/products_multicolumns.tpl',
      1 => 1439304461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11134422855ca144048c760-42675860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca14404fe6d8_38566956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca14404fe6d8_38566956')) {function content_55ca14404fe6d8_38566956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_trunc_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? false : $tmp),'but_role'=>"action",'show_discount_label'=>true), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_trunc_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? false : $tmp),'but_role'=>"action",'show_discount_label'=>true), 0);
}?><?php }} ?>
