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
				<h2 class="display-4">Edit slide</h2>
		 <form method="post" action="http://127.0.0.1:4001/bai5/do_edit/suaslide" enctype="multipart/form-data"> 
		<!-- <form method="post" action="suaslide" enctype="multipart/form-data">  -->
		<?php $count = 0;?>
		<?php foreach ($mang_giulieu as $key => $value): ?>
        <?php $count++; ?>
        <h2>Slide: <?= $count ?></h2>
		<fieldset class="form-group">
			<label for="formGroupExampleInput">Title</label>
			<input type="text" name="title[]" class="form-control" id="title" value="<?= $value['title'] ?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput">Description</label>
			<input type="text" name="description[]" class="form-control" id="description" value="<?= $value['description'] ?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput"> Link Button</label>
			<input type="text" name="button_link[]" class="form-control" id="button_link" value="<?= $value['button_link']?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput"> Text Button</label>
			<input type="text" name="button_text[]" class="form-control" id="button_text" value="<?= $value['button_text'] ?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput"> Upload Picture</label>
			<img src="<?= $value['slide_images'] ?>">
			<input type="hidden" name="slide_images_old[]" class="form-control" id="slide_images" value="<?= $value['slide_images'] ?>" >
			<input type="file" name="slide_images[]" class="form-control" id="slide_images" >
		</fieldset>
		
		<?php endforeach ?>

		<fieldset class="form-group">
			<input type="submit" name="submit" class="form-control btn btn-outline-info" id="Edit" value="Edit" >
		</fieldset>
	</form>
			</div>
		</div>
	</div>


</body>
</html>