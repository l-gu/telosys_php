<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
	<title>Address LISTING PAGE</title>
	<link href="<?php echo base_url(); ?>application/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<h1 id="CI-h1">Bookstore</h1>
	<div id="body">
	<div class="content">
		<h1>Addresss list</h1>
		<div class="paging"><?php echo $pagination; ?></div>
		<div class="data"><?php echo $table; ?></div>
		<br />
		<?php echo anchor('address/add/','add new Address',array('class'=>'add')); ?>
	</div>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>