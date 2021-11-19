<?php get_header() ?>

<div class="row gx-4 gx-lg-5 align-items-center my-5">
    <div class="col-lg-5">
		<?php
			$query = new WP_Query([
				'post_type'		=> 'page',
				'posts_per_page'=> 2,
				'order_by' 		=> 'menu_order',
				'order'			=> 'ASC'
			]);
			if ($query->have_posts()){
				while($query->have_posts()){
					$query->the_post(); 
		?>
					<h1 class="font-weight-light"><?php the_title() ?></h1>
					<p><?php the_content() ?></p>
					<a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
		<?php
				}
			}
		?>
    </div>
</div>

<div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body"><p class="text-white m-0"><?php bloginfo("description") ?></p></div>
</div>

<div class="row gx-4 gx-lg-5">
	<?php
		$query = new WP_Query([
			'post_type'		=> 'post',
			'posts_per_page'=> 3,
			'order_by' 		=> 'menu_order',
			'order'			=> 'ASC'
		]);
		if ($query->have_posts()){
			while($query->have_posts()){
				$query->the_post(); 
	?>
    			<div class="col-md-4 mb-5">
        			<div class="card h-100">
						<?php the_post_thumbnail("full",["class" => "card-img-top"]) ?>
            			<div class="card-body">
                			<h2 class="card-title"><?php the_title() ?></h2>
                			<p class="card-text"><?php the_content() ?></p>
            			</div>
            			<div class="card-footer"><a class="btn btn-primary btn-sm" href="<?php the_permalink() ?>">More Info</a></div>
					</div>
        		</div>
	<?php
			}
		}
	?>
</div>

<?php get_footer() ?>