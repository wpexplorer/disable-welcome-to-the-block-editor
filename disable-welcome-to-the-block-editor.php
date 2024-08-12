<?php

/*
 * Plugin Name: Disable "Welcome to the Block Editor"
 */

defined( 'ABSPATH' ) || exit;

if ( is_admin() ) {

  function disable_welcome_to_the_block_editor() {
  	?>
  	<script>
  		window.onload = (event) => {
  			wp.data && wp.data.select( 'core/edit-post' ).isFeatureActive( 'welcomeGuide' ) && wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'welcomeGuide' );
  		};
  	</script>
  	<?php
  }
  add_action( 'admin_head-post.php', 'disable_welcome_to_the_block_editor' );
  add_action( 'admin_head-post-new.php',  'disable_welcome_to_the_block_editor' );
  add_action( 'admin_head-edit.php', 'disable_welcome_to_the_block_editor' );

}
