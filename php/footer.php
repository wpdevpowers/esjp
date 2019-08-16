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
$ESJP_plugin_folder = plugins_url('', __DIR__);
if (esjp_fs()->can_use_premium_code()) {
?>
<script type="text/javascript">
jQuery( "body" ).addClass("element-selector-jquery-powers-pro");
jQuery( "body.element-selector-jquery-powers-pro" ).removeClass("element-selector-jquery-powers-free");
</script>
<?php
}
do_action('esjp_fs_after_footer');
// End -------------------------------- ENCODING -------------------------------------
?>