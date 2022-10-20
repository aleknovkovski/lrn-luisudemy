<?php
$charset = get_bloginfo( 'charset' );
?>

    <!doctype html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?= $charset ?>">
		<?php wp_head(); ?>
    </head>
    <body <?php body_class('example')?>>
    <p>Helooo World!</p>

	<?php wp_footer(); ?>
    </body>
    </html>

<?php

?>
