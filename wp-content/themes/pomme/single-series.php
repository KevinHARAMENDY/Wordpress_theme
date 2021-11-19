<?php get_header() ?>
<div class="row gx-4 gx-lg-5 align-items-center my-5">
    <div class="col-lg-5">
		<?php
			while(have_posts()):
				the_post();
                $tab = get_the_terms(get_the_ID(),"categorie");
                $cats = "";
                foreach ($tab as $item) {
                    if ($cats == "") $cats = $item->name;
                    else $cats .= ", ".$item->name;
                }
		?>
				<h1><?php the_title() ?></h1>
                <?= ($cats != ""?"<span style='font-style: italic;font-size: smaller;color: grey'>Catégorie : ".$cats."</span>":"")?>
				<p><?php the_content() ?></p>
		<?php
			endwhile;
		?>
	</div>
</div>
<?php get_footer() ?>