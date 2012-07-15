<?php

/**
 * The template for displaying Theme options.
 *
 * @package WordPress
 * @subpackage Simon_WP_Framework
 * @since Simon WP Framework 1.0
 */

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
	//echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$test_array = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/images/';
		
	$options = array();
		
	$options[] = array( "name" => "Simon WP Framework Settings",
						"type" => "heading");
						
$options[] = array( "name" => "Screen Width",
						"desc" => "Choose a screen width for your website.",
						"id" => "width_images",
						"std" => "1200",
						"type" => "images",
						"options" => array(
							'1560' => $imagepath . '1560.png',
							'1200' => $imagepath . '1200.png',
							'960' => $imagepath . '960.png')
						);
					
$options[] = array( "name" => "Edges",
						"desc" => "Choose hard or soft edges for your website.",
						"id" => "edge_softness",
						"std" => "soften_edges",
						"type" => "images",
						"options" => array(
							'harden_edges' => $imagepath . 'hard_edges.png',
							'soften_edges' => $imagepath . 'soft_edges.png')
						);
$options[] = array( "name" => "Navigation",
						"desc" => "Choose a navigation color or hide navigation all together.",
						"id" => "navigation_options",
						"std" => "dark_navigation",
						"type" => "images",
						"options" => array(
							'dark_navigation' => $imagepath . 'dark_navigation.jpg',
							'light_navigation' => $imagepath . 'light_navigation.jpg',
							'hide_navigation' => $imagepath . 'no_navigation.jpg')
						);
						
	return $options;
}