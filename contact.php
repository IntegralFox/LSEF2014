<?php

require 'internal/slag.php';

$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page

?>
<script>
	$(document).ready(function() {
	});
</script>
<?php

$t->scrapeMeta();

?>
<?php

$t->scrapeContent();
$t->flush(); // Wipe the buffer and output the template with scraped data

?>
