<p style="float:left;">&copy; 2012 Harrogate Flooring Co. Ltd.</p>
<?php
echo wp_nav_menu(array(
	'menu'=>'FooterMenu',
	'container' => ''
));
?>
<?php if(is_front_page()) : ?>
<a href="http://www.justwoodworktops.com/">JustWoodWorktops.com</a>
<?php endif; ?>
