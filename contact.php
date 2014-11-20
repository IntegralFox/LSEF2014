<?php

require 'internal/slag.php';

$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page

?>
<style>
	form {
		background-size: cover;
		box-sizing: border-box;
		border-radius: 1em;
		padding: 1em;
		margin: 2em 0; 
		width: 100%;
	}
	#email {
		background-image: url(img/13.png);
	}
	main input,
	main textarea {
		display: block;
		font-size: 16px;
		line-height: 1.3;
		margin: 3em auto;
		padding: 0.7em;
		width: 80%;
	}
	main textarea {
		resize: vertical;
		min-height: 5em;
	}
	#newsletter {
		background-image: url(img/11.png);
	}
</style>
<script>
	var email = 'csimmons@liscomb.edu';
	$(document).ready(function() {
		$('#send').click(function() {
			window.open('mailto:' + email + '?subject=' + encodeURI($('#subject').val()) + '&body=' + encodeURI($('#body').val()));
		});
	});
</script>
<?php

$t->scrapeMeta();

?>
<form id="email">
	<input type="text" id="subject" placeholder="Enter a Subject">
	<textarea id="body" placeholder="Enter a Message"></textarea>
	<input type="button" id="send" value="Send">
</form>
<form id="newsletter" action="contact.php" method="POST">
	<input type="email" name="email" placeholder="Sign up for our Newsletter">
	<input type="submit" value="Sign Up">
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$t->scrapeContent();
} else {
	$t->discardBuffer();

?>
<form>
	<h1>Thanks for Subscribing!</h1>
</form>
<?php
	$t->scrapeContent();
}

$t->flush(); // Wipe the buffer and output the template with scraped data

?>
