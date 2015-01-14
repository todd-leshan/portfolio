<div id="wrapper">

<form id="addBlog" action="<?php echo site_url().'/admin/addBlog'; ?>" method="post">
	<h3>Post new article:</h3>
	<span class="error">
		<?php echo validation_errors(); ?>
	</span>
	<br>
	<label for="title">Title:</label>
	<input type="text" name="title" id="title" maxlength="30" required>
	<br>
	<label for="content">Content:</label>
	<textarea name="content" id="content" required cols="90" rows="20"></textarea>
	<br>
	<button type="submit" name="post" id="post">Post</button>
</form>
<div><a href="<?php echo site_url().'admin/manageMessage'; ?>">Manage Message</a></div>
</div>