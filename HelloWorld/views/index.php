<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <title>Hello</title>
</head>
<body>
	<?php
		spl_autoload_extensions(".php");
		spl_autoload_register();
		use yasmf\HttpHelper;
	?>
	<h1>Hello</h1>
	<form action="../yasmf/hello_word.php" method="get">
		 <input hidden name="action" value="sayHello">
		 <input hidden name="controller" value="HelloWorld">
		 Your name? <input name="name" type="text" placeholder="your name here">
		 <input type="submit" value="OK">
	</form>
</body>
</html> 