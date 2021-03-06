<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'update' || $mode == 'add') {
    $providers_list = fn_hybrid_auth_get_providers_list();
    Tygh::$app['view']->assign('providers_list', $providers_list);
    $link_providers = array();
    if (!empty($auth['user_id'])) {
        $link_providers = fn_hybrid_auth_get_link_provider($auth['user_id']);
    }
    Tygh::$app['view']->assign('link_providers', $link_providers);

} elseif ($mode == 'unlink_provider') {

    if (defined('AJAX_REQUEST')) {
        if (!empty($auth['user_id']) && !empty($_REQUEST['provider'])) {
            fn_hybrid_auth_get_unlink_provider($auth['user_id'], $_REQUEST['provider']);
        }

        $providers_list = fn_hybrid_auth_get_providers_list();
        Tygh::$app['view']->assign('providers_list', $providers_list);

        if (!empty($auth['user_id'])) {
            $link_providers = fn_hybrid_auth_get_link_provider($auth['user_id']);
            Tygh::$app['view']->assign('link_providers', $link_providers);
        }

        Tygh::$app['view']->display('views/profiles/update.tpl');
    }

    exit;

} elseif ($mode == 'link_provider') {

    $status = fn_hybrid_auth_process('link_provider_profile', $redirect_url);

    if ($status == HYBRID_AUTH_LOADING) {
        Tygh::$app['view']->display('addons/hybrid_auth/views/auth/loading.tpl');

    } else {
        Tygh::$app['view']->assign('redirect_url', fn_url($redirect_url));
        Tygh::$app['view']->display('addons/hybrid_auth/views/auth/login_error.tpl');
    }

    exit;
}
