import { registerBlockType } from '@wordpress/blocks';
import {
    useBlockProps,
    RichText
} from '@wordpress/block-editor';
import { __ } from "@wordpress/i18n";
import icons from '../../icons.js'
import './main.css'

registerBlockType('udemy-plus/page-header', {
    icon: icons.primary,
    edit() {
        const blockProps = useBlockProps();

        return (
            <>
                <div { ...blockProps }>
                    Page Header
                </div>
            </>
        );
    }
});
