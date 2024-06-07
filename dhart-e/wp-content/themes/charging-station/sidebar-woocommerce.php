<?php
/**
 * side bar template
 *
 * @package Charging Station
 */
?>
<?php if ( ! is_active_sidebar( 'chargingstation-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('chargingstation-woocommerce-sidebar'); ?>
	</div>
</div>