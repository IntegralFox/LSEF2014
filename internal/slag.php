<?php

require_once 'internal/variables.php';

class Slag {
	private $title;
	private $meta;
	private $content;
	private $attr;
	private $root;

	public function __construct() {
		$this->title = 'Peugeot Center';
		$this->meta = '';
		$this->content = '';
		$this->attr = array();
		$this->root = 'internal/slagTemplate/';

		ob_start();
	}

	public function __destruct() {
		ob_end_clean();
	}

	/* set the title of the page */
	public function title($string) {
		$this->title = $string;
	}

	/* add meta information */
	public function meta($string) {
		$this->meta .= $string;
	}

	/* add meta from output buffer */
	public function scrapeMeta() {
		$this->meta .= ob_get_contents();
		ob_clean();
	}

	/* set attributes of the page */
	public function attr($key, $value = true) {
		$this->attr[$key] = $value;
	}

	/* set an attribute by scraping the slag buffer */
	public function scrapeAttr($key) {
		$this->attr[$key] = ob_get_contents();
		ob_clean();
	}

	/* append content to the content store */
	public function content($string) {
		$this->content .= $string;
	}

	/* scrape the slag buffer as content */
	public function scrapeContent() {
		$this->content .= ob_get_contents();
		ob_clean();
	}

	/* clean the slag buffer of unwanted data */
	public function discardBuffer() {
		ob_clean();
	}

	/* output the contents of the slag buffer using a template slagfile
	 * after cleaning the slag buffer of any unwanted data */
	public function flush() {
		ob_clean();
		require $this->root . 'template.php';
		ob_flush();
	}
}

?>
