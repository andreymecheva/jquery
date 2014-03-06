<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery Tut</title>
	<style>
	ul.emphasis li{

	}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	

</head>
<body>
<div class="container">
	<h1>Welcome to my website</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, quam, esse ex excepturi minus expedita eveniet odio vitae amet dicta! Totam quod soluta at iusto neque officiis rerum qui cumque.</p>
	<ul class="emphasis">
		<li>item</li>
		<li>item2</li>
		<li></li>
	</ul>

	<ul>
		<li>hello from the nest</li>
	</ul>
</div>
<script>
	$('ul.emphasis').children('li').eq(2).prev().text('added with jquery');
</script>
</body>
</html>