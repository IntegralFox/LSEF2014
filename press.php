<?php

require 'internal/slag.php';

$t = new Slag();
$t->title("Files - Peugeot Center");

// Scan the files directory and generate a list of links to the files
$file = scandir('files');
echo '<ul>';
foreach ($file as $f) {
	if ($f == '.' or $f == '..') continue;
	echo "<li><a href=\"files/{$f}\">{$f}</a></li>";
}
echo '</ul>';

$t->scrapeContent();
$t->flush();

?>
