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
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array(
'key' => 'group_5c800bafbfe88',
'title' => 'Element Selector jQuery Powers',
'fields' => array(
array(
'key' => 'field_5c815b6388f30',
'label' => 'Needed to add class to body for these option pages only',
'name' => '',
'type' => 'message',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'message' => '<div class="element-selector-jquery-powers-backend-wrapper element-selector-jquery-powers-backend-wrapper-free-only"></div>',
'new_lines' => 'wpautop',
'esc_html' => 0,
),
array(
'key' => 'field_5c800bafd4d13',
'label' => 'Do stuff with Element Selector',
'name' => 'do_stuff_with_css_selectors_repeater',
'type' => 'group',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'layout' => 'block',
'sub_fields' => array(
array(
'key' => 'field_5c800bafdb326',
'label' => 'CSS Selector',
'name' => 'css_selector',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'maxlength' => '',
'show_column' => 0,
'show_column_sortable' => 0,
'show_column_weight' => 1000,
'allow_quickedit' => 0,
'allow_bulkedit' => 0,
),
array(
'key' => 'field_5c800bafdb3bf',
'label' => 'Do something with element(s) that match CSS selector',
'name' => 'do_something_with_elements_that_match_css_selector_repeater',
'type' => 'group',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafdb326',
'operator' => '!=empty',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'layout' => 'block',
'sub_fields' => array(
array(
'key' => 'field_5c800bafea519',
'label' => 'What do you want to do with the element(s) with the selector(s) you choose?',
'name' => 'what_to_do_with_these_elements',
'type' => 'select',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'choices' => array(
'Open all links with this selector in a new tab.' => 'Open all links with this selector in a new tab.',
'Disable all links with this selector.' => 'Disable all links with this selector.',
'For each image inside elements with this selector, display the alt tag above the image.' => 'For each image inside elements with this selector, display the alt tag above the image.',
'For each image inside elements with this selector, display the alt tag below the image.' => 'For each image inside elements with this selector, display the alt tag below the image.',
'Change the background image of all elements with this selector to...' => 'Change the background image of all elements with this selector to...',
'Change the image for all img tags with with this selector to...' => 'Change the image for all img tags with with this selector to...',
'Change the content in all elements with this selector to...' => 'Change the content in all elements with this selector to...',
'Add the following class to all elements with this selector...' => 'Add the following class to all elements with this selector...',
'Add the following class to all child elements of elements with this selector...' => 'Add the following class to all child elements of elements with this selector...',
'Add the following class to all the elements with the following selector that appear after elements with this selector...' => 'Add the following class to all the elements with the following selector that appear after elements with this selector...',
'Add the following styles to all elements with this selector...' => 'Add the following styles to all elements with this selector...',
'Add the following styles to all child elements of elements with this selector...' => 'Add the following styles to all child elements of elements with this selector...',
'Add the following styles to all the elements with the following selector that appear after elements with this selector...' => 'Add the following styles to all the elements with the following selector that appear after elements with this selector...',
'Insert the following code before all elements with this selector...' => 'Insert the following code before all elements with this selector...',
'Insert the following code after all elements with this selector...' => 'Insert the following code after all elements with this selector...',
'Wrap all elements with this selector with...' => 'Wrap all elements with this selector with...',
'Remove the last so many characters inside all elements with this selector...' => 'Remove the last so many characters inside all elements with this selector...',
'Remove the first so many characters inside all elements with this selector...' => 'Remove the first so many characters inside all elements with this selector...',
'Clear all forms with this selector when clicking elements with the following selector...' => 'Clear all forms with this selector when clicking elements with the following selector...',
'When clicking elements with this selector, toggle the follow class on and off...' => 'When clicking elements with this selector, toggle the follow class on and off...',
'When an element with this selector is clicked, toggle the following class to all elements with the following selector...' => 'When an element with this selector is clicked, toggle the following class to all elements with the following selector...',
'Target the nearest parent element of this selector that has the following selector...' => 'Target the nearest parent element of this selector that has the following selector...',
'I need to target something more specific...' => 'I need to target something more specific...',
),
'default_value' => array(
),
'allow_null' => 1,
'multiple' => 0,
'ui' => 0,
'return_format' => 'array',
'ajax' => 0,
'placeholder' => '',
),
array(
'key' => 'field_5c800bafea5b3',
'label' => 'What type of element do you want to target?',
'name' => 'what_type_of_element_do_you_want_to_target',
'type' => 'select',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'I need to target something more specific...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'choices' => array(
'Target child elements of this selector.' => 'Target child elements of this selector.',
'Target sibling elements of this selector.' => 'Target sibling elements of this selector.',
'Target parent elements of this selector.' => 'Target parent elements of this selector.',
),
'default_value' => array(
),
'allow_null' => 1,
'multiple' => 0,
'ui' => 0,
'return_format' => 'array',
'show_column' => 0,
'show_column_sortable' => 0,
'show_column_weight' => 1000,
'allow_quickedit' => 0,
'allow_bulkedit' => 0,
'ajax' => 0,
'placeholder' => '',
),
array(
'key' => 'field_5c800bafea638',
'label' => 'Which ones?',
'name' => 'which_ones',
'type' => 'select',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea5b3',
'operator' => '==',
'value' => 'Target child elements of this selector.',
),
),
array(
array(
'field' => 'field_5c800bafea5b3',
'operator' => '==',
'value' => 'Target sibling elements of this selector.',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'choices' => array(
'All of them.' => 'All of them.',
'Only the first one.' => 'Only the first one.',
'Only the last one.' => 'Only the last one.',
),
'default_value' => array(
),
'allow_null' => 1,
'multiple' => 0,
'ui' => 0,
'return_format' => 'array',
'show_column' => 0,
'show_column_sortable' => 0,
'show_column_weight' => 1000,
'allow_quickedit' => 0,
'allow_bulkedit' => 0,
'ajax' => 0,
'placeholder' => '',
),
array(
'key' => 'field_5c800bafea6bb',
'label' => 'Specify a selector that these must have to be targeted?',
'name' => 'specify_a_selector_that_these_must_have_to_be_targeted',
'type' => 'checkbox',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'I need to target something more specific...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'choices' => array(
'Yes.' => 'Yes.',
),
'allow_custom' => 0,
'default_value' => array(
),
'layout' => 'vertical',
'toggle' => 0,
'return_format' => 'array',
'show_column' => 0,
'show_column_weight' => 1000,
'allow_quickedit' => 0,
'allow_bulkedit' => 0,
'save_custom' => 0,
),
array(
'key' => 'field_5c800bafea73c',
'label' => 'What do you want to do with your target elements?',
'name' => 'what_do_you_want_to_do_with_your_target_elements',
'type' => 'select',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Target the nearest parent element of this selector that has the following selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'I need to target something more specific...',
),
array(
'field' => 'field_5c800bafea5b3',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafea638',
'operator' => '!=',
'value' => '',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'I need to target something more specific...',
),
array(
'field' => 'field_5c800bafea5b3',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafdb326',
'operator' => '!=empty',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'choices' => array(
'Add class to them...' => 'Add class to them...',
'Add class to all their child elements...' => 'Add class to all their child elements...',
'Add class to all elements after them...' => 'Add class to all elements after them...',
'Add the following styles to them...' => 'Add the following styles to them...',
'Add code before them...' => 'Add code before them...',
'Add code after them...' => 'Add code after them...',
'Change the content in them to...' => 'Change the content in them to...',
'Change their background image to...' => 'Change their background image to...',
'Change their image to...' => 'Change their image to...',
'Wrap them with...' => 'Wrap them with...',
'Remove specified amount of characters from the beginning of them...' => 'Remove specified amount of characters from the beginning of them...',
'Remove specified amount of characters from the end of them...' => 'Remove specified amount of characters from the end of them...',
'Open links in a new tab' => 'Open links in a new tab',
'Disable links' => 'Disable links',
),
'default_value' => array(
),
'allow_null' => 1,
'multiple' => 0,
'ui' => 0,
'return_format' => 'array',
'ajax' => 0,
'placeholder' => '',
),
array(
'key' => 'field_5c800bafea7bd',
'label' => 'Usage Instructions',
'name' => '',
'type' => 'message',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following class to all the elements with the following selector that appear after element(s) with this selector...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'message' => 'The class will not be added to the children elements of this selector, only elements on the same level that appear after it that also have the selector you enter below...',
'new_lines' => 'wpautop',
'esc_html' => 0,
),
array(
'key' => 'field_5c800bafea83e',
'label' => 'Required Fields',
'name' => 'reusable_fields',
'type' => 'flexible_content',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '!=',
'value' => 'Open all links with this selector in a new tab.',
),
array(
'field' => 'field_5c800bafea519',
'operator' => '!=',
'value' => 'Disable all links with this selector.',
),
array(
'field' => 'field_5c800bafea519',
'operator' => '!=',
'value' => 'I need to target something more specific...',
),
array(
'field' => 'field_5c800bafea519',
'operator' => '!=',
'value' => 'For each image inside elements with this selector, display the alt tag above the image.',
),
array(
'field' => 'field_5c800bafea519',
'operator' => '!=',
'value' => 'For each image inside elements with this selector, display the alt tag below the image.',
),
array(
'field' => 'field_5c800bafea519',
'operator' => '!=',
'value' => '',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'I need to target something more specific...',
),
array(
'field' => 'field_5c800bafea5b3',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafea638',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafea73c',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafea73c',
'operator' => '!=',
'value' => 'Open links in a new tab',
),
array(
'field' => 'field_5c800bafea73c',
'operator' => '!=',
'value' => 'Disable links',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'I need to target something more specific...',
),
array(
'field' => 'field_5c800bafea5b3',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafdb326',
'operator' => '!=empty',
),
array(
'field' => 'field_5c800bafea73c',
'operator' => '!=',
'value' => '',
),
array(
'field' => 'field_5c800bafea73c',
'operator' => '!=',
'value' => 'Open links in a new tab',
),
array(
'field' => 'field_5c800bafea73c',
'operator' => '!=',
'value' => 'Disable links',
),
),
array(
array(
'field' => 'field_5c800bafea6bb',
'operator' => '==',
'value' => 'Yes.',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'layouts' => array(
'5c734ae620f4d' => array(
'key' => '5c734ae620f4d',
'name' => 'reusable_fields_layout',
'label' => 'Load the fields required for this option...',
'display' => 'row',
'sub_fields' => array(
array(
'key' => 'field_5c800bb02bbab',
'label' => 'The Selector',
'name' => 'the_selector',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following class to all the elements with the following selector that appear after elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Open all links with this selector in a new tab.',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Clear all forms with this selector when clicking elements with the following selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'When an element with this selector is clicked, toggle the following class to all elements with the following selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Open all links with this selector in a new tab.',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Target the nearest parent element of this selector that has the following selector...',
),
),
array(
array(
'field' => 'field_5c800bafea6bb',
'operator' => '==',
'value' => 'Yes.',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following styles to all the elements with the following selector that appear after elements with this selector...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'maxlength' => '',
),
array(
'key' => 'field_5c800bb02bc45',
'label' => 'The Class',
'name' => 'the_class',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following class to all elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following class to all child elements of elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following class to all the elements with the following selector that appear after elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'When clicking elements with this selector, toggle the follow class on and off...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'When an element with this selector is clicked, toggle the following class to all elements with the following selector...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Add class to them...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Add class to all their child elements...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Add class to all elements after them...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Open all links with this selector in a new tab.',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'maxlength' => '',
'show_column' => 0,
'show_column_sortable' => 0,
'show_column_weight' => 1000,
'allow_quickedit' => 0,
'allow_bulkedit' => 0,
),
array(
'key' => 'field_5c800bb02bccc',
'label' => 'How many characters?',
'name' => 'how_many_characters',
'type' => 'number',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Remove the last so many characters inside all elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Remove the first so many characters inside all elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Remove specified amount of characters from the beginning of them...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Remove specified amount of characters from the end of them...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'min' => '',
'max' => '',
'step' => '',
'show_column' => 0,
'show_column_sortable' => 0,
'show_column_weight' => 1000,
'allow_quickedit' => 0,
'allow_bulkedit' => 0,
),
array(
'key' => 'field_5c800bb02bd4f',
'label' => 'The Background Image',
'name' => 'the_background_image',
'type' => 'image',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Change the background image of all elements with this selector to...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Change their background image to...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'return_format' => 'array',
'preview_size' => 'thumbnail',
'library' => 'all',
'min_width' => '',
'min_height' => '',
'min_size' => '',
'max_width' => '',
'max_height' => '',
'max_size' => '',
'mime_types' => '',
),
array(
'key' => 'field_5c800bb02bdd0',
'label' => 'The Image',
'name' => 'the_image',
'type' => 'image',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Change the image for all img tags with with this selector to...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Change their image to...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'return_format' => 'array',
'preview_size' => 'thumbnail',
'library' => 'all',
'min_width' => '',
'min_height' => '',
'min_size' => '',
'max_width' => '',
'max_height' => '',
'max_size' => '',
'mime_types' => '',
),
array(
'key' => 'field_5c800bb02be51',
'label' => 'The New Content',
'name' => 'the_new_content',
'type' => 'medium_editor',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Change the content in all elements with this selector to...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Change the content in them to...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'standard_buttons' => array(
0 => 'bold',
1 => 'italic',
2 => 'underline',
3 => 'strikethrough',
4 => 'subscript',
5 => 'superscript',
6 => 'anchor',
7 => 'image',
8 => 'quote',
9 => 'pre',
10 => 'orderedlist',
11 => 'unorderedlist',
12 => 'indent',
13 => 'outdent',
14 => 'justifyLeft',
15 => 'justifyCenter',
16 => 'justifyRight',
17 => 'justifyFull',
18 => 'h1',
19 => 'h2',
20 => 'h3',
21 => 'h4',
22 => 'h5',
23 => 'h6',
24 => 'html',
25 => 'removeFormat',
),
'custom_buttons' => array(
array(
'name' => '',
'label' => '',
'tag' => '',
'attributes' => array(
array(
'name' => '',
'value' => '',
),
),
),
),
'other_options' => array(
0 => 'disableReturn',
1 => 'disableDoubleReturn',
2 => 'disableExtraSpaces',
),
'delay' => 0,
),
array(
'key' => 'field_5c800bb02bed2',
'label' => 'The Opening Tag',
'name' => 'the_opening_tag',
'type' => 'acf_code_field',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Wrap all elements with this selector with...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Wrap them with...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'mode' => 'htmlmixed',
'theme' => 'vibrant-ink',
),
array(
'key' => 'field_5c800bb02bf53',
'label' => 'The Closing Tag',
'name' => 'the_closing_tag',
'type' => 'acf_code_field',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Wrap all elements with this selector with...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Wrap them with...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'mode' => 'htmlmixed',
'theme' => 'vibrant-ink',
),
array(
'key' => 'field_5c800bb02bfd4',
'label' => 'The Code',
'name' => 'the_code',
'type' => 'acf_code_field',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Insert the following code after all elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Add code after them...',
),
),
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Add code before them...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Insert the following code before all elements with this selector...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'mode' => 'htmlmixed',
'theme' => 'vibrant-ink',
),
array(
'key' => 'field_5c800bb02c055',
'label' => 'The Styles',
'name' => 'the_styles',
'type' => 'acf_code_field',
'instructions' => '',
'required' => 0,
'conditional_logic' => array(
array(
array(
'field' => 'field_5c800bafea73c',
'operator' => '==',
'value' => 'Add the following styles to them...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following styles to all elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following styles to all child elements of elements with this selector...',
),
),
array(
array(
'field' => 'field_5c800bafea519',
'operator' => '==',
'value' => 'Add the following styles to all the elements with the following selector that appear after elements with this selector...',
),
),
),
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'mode' => 'css',
'theme' => 'vibrant-ink',
),
),
'min' => '',
'max' => '',
),
),
'button_label' => 'Load Fields',
'min' => '',
'max' => '',
),
),
),
),
),
),
'location' => array(
array(
array(
'param' => 'options_page',
'operator' => '==',
'value' => 'free-powers',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
));
endif;
// End -------------------------------- ENCODING -------------------------------------
?>