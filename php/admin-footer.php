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

wp_enqueue_script( 'esjp-admin-footer.min', $esjp_plugin_folder . '/js/esjp-admin-footer.min.js', false, '1.1', 'all');
// End -------------------------------- ENCODING -------------------------------------


// Start -------------------------------- ENCODING -------------------------------------
if (esjp_fs()->can_use_premium_code()) {
$esjp_fs_pro_folder = ESJP_PLUGIN_DIR . '/pro';
if (!file_exists($esjp_fs_pro_folder) && class_exists('acf_pro')) {
?>
<script type="text/javascript">
if (jQuery(".element-selector-jquery-powers-backend-page .pro-only").length > 0){
window.location.href = "/wp-admin/admin.php?page=free-powers";
}
jQuery('.free-powers-submitdiv').html('<h2 class="submitdivh2">You still have the free version installed and activated...</h2><p>To start using the pro features, all you need to do is deactivate the free version and then install & activate the pro version.</p><p><a href="/wp-admin/plugins.php" target="_blank">Click here to open your plugins page in a new tab</a>.</p>');
</script>
<?php
}
}
if (esjp_fs()->is_not_paying()) {
wp_enqueue_script( 'esjp-admin-footer-free.min', $esjp_plugin_folder . '/js/esjp-admin-footer-free.min.js', false, '1.1', 'all');
$esjp_fs_pro_folder = ESJP_PLUGIN_DIR . '/pro';
if (file_exists($esjp_fs_pro_folder)) {
?>
<script type="text/javascript">
if (jQuery(".element-selector-jquery-powers-backend-page .free-only").length > 0){
window.location.href = "/wp-admin/admin.php?page=esjp_fs_top_level_admin_menu-account";
}
jQuery(document).ready(function () {
if(window.location.href.indexOf("pro-powers") > -1) {
jQuery('.notice-warning').html('<h2 style="color: rgba(7,105,173,1); width: auto;" class="submitdivh2"><a href="/wp-admin/admin.php?page=esjp_fs_top_level_admin_menu-account">Activate Pro Powers</a></h2><p>It looks like you have the Pro version installed but you have not yet activated your license. <a href="/wp-admin/admin.php?page=esjp_fs_top_level_admin_menu-account">Click here to open your Account page</a>, and then click the button at the bottom of that page to activate your Pro Powers.</p>');
jQuery('.element-selector-jquery-powers-backend-page #submitdiv').addClass('hidden');
jQuery('.element-selector-jquery-powers-backend-page #poststuff').addClass('hidden');
}
});
</script>
<?php
}
if (!file_exists($esjp_fs_pro_folder)) {
?>
<script type="text/javascript">
jQuery(document).ready(function () {
if(window.location.href.indexOf("pro-powers") > -1) {
jQuery('#wpbody').html('<h2 style="color: rgba(7,105,173,1); width: auto;" class="submitdivh2"><a href="http://wpdevpowers.com/pro-pricing/element-selector-jquery-powers//" target="blank">Unlock Pro Powers</a></h2><p><b><i>With the Pro Version, you can add an unlimited number of selectors and set an unlimited amount of things to do with each selector.</i></b><br><br><a href="http://esjp.wpdevpowers.com/?page_id=41" target="_blank">Click here</a> to open the Demo of the Pro version in a new tab, to try it out for yourself before buying.<a href="http://wpdevpowers.com/pro-pricing/element-selector-jquery-powers//" target="blank"><br><br>Click here</a> to view the pricing options for the Pro version in a new tab.<br><br>Take a quick look below for a preview of how to add multiple selectors and how to add multiple different things you would like to do with each of them...<br><a href="http://wpdevpowers.com/pro-pricing/element-selector-jquery-powers//" target="blank"><img style="max-width: 99%;" src="<?php echo plugins_url('gifs/ProPowers.gif', __DIR__) ?>"></a></p>');
jQuery('.element-selector-jquery-powers-backend-page #submitdiv').addClass('hidden');
jQuery('.element-selector-jquery-powers-backend-page #poststuff').addClass('hidden');
}
});
</script>
<?php
}
if (!file_exists($esjp_fs_pro_folder) && class_exists('acf_pro')) {
?>
<script type="text/javascript">
if (jQuery(".element-selector-jquery-powers-backend-page .free-only").length > 0){
window.location.href = "/wp-admin/admin.php?page=free-powers";
}
</script>
<?php
}
}
if (esjp_fs()->is_trial()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("element-selector-jquery-powers-trial");
jQuery(".element-selector-jquery-powers-trial").closest('html').addClass('esjp_fs-trial-user');
</script>
<?php
}
do_action('esjp_fs_after_admin_footer');
// End -------------------------------- ENCODING -------------------------------------
?>