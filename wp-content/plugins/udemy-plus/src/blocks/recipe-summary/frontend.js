import { render } from '@wordpress/element'

function RecipeRating() {
    return "Rendered by REACT"
}

document.addEventListener("DOMContentLoaded", () => {
    const block = document.querySelector("#recipe-rating");
    const postID = parseInt(block.dataset.postId);
    const avgRating = parseFloat(block.dataset.avgRating);
    const loggedIn = !!block.dataset.loggedIn;
    console.log(postID, avgRating, loggedIn);

    render(
        <RecipeRating/>, block);
});
