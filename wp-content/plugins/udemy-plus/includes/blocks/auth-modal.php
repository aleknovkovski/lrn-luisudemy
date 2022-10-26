<?php

function up_auth_modal_render_cb($atts) {
	ob_start(); ?>

        <h1>
		    Helooo World!
        </h1>

	<?php $output = ob_get_contents();
	ob_end_clean();
	return $output;
}