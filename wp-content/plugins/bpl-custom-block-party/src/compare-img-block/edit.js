/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, InspectorControls } from '@wordpress/block-editor';
import { Button, PanelBody } from '@wordpress/components';


export default function Edit( props ) {
	const { attributes, setAttributes } = props;

	const imageUrlOne = attributes?.imageUrlOne;
	const imageAltOne = attributes?.imageAltOne || 'Place holder image one';

	const imageUrlTwo = attributes?.imageUrlTwo;
	const imageAltTwo = attributes?.imageAltTwo || 'Place holder image two';

    // Define onSelectImage handler to update attributes when an image is selected
    const onSelectImage = (media) => {
        setAttributes({
            imageUrlOne: media.url,
            imageAltOne: media.alt,
            imageIdOne: media.id,

        });
    };

	const onSelectImageTwo = (media) => {
        setAttributes({
			imageUrlTwo: media.url,
            imageAltTwo: media.alt,
            imageIdTwo: media.id,

        });
    };

    return (
	<>
        <InspectorControls>
			<PanelBody title={ __( 'Instructions', 'copyright-date-block' ) }>
				<MediaUploadCheck>
					<MediaUpload
						onSelect={ onSelectImage }
						allowedTypes={ ['image'] }
						value={ attributes.imageIdOne }
						render={ ( { open } ) => (
							<Button onClick={ open }>
								{ imageUrlOne ? 'Replace Image One' : 'Select Image One' }
							</Button>
						) }
					/>
					<MediaUpload
						onSelect={ onSelectImageTwo }
						allowedTypes={ ['image'] }
						value={ attributes.imageIdTwo }
						render={ ( { open } ) => (
							<Button onClick={ open }>
								{ imageUrlTwo ? 'Replace Image Two' : 'Select Image Two' }
							</Button>
						) }
					/>
				</MediaUploadCheck>
			</PanelBody>
		</InspectorControls>
        <div { ...useBlockProps() }>		
			<image-compare>
				{ imageUrlOne && (
					<img
						src={ imageUrlOne }
						alt={ imageAltOne }
						width={ "3584"}
						height={ "3584"}
					/>
					
				) }
			{ imageUrlTwo && (
					<img
						src={ imageUrlTwo }
						alt={ imageAltTwo }
						width={ "3584"}
						height={ "3584"}
					/>
					
				) }
			</image-compare>
        </div>
    </>
    );
}



