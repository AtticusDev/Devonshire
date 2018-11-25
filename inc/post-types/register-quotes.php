<?php

$quote = new CPT(array(
	'post_type_name' => 'quote',
	'singular' => __('Quote', 'devonshire'),
	'plural' => __('Quotes', 'devonshire'),
	'slug' => 'quote'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-format-quote'
));