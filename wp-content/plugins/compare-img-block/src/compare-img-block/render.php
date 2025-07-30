<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<image-compare <?php echo get_block_wrapper_attributes(); ?>>
<?php 
if ( ! empty( $attributes['imageUrlOne'] ) && ! empty( $attributes['imageUrlTwo'] ) ) {
    $imgone = $attributes['imageUrlOne'];
	$imgtwo = $attributes['imageUrlTwo'];
	$Altone = $attributes['imageAltOne'];
	$Alttwo = $attributes['imageAltTwo'];
} else {
	$imgone = 'https://placehold.co/600x400.png';
	$imgtwo = 'https://placehold.co/600x400.png';
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
