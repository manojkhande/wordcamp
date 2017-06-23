<?php
/**
 * Class WordcampTest
 *
 * @package Wordcamp
 */

/**
 * Wordcamp test case.
 */
class WordcampTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public $Wordcamp;

	public function setUp()
    {
        $this->Wordcamp = new Wordcamp();
    }
 
    public function tearDown()
    {
        $this->Wordcamp = NULL;

    }

    // Function to test init function
	public function test_init() {
		$this->Wordcamp->init();
	}

	// Function to test init register_book_post_type
	public function test_register_book_post_type(){
		$this->Wordcamp->register_book_post_type();
		$this->assertTrue( post_type_exists( 'book' ) );
	}

	// Function to test init wordcamp_filter_content
	public function test_wordcamp_filter_content(){
		$content = $this->Wordcamp->wordcamp_filter_content('Hello World');
		$this->assertEquals('Hello World<p>This is added to the bottom of all post and page content.</p>',$content);
	}

}
