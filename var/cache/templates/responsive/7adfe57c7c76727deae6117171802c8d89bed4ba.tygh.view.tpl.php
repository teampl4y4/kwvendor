<?php /* Smarty version Smarty-3.1.21, created on 2015-08-11 18:15:39
         compiled from "/Users/joshteam/marketplace/design/themes/responsive/templates/addons/discussion/views/discussion/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34877684055ca119bea42c3-14242513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adfe57c7c76727deae6117171802c8d89bed4ba' => 
    array (
      0 => '/Users/joshteam/marketplace/design/themes/responsive/templates/addons/discussion/views/discussion/view.tpl',
      1 => 1439304465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34877684055ca119bea42c3-14242513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'discussion' => 0,
    'container_id' => 0,
    'wrap' => 0,
    'title' => 0,
    'subheader' => 0,
    'post' => 0,
    'settings' => 0,
    'new_post_title' => 0,
    'obj_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ca119c164184_81392664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca119c164184_81392664')) {function content_55ca119c164184_81392664($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_cycle')) include '/Users/joshteam/marketplace/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/Users/joshteam/marketplace/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('write_review','new_post','no_posts_found','write_review','new_post','no_posts_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
<?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("write_review"), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("new_post"), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("content", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>

                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="ty-discussion-post__content ty-mb-l">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">

                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
                                <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</div>
                            <?php }?>

                            <span class="ty-caret-bottom"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                    
                        </div>
                        <span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B"&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
                            <div class="clearfix ty-discussion-post__rating">
                                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                            </div>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                <?php } ?>


                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>

            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if (strpos("CRB",$_smarty_tpl->tpl_vars['discussion']->value['type'])!==false&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {?>
            <div class="ty-discussion-post__buttons buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_new_post",'but_text'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'but_role'=>"submit",'but_target_id'=>"new_post_dialog_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0);?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['object_type']->value!="P") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('new_post_title'=>$_smarty_tpl->tpl_vars['new_post_title']->value), 0);?>

            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo Smarty::$_smarty_vars['capture']['content'];?>

        <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['object_type']->value=="P") {?>
<?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("write_review"), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['new_post_title'] = new Smarty_variable($_smarty_tpl->__("new_post"), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("content", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>

                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <div class="ty-discussion-post__content ty-mb-l">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">

                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
                                <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</div>
                            <?php }?>

                            <span class="ty-caret-bottom"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                    
                        </div>
                        <span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B"&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
                            <div class="clearfix ty-discussion-post__rating">
                                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                            </div>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                <?php } ?>


                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>

            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if (strpos("CRB",$_smarty_tpl->tpl_vars['discussion']->value['type'])!==false&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {?>
            <div class="ty-discussion-post__buttons buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_new_post",'but_text'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'but_role'=>"submit",'but_target_id'=>"new_post_dialog_".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-btn__primary",'but_rel'=>"nofollow"), 0);?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['object_type']->value!="P") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('new_post_title'=>$_smarty_tpl->tpl_vars['new_post_title']->value), 0);?>

            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['wrap']->value==true) {?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo Smarty::$_smarty_vars['capture']['content'];?>

        <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    </div>
<?php }
}?><?php }} ?>
