<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 18:38:19
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/addons/tags/blocks/product_tabs/tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102440790955ca16eb0b50a0-41337479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc34f12cfcb13a4887a41c2d9af8aa6ee17028a' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/addons/tags/blocks/product_tabs/tags.tpl',
      1 => 1439304470,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102440790955ca16eb0b50a0-41337479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca16eb1240b1_11467886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca16eb1240b1_11467886')) {function content_55ca16eb1240b1_11467886($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value,'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>"P"), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/blocks/product_tabs/tags.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/blocks/product_tabs/tags.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value,'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>"P"), 0);?>

<?php }
}?><?php }} ?>
