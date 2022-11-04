import { render, useState } from '@wordpress/element'

function RecipeRating(props) {
    const [avgRating, setAvgRating] = useState(props.avgRating);

    return avgRating
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
