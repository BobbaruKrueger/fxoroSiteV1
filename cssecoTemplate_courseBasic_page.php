<?php
/**
 * @package fxoroVone
 * Template Name: Basic Course template
 * cssecoTemplate_courseBasic_page.php
 *
 * Basic Course template
 */
?>
<?php get_header(); ?>
		</div><!-- /.row -->
	</div><!-- /.container-->
	<section id="" class="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<?php the_title('<h1 class="entry-title"><span>','</span></h1>' ); ?>
					</header><!--/.entry-header-->
				</div>
			</div>
			<div class="row">
				<div class="zaCardWrapper col-12 col-sm-6 col-md-4 col-xl-3">
					<div class="zaCard">
						<div class="zaCardHeader">
							<div class="row">
								<div class="col-4 zaCardIcon">
									<div class="dtable">
										<div class="dtable-cell">
											<div class="zaCardIconInner">
												<div class="dtable">
													<div class="dtable-cell">
														<i class="fas fa-donate"></i>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-8 pl-0 zaCardTitle">
									<h6>At vero eos</h6>
									<span>Nam libero tempore</span>
								</div>
							</div>
						</div>
						
						<a href="#" class="zaCardMedia" style="background-image:url(http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/imgs/mte4/Basic1.jpg); display: block;"></a>
						<div class="zaCardContent">
							<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet</p>
						</div>
						<div class="zaCardActions text-center">
							<a href="<?php echo get_site_url(); ?>/mte" class="">
								<i class="far fa-play-circle"></i>
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-->
	</section>
	
	<div class="container">
		<div class="row">
<?php get_footer(); ?>