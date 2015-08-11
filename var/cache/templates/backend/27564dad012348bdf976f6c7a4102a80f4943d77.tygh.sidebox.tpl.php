<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 18:10:39
         compiled from "/Users/joshteam/marketplace/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165768944055ca106fbf9689-06479493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27564dad012348bdf976f6c7a4102a80f4943d77' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/common/sidebox.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165768944055ca106fbf9689-06479493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca106fc14790_10828006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca106fc14790_10828006')) {function content_55ca106fc14790_10828006($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
