<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<image-compare <?php echo esc_html(get_block_wrapper_attributes()); ?>>
<?php 
$dir = plugin_dir_path( __FILE__ );
if ( ! empty( $attributes['imageUrlOne'] ) && ! empty( $attributes['imageUrlTwo'] ) ) {
    $imgone = $attributes['imageUrlOne'];
	$imgtwo = $attributes['imageUrlTwo'];
} else {
	$imgone = plugins_url('/imgs/placeholder.jpeg', __FILE__);
	$imgtwo = 'https://placehold.co/600x400.png';
}
if( ! empty( $attributes['imageAltOne'] ) && ! empty( $attributes['imageAltTwo'] ) ) {
	$Altone = $attributes['imageAltOne'];
	$Alttwo = $attributes['imageAltTwo'];
} else {
	$Altone = 'Place holder image one';
	$Alttwo = 'Place holder image two';
}
?>

	<img src="<?php echo esc_html($imgone); ?>"  
					alt="<?php echo esc_html($Altone); ?>"
					width="3584"
					height="3584"/>
	<img src="<?php echo esc_html($imgtwo); ?>"  
					alt="<?php echo esc_html($Alttwo); ?>"
					width="3584"
					height="3584"/>

</image-compare>
