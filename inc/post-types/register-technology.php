<?php

$technology = new CPT(array(
	'post_type_name' => 'technology',
	'singular' => __('Technology', 'devonshire'),
	'plural' => __('Technologies', 'devonshire'),
	'slug' => 'technology'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-lightbulb'
));