import { registerBlockType } from '@wordpress/blocks'
import block from './block.json'
import {RichText} from '@wordpress/block-editor'
import {__} from '@wordpress/i18n'

registerBlockType(block.name, {
    edit(props) {
        console.dir(props)
        return <RichText
            tagName="h2"
            placeholder={__('Enter Heading', 'udemy-plus')}
            value={props.attributes.content}
            onChange={(newValue, oldValue) => {
                props.setAttributes({ content: newValue})
            }
            }
        />
    }
})