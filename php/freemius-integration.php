<?php
/**
* PHP version 7.3.3
*
* @category   Element_Selectors
* @package    ESJP
* @author     WP Dev Powers <info@wpdevpowers.com>
* @copyright  2018 WP Dev Powers | ACF PRO files are not to be used or distributed outside of the premium theme/plugin.
* @license    http://www.php.net/license/3_01.txt  PHP License 3.01
* @version    1.0
* @link       http://wpdevpowers.com
*/
// Start -------------------------------- ENCODING -------------------------------------
if (!function_exists('esjp_fs')) {
function esjp_fs()
{
global  $esjp_fs ;
if ( ! isset( $esjp_fs ) ) {
require_once ESJP_PLUGIN_DIR . '/freemius/start.php';
$esjp_fs = fs_dynamic_init( array(
'id'                  => '3423',
'slug'                => 'wp-dev-powers-element-selector-jquery-powers',
'premium_slug'        => 'wp-dev-powers-element-selector-jquery-powers-pro',
'type'                => 'plugin',
'public_key'          => 'pk_0a46001047b21a79ab45ed4d2c234',
'is_premium'          => true,
'premium_suffix'      => 'Pro',
'has_premium_version' => true,
'has_addons'          => false,
'has_paid_plans'      => true,
'has_affiliation'     => 'customers',
'menu'                => array(
'slug'           => 'esjp_fs_top_level_admin_menu',
),
) );
}
return $esjp_fs;
}
esjp_fs();
do_action('esjp_fs_loaded');
}
function esjp_fs_custom_connect_message_on_update(
$user_first_name,
$plugin_title,
$user_login,
$site_link,
$freemius_link
) {
return sprintf(
__('Hey %1$s') . ',<br>' . __('Please help us improve %2$s! If you opt-in, some data about your usage of %2$s will be sent to %5$s. If you skip this, that\'s okay! %2$s will still work just fine.', 'element-selector-jquery-powers'),
$user_first_name,
'<b>' . $plugin_title . '</b>',
'<b>' . $user_login . '</b>',
$site_link,
$freemius_link
);
}
esjp_fs()->add_filter(
'connect_message_on_update',
'esjp_fs_custom_connect_message_on_update',
10,
6
);
if (esjp_fs()->is_not_paying()) {
add_action('admin_notices', 'esjp_fs_Marketing_Content');
function esjp_fs_Marketing_Content()
{
$esjp_fs_pro_folder = ESJP_PLUGIN_DIR . '/pro';
if (!file_exists($esjp_fs_pro_folder)) {
echo  '<div data-id="premium_activated" data-manager-id="element-selector-jquery-powers" class="updated success fs-notice fs-sticky fs-has-title"><label class="fs-plugin-title">Element Selector jQuery Powers</label><div class="fs-close"><i class="dashicons dashicons-no" title="Dismiss"></i> <span>Dismiss</span></div><div class="fs-notice-body"><b style="color: black;">Gain More Powers!</b>: <a href="http://wpdevpowers.com/pro-pricing/element-selector-jquery-powers/" target="blank">Click here to upgrade to Pro</a>.</div></div>' ;
}
}
}
if (esjp_fs()->is_not_paying()) {
add_action('admin_notices', 'esjp_fs_Activate_License_Notice');
function esjp_fs_Activate_License_Notice()
{
$esjp_fs_pro_folder = ESJP_PLUGIN_DIR . '/pro';
if (file_exists($esjp_fs_pro_folder)) {
echo  '<div data-id="Activate_License_Notice" data-manager-id="element-selector-jquery-powers" class="updated success fs-notice fs-sticky fs-has-title"><label class="fs-plugin-title">Element Selector jQuery Powers Pro</label><div class="fs-close"><i class="dashicons dashicons-no" title="Dismiss"></i> <span>Dismiss</span></div><div class="fs-notice-body"><b style="color: black;">Pro Version Successfully Installed!</b> All you need to do now is <a href="/wp-admin/admin.php?page=esjp_fs_top_level_admin_menu-account">activate it here</a>.</div></div>' ;
}
}
}
// End -------------------------------- ENCODING -------------------------------------
?>