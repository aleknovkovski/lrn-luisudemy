import {registerBlockType} from "@wordpress/blocks";
import {useBlockProps, InspectorControls, PanelColorSettings,} from "@wordpress/block-editor";
import {__} from "@wordpress/i18n";
import './main.css'
import block from "./block.json";
import icons from "../../icons";

registerBlockType(block.name, {
    icon: icons.primary,
    
    edit({attributes, setAttributes}) {
        const {bgColor, textColor} = attributes;
        const blockProps = useBlockProps();
        return (<div {...blockProps}>
            <h1>Search: Your search term here</h1>
            <form>
                <input type="text" placeholder="Search"/>
                <div className="btn-wrapper">
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>);
    },
});