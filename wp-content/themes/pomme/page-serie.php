<?php get_header() ?>
<div class="row gx-4 gx-lg-5 align-items-center my-5" style="display: inline-block">
		<?php
            if (!isset($_GET["categorie"])) {
                $query = new WP_Query([
                    'post_type'		=> 'series',
                    'posts_per_page'=> 10,
                    'order_by' 		=> 'menu_order',
                    'order'			=> 'ASC'
                ]);
            } else {
                $query = new WP_Query([
                    'post_type'		=> 'series',
                    'posts_per_page'=> 10,
                    'order_by' 		=> 'menu_order',
                    'order'			=> 'ASC',
                    'categorie' => $_GET["categorie"]
                ]);
            }

            if ($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
		?>
                    <div><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		<?php
			    }
            }
		?>
</div>
<?php get_footer() ?>