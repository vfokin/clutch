<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Clutch</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="cache-control" content="Private" />
		<script type="text/javascript" src="../javascript/jquery/jquery.js"></script>
		<script type='text/javascript'>
			 
			$(document).ready( function() {
<?php
			echo 'top.' . $controller . '.' . $function . '(' . $arg_list . ');';
?>
			// Safari remembers the iframe locatoin on reload - redirect to 
			// make sure jscript is not executed twice
			document.location.href = 'about:blank';
			});
		</script>
	</head>

	<body>
	</body>
</html>