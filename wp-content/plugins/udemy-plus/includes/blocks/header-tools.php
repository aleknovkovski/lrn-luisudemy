<?php

function up_header_tools($atts) {
	ob_start(); ?>
    <div class="wp-block-udemy-plus-header-tools">
        Hello World!
    </div>
	<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}