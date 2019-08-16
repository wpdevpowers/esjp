<?php
/**
* Description: Gives you the power of a jQuery developer without needing to know any jQuery at all. Simply specify a selector of the element you want to target and then choose from the following options that appear to determine what you want to do with it...
What do you want to do with the element(s) with the selector(s) you choose?
• Open all links with this selector in a new tab.
• Disable all links with this selector.
• For each image inside elements with this selector, display the alt tag above the image.
• For each image inside elements with this selector, display the alt tag below the image.
• Change the background image of all elements with this selector to...
• Change the image for all img tags with with this selector to...
• Change the content in all elements with this selector to...
• Add the following class to all elements with this selector...
• Add the following class to all child elements of elements with this selector...
• Add the following class to all the elements with the following selector that appear after elements with this selector...
• Add the following styles to all elements with this selector...
• Add the following styles to all child elements of elements with this selector...
• Add the following styles to all the elements with the following selector that appear after elements with this selector...
• Insert the following code before all elements with this selector...
• Insert the following code after all elements with this selector...
• Wrap all elements with this selector with...
• Remove the last so many characters inside all elements with this selector...
• Remove the first so many characters inside all elements with this selector...
• Clear all forms with this selector when clicking elements with the following selector...
• When clicking elements with this selector, toggle the follow class on and off...
• When an element with this selector is clicked, toggle the following class to all elements with the following selector...
• For each image inside elements with this selector, display the alt tag above or below the image...
• Target the nearest parent element of this selector that has the following selector...
• I need to target something more specific...
What type of element do you want to target? (Only appears if one of the last two options above is selected.)
• Target child elements of this selector.
• Target sibling elements of this selector.
• Target parent elements of this selector.
Which ones? (Only appears if "I need to target something more specific..." is selected. )
• All of them.
• Only the first one.
• Only the last one.
Specify a selector that these must have to be targeted? (Only appears if "I need to target something more specific..." is selected. )
• Yes.
What do you want to do with your target elements? (Only appears if "I need to target something more specific..." is selected. )
• Add class to them...
• Add class to all their child elements...
• Add class to all elements after them...
• Add the following styles to them...
• Add code after them...
• Add code before them...
• Change the content in them to...
• Change their background image to...
• Change their image to...
• Wrap them with...
• Remove specified amount of characters from the beginning of them...
• Open links in a new tab.
• Disable links.
== Pro Powers ==
• Support & Updates.
• Add an unlimited number of selectors.
• Set an unlimited amount of things to do with each selector.
* Plugin Name: WordPress Dev Powers - Element Selector jQuery Powers Plugin
* Plugin URI: http://wpdevpowers.com/pro-pricing/element-selector-jquery-powers/
*
* Version:     1.0.1
* Author:      WordPress Dev Powers
* Author URI:  http://wpdevpowers.com
* Text Domain: element-selector-jquery-powers
* License:     GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*
* PHP version 7.3.3
*
* @category   Element_Selectors
* @package    ESJP
* @author     WordPress Dev Powers <wpdevpowers@gmail.com>
* @copyright  2018 WP Dev Powers | ACF PRO files are not to be used or distributed outside of the premium theme/plugin.
* @license    http://www.php.net/license/3_01.txt  PHP License 3.01
* @link       http://wpdevpowers.com
* @fs_premium_only /pro/, /acf/advanced-custom-fields-pro/, /functionality/core-pro.php
*/
// Start -------------------------------- ENCODING -------------------------------------
$ESJP_plugin_folder = plugins_url('', __FILE__);
define('ESJP_PLUGIN_DIR', dirname(__FILE__).'/');
if (!function_exists('esjp_fs_init')) {
function esjp_fs_init()
{
register_setting('esjp_fs_settings');
}
}
if (!defined('ABSPATH')) {
exit;
}
if (function_exists('esjp_fs')) {
esjp_fs()->set_basename(true, __FILE__);
return;
}
require plugin_dir_path(__FILE__) . '/php/freemius-integration.php';
add_action('after_setup_theme', 'esjp_fs_init');
function esjp_fs_init()
{
if (esjp_fs()->can_use_premium_code()) {
if (!class_exists('acf_pro')) :
$esjp_fs_acf_pro_folder = plugin_dir_path(__FILE__) . '/acf/advanced-custom-fields-pro';
if (file_exists($esjp_fs_acf_pro_folder)) {
require_once plugin_dir_path(__FILE__) . '/acf/advanced-custom-fields-pro/acf.php';
}
endif;
};
if (! function_exists('register_fields_accordion')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-accordion/acf-accordion.php';
endif;
if (! function_exists('register_fields_code_field')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-code-field/acf-code-field.php';
endif;
if (! function_exists('include_field_types_divider')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-divider-field-master/acf-divider.php';
endif;
if (! function_exists('acf_plugin_medium_editor')) :
require_once plugin_dir_path(__FILE__) . '/acf/acf-medium-editor-field/acf-medium-editor.php';
endif;
}
function register_esjp_fs_my_admin_menu()
{
add_menu_page(
__('Element Selector jQuery Powers', 'textdomain'),
'ESJP',
'manage_options',
'esjp_fs_top_level_admin_menu',
'esjp_fs_top_level_admin_menu',
'dashicons-element-selector-jquery-powers',
101
);
}
add_action('admin_menu', 'register_esjp_fs_my_admin_menu');
function esjp_fs_top_level_admin_menu()
{
?>
<style type="text/css">
h3 {
margin: 1em 0 .3em 0;
}
</style>
<div class="element-selector-jquery-powers-backend-page">
<?php if (esjp_fs()->is_not_paying()) { ?>
<h2 class="free-only">Element Selector jQuery Powers</h2>
<p>Sorry but the free version of this plugin requires you to also have ACF Pro activated.</p>
<h4>If you don't own ACF Pro...</h4>
<ul>
<li>And you only need to do something with one selector, you can <a href="https://www.advancedcustomfields.com/pro/" target="_blank">buy ACF Pro here</a>.</li>
<li>And you want to be able to do an unlimited amount of things with an unlimited amount of selectors, you can <a href="https://checkout.freemius.com/mode/dialog/plugin/3423/plan/5450/" target="_blank">buy the Pro version of this plugin here</a> which also automatically installs ACF Pro along with it.</li>
<ul>
<li>Or you can also start a 14 day free trial by <a href="https://checkout.freemius.com/mode/dialog/plugin/3423/plan/5450/?trial=free" target="_blank">clicking here</a>.</li>
</ul>
</ul>
<?php }
?>
<?php if (esjp_fs()->can_use_premium_code()) {
?>
<div class="pro-only"></div>
<h2>Element Selector jQuery Powers Pro</h2>
<?php }
?>
<?php
}
add_action('after_setup_theme', 'esjp_fs_Load_ACF_Options_Pages');
function esjp_fs_Load_ACF_Options_Pages()
{
if (function_exists('acf_add_options_page')) :
acf_add_options_sub_page(array(
'page_title'  => 'Free Powers',
'menu_title'  => 'Free Powers',
'menu_slug'   => 'free-powers',
'parent_slug' => 'esjp_fs_top_level_admin_menu',
));
acf_add_options_sub_page(array(
'page_title'  => 'Pro Powers',
'menu_title'  => 'Pro Powers',
'menu_slug'   => 'pro-powers',
'parent_slug' => 'esjp_fs_top_level_admin_menu',
));
endif;
require plugin_dir_path(__FILE__) . '/php/acf-field-groups.php';
}
?>
<?php
add_action('admin_head', 'esjp_fs_admin_header');
function esjp_fs_admin_header()
{
include plugin_dir_path(__FILE__) . '/php/admin-header.php';
}
add_action('admin_footer', 'esjp_fs_admin_footer');
function esjp_fs_admin_footer()
{
include plugin_dir_path(__FILE__) . '/php/admin-footer.php';
}
add_action('wp_head', 'esjp_fs_wp_header');
function esjp_fs_wp_header()
{
include plugin_dir_path(__FILE__) . '/php/header.php';
}
add_action('wp_footer', 'esjp_fs_wp_footer');
function esjp_fs_wp_footer()
{
include plugin_dir_path(__FILE__) . '/php/footer.php';
}
require_once plugin_dir_path(__FILE__) . 'php/core.php';
?>
<?php
if (esjp_fs()->can_use_premium_code()) {
include_once plugin_dir_path(__FILE__) . 'php/core-pro.php';
}
// End -------------------------------- ENCODING -------------------------------------
?>