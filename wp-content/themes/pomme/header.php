<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
            <?php
                wp_title('|','true','right');
            ?>
        </title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php wp_head() ?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand"><?php bloginfo("name") ?></a>
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'topnav',
                        'menu'            =>'topnav',
                        'container'       => false, 
                        'container_class' => 'collapse navbar-collapse', 
                        'container_id'    => 'navbarCollapse',
                        'menu_class'      => 'navbar-navml-auto', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>',
                        'depth'           => 0
                      ) );
                ?>
                <form action="<?=get_home_url()?>" method="GET">
                    <input name="s" placeholder="Recherche">
                    <input type="submit" class="btn btn-primary" value="OK">
                </form>
            </div>
        </nav>
        <div class="container px-4 px-lg-5">