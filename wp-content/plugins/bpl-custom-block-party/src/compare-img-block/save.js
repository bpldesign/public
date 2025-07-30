import { useBlockProps } from '@wordpress/block-editor';
export default function save( { attributes } ) {
    const { imageUrlOne, imageAltOne, imageUrlTwo, imageAltTwo } = attributes;
let one = imageUrlOne ;
let two = imageUrlTwo ;

let oneAlt = imageAltOne || 'Image One';
let twoAlt = imageAltTwo || 'Image Two';
    return (
        <image-compare { ...useBlockProps.save() }>
             <img
                    src={ one }
                    alt={ oneAlt }
					width={ "3584"}
					height={ "3584"}
                />
                <img
                    src={ two }
                    alt={ twoAlt }
					width={ "3584"}
					height={ "3584"}
                />
        </image-compare>
    );
}