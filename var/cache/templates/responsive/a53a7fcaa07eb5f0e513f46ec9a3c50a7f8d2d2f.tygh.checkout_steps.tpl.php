<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 18:15:29
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/views/checkout/components/checkout_steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85631706255ca1191c5f403-43408471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53a7fcaa07eb5f0e513f46ec9a3c50a7f8d2d2f' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/views/checkout/components/checkout_steps.tpl',
      1 => 1439304461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '85631706255ca1191c5f403-43408471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'display_steps' => 0,
    'cart' => 0,
    'number_of_step' => 0,
    'completed_steps' => 0,
    'edit' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca1191d8b837_64875317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca1191d8b837_64875317')) {function content_55ca1191d8b837_64875317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('continue','continue','continue','continue','continue','continue'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable("cm-ajax", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
    <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable(0, null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_one']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"one",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_two']) {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_two", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"two",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_three']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"three",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_four']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"four",'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

    <?php }?>

<!--checkout_steps--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_steps.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_steps.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable("cm-ajax", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
    <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable(0, null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_one']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"one",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_two']) {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_two", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"two",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_three']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"three",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_four']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"four",'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

    <?php }?>

<!--checkout_steps--></div><?php }?><?php }} ?>
