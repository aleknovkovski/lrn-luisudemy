<?php

function up_search_form_render_cb($atts): string {
	$bgColor   = esc_attr( $atts['bgColor'] );
	$textColor = esc_attr( $atts['textColor'] );
	$styleAttr = "background-color:{$bgColor};color:{$textColor};";

	ob_start();
	?>
    <div class="wp-block-udemy-plus-search-form" style="<?= $styleAttr?>">
        <h1>Search: Your search term here</h1>
        <form>
            <input type="text" placeholder="Search"/>
            <div class="btn-wrapper">
                <button type="submit" style="<?= $styleAttr?>">Search</button>
            </div>
        </form>
    </div>
	<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}