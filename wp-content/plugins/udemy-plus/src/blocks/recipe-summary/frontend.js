import { render, useState } from '@wordpress/element'
import Rating from "@mui/material/Rating/index.js";
import apiFetch from '@wordpress/api-fetch';

function RecipeRating(props) {
    const [avgRating, setAvgRating] = useState(props.avgRating);
    const [permission, setPermission] = useState(props.loggedIn);

    return <Rating
        value={avgRating}
        precision={0.5}
        onChange={ async (event, rating) => {
            if (!permission) {
                alert("You have already rated this recipe, or you may need to login")
            } else {
                alert("Permitted to change!")
                await apiFetch({
                    // will go to yourdomain.com/wp-json/up/v1/rate
                    path: 'up/v1/rate',
                    method: 'POST',
                    data: {
                        postID: props.postID,
                        rating: rating
                    }
                })
            }
            setPermission(false);
        }}
    />;
}

document.addEventListener("DOMContentLoaded", () => {
    const block = document.querySelector("#recipe-rating");
    const postID = parseInt(block.dataset.postId);
    const avgRating = parseFloat(block.dataset.avgRating);
    const ratingCount = !!parseInt(block.dataset.ratingCount);
    const loggedIn = !!block.dataset.loggedIn;

    render(
        <RecipeRating
            postID={postID}
            avgRating={avgRating}
            loggedIn={loggedIn}
            ratingCount={ratingCount}
        />
        , block);
});
