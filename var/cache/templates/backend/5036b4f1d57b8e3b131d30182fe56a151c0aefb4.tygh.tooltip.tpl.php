<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:48:19
         compiled from "/Users/joshteam/marketplace/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26344813155ca0b33d22228-76899201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5036b4f1d57b8e3b131d30182fe56a151c0aefb4' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/common/tooltip.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26344813155ca0b33d22228-76899201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b33d31ff4_57751563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b33d31ff4_57751563')) {function content_55ca0b33d31ff4_57751563($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
