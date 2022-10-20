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
    <?php wp_body_open(); ?>

    <p>Helooo World!</p>

	<?php wp_footer(); ?>
    </body>
    </html>

<?php

?>
