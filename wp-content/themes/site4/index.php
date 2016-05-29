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
							<?php the_excerpt(); ?><span class="read"><a  href="<?php the_permalink(); ?>">Read More...</a></span>
							
						</div>
					</div>
					<?php endwhile; ?>

          			<?php else: ?> 

          			<?php endif; ?>
<!-- 					<div class="blog">
						<img src="<?php bloginfo('template_url') ?>/img/Green illuminated girl.jpg">
						<div class="data">
							<h1>August 7th, 2010 by Jane Doe</h1>
							<h2>Comments</h2>
						</div>
						<div class="blogtext">
							<h3>Green illuminated girl</h3>
							<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In massa libero, interdum quis ullamcorper a, pellentesque nec tellus. Donec sit amet lectus a nisi sagittis consequat sed vitae mauris. Quisque ut diam ligula, sed viverra tellus. Curabitur suscipit dignissim odio vel porttitor. Vestibulum dignissim justo eu nisl vestibulum ultricies. Nullam egestas dictum ipsum in eleifend. Morbi tellus nisl, ultrices vitae consectetur non, tincidunt in risus.<span><a  href="#">Read More...</a></span></p></h6>
							
						</div>
					</div>
					<div class="blog">
						<img src="<?php bloginfo('template_url') ?>/img/Blue water drops.jpg">
						<div class="data">
							<h1>August 5th, 2010 by Jane Doe</h1>
							<h2>Comments</h2>
						</div>
						<div class="blogtext">
							<h3>Blue water drops</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In massa libero, interdum quis ullamcorper a, pellentesque nec tellus. Donec sit amet lectus a nisi sagittis consequat sed vitae mauris. Quisque ut diam ligula, sed viverra tellus. Curabitur suscipit dignissim odio vel porttitor. Vestibulum dignissim justo eu nisl vestibulum ultricies. Nullam egestas dictum ipsum in eleifend. Morbi tellus nisl, ultrices vitae consectetur non, tincidunt in risus.<span><a  href="#">Read More...</a></span></p></p>	
							
						</div>
					</div> -->
				</div>
<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>