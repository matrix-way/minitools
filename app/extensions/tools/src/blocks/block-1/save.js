import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save( {attributes} ) {
	const blockProps = useBlockProps.save();

	return (
		<p {...blockProps} style={ {
			backgroundColor: attributes.bg_color,
			color: attributes.text_color,
			'textAlign' : attributes.textAlign
		} }>
			
			{ attributes.message }
			
		</p>
	);
}