<?php

$consultant = new CPT(array(
	'post_type_name' => 'consultant',
	'singular' => __('Consultant', 'devonshire'),
	'plural' => __('Consultants', 'devonshire'),
	'slug' => 'consultant'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-groups'
));