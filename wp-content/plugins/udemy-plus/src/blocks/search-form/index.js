import {registerBlockType} from "@wordpress/blocks";
import block from "./block.json";
import './main.css'
import icons from "../../icons";

registerBlockType(block.name, {
    icon: icons.primary,
    edit() {
        return <p>Search Form</p>;
    },
});