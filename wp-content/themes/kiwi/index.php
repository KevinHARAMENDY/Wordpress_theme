<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>One page</title>
	<?php
		$theme_url = get_stylesheet_directory_uri();
	?>
	<link rel="stylesheet" href="<?=$theme_url?>/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<?php wp_head() ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand"><?php bloginfo('name') ?></a>
        </div>
    </nav>

	<div class="container px-4 px-lg-5">
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
				<?php
					}
				}
				?>
			</div>

			<div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0"><?php bloginfo('description') ?></p></div>
            </div>
			
			<div class="row gx-4 gx-lg-5">
			<?php
			$query = new WP_Query([
				'post_type'		=> 'post',
				'posts_per_page'=> 3
			]);
			if ($query->have_posts()){
				while($query->have_posts()){
					$query->the_post(); 
			?>
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<div class="card-body">
								<h2 class="card-title"><?php the_title() ?></h2>
								<p class="card-text"><?php the_content() ?></p>
							</div>
						</div>
					</div>
			<?php
				}
			}
			?>
			</div>

		</div>
	</div>

	<footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; <?php bloginfo('slogan') ?> 2021</p></div>
    </footer>

	<?php wp_footer() ?>
</body>
</html>


