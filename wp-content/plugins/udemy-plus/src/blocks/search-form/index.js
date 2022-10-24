import {registerBlockType} from "@wordpress/blocks";
import block from "./block.json";
import './main.css'
import icons from "../../icons";

registerBlockType(block.name, {
    icon: icons.primary,
    edit() {
        return (
            <div className="wp-block-udemy-plus-search-form">
                <h1>Search: Your search term here</h1>
                <form>
                    <input type="text" placeholder="Search"/>
                    <div className="btn-wrapper">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
        );
    },
});