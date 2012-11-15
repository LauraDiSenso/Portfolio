<?php get_header();?>

<div id="head">
<h1> Yes! This is <a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a> </h1>
<h2>  <?php $subtitle = get_option('tmp_subtitle'); echo ($subtitle); ?></h2>
</div>

<div id="subhead">
<h3> stay in touch </h2>
</div>

<div id="content">
<div id="rssbox">
			<a href="<?php bloginfo('rss2_url'); ?>"><img style="vertical-align:middle" src="<?php bloginfo('template_url'); ?>/images/rss.png" alt="Subscribe to <?php bloginfo('name'); ?>" /></a>
</div>

<div class="feed">

<?php $feed = get_option('tmp_feed')?>
	
<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo($feed); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
<input type="text" class="input" value="SUBSCRIBE VIA EMAIL..." onfocus="if (this.value == 'SUBSCRIBE VIA EMAIL...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SUBSCRIBE VIA EMAIL...';}" name="email"/>
<input type="hidden" value="<?php echo($feed); ?>" name="uri"/>
<input type="submit" class="sbutton" value="Submit"  />
</form>
	
</div>

<div class="twitter">

<?php $twit = get_option('tmp_twit')?>
<a href="http://twitter.com/<?php echo($twit); ?>"> FOLLOW US ON TWITTER </a>
	
</div>

<div class="adminlogin">
<a href="<?php bloginfo('url'); ?>/wp-admin">ADMIN LOGIN</a>
</div>

</div>


</div>
<div id="footer">
<p> TEMPSKIN BROUGHT TO YOU BY <a href="http://web2feel.com"> WEB2FEEL.COM</a> </p>
</div>
<?php wp_footer(); ?>
</body>
</html>