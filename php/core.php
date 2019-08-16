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
add_action('wp_footer', 'esjp_fs_do_stuff_with_css_selectors_repeater'); ?>
<?php
function esjp_fs_do_stuff_with_css_selectors_repeater() {
?>
<?php $current_dir_path = plugin_dir_path( __FILE__ ); ?>
<?php
if ( have_rows( 'do_stuff_with_css_selectors_repeater', 'option' ) ) : ?>
<?php while ( have_rows( 'do_stuff_with_css_selectors_repeater', 'option' ) ) : the_row(); ?>
<?php
$css_selector = get_sub_field( 'css_selector' ); ?>
<?php
if ( have_rows( 'do_something_with_elements_that_match_css_selector_repeater' ) ) : ?>
<?php while ( have_rows( 'do_something_with_elements_that_match_css_selector_repeater' ) ) : the_row(); ?>
<?php
$what_to_do_with_these_elements = get_sub_field( 'what_to_do_with_these_elements' ); ?>
<?php $what_do_you_want_to_do_with_your_target_elements = get_sub_field( 'what_do_you_want_to_do_with_your_target_elements' ); ?>
<script type="text/javascript">
var css_selector = '<?php echo $css_selector; ?>';
<?php if( $what_to_do_with_these_elements && in_array('Open all links with this selector in a new tab.', $what_to_do_with_these_elements) ) { ?>
jQuery(css_selector).attr('target','_blank');
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Disable all links with this selector.', $what_to_do_with_these_elements) ) { ?>
jQuery(css_selector).removeAttr('href');
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Add the following class to all elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_class = '<?php echo $the_class; ?>';
jQuery(css_selector).addClass(the_class);
<?php endif; ?>
<?php endwhile; ?>
<?php else:   ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Add the following class to all child elements of elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_class = '<?php echo $the_class; ?>';
jQuery(css_selector).children().addClass(the_class);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Add the following class to all the elements with the following selector that appear after elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_class = '<?php echo $the_class; ?>';
jQuery(css_selector).nextAll(the_selector).addClass(the_class);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Add the following styles to all elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
<?php $the_styles = get_sub_field( 'the_styles' ); ?>
var the_styles = '<?php echo $the_styles; ?>';
jQuery( '<style type="text/css">' + css_selector + ' {' + the_styles + '}</style>' ).insertAfter(css_selector);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Add the following styles to all child elements of elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
<?php $the_styles = get_sub_field( 'the_styles' ); ?>
var the_styles = '<?php echo $the_styles; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).children(the_selector).addClass('add-styles-to-all-children_'+css_selector_name_only+'_target');
var the_target = '.add-styles-to-all-children_'+css_selector_name_only+'_target';
jQuery( '<style type="text/css">' + the_target + ' {' + the_styles + '}</style>' ).insertAfter(the_target);
jQuery('body').prepend('<style type="text/css">' + the_target + ' {' + the_styles + '}</style>');
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Add the following styles to all the elements with the following selector that appear after elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
<?php $the_styles = get_sub_field( 'the_styles' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_styles = '<?php echo $the_styles; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).nextAll(the_selector).addClass('add-styles-to-all-elements-after_'+css_selector_name_only+'_target');
var the_target = '.add-styles-to-all-elements-after_'+css_selector_name_only+'_target';
jQuery('body').prepend('<style type="text/css">' + the_target + ' {' + the_styles + '}</style>');
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Change the background image of all elements with this selector to...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_background_image = '<?php echo esc_url($the_background_image['url']); ?>';
jQuery(css_selector).css('background', 'url(' + the_background_image + ')' );
jQuery(css_selector).css('background-image', 'url(' + the_background_image + ')' );
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Change the image for all img tags with with this selector to...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_image = '<?php echo esc_url($the_image['url']); ?>';
jQuery(css_selector).attr('src', the_image );
jQuery(css_selector).attr('srcset', the_image );
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Change the content in all elements with this selector to...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_new_content = '<?php echo $the_new_content; ?>';
jQuery(css_selector).html(the_new_content);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Insert the following code before all elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_code = '<?php echo $the_code; ?>';
jQuery(the_code).insertBefore(css_selector);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Wrap all elements with this selector with...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_opening_tag = '<?php echo $the_opening_tag; ?>';
var the_closing_tag = '<?php echo $the_closing_tag; ?>';
jQuery(css_selector).wrap(the_opening_tag + the_closing_tag );
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Remove the last so many characters inside all elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var how_many_characters = '<?php echo $how_many_characters; ?>';
jQuery(css_selector).text(function(i,v){
return v.slice(0,'-' + how_many_characters );
});
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Remove the first so many characters inside all elements with this selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var how_many_characters = '<?php echo $how_many_characters; ?>';
jQuery(css_selector).text(function(i,v){
return v.slice(how_many_characters);
});
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Clear all forms with this selector when clicking elements with the following selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
jQuery(the_selector).click(function () {
var css_selector = '<?php echo $css_selector; ?>';
jQuery(css_selector)[0].reset();
});
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('When clicking elements with this selector, toggle the follow class on and off...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_class = '<?php echo $the_class; ?>';
jQuery(css_selector).on('click', function (event) {
var the_class = '<?php echo $the_class; ?>';
jQuery(this).toggleClass(the_class);
});
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('When an element with this selector is clicked, toggle the following class to all elements with the following selector...', $what_to_do_with_these_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
//Function
jQuery(css_selector).on('click', function (event) {
var the_class = '<?php echo $the_class; ?>';
var the_selector = '<?php echo $the_selector; ?>';
jQuery(the_selector).toggleClass(the_class);
});
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('For each image inside elements with this selector, display the alt tag above the image.', $what_to_do_with_these_elements) ) { ?>
jQuery(document).ready(function(){
jQuery(css_selector).each(function(){
var alt = jQuery(this).children('img').attr('alt');
jQuery(this).prepend('<div class="alt-top-caption" style="text-align: center; padding-bottom: 10px;">'+alt+'</div>');
});
});
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('For each image inside elements with this selector, display the alt tag below the image.', $what_to_do_with_these_elements) ) { ?>
jQuery(document).ready(function(){
jQuery(css_selector).each(function(){
var alt = jQuery(this).children('img').attr('alt');
jQuery(this).append('<div class="alt-bottom-caption" style="text-align: center; padding-top: 10px;">'+alt+'</div>');
});
});
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Add class to them...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_class = '<?php echo $the_class; ?>';
jQuery(css_selector).closest(the_selector).addClass(the_class);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Add class to all their child elements...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_class = '<?php echo $the_class; ?>';
var the_selector = '<?php echo $the_selector; ?>';
jQuery(css_selector).closest(the_selector).children().addClass(the_class);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Add class to all elements after them...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_class = '<?php echo $the_class; ?>';
var the_selector = '<?php echo $the_selector; ?>';
jQuery(css_selector).closest(the_selector).nextAll().addClass(the_class);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Add the following styles to them...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
<?php $the_styles = get_sub_field( 'the_styles' ); ?>
var the_styles = '<?php echo $the_styles; ?>';
var the_selector = '<?php echo $the_selector; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('add-styles-to-them_'+css_selector_name_only+'_target');
var the_target = '.add-styles-to-them_'+css_selector_name_only+'_target';
jQuery('body').prepend('<style type="text/css">' + the_target + ' {' + the_styles + '}</style>');
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Add code after them...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_code = '<?php echo $the_code; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('add-code-after-them_'+css_selector_name_only+'_target');
var the_target = '.add-code-after-them_'+css_selector_name_only+'_target';
jQuery(the_code).insertAfter(the_target);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Add code before them...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_code = '<?php echo $the_code; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('add-code-before-them_'+css_selector_name_only+'_target');
var the_target = '.add-code-before-them_'+css_selector_name_only+'_target';
jQuery(the_code).insertBefore(the_target);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Change the content in them to...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_new_content = '<?php echo $the_new_content; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('change-content-in-them_'+css_selector_name_only+'_target');
var the_target = '.change-content-in-them_'+css_selector_name_only+'_target';
jQuery(the_target).html(the_new_content);
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Change their background image to...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_background_image = '<?php echo esc_url($the_background_image['url']); ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('change-the-bg-image_'+css_selector_name_only+'_target');
var the_target = '.change-the-bg-image_'+css_selector_name_only+'_target';
jQuery(the_target).css('background', 'url(' + the_background_image + ')' );
jQuery(the_target).css('background-image', 'url(' + the_background_image + ')' );
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Change their image to...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_image = '<?php echo esc_url($the_image['url']); ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('change-the-image-src_'+css_selector_name_only+'_target');
var the_target = '.change-the-image-src_'+css_selector_name_only+'_target';
jQuery(the_target).attr('src', the_image );
jQuery(the_target).attr('srcset', the_image );
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Wrap them with...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var the_opening_tag = '<?php echo $the_opening_tag; ?>';
var the_closing_tag = '<?php echo $the_closing_tag; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('wrap-them-with_'+css_selector_name_only+'_target');
var the_target = '.wrap-them-with_'+css_selector_name_only+'_target';
jQuery(the_target).wrap( the_opening_tag + the_closing_tag );
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Remove specified amount of characters from the beginning of them...', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var how_many_characters = '<?php echo $how_many_characters; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('remove-characters-from-beginning_'+css_selector_name_only+'_target');
var the_target = '.remove-characters-from-beginning_'+css_selector_name_only+'_target';
jQuery(the_target).text(function(i,v){
return v.slice(how_many_characters);
});
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Open links in a new tab', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
jQuery(css_selector).closest(the_selector).attr('target','_blank');
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('Target the nearest parent element of this selector that has the following selector...', $what_to_do_with_these_elements) && in_array('Disable links', $what_do_you_want_to_do_with_your_target_elements) ) { ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
var css_selector_name_only = css_selector.substr(1).split(' ').join('').split('.').join('_').split('#').join('_').split('>').join('_').split('+').join('_').split('~').join('_').split('*').join('_').split('[').join('_').split(']').join('_').split('=').join('_').split('|').join('_').split('::').join('_').split(':').join('_').split('$').join('_').split('^').join('_').split('(').join('_').split(')').join('_');
jQuery(css_selector).closest(the_selector).addClass('disable-links_'+css_selector_name_only+'_target');
var the_target = '.disable-links_'+css_selector_name_only+'_target';
jQuery(the_target).removeAttr('href');
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php } ?>
<?php if( $what_to_do_with_these_elements && in_array('I need to target something more specific...', $what_to_do_with_these_elements) ) { ?>
<?php $specify_a_selector_that_these_must_have_to_be_targeted = get_sub_field( 'specify_a_selector_that_these_must_have_to_be_targeted' ); ?>
<?php $what_type_of_element_do_you_want_to_target = get_sub_field( 'what_type_of_element_do_you_want_to_target' ); ?>
<?php $which_ones = get_sub_field( 'which_ones' ); ?>
<?php $what_do_you_want_to_do_with_your_target_elements = get_sub_field( 'what_do_you_want_to_do_with_your_target_elements' ); ?>
<?php if ( have_rows( 'reusable_fields' ) ): ?>
<?php while ( have_rows( 'reusable_fields' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'reusable_fields_layout' ) : ?>
<?php $the_class = get_sub_field( 'the_class' ); ?>
<?php $the_opening_tag = get_sub_field( 'the_opening_tag' ); ?>
<?php $the_closing_tag = get_sub_field( 'the_closing_tag' ); ?>
<?php $how_many_characters = get_sub_field( 'how_many_characters' ); ?>
<?php $the_new_content = get_sub_field( 'the_new_content' ); ?>
<?php $the_code = get_sub_field( 'the_code' ); ?>
<?php $the_background_image = get_sub_field( 'the_background_image' ); ?>
<?php $the_image = get_sub_field( 'the_image' ); ?>
<?php $the_styles = get_sub_field( 'the_styles' ); ?>
var css_selector = '<?php echo $css_selector; ?>';
var the_class = '<?php echo $the_class; ?>';
var the_opening_tag = '<?php echo $the_opening_tag; ?>';
var the_closing_tag = '<?php echo $the_closing_tag; ?>';
var how_many_characters = '<?php echo $how_many_characters; ?>';
var the_new_content = '<?php echo $the_new_content; ?>';
var the_code = '<?php echo $the_code; ?>';
var the_background_image = '<?php echo esc_url($the_background_image['url']); ?>';
var the_image = '<?php echo esc_url($the_image['url']); ?>';
var the_styles = '<?php echo $the_styles; ?>';
<?php if( $specify_a_selector_that_these_must_have_to_be_targeted ) : ?>
<?php $the_selector = get_sub_field( 'the_selector' ); ?>
var the_selector = '<?php echo $the_selector; ?>';
<?php else : ?>
var the_selector = '';
<?php endif; ?>
<?php if( in_array('Add class to them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('add_class_to-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('add_class_to-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('add_class_to-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('add_class_to-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('add_class_to-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('add_class_to-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('add_class_to-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.add_class_to'+css_selector_name_only+'--all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('add_class_to-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('add_class_to-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.add_class_to-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).addClass(the_class);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Add class to all their child elements...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('add_class_to_all_children_of-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('add_class_to_all_children_of-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('add_class_to_all_children_of-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('add_class_to_all_children_of-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('add_class_to_all_children_of-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('add_class_to_all_children_of-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('add_class_to_all_children_of-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('add_class_to_all_children_of-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('add_class_to_all_children_of-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.add_class_to_all_children_of-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).children().addClass(the_class);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Add class to all elements after them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('add_class_to_all_elements_after-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.add_class_to_all_elements_after-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).nextAll().addClass(the_class);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Add the following styles to them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('add_styles_to-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('add_styles_to-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('add_styles_to-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('add_styles_to-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('add_styles_to-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('add_styles_to-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('add_styles_to-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('add_styles_to-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('add_styles_to-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.add_styles_to-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery( '<style type="text/css">' + the_target + ' {' + the_styles + '}</style>' ).insertAfter(the_target);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Add code after them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('add_code_after-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('add_code_after-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('add_code_after-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('add_code_after-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('add_code_after-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('add_code_after-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('add_code_after-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('add_code_after-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('add_code_after-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.add_code_after-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_code).insertAfter(the_target);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Add code before them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('add_code_before-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('add_code_before-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('add_code_before-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('add_code_before-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('add_code_before-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('add_code_before-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('add_code_before-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('add_code_before-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('add_code_before-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.add_code_before-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_code).insertBefore(the_target);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Change the content in them to...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('change_content_of-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('change_content_of-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('change_content_of-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('change_content_of-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('change_content_of-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('change_content_of-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('change_content_of-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('change_content_of-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('change_content_of-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.change_content_of-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).html(the_new_content);
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Change their background image to...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
var the_background_image = '<?php echo esc_url($the_background_image['url']); ?>';
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('change_bg_image_of-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('change_bg_image_of-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('change_bg_image_of-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('change_bg_image_of-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('change_bg_image_of-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('change_bg_image_of-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('change_bg_image_of-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('change_bg_image_of-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('change_bg_image_of-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.change_bg_image_of-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).css('background', 'url(' + the_background_image + ')' );
jQuery(the_target).css('background-image', 'url(' + the_background_image + ')' );
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Change their image to...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
var the_image = '<?php echo esc_url($the_image['url']); ?>';
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('change_img_src_of-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('change_img_src_of-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('change_img_src_of-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('change_img_src_of-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('change_img_src_of-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('change_img_src_of-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('change_img_src_of-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('change_img_src_of-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('change_img_src_of-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.change_img_src_of-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).attr('src', the_image );
jQuery(the_target).attr('srcset', the_image );
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Wrap them with...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('wrap_the-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('wrap_the-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('wrap_the-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('wrap_the-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('wrap_the-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('wrap_the-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('wrap_the-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('wrap_the-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('wrap_the-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.wrap_the-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).wrap( the_opening_tag + the_closing_tag );
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Remove specified amount of characters from the beginning of them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('remove_characters_from_begining_of-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.remove_characters_from_begining_of-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).text(function(i,v){
return v.slice(how_many_characters);
});
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Remove specified amount of characters from the end of them...', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('remove_characters_from_end_of-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('remove_characters_from_end_of-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('remove_characters_from_end_of-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('remove_characters_from_end_of-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('remove_characters_from_end_of-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('remove_characters_from_end_of-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('remove_characters_from_end_of-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('remove_characters_from_end_of-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('remove_characters_from_end_of-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.remove_characters_from_end_of-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).text(function(i,v){
return v.slice(0, -how_many_characters);
});
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Open links in a new tab', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('open_links_in_new_tab_for-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.open_links_in_new_tab_for-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).attr('target','_blank');
<?php endif; ?>
<?php if( $what_do_you_want_to_do_with_your_target_elements && in_array('Disable links', $what_do_you_want_to_do_with_your_target_elements) ) : ?>
<?php if( in_array('Target child elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).addClass('disable_links_for-'+css_selector_name_only+'-all_specified_children_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-all_specified_children_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).first().addClass('disable_links_for-'+css_selector_name_only+'-specified_first_child_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-specified_first_child_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).children(the_selector).last().addClass('disable_links_for-'+css_selector_name_only+'-specified_last_child_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-specified_last_child_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target sibling elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).addClass('disable_links_for-'+css_selector_name_only+'-all_specified_siblings_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-all_specified_siblings_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).first().addClass('disable_links_for-'+css_selector_name_only+'-specified_first_sibling_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-specified_first_sibling_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).siblings(the_selector).last().addClass('disable_links_for-'+css_selector_name_only+'-specified_last_sibling_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-specified_last_sibling_target';
<?php endif; ?>
<?php endif; ?>
<?php if( in_array('Target parent elements of this selector.', $what_type_of_element_do_you_want_to_target) ) : ?>
<?php if( in_array('All of them.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).addClass('disable_links_for-'+css_selector_name_only+'-all_specified_parents_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-all_specified_parents_target';
<?php endif; ?>
<?php if( in_array('Only the first one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).first().addClass('disable_links_for-'+css_selector_name_only+'-specified_first_parent_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-specified_first_parent_target';
<?php endif; ?>
<?php if( in_array('Only the last one.', $which_ones) ) : ?>
var css_selector_name_only = css_selector.substr(1);
jQuery(css_selector).parents(the_selector).last().addClass('disable_links_for-'+css_selector_name_only+'-specified_last_parent_target');
var the_target = '.disable_links_for-'+css_selector_name_only+'-specified_last_parent_target';
<?php endif; ?>
<?php endif; ?>
jQuery(the_target).removeAttr('href');
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php  ?>
<?php endif;  ?>
<?php }; ?>
</script>
<style type="text/css">
.green,
.cloned-class,
.option_specific_class {
color: green;
}
.red,
.the_class,
.normal-class {
color: red;
}
.blue,
.duplicated_field_class {
color: blue;
}
</style>
<?php endwhile; ?>
<?php else : ?>
<?php
endif; ?>
<?php
endwhile; ?>
<?php else : ?>
<?php
endif; ?>
<?php
}; ?>
<?php
add_action('admin_head', 'esjp_fs_do_stuff_with_css_selectors_repeater_admin_head_stuff');
function esjp_fs_do_stuff_with_css_selectors_repeater_admin_head_stuff() {
?>
<style type="text/css">
#acf-group_5c6f42891873f > div > div > div.acf-input > div > table > tbody > tr:nth-child(1) > td.acf-field.acf-field-repeater.acf-field-5c72ee066057d > div > div > table > tbody > tr:nth-child(1) > td.acf-fields > div:nth-child(2) {
}
</style>
<?php }
// End -------------------------------- ENCODING -------------------------------------
?>