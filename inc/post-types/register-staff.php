<?php

$staff = new CPT(array(
	'post_type_name' => 'staff',
	'singular' => __('Staff', 'devonshire'),
	'plural' => __('Staffs', 'devonshire'),
	'slug' => 'staff'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-groups'
));