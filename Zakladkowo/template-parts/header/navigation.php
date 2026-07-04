<nav class="main-navigation">

	<?php

	wp_nav_menu( array(

		'theme_location' => 'primary',

		'container'      => false,

		'menu_class'     => 'main-menu',

		'fallback_cb'    => false,

	) );

	?>

</nav>