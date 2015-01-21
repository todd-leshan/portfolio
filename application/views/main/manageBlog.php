<div id="wrapper">

<?php
if($blogs == NULL || $blogs == false)
{
	echo $error2;
}
else if(count($blogs) == 1)
{
	//$blog = get_object_vars($blogs[0]);
	$blog = $blogs[0];
?>
<div id="blog">
	<div id="blog_nav">
<?php
	$maxID = $this->session->userdata('maxID');
	$minID = $this->session->userdata('minID');
	if($minID != $blog->blogID):
?>
		<a href="<?php echo site_url().'blog/getPrev/'.$blog->blogID; ?>">Prev</a>
<?php
	endif;
?>
		<a href="<?php echo site_url('admin/manageBlog'); ?>">List</a>
<?php 
	if($maxID != $blog->blogID)
	{
?>
		<a href="<?php echo site_url().'blog/getNext/'.$blog->blogID; ?>">Next</a>
<?php
	}
	else
	{
?>
		<a class="hidden" href="<?php echo site_url().'blog/getNext/'.$blog->blogID; ?>">Next</a>
<?php
	}
?>
	</div>
	<h3>
		<span class="manage_delete"><a href="<?php echo site_url().'admin/deleteBlog/'.$blog->blogID;?>">Delete?</a>
		</span>
		<?php echo $blog->title; ?>
	</h3>
	<p>
		<?php echo $blog->date; ?>
	</p>
	<p>
		<?php echo str_replace("\n","<br>",$blog->content); ?>
	</p>
</div>
<?php
}
else
{
	foreach($blogs as $blog):
		$blog    = get_object_vars($blog);
		$blogID  = $blog['blogID'];
		$title   = $blog['title'];
		$content = $blog['content'];
		$content = str_replace("\n","<br>",$content);
		$date    = $blog['date'];
?>
<div class="blog_list">
	<span class="manage_delete"><a href="<?php echo site_url().'admin/deleteBlog/'.$blogID;?>">Delete?</a>
	</span>
	<h3>
		<a href="<?php echo site_url().'blog/read/'.$title; ?>"><?php echo $title; ?></a>
	</h3>
	<p>
		<?php echo $date; ?>
	</p>
	<p>
		<?php echo $content; ?>
	</p>
</div>
<p id="more">
	click to see more...
</p>
	<hr>
<?php
	endforeach;
}
?>
</div>