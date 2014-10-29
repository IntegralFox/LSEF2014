<?php
require 'internal/slag.php';
$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page
?>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<style>
	#blurb {
		box-sizing: border-box;
		background-color: #99cc00;
		color:white;
		padding: 1em;
		width: 9.5em;
		height:19em;
		float: left;
		border-radius: 1.5em;
		margin-top: 1em;
		text-align: right;
	}
	#slideshow {
		box-sizing: border-box;
		width: 100%;
		height: 100%;
		position: relative;
		overflow: hidden;
		border-radius: 1.5em;
	}
	#slideshow .slide {
		box-sizing: content-box;
		width: 100%;
		height: 100%;
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		position: absolute;
	}
	#slideshow-container
	{
		width: 29em;
		height:19em;
		float: right;
		margin-top:1em;
		margin-bottom:1em;	
	}
		#slideshow-container2
	{
		width: 30em;
		height:8em;
		float: left;
		margin-top:1em;
		margin-bottom:1em;
	}
		#slideshow2 {
		box-sizing: border-box;
		width: 100%;
		height: 100%;
		position: relative;
		overflow: hidden;
		border-radius: 1.5em;
	}
	#slideshow2 .slide {
		box-sizing: content-box;
		width: 100%;
		height: 100%;
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		position: absolute;
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
</style><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50741714-2', 'auto');
  ga('send', 'pageview');

</script>
<script>
$(document).ready(function() {
var slides = $('#slideshow a').remove().each(function() {
			$('<div>').addClass('slide').appendTo('#slideshow')
			.css('background-image', 'url("' + $(this).attr('href') + '")');
		});
		setInterval(function() {
			$('#slideshow .slide').first().css('bottom', '100%').appendTo('#slideshow')
			.animate({'bottom': '0%'}, 1000, 'swing');
		}, 4000);
		
		var slides = $('#slideshow2 a').remove().each(function() {
			$('<div>').addClass('slide').appendTo('#slideshow2')
			.css('background-image', 'url("' + $(this).attr('href') + '")');
		});
		setInterval(function() {
			$('#slideshow2 .slide').first().css('bottom', '100%').appendTo('#slideshow2')
			.animate({'bottom': '0%'}, 1000, 'swing');
		}, 4000);
});
</script>
<?php
$t->scrapeMeta();?>             
<p id="blurb">Providing engineering service in developing communities.</p>
<div id="slideshow-container">
	<div id="slideshow">
		<a href="img/1.png"></a>
		<a href="img/2.png"></a>
		<a href="img/3.png"></a>
		<a href="img/4.png"></a>
	</div>
</div>
<div id="slideshow-container2">
	<div id="slideshow2">
		<a href="img/5.png"></a>
		<a href="img/6.png"></a>
		<a href="img/7.png"></a>
		<a href="img/8.png"></a>
	</div>
</div>
<!-- can put carousel html in here -->
<?php
$t->scrapeContent();
$t->flush(); // Wipe the buffer and output the template with scraped data
?>

