<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery events</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="day.css">

</head>
<body>
<div class="container">
	<h1>Welcome to my website</h1>
	<button data-file="day">Day</button>
	<button data-file="night">Night</button>
	<script>
	(function(){
		var link = $('link');
		$('button').click(function(){
			var stylesheet = $(this).data('file');
			console.log(stylesheet);
			$(this).siblings('button').removeAttr('disabled').end().attr('disabled','disabled');
			link.attr('href', stylesheet+'.css');
		});

	})();
	</script>
</body>
</html>