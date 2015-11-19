	<?php
$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => 'mainMenuNav',
	'container_id'    => '',
	'menu_class'      => 'menuBox',
	'menu_id'         => 'nav',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
?>
	
	
	
	
	<div class = "mainMenu">
		<div class = "mainMenuContent">
			<div class = "mainMenuLan">
				<div class = "menuBox" id = "ln"><a href ="#">EE</a></div>
				<div class = "menuBox" id = "ln"><a href ="#">EN</a></div>
				<div class = "menuBox" id = "ln"><a href ="#">RU</a></div>
			</div>

		<?php wp_nav_menu($defaults); ?> 
		</div>
	</div>
					