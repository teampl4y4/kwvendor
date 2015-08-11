<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:48:55
         compiled from "/Users/joshteam/marketplace/design/backend/mail/templates/common/letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44040741755ca0b5768fac9-15157895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67cbbe9717ee4118fdb60815eb5383d046fe99f' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/mail/templates/common/letter_footer.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '44040741755ca0b5768fac9-15157895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b5769a5c4_31228316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b5769a5c4_31228316')) {function content_55ca0b5769a5c4_31228316($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('admin_text_letter_footer'));
?>
<p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php }} ?>
