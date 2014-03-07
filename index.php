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
<h2>Click me</h2>
</div>
<script>
$('div.container').delegate('h2','click', function(){
	console.log('clicked');
	$(this).clone().appendTo('body');
});

</script>
</body>
</html>