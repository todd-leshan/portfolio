<div id="wrapper">

<?php
if($blogs == NULL)
{
	echo $error2;
}
else
{
	$blogs = array_reverse($blogs);
	foreach($blogs as $blog):
		$blog    = get_object_vars($blog);
		$title   = $blog['title'];
		$content = $blog['content'];
		$content = str_replace("\n","<br>",$content);
		$date    = $blog['date'];
?>
	<h3>
		<?php echo $title; ?>
	</h3>
	<p>
		<?php echo $date; ?>
	</p>
	<p>
		<?php echo $content; ?>
	</p>
	<hr>
<?php
	endforeach;
}
?>
</div>