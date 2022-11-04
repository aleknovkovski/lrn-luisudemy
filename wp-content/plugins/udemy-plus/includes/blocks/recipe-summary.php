<?php

function up_recipe_summary_render_cb($atts) {
    $prepTime = isset( $atts['prepTime']) ? esc_html($atts['prepTime']) : '';
    $cookTime = isset( $atts['cookTime']) ? esc_html($atts['cookTime']) : '';
    $course = isset( $atts['course']) ? esc_html($atts['course']) : '';

    ob_start();
    ?>


    <?php
    $output = ob_get_contents();
    ob_end_clean();
    
    return $output;
}