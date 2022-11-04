import { render, useState } from '@wordpress/element'
import Rating from "@mui/material/Rating/index.js";

function RecipeRating(props) {
    const [avgRating, setAvgRating] = useState(props.avgRating);
    const [permission, setPermission] = useState(props.loggedIn);

    return <Rating
        value={avgRating}
        precision={0.5}
        onChange={ () => {
            if (!permission) {
                alert("You have already rated this recipe, or you may need to login")
            } else {
                alert("Permitted to change!")
            }
            setPermission(false);
        }}
    />;
}

document.addEventListener("DOMContentLoaded", () => {
    const block = document.querySelector("#recipe-rating");
    const postID = parseInt(block.dataset.postId);
    const avgRating = parseFloat(block.dataset.avgRating);
    const loggedIn = !!block.dataset.loggedIn;
    console.log(postID, avgRating, loggedIn);

    render(
        <RecipeRating
            postID={postID}
            avgRating={avgRating}
            loggedIn={loggedIn}
        />
        , block);
});
