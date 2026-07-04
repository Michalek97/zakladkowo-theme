<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="site-branding">

	<?php

	if ( has_custom_logo() ) {

		the_custom_logo();

	} else {
		?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php bloginfo( 'name' ); ?>

		</a>

		<?php
	}

	?>

</div>