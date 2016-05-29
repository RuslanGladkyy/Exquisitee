<?php get_header(); ?>
	<div class="foncontent">
		<div class="container">
			<div class="row content">
				<div class="col-sm-7 col-lg-8">
					<h6 class="colorbleck">RECENT POSTS</h6>
					<h6 class="text2 colorbleck">SUBSCRIBE <img src="<?php bloginfo('template_url') ?>/img/111.png" alt="111"></h6>

					
					<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
					<div class="blog">
						<?php the_post_thumbnail(); ?>
						<div class="data">
							<h1><?php the_time('F j Y'); ?> by Jane Doe</h1>
							<h2>Comments</h2>
						</div>
						<div class="blogtext">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							
						</div>
					</div>
					<?php endwhile; ?>

          			<?php else: ?> 

          			<?php endif; ?>

				</div>
<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>