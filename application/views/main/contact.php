<div id="wrapper">
<!-- InstanceBeginEditable name="EditRegion3" -->
<form id="contact" action="<?php echo site_url().'/contact/addMessage'?>" method="post">
<fieldset>
<legend>Leave a message:</legend>
<span>Fields with * must be filled</span>
<span class="error">
    <?php echo validation_errors(); ?>
</span>
<br>
	<div class="contact">
    	<label for="txtName">*Your Name:</label>
        <input type="text" id="txtName" name="txtName" required />
        <span id="error1" class="error"></span>
    </div>
    <div class="contact">
    	<label for="txtPhone">Phone number:</label>
        <input type="text" id="txtPhone" name="txtPhone" />
        <span id="error2" class="error"></span>
    </div>
    <div class="contact">
    	<label for="txtEmail">Email:</label>
        <input type="email" id="txtEmail" name="txtEmail" />
        <span id="error3" class="error"></span>
    </div>
    <div class="contact">
    	<label for="txtComment">*Comment:</label>
    	<textarea name="txtComment" id="txtComment" cols="42" rows="5" placeholder="Please leave a message here......"></textarea><span id="error4" class="error"></span>
    </div>
    <div>
    	<input type="submit" id="btnSubmit" value="Send">
        <input type="reset" id="btnReset" value="Clear">
    </div>
</fieldset>
</form>
<script src="js/contact.js"></script>

<h3 class="personal-contact">Personal Contact</h3>
<h4>Tel:</h4>
<p>0466666666</p>
<h4>Email:</h4>
<p>example@example.com</p>
<hr>
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
        $name    = $message['name'];
        $content = $message['message'];
        $date    = $message['date'];
?>
<p>
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
?>

    <div id="pagination">
    <?php
    echo $this->pagination->create_links();
    ?>
    </div>
</div>
<!-- InstanceEndEditable -->
</div>