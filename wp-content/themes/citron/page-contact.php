<?php get_header() ?>
<div class="row gx-4 gx-lg-5 align-items-center my-5" style="display: inline-block">
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
<?php
if (is_active_sidebar('right-sidebar')):
?>
	<div class="col-lg-5" style="display:inline-block">
		<div class="mb-3">
			<label for="Nom" class="form-label">Nom</label>
			<input type="text" class="form-control" id="Nom">
		</div>
		<div class="mb-3">
			<label for="Message" class="form-label">Message</label>
			<textarea class="form-control" id="Message"></textarea>
		</div>
		<button type="submit" class="btn btn-dark">Prier pour être lu</button>
	</div>
<?php
	dynamic_sidebar('right-sidebar');
endif;
get_footer()
?>