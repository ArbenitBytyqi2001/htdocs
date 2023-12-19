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
    <div class="missions">
        <div class="discussion">
            <h3><?php echo esc_html__('01. Discussion', 'your-theme-textdomain'); ?></h3>
            <p>
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste praesentium culpa, aspernatur maxime at odio!', 'your-theme-textdomain'); ?>
            </p>
        </div>
        <div class="development">
            <h3><?php echo esc_html__('02. Development', 'your-theme-textdomain'); ?></h3>
            <p>
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste praesentium culpa, aspernatur maxime at odio!', 'your-theme-textdomain'); ?>
            </p>
        </div>
        <div class="release-project">
            <h3><?php echo esc_html__('03. Release Project', 'your-theme-textdomain'); ?></h3>
            <p>
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste praesentium culpa, aspernatur maxime at odio!', 'your-theme-textdomain'); ?>
            </p>
        </div>
    </div>
    <div class="facts-about-us">
        <h1><?php echo esc_html__('Some Facts About Us', 'your-theme-textdomain'); ?></h1>
        <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus laboriosam odit velit esse? Facere modi impedit iure sed officiis quidem!', 'your-theme-textdomain'); ?></p>
        <div class="facts">
            <div class="projects-completed">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/projects-completed.png" alt="Logo">
                <div class="projects-completed-text">
                    <h2>548</h2>
                    <h4><?php echo esc_html__('Projects Completed', 'your-theme-textdomain'); ?></h4>
                </div>
            </div>
            <div class="working-hours">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/working-hours.png" alt="Logo">
                <div class="working-hours-text">
                    <h2>1465</h2>
                    <h4><?php echo esc_html__('Working Hours', 'your-theme-textdomain'); ?></h4>
                </div>
            </div>
            <div class="positive-feedbacks">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/positive-feedbacks.png" alt="Logo">
                <div class="positive-feedbacks-text">
                    <h2>612</h2>
                    <h4><?php echo esc_html__('Positive Feedbacks', 'your-theme-textdomain'); ?></h4>
                </div>
            </div>
            <div class="happy-clients">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/happy-clients.png" alt="Logo">
                <div class="happy-clients-text">
                    <h2>735</h2>
                    <h4><?php echo esc_html__('Happy Clients', 'your-theme-textdomain'); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="get-in-touch">
        <div class="get-in-touch-text">
            <h2><?php echo esc_html__('Want to work with us?', 'your-theme-textdomain'); ?></h2>
            <p><?php echo esc_html__('If you have any questions - please contact us via the contact form', 'your-theme-textdomain'); ?></p>
        </div>
        <button>
            <?php echo esc_html__('GET IN TOUCH', 'your-theme-textdomain'); ?>
        </button>
    </div><div class="main-industries">
        <div class="main-industries-text">
            <h1><?php echo esc_html__('Our main industries', 'your-theme-textdomain'); ?></h1>
            <h4><?php echo esc_html__('An award-winning design and development team that is proud of our work', 'your-theme-textdomain'); ?></h4>
            <ul>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <li>
                        <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing.', 'your-theme-textdomain'); ?></p>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <div class="main-industries-icons">
            <div class="web-development">
                <p><?php echo esc_html__('Web Development', 'your-theme-textdomain'); ?></p>
            </div>
            <div class="web-design">
                <p><?php echo esc_html__('Web Design', 'your-theme-textdomain'); ?></p>
            </div>
        </div>
    </div>
    <div class="logos">
        <?php
        $logo_images = array(
            'logo-one.png',
            'logo-two.png',
            'logo-three.png',
            'logo-fourth.png',
            'logo-fifth.png',
        );

        foreach ($logo_images as $logo) :
        ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/' . $logo; ?>" alt="Logo">
        <?php endforeach; ?>
    </div>
    <div class="working-here">
        <?php
        $people_data = array(
            array(
                'img' => 'profile.png',
                'name' => 'John Lenard',
                'desc' => 'Lorem ipsum dolor sit ame orem ipsum dolor sit amet.'
            ),
            array(
                'img' => 'profile.png',
                'name' => 'Ema Lenard',
                'desc' => 'Lorem ipsum dolor sit am etem ipsum dolor sit amet.'
            ),
        );

        foreach ($people_data as $person) :
        ?>
            <div class="working-here-people">
                <img src="<?php echo get_template_directory_uri() . '/assets/' . $person['img']; ?>" alt="Logo" width="140px">
                <h3><?php echo esc_html($person['name']); ?> |</h3>
                <p><?php echo esc_html($person['desc']); ?></p>
            </div>
        <?php endforeach; ?>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>

