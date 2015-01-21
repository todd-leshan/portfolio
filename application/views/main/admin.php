<div id="wrapper">

<form id="addBlog" action="<?php echo site_url('admin/addBlog'); ?>" method="post">
	<h3>Post new article:</h3>
	<span class="error">
		<?php echo validation_errors(); ?>
	</span>
	<br>
	<label for="title">Title:</label>
	<textarea name="title" id="title" required cols="90" rows="5"></textarea>
	<br>
	<label for="content">Content:</label>
	<textarea name="content" id="content" required cols="90" rows="20"></textarea>
	<br>
	<button type="submit" name="post" id="post">Post</button>
</form>
<br>
	<div id="manage">
		<a href="<?php echo site_url('admin/manageMessage'); ?>">Manage Message</a>
		<a href="<?php echo site_url('admin/manageBlog'); ?>">Manage Blog</a>
	</div>
</div>