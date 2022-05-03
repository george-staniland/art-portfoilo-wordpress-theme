<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull');?>

<div class="wrapper" id="wrapper-footer">

	<div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

				<div class="george-footer d-flex justify-content-center" >
					<div class="container pt-5 pb-4" >
						<div class="row" >
							<div class="left-col col-md-6 px-0">
									<a class="to-top-btn my-0" href="#" >
										Back to top
									</a>
							</div>
							<div class="right-col col-md-6 px-0 justify-content-md-end">
								
							<h4 class="text-md-end my-0">Thanks for stopping by</h4>
							</div>
						</div>
					</div>
				</div>

				</footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer();?>

</body>

</html>

