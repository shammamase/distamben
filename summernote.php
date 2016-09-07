<!DOCTYPE html>
<html lang="en">
<!-- include libries(jQuery, bootstrap, fontawesome) -->

 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css.css">
 	<link rel="stylesheet" type="text/css" href="css/jsdatepick.css" />
 	<link rel="stylesheet" href="summernote/summernote.css">
	<script type="text/javascript" src="js/jsdatepick.js"></script>
 	<script type="text/javascript" src="bootstrap/jquery-2.2.0.min.js"></script>
 	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="summernote/summernote.min.js"></script>
<body>
<div class="summernote container">
	<div class="row">
		<div class="span12">
			<h2>POST DATA</h2>
			<pre>
			<?php print_r($_POST); ?>
			</pre>
			<pre>
			<?php echo htmlspecialchars($_POST['content']); ?>
			</pre>
		</div>
	</div>
	<div class="row">
		<form class="span12" id="postForm" action="/summernote.php" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
			<fieldset>
				<legend>Make Post</legend>
				<p class="container">
					<textarea class="input-block-level" id="summernote" name="content" rows="18">
					</textarea>
				</p>
			</fieldset>
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button type="button" id="cancel" class="btn">Cancel</button>
		</form>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#summernote').summernote({
		height: "500px"
	});
});
var postForm = function() {
	var content = $('textarea[name="content"]').html($('#summernote').code());
}
</script>
</body>
</html>