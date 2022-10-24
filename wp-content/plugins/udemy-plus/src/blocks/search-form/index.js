import { registerBlockType } from "@wordpress/blocks";
import block from "./block.json";
import './main.css'

registerBlockType(block.name, {
    edit() {
        return <p>Search Form</p>;
    },
});