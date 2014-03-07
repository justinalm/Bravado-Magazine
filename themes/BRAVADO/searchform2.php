<?php
/**
 * The template for displaying search forms in BRAVADO MAGAZINE
 *
 * @package WordPress
 * @subpackage BRAVADO MAGAZINE 1.0
 * @since BRAVADO MAGAZINE 1.0
 */
?>
	<form method="get" id="searchform2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text2"><?php _e( '', 'BRAVADO' ); ?></label>
		<input type="text" class="field2" name="s" id="s2" placeholder="<?php esc_attr_e( 'SEARCH', 'BRAVADO' ); ?>" />
		<input type="submit" class="submit2" name="submit" id="searchsubmit2" value="<?php esc_attr_e( 'SEARCH', 'BRAVADO' ); ?>" />
	</form>
