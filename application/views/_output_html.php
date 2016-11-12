<html>
<head>
	<title><?php echo $title; ?></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<?php echo link_tag('assets/css/bootstrap.min.css') ?>
	<?php echo link_tag('assets/css/form.css'); ?>
</head>
<body>
	<div>
		<?php echo $menu_top; ?>
	</div>
	<div>
		<?php echo $body; ?>
	</div>
</body>
</html>