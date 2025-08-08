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
        <InspectorControls>
            <PanelBody title={ __( 'Instructions', 'timeline-block' ) }>

            </PanelBody>
        </InspectorControls>
        <div { ...useBlockProps() }>		




<div class='container'>
  <div class='timeline'>
    <div class='start'></div>
  </div>
  <div class='entries'>
    <InnerBlocks />
    
  </div>
</div>















        </div>
    </>
    );
}



