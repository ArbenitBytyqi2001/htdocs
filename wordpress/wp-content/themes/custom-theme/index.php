<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_header(); ?>
    <div class="business-theme">
        <div class="first-business-theme">
            <h5>BUSINESS THEME</h5>
            <h1>
                <?php echo esc_html__('We Grow Up Your Business', 'your-theme-textdomain'); ?>
            </h1>
            <p>
                <?php echo esc_html__('We are a new Digital Agency Based in USA. We have over 10 years of combined experience, and know a thing or two about designing websites and mobile apps.', 'your-theme-textdomain'); ?>
            </p>
            <button id="get-in-touch-button"><?php echo esc_html__('GET IN TOUCH', 'your-theme-textdomain'); ?></button>
            <button id="buy-theme-button"><?php echo esc_html__('BUY THEME', 'your-theme-textdomain'); ?></button>
        </div>
        <div class="second-business-theme">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/business-theme.png" width="250px" alt="Logo">
        </div>
    </div>
    <div class="services">
        <div class="services-text">
            <h2><?php echo esc_html__('Over 10 years of combined experience, and know a thing or two about designing websites and mobile apps.', 'your-theme-textdomain'); ?></h2>
        </div>
        <div class="all-services-slider">
            <div class="first-service">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/first-service.png" alt="first-service"
                    width="150px">
                <h2><?php echo esc_html__('Web Development', 'your-theme-textdomain'); ?></h2>
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, officia', 'your-theme-textdomain'); ?></p>
            </div>
            <div class="second-service">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/second-service.png" alt="second-service">
                <h2><?php echo esc_html__('Web & UI/UX Design', 'your-theme-textdomain'); ?></h2>
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, officia', 'your-theme-textdomain'); ?></p>
            </div>
            <div class="third-service">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/third-service.png" alt="third-service">
                <h2><?php echo esc_html__('SEO & Marketing', 'your-theme-textdomain'); ?></h2>
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, officia', 'your-theme-textdomain'); ?></p>
            </div>
        </div>
    </div>
    <div class="our-mission">
        <div class="blank"></div>
        <div class="our-mission-text">
            <h2><?php echo esc_html__('Our Mission', 'your-theme-textdomain'); ?></h2>
            <p><?php echo esc_html__('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ipsum exercitationem repellat, culpa laboriosam quidem. Lorem ipsum dolor sit amet consectetur.', 'your-theme-textdomain'); ?></p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/signature.png" alt="Logo" width="300px">
        </div>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>

