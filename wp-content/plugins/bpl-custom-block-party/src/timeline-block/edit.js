/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody } from '@wordpress/components';


export default function Edit( props ) {


    return (
    <>
        <div { ...useBlockProps() }>		
			<div class='entry'>
			<div class='dot'></div>
			<div class='label'>
				<InnerBlocks/>
			</div>
			</div>
		</div>
    </>
    );
}



