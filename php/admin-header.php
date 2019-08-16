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
$esjp_plugin_folder = plugins_url('', __DIR__);
?>
<style type="text/css">
.dashicons-element-selector-jquery-powers {
background-image: url("<?php echo plugins_url('dashicon.png', __DIR__) ?>") !important;
background-repeat: no-repeat;
background-position: center;
}
</style>
<div id="jquery-script-div"></div>
<?php
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/5.4.0/css/font-awesome.min.css');
?>
<?php
wp_enqueue_style( 'esjp-admin-header.min', $esjp_plugin_folder . '/css/esjp-admin-header.min.css', false, '1.1', 'all');
?>
<?php
if (esjp_fs()->can_use_premium_code()) {
?>
<?php
wp_enqueue_style( 'esjp-admin-header-pro.min', $esjp_plugin_folder . '/css/esjp-admin-header-pro.min.css', false, '1.1', 'all');
?>
}
<?php
}
if (esjp_fs()->is_not_paying()) {
?>
<?php
wp_enqueue_style( 'esjp-admin-header-free.min', $esjp_plugin_folder . '/css/esjp-admin-header-free.min.css', false, '1.1', 'all');
?>
<?php
$esjp_fs_acf_pro_folder = ESJP_PLUGIN_DIR . '/acf/advanced-custom-fields-pro';
if (file_exists($esjp_fs_acf_pro_folder)) {
?>
<style type="text/css">
</style>
<?php
}
}
if (esjp_fs()->is_trial()) {
?>
<style type="text/css">
</style>
<?php
}
do_action('esjp_fs_after_admin_header');
// End -------------------------------- ENCODING -------------------------------------
?>