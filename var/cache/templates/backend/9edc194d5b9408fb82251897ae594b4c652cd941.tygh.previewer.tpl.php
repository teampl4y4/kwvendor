<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:59:23
         compiled from "/Users/joshteam/marketplace/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50760508655ca0dcb965698-41682819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edc194d5b9408fb82251897ae594b4c652cd941' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/common/previewer.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50760508655ca0dcb965698-41682819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0dcb9713e4_56993947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0dcb9713e4_56993947')) {function content_55ca0dcb9713e4_56993947($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
