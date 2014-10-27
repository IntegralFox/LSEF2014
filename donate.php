<?php
require_once 'internal/slag.php';

$t = new Slag();
$t->title('Donate - Peugeot Center');

?>
<h1>Like Our Work?</h1>
<h2>Support us via the options below</h2>
<ul>
	<li>
		<img src="img/paypal.png" alt="Donate with PayPal">
	</li>
</ul>
<?php
$t->scrapeContent();
$t->flush();
?>
