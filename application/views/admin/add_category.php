<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add_category</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>	
		<?php echo form_open(base_url('Category_Controller/add_cat'));?>
			<div><label for="name">Name:</label>
			<input type="text" name="name"></div>
			<div><label for="description">Description</label>
			<textarea name="description"></textarea></div>
			<div><button  name="button">Submit</button></div>
		<?php echo form_close(); ?>	
	</div>
	<?php if(isset($message))
		{
			echo $message;

		} ?>

</body>
</html>