<?php get_header() ?>
<div class="row gx-4 gx-lg-5 align-items-center my-5" style="display: inline-block">
		<?php
			$taxo = "categorie";
            $terms = get_terms($taxo);
            
            foreach ($terms as $term) {
				$term_link = get_term_link($term,$taxo);
		?>
                <div><a href="http://localhost/manguo/serie/?<?= $taxo ?>=<?= $term->slug ?>"><?= $term->name ?></a></div>
		<?php
			}
		?>
</div>
<?php get_footer() ?>