<?php
require 'internal/slag.php';
$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page
?>
<!-- Include a link to jquery library or other here -->
<style>
	#blurb {
		box-sizing: border-box;
		background-color: lightgreen;
		padding: 1em;
		width: 10em;
		float: left;
	}
	#carousel {
		width: 38em;
		float: right;
	}

@media (max-width: 40em) {
	#blurb {
		width: 25%;
		float: left;
	}
	#carousel {
		width: 80%;
		float: right;
	}
}

@media (max-width: 30em) {
	#blurb {
		width: 100%;
		float: none;
	}
	#carousel {
		width: 100%;
		float: none;
	}
}
</style>
<script>
// add any jquery or else here for the carousel
</script>
<?php
$t->scrapeMeta();
?>
<p id="blurb">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum commodo odio quis dapibus. Donec vulputate metus in felis faucibus lobortis. Aenean arcu arcu, cursus nec dictum sed, sollicitudin sit amet quam. Duis non magna dui. Aliquam rutrum semper dui vitae maximus.
</p>
<div id="carousel">
<!-- can put carousel html in here -->
</div>
<?php
$t->scrapeContent();
$t->flush(); // Wipe the buffer and output the template with scraped data
?>
