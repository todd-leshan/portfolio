<div id="wrapper">

<div id="message">
<?php
if($messages == NULL)
{
    echo $error1;
}else
{
    //$messages =  array_reverse($messages);
    foreach($messages as $message)
    {
        $message = get_object_vars($message);
        $id      = $message['messageID'];
        $name    = $message['name'];
        $content = $message['message'];
        $date    = $message['date'];
?>
<p>
    <span class="manage_delete"><a href="<?php echo site_url().'admin/deleteMessage/'.$id;?>">Delete?</a></span>
    <span id="name"><?php echo $name; ?></span>
    &nbsp -- &nbsp
    <?php echo $date; ?>
</p>
<h4>
    <?php echo $content; ?>
</h4>
<hr>
<?php
    }
}
if(strlen($pagination)):
?>

    <div id="pagination">
    <?php
    echo $pagination;
    ?>
    </div>
<?php
endif;   
?>
</div>

</div>