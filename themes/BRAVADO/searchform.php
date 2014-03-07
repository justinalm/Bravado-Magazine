<?php
/**
 * The template for displaying search forms in BRAVADO MAGAZINE
 *
 * @package WordPress
 * @subpackage BRAVADO MAGAZINE 1.0
 * @since BRAVADO MAGAZINE 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( '', 'BRAVADO' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'SEARCH', 'BRAVADO' ); ?>" />
	</form>
