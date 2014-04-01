<?php
/*
Template Name: Custom Home Page
*/
?>
<?php get_header('home'); ?>
			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="eightcol first clearfix" id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<h2 class="home">Reverend John Drabik</h2>
									<h1 class="page-title home"><?php the_title(); ?></h1>
									


								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section>


								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

							

							</article>



							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>
					<div class="fourcol clearfix">
						<img id="revimg" src="http://lorempixel.com/g/200/500">
					</div>

				</div>
				<div id="services">
					<div class="overlay"></div>
					<div class="wrap">
						<h3>Services</h3>
						<div class="quarter">
							<img src="http://sam.local:5757/wp-content/uploads/2014/03/wedding-officiant-chicago.png">
							<h5>Personally <br>Designed Ceremony</h5>
						</div>
						<div class="quarter">
							<img src="http://sam.local:5757/wp-content/uploads/2014/03/wedding-officiant-chicago-1.png">
							<h5>One On One <br>Meetings</h5>
						</div>
						<div class="quarter last clear">
							<img src="http://sam.local:5757/wp-content/uploads/2014/03/wedding-officiant-chicago-2.png">
							<h5>Venue Site <br>Inspection</h5>
						</div>
						<div class="quarter last" id="hidden-q">
							<img src="http://sam.local:5757/wp-content/uploads/2014/03/wedding-officiant-chicago-2.png">
							<h5>Religious & Secular <br>Options</h5>
						</div>
						<div class="quarter last">
							<img src="http://sam.local:5757/wp-content/uploads/2014/03/wedding-officiant-chicago-3.png">
							<h5>Rehearsal <br>Ceremony</h5>
						</div>
						<div class="quarter last">
							<img src="http://sam.local:5757/wp-content/uploads/2014/03/wedding-officiant-chicago-4.png">
							<h5>Wedding <br>Ceremony</h5>
						</div>
					</div>
					</div>
				</div>
			</div>




<?php get_footer(); ?>
