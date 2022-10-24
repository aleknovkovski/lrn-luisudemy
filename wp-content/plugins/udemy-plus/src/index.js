import {registerBlockType} from '@wordpress/blocks'
import block from './block.json'
import {RichText, useBlockProps, InspectorControls} from '@wordpress/block-editor'
import {__} from '@wordpress/i18n'
import './main.css'

registerBlockType(block.name, {
    edit({attributes, setAttributes}) {
        const {content} = attributes
        const blockProps = useBlockProps()
        console.dir(attributes)
        return (<>
            <InspectorControls>
                Dummy Content
            </InspectorControls>
            <div {...blockProps}>
                <RichText
                    allowedFormats={['core/bold', 'core/italic']}
                    className="fancy-header"
                    tagName="h2"
                    placeholder={__('Enter Heading', 'udemy-plus')}
                    value={content}
                    onChange={(newValue, oldValue) => {
                        setAttributes({content: newValue})
                    }}
                />
            </div>
        </>)
    }, save({attributes}) {
        const {content} = attributes
        const blockProps = useBlockProps.save({
            className: 'fancy-header'
        })

        return (<RichText.Content
                {...blockProps}
                tagName="h2"
                value={content}
            />)
    }
})