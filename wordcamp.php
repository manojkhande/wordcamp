<?php
/**
 * @package Wordcamp
 */
/*
Plugin Name: Wordcamp Plugine testing
Plugin URI: https://wordpress.org/
Description: Wordpress Plugine testing Workshop.
Version: 0.0.1
Author: Manoj Khande
Author URI: 
*/
/*
    Class: Wordcamp
*/
class Wordcamp{

	/**
	 * Function init
	 * Function to registre hooks
	 */  
	public function init()
    {
    	add_action( 'init', array($this,'register_book_post_type') );
    	add_filter('the_content', array($this, 'wordcamp_filter_content'));
    }


    /**
	 * Function register_book_post_type
	 * Function to create post type Book
	 */ 
    function register_book_post_type() {
	    
	}

	/**
	 * Function register_book_post_type
	 * Function to add sample content to each post
	 */  
	function wordcamp_filter_content($content) {
		
	}
	
}
//$Wordcamp = new Wordcamp;
//$Wordcamp->init();
