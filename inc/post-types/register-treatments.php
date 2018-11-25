<?php

$treatment = new CPT(array(
	'post_type_name' => 'treatment',
	'singular' => __('Treatment', 'devonshire'),
	'plural' => __('Treatments', 'devonshire'),
	'slug' => 'treatment'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-carrot'
));