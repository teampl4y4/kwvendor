<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:48:07
         compiled from "/Users/joshteam/marketplace/design/backend/templates/common/share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161371825855ca0b2757d8b8-11472855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93f6cf9163ade7b6f18564e0137a8f2d7c90d8d' => 
    array (
      0 => '/Users/joshteam/marketplace/design/backend/templates/common/share.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161371825855ca0b2757d8b8-11472855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'url' => 0,
    'logos' => 0,
    'tweet_text' => 0,
    'product_name' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b2761b432_88901425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b2761b432_88901425')) {function content_55ca0b2761b432_88901425($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('share.congratulations_first_order','share.first_order_tweet','share.installation_tweet','share.installation_tweet'));
?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=="notification") {?>
    <?php echo $_smarty_tpl->__("share.congratulations_first_order");?>

<?php }?>

<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url('',"C"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['tweet_text'] = new Smarty_variable($_smarty_tpl->__("share.first_order_tweet",array("[product]"=>@constant('PRODUCT_NAME'))), null, 0);?>

<ul class="inline social-share">
    <li><a href="#" class="uibutton large confirm" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
&p[images][0]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['http_image_path'], ENT_QUOTES, 'UTF-8');?>
&p[title]=<?php if ($_smarty_tpl->tpl_vars['mode']->value=="notification") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['tweet_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("share.installation_tweet",array('[product_name]'=>$_smarty_tpl->tpl_vars['product_name']->value));
}?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"> Share on Facebook</a></li>
    <li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-text="<?php if ($_smarty_tpl->tpl_vars['mode']->value=="notification") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['tweet_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("share.installation_tweet",array('[product_name]'=>$_smarty_tpl->tpl_vars['product_name']->value));
}?>" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" data-via="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['twitter'], ENT_QUOTES, 'UTF-8');?>
" data-size="large">Tweet</a>
        
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </li>
</ul>
<?php }} ?>
