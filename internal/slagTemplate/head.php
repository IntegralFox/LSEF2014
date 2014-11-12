	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<title><?php echo $this->title; ?></title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<script>
			$(function() {
				$('#btt').click(function(e) {
					e.preventDefault();
					$("html, body").animate({ scrollTop: 0 }, "slow");
				});
			});
		</script>
		<?php echo $this->meta; ?>
	</head>
