<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class = "col-ms-6 push-ms-3">
				<h2 class="display-4">Add new slide</h2>
		<form method="post" action="Slides/addSlide" enctype="multipart/form-data">
		<fieldset class="form-group">
			<label for="formGroupExampleInput">Title</label>
			<input type="text" name="title" class="form-control" id="title" placeholder="name">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput">Description</label>
			<input type="text" name="description" class="form-control" id="description" placeholder="description">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput"> Link Button</label>
			<input type="text" name="button_link" class="form-control" id="button_link" placeholder="Link Button ">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput"> Text Button</label>
			<input type="text" name="button_text" class="form-control" id="button_text" placeholder="Link Button ">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput"> Upload Picture</label>
			<input type="file" name="slide_images" class="form-control" id="slide_images" >
		</fieldset>
		<fieldset class="form-group">
			<input type="submit" name="submit" class="form-control btn btn-outline-info" id="submit" >
		</fieldset>
	</form>
			</div>
		</div>
	</div>


</body>
</html>