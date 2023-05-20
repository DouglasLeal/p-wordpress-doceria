<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo("name"); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <?= the_custom_logo(); ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icone"></span>
                <span class="navbar-toggler-icone"></span>
                <span class="navbar-toggler-icone"></span>
        </button>
        <?php
        if (has_nav_menu('menu_principal')) {
            wp_nav_menu([
                'theme_location' => 'menu_principal',
                'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarResponsive',
                'menu_class' => 'navbar-nav ms-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ]);
        }
        ?>
    </div>
</nav>
