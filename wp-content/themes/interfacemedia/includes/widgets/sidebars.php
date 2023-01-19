<?php

/***************************
 * Register sidebars
 ***************************/

 if ( function_exists('register_sidebars') )
{
	register_sidebar(array(
	  'id' => 'footer_sidebar',
	  'name' => 'Footer',
	  'description' => 'Footer sidebar',
	  'before_widget' => '<div class="footer_sidebar">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>' 
	));		
	register_sidebar(array(
	  'id' => 'main_sidebar',
	  'name' => 'Main Sidebar',
	  'description' => 'Main Sidebar',
	  'before_widget' => '<div class="main_sidebar">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>' 
	));	
	
}			