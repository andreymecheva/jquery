<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery events 201</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
<dl>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7</dd>
	<dt>What are your hours?</dt>
	<dd>We are open 24/7</dd>
</dl>
<script>
	(function(){
		var dd = $('dd');

		dd.filter(':nth-child(n+4)').addClass('hide');
		$('dt').on('mouseenter', function(){
			$(this)
				.next()
					.slideDown(300)
						.siblings('dd')
							.slideUp(300);
			
		})

	})();
</script>
</body>
</html>