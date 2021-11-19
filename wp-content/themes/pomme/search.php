<?php
    get_header();
    echo 'Recherche : '.get_search_query().'<br>';
    while(have_posts()):
        the_post();
?>
        <a href="<?php the_permalink() ?>"><?php the_title()?></a>
        <br>
<?php
    endwhile;
    get_footer();
?>