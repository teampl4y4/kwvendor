<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:48:41
         compiled from "/Users/joshteam/marketplace/design/backend/templates/common/last_viewed_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17692135955ca0b49ec5b99-43878146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ba2416d814ed2a42bc71060c56fb1355489151' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/common/last_viewed_items.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17692135955ca0b49ec5b99-43878146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'bc' => 0,
    'last_edited_items' => 0,
    'lnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b49f2f5e0_76877140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b49f2f5e0_76877140')) {function content_55ca0b49f2f5e0_76877140($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('no_items'));
?>
<div class="btn-group" id="last_edited_items">
    <a class="btn cm-back-link"><i class="exicon-back exicon-dark"></i></a>
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
    <ul class="dropdown-menu">
    <?php if (sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>=1) {?>
        <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?>
                <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } else { ?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
        <?php } ?>
        <li class="divider"></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['last_edited_items']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['lnk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_edited_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lnk']->key => $_smarty_tpl->tpl_vars['lnk']->value) {
$_smarty_tpl->tpl_vars['lnk']->_loop = true;
?>
            <li><a <?php if ($_smarty_tpl->tpl_vars['lnk']->value['icon']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lnk']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['lnk']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']),40), ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php } ?>
    <?php } else { ?>
        <li><a><?php echo $_smarty_tpl->__("no_items");?>
</a></li>
    <?php }?>
    </ul>
<!--last_edited_items--></div><?php }} ?>