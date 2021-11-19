<?php get_header() ?>
<em>ATTENTION ! UNE PAGE SPÉCIALE QUI A ÉTÉ DÉVELOPPÉE DU DÉBUT A LA FIN !</em>
<div class="row gx-4 gx-lg-5 align-items-center my-5">
    <div class="col-lg-5">
		<?php
			while(have_posts()):
				the_post(); // enlever de la pile
		?>
				<h1><?php the_title() ?></h1>
				<p><?php the_content() ?></p>
		<?php
			endwhile;
		?>
	</div>
</div>
<?php get_footer() ?>