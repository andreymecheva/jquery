<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery events 201</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">

</head>
<body>
<article>
	<h1>My asoweme Post</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, est, modi beatae omnis vel molestiae in temporibus laboriosam dolor fuga voluptatem officiis aspernatur expedita error soluta at aut facilis! Ipsum.</p>
	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, dolorem veniam placeat accusantium tempora adipisci iusto eaque debitis aliquam ea quis nisi accusamus sed dignissimos natus reiciendis perferendis laboriosam sapiente!</p>
</article>
<blockquote style="float:left; background: #ccc; width:150px;">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, placeat, perferendis, harum, sequi nisi reiciendis porro alias impedit quod explicabo sit a ipsum sapiente illo beatae sint maiores minus repellendus.
</blockquote>
<div class="container">
	
</div>
<script>
	(function(){
		/*$('article').append('Hello from the javascript');*/
		$('div.container').append('Hello from jquery into container');

		$('<h2></h2>',{
			text: 'Hello from JavaScript',
			class: 'myClass'
		}).appendTo('article');

	})();
</script>
</body>
</html>