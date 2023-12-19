<?php
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <footer>
        <div class="first-footer">
            <ul>
                <li>
                    <h4><?php echo esc_html('Los Angeles'); ?></h4>
                    <p>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                    </p>
                </li>
                <li>
                    <h4><?php echo esc_html('San Francisco'); ?></h4>
                    <p>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                    </p>
                </li>
                <li>
                    <h4><?php echo esc_html('New York'); ?></h4>
                    <p>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                    </p>
                </li>
                <li>
                    <h4><?php echo esc_html('Follow Us'); ?></h4>
                    <p>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                        <?php echo esc_html('Lorem ipsum dolor sit.'); ?>
                    </p>
                </li>
            </ul>
        </div>
        <div class="second-footer">
            <p><?php echo esc_html('© 2017. Created by robirurk.'); ?></p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>
