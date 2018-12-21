<?php
$tracking = happyforms_get_tracking();
$status = $tracking->get_status();
?>

<div class="wrap">
	<h1><?php _e( 'Welcome to HappyForms!', 'happyforms' ); ?></h1>

	<div id="welcome-panel" class="welcome-panel happyforms-welcome-panel">
		<div class="welcome-panel-content">
			<?php if ( 3 === intval( $status['status'] ) ) {
				$tracking->print_template( 'success' );
			} else { ?>
				<h2><?php _e( 'Setup communication', 'happyforms' ); ?></h2>
				<form action="<?php echo esc_attr( $tracking->monitor_action ); ?>" method="post" id="happyforms-tracking">
					<p class="about-description"><?php _e( 'Just one more step before you get started:', 'happyforms' ); ?></p>
					<p><?php _e( 'Let\'s set up HappyForms! Enter your email below to agree to notification and to share some data about your usage with', 'happyforms' ); ?> <a href="https://thethemefoundry.com" target="_blank">thethemefoundry.com</a></p>
					<input name="<?php echo esc_attr( $tracking->monitor_email_field ); ?>" type="email" placeholder="<?php _e( 'Email address', 'happyforms' ); ?>" required >
					<input name="<?php echo esc_attr( $tracking->monitor_status_field ); ?>" type="hidden" value="active" />
					<button type="submit" class="button button-primary button-hero"><?php _e( 'Allow and set up HappyForms', 'happyforms' ); ?></button>
				</form>
			<?php } ?>
		</div>
		<div class="welcome-panel-theme"></div>
	</div>

	<?php if ( 2 === $status['status'] ) : ?>
	<p class="welcome-panel-footer">
		<?php _e( 'Or, skip this step and ', 'happyforms' ); ?> <a href="<?php echo happyforms_get_all_form_link(); ?>" id="happyforms-tracking-skip"><?php _e( 'continue', 'happyforms' ); ?></a>
	</p>
	<?php endif; ?>
</div>
