<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">خانه</a></li>
            <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">درباره ما</a></li>
        </ul>
        </nav>
    </header>
