<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:47:55
         compiled from "/Users/joshteam/marketplace/design/backend/templates/common/tabsbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49050086255ca0b1b7d2c87-64692821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ec30b9919af893a244ba58bcd363ba8483963b' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/common/tabsbox.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49050086255ca0b1b7d2c87-64692821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_tab' => 0,
    'content' => 0,
    'navigation' => 0,
    'track' => 0,
    'tabs_section' => 0,
    'tab' => 0,
    'key' => 0,
    'empty_tab_ids' => 0,
    'id_suffix' => 0,
    'active_tab_extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b1b88a6a3_39898304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b1b88a6a3_39898304')) {function content_55ca0b1b88a6a3_39898304($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_empty_tabs')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/modifier.empty_tabs.php';
if (!is_callable('smarty_modifier_in_array')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/modifier.in_array.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_REQUEST['selected_section'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["empty_tab_ids"] = new Smarty_variable(smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>
<div class="cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> tabs">
    <ul class="nav nav-tabs">
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
        <?php if ((!$_smarty_tpl->tpl_vars['tabs_section']->value||$_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section'])&&($_smarty_tpl->tpl_vars['tab']->value['hidden']||!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value))) {?>
        <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['hidden']=="Y") {?>hidden <?php }
if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?>cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?>cm-js cm-ajax<?php }
if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }
if ($_smarty_tpl->tpl_vars['active_tab_extra']->value&&($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value)) {?> extra-tab<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {
echo $_smarty_tpl->tpl_vars['active_tab_extra']->value;
}?>
            <a <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php }?>
    <?php } ?>
    </ul>
</div>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?><?php }} ?>
