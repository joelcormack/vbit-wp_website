<?php
/**
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */

echo '<div class="how-vbit-mining-works">';
get_header();
echo '</div>';
?>

	<div id="primary">
		<main id="main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="container-fluid how-vbit-mining-works--header pt-4">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 align-self-center">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
						<div class="col-sm-6">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hands-holding-vbit-coin.png" class="img-fluid" alt="Hands Holding VBit Coin" />
						</div>
					</div>
				</div>
			</div>
			<div class="container py-4 how-vbit-mining-works--video-section">
				<div class="row d-flex">
					<div class="col-sm-6 align-self-end">
						<div class="video-caption">
							<?php the_field('video_one_caption'); ?>
						</div>
						<div class="embed-responsive embed-responsive-16by9 align-self-end">
							<?php the_field('video_one'); ?>
						</div>
					</div>
					<div class="col-sm-6 mt-4 align-self-end">
						<div class="video-caption">
							<?php the_field('video_two_caption'); ?>
						</div>
						<div class="embed-responsive embed-responsive-16by9">
							<?php the_field('video_two'); ?>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-sm-8">
					<div class="embed-responsive embed-responsive-16by9">
						<?php the_field('video_three'); ?>
					</div>
					</div>
					<div class="col-sm-4">
						<div class="video-caption mt-3 mt-sm-0">
							<?php the_field('video_three_caption'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container py-4 how-vbit-mining-works--uses-section">
				<div class="row">
					<div class="col-sm-3 align-self-center">
						<h2>Why use Vbit Mining?</h2>
					</div>
					<div class="col-sm-3 my-3 text-center">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-passive-income.png" />
						<h4>Passive Income</h4>
						<p>When you invest in VBit you’re investing in a business venture that will generate income without having to put in any time or effort.This will free you up to work on other projects,while your investment steadily grows.</p>
					</div>
					<div class="col-sm-3 my-3 text-center">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-coin.png" />
						<h4>It Beats Investing Into Currencies</h4>
						<p>Investing in crypto is great-if know exactly what you're doing, and how the market will behave. It’s a high risk, high reward proposition that could pay off big. However, mining is a sure thing- you’ll create an immediate passive income stream, that will allow you to grow your investment.</p>
					</div>
					<div class="col-sm-3 my-3 text-center">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-trusted.png" />
						<h4>Highly Proven & Trusted</h4>
						<p>Built by technology and financial experts, our US-based operations are designed for clients who seek a proven and reliable partner.</p>
					</div>
					<div class="col-sm-3 my-3 text-center">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-mining-tech.png" />
						<h4>State of the Art Mining Technology</h4>
						<p>When you invest in VBit you’re investing in a business venture that will generate income without having to put in any time or effort.This will free you up to work on other projects,while your investment steadily grows.</p>
					</div>
					<div class="col-sm-3 my-3 text-center">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-electricty.png" />
						<h4>Cheapest Electricity Rates</h4>
						<p>We focus on green, renewable and cheap energy sources, to ensure the maximum profitability of your mining operations.</p>
					</div>
					<div class="col-sm-3 my-3 text-center">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-no-experience.png" />
						<h4>No Expertise Needed</h4>
						<p>To compete in today’s cutthroat mining market you need the most efficient mining systems and setups.Previously, this has required a huge amount of know-how, but now anyone can leverage our experts’ skills to start winning big in the mining game!</p>
					</div>
				</div>
			</div>

			<div class="container my-4 py-4 how-vbit-mining-works--call-to-action">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 py-4 call-to-action blue-border">
						<h3 class="text-blue">Now that you understand what VBit mining can do for you,it's time to get started!</h3>
						<p class="mb-5">Click the Button Below and Start Building Passive Income Immediately</p>
						<button class="btn btn-blue">Start Mining Today</button>
					</div>
				</div>
			</div>
				
			<div class="container-fluid mt-4 py-4 how-vbit-mining-works--behind-the-machinery">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2>What’s Behind The Machinery</h2>
							<p>VBit Technologies was founded in 2018 when a few crypto believers and aficionados came together and began exploring the concept of making crypto mining, and it’s incredible potential accessible to a bigger audience.</p>
							<p>Today VBit is committed to its mission: Building an efficient, profitable crypto currency mining operation anyone and everyone can use!</p>
							<p>Since launching, VBit has over 2000+members and is on target to hit over $2 million in revenue in the first year. VBit’s user growth has been an exponential month over month, with users now in many different countries.</p>
							<p>We currently operate out of state-of-the-art data centers in Colorado, Ohio and Texas. We are also planning a new data center facility located in Canada that will be expandable to 200MW of power.</p>
						</div>
						<div class="col-sm-6">
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vbit-group.png" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8 offset-sm-2 my-5 text-sm-center">
							<h5 class="mb-3">Our experienced founding team, cutting-edge technology and a commitment to helping our users is what has made VBit Technologies quickly take a position among industry leaders.</h5>
							<div class="row">
								<div class="col-sm-4">
									<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/danh-profile.png" />
								</div>
								<div class="col-sm-8 text-left">
									<h6>Danh Vo</h6>
									<p>Is a serial entrepreneur with over 15 years of leadership experience, he started his first business, a computer manufacturing and programming consulting company, at the age of 13, and had a successful exit of over $1.6 million dollars by the age of 15. Since then, he is focusing his work around the finance and tech industry. Danh took interest in the cryptocurrency markets in 2015, and using his ability to recognize patterns and trends, he founded VBit Technologies to help everyone participate and benefit from this new technology that will revolutionize the financial industry.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


<?php
			
			

		endwhile; // End of the loop.
		?>

		</main>
	</div><!-- #primary -->

<?php
get_footer();