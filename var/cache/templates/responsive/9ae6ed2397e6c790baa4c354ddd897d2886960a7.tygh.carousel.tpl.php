<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 17:49:21
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/addons/banners/blocks/carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71479916255ca0b71d6a405-79066367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae6ed2397e6c790baa4c354ddd897d2886960a7' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/addons/banners/blocks/carousel.tpl',
      1 => 1439304463,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '71479916255ca0b71d6a405-79066367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'banner' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca0b71f00b67_55293960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca0b71f00b67_55293960')) {function content_55ca0b71f00b67_55293960($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('prev_page','next','prev_page','next'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel">
        <?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
            <div class="ty-banner__image-item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G"&&$_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?><a class="banner__link" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image"), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php } ?>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay']*(($tmp = @1000)===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/carousel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/carousel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel">
        <?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
            <div class="ty-banner__image-item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G"&&$_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?><a class="banner__link" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>><?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image"), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url']!='') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php } ?>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['speed'])===null||$tmp==='' ? 400 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['delay']*(($tmp = @1000)===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation']=="A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php }?><?php }} ?>
