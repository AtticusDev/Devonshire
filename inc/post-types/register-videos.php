<?php

$treatment = new CPT(array(
	'post_type_name' => 'video',
	'singular' => __('Video', 'devonshire'),
	'plural' => __('Videos', 'devonshire'),
	'slug' => 'video'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'category'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-format-video'
));