import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	BlockControls,
	ColorPalette,
    InspectorControls,
	__experimentalBlockAlignmentMatrixToolbar as BlockAlignmentMatrixToolbar,
	BlockAlignmentToolbar
} from '@wordpress/block-editor';
import './editor.scss';
import { TextControl } from '@wordpress/components';
export default function Edit({ attributes, setAttributes ,isSelected, clientId}) {

	const blockProps = useBlockProps( {
		style: {'text-align':attributes.textAlign ,backgroundColor: attributes.bg_color,
		color: attributes.text_color}
		
	  } );
	  const onChangeBGColor = ( hexColor ) => {
		setAttributes( { bg_color: hexColor } );
	  };

	const onChangeTextColor = ( hexColor ) => {
		setAttributes( { text_color: hexColor } );
	};
	return (
		<p {...blockProps}>
		
			{
				
			    <BlockControls>
					<BlockAlignmentToolbar 
					value={ attributes.textAlign }
					onChange={ ( nextAlign ) => {
					     setAttributes( { textAlign: nextAlign } );
					} } />	 	 
				</BlockControls>
			}
            { attributes.message }

			  <InspectorControls key="setting">
                    <div id="gutenpride-controls">
                        <fieldset>
                            <legend className="blocks-base-control__label">
                                { __( 'Background color', 'gutenpride' ) }
                            </legend>
                            <ColorPalette // Element Tag for Gutenberg standard colour selector
                                onChange={ onChangeBGColor } // onChange event callback
                            />
                        </fieldset>
                        <fieldset>
                            <legend className="blocks-base-control__label">
                                { __( 'Text color', 'gutenpride' ) }
                            </legend>
                            <ColorPalette // Element Tag for Gutenberg standard colour selector
                                onChange={ onChangeTextColor } // onChange event callback
                            />
                        </fieldset>
						<fieldset>
						<TextControl
                    value={ attributes.message }
                    onChange={ ( val ) => setAttributes( { message: val } ) }
                    
                />
                        </fieldset>
                    </div>
                </InspectorControls>
			
		</p>
	);
}