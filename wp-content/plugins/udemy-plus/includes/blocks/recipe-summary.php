<?php

function up_recipe_summary_render_cb($atts, $content, $block) {
    $prepTime = isset( $atts['prepTime']) ? esc_html($atts['prepTime']) : '';
    $cookTime = isset( $atts['cookTime']) ? esc_html($atts['cookTime']) : '';
    $course = isset( $atts['course']) ? esc_html($atts['course']) : '';

	$postID = $block->context['postId'];
	$postTerms = get_the_terms($postID, 'cuisine');
	$postTerms = is_array($postTerms) ? $postTerms : [];

	$cuisines = '';
	foreach ($postTerms as $term) {
		$url = get_term_meta($term->term_id, 'more_info_url', true);
		$cuisines .= "<a href='{$url}' target='_blank'>{$term->name}</a>";
	}

    ob_start();
    ?>

    <div class="wp-block-udemy-plus-recipe-summary">
        <i class="bi bi-alarm"></i>
        <div class="recipe-columns-2">
            <div class="recipe-metadata">
                <div class="recipe-title">
                    <?php _e('Prep Time', 'udemy-plus'); ?>
                </div>
                <div class="recipe-data recipe-prep-time">
                    <?php echo $prepTime; ?>
                </div>
            </div>
            <div class="recipe-metadata">
                <div class="recipe-title">
                    <?php _e('Cook Time', 'udemy-plus'); ?>
                </div>
                <div class="recipe-data recipe-cook-time">
                    <?php echo $cookTime; ?>
                </div>
            </div>
        </div>
        <div class="recipe-columns-2-alt">
            <div class="recipe-columns-2">
                <div class="recipe-metadata">
                    <div class="recipe-title">
                        <?php _e('Course', 'udemy-plus'); ?>
                    </div>
                    <div class="recipe-data recipe-course">
                        <?php echo $course; ?>
                    </div>
                </div>
                <div class="recipe-metadata">
                    <div class="recipe-title">
                        <?php _e('Cuisine', 'udemy-plus'); ?>
                    </div>
                    <div class="recipe-data recipe-cuisine">
	                    <?php echo $cuisines; ?>
                    </div>
                </div>
                <i class="bi bi-egg-fried"></i>
            </div>
            <div class="recipe-metadata">
                <div class="recipe-title">
                    <?php _e('Rating', 'udemy-plus'); ?>
                </div>
                <i class="bi bi-hand-thumbs-up"></i>
            </div>
        </div>
    </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();
    
    return $output;
}