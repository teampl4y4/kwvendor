<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:55:12
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/views/companies/components/sorting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68377197655ca0cd0dc5068-82961850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890e0bf3f931d47b2b422593aef9d0985d7b2b13' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/views/companies/components/sorting.tpl',
      1 => 1439304461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '68377197655ca0cd0dc5068-82961850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'id' => 0,
    'search' => 0,
    'sorting' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0cd0e86959_41559183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0cd0e86959_41559183')) {function content_55ca0cd0e86959_41559183($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["curl"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["sorting"] = new Smarty_variable(fn_get_companies_sorting(''), null, 0);?>
<?php $_smarty_tpl->tpl_vars["sorting_orders"] = new Smarty_variable(fn_get_companies_sorting_orders(''), null, 0);?>
<?php $_smarty_tpl->tpl_vars["pagination_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev']=="asc") {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
        <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');?>
<i class="ty-icon-up-dir"></i></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php } else { ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
        <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');?>
<i class="ty-icon-down-dir"></i></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<div>
<?php echo $_smarty_tpl->getSubTemplate ("common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_pref'=>"company-"), 0);?>

</div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/components/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/components/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["curl"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["sorting"] = new Smarty_variable(fn_get_companies_sorting(''), null, 0);?>
<?php $_smarty_tpl->tpl_vars["sorting_orders"] = new Smarty_variable(fn_get_companies_sorting_orders(''), null, 0);?>
<?php $_smarty_tpl->tpl_vars["pagination_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev']=="asc") {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
        <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');?>
<i class="ty-icon-up-dir"></i></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php } else { ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
        <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');?>
<i class="ty-icon-down-dir"></i></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<div>
<?php echo $_smarty_tpl->getSubTemplate ("common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_pref'=>"company-"), 0);?>

</div>
</div><?php }?><?php }} ?>
