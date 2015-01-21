<!doctype html>
<html><!-- InstanceBegin template="/Templates/tempForPortfolio.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>
<?php
//echo var_export(Contact::$data['title'],TRUE);
echo $title;
?>
</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="<?php echo base_url().'/css/style.css'?>" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/currentPage.js"></script>
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" --><!-- InstanceEndEditable -->
<div id="navTop">
	<nav  id="mainMenu">
        <ul>
            <?php 
                if($this->session->userdata('authorized'))
                {
            ?>
                <li><a href="<?php echo site_url('admin/logout'); ?>" id="login">Logout</a></li>
                <li><a href="<?php echo site_url('admin/personal'); ?>" id="login">Admin</a></li>
            <?php        
                }
                else
                {
            ?>
                <li><a href="<?php echo site_url('admin'); ?>" id="login">Login</a></li>
            <?php
                }
            ?>
            <li><a href="<?php echo base_url().'index.html'; ?>" class="menu">&nbsp;Home&nbsp;</a></li>
            <li><a href="<?php echo base_url().'portfolio.html';?>" class="menu">&nbsp;Portfolio&nbsp;</a></li>
            <li><a href="<?php echo base_url().'resume.html';?>" class="menu">&nbsp;Resume&nbsp;</a></li>
            <li><a href="<?php echo base_url().'portfolio.html';?>" class="menu">&nbsp;HTML/CSS&nbsp;</a></li>
            <li><a href="<?php echo base_url().'javascript.html';?>" class="menu">&nbsp;JavaScript&nbsp;</a></li>
            <li><a href="<?php echo site_url('contact'); ?>" class="menu">&nbsp;Contact&nbsp;</a></li>
            <li><a href="<?php echo site_url('blog'); ?>" class="menu">&nbsp;Blog&nbsp;</a></li>

            <?php 
                if($this->session->userdata('authorized')):
            ?>
                <li><a href="<?php echo site_url('admin/calendar'); ?>" class="menu">&nbsp;Calendar&nbsp;</a></li>
            <?php endif; ?>

            <li><a href="https://www.facebook.com/profile.php?id=100003341051989"><img src="<?php echo base_url().'/images/facebook.png'; ?>" alt="facebook" class="social" /></a></li>
            <li><a href="https://twitter.com/LeshanTodd"><img src="<?php echo base_url().'/images/Twitter_logo_blue.png'; ?>" alt="twitter" class="social" /></a></li>
        </ul>
	</nav>
</div>

<header>
    	<h1 id="name">NIMING LI</h1>
        <h3 id="subtitle">WEB DEVELOPER</h3>
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttps://www.facebook.com/profile.php?id=100003341051989&amp;layout=button_count&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;" ><a href="https://www.facebook.com/profile.php?id=100003341051989" class="fbook">https://www.facebook.com/profile.php?id=100003341051989</a></iframe>
</header>