<?php 
require_once('process/Api.php'); 

// $api = new Api();

// $api->getDataAsync();
// $api->getGraphDataAsync();
global $wpdb;
$results = $wpdb->get_results("SELECT * FROM tickers3");


?>

<section id="section2fp" class="part">
		<div id="particles-js"></div>
		<div class="container">
			<div class="row top">
				<div class="col-12">
					<h3>
						Real-time FREE quotes
					</h3>
					<p>
						Stay up to date with the latest market development. <span>FX<span>ORO</span></span> offers seamless trading quotes of over 2000 trading assets.  Just one click and you get updates any time you need.
					</p>
				</div>
			</div>
			<div class="row bottom">
				<div class="col-12 align-middle">
					<ul class="nav col-12 align-middle" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="active" id="mostPopular-tab" data-toggle="tab" href="#mostPopular" role="tab" aria-controls="mostPopular" aria-selected="true">Most Popular</a>
						</li>
						<li class="nav-item">
							<a class="" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="true">Forex</a>
						</li>
						<li class="nav-item">
							<a class="" id="shares-tab" data-toggle="tab" href="#shares" role="tab" aria-controls="shares" aria-selected="false">Shares</a>
						</li>
						<li class="nav-item">
							<a class="" id="commodities-tab" data-toggle="tab" href="#commodities" role="tab" aria-controls="commodities" aria-selected="false">Commodities</a>
						</li>
						<li class="nav-item">
							<a class="" id="indices-tab" data-toggle="tab" href="#indices" role="tab" aria-controls="indices" aria-selected="false">Indices</a>
						</li>
						<li class="nav-item">
							<a class="" id="risers-tab" data-toggle="tab" href="#risers" role="tab" aria-controls="risers" aria-selected="false">Risers </a>
						</li>
						<li class="nav-item">
							<a class="" id="Fallers-tab" data-toggle="tab" href="#Fallers" role="tab" aria-controls="Fallers" aria-selected="false">Fallers</a>
						</li>
					</ul>
				</div>
				
				<div class="tab-content col-12" id="">
					<div class="tab-pane fade show active" id="mostPopular" role="tabpanel" aria-labelledby="mostPopular-tab">

						<div class="owl-carousel owl-theme most-popular">
							<?php 
								// create the 5 most popular sgnals random
								
								$total_signals_number =  count($results);
								$random_numbers = array();
								for ($i=0; $i < 5; $i++) {
									// create the random number
									$random_number = rand(0, ($total_signals_number-1));
									// check if the number has already been added to the array
									if(in_array($random_number, $random_numbers)){
										// gnerate another random number
										$random_numbers[] = rand(0, ($total_signals_number-1));
									}else{
										// add the number to the array
										$random_numbers[] = $random_number;
									}
								}

								// loop through the random numbers and add the item to the most popular tab
								foreach($random_numbers as $index ) :
									// store the data in a variable $result
									$result = $results[$index];

									// include the most_popular ticker template 
									include('tickers_templates/most_popular.php');					
								endforeach; ?>
						</div>
					</div>
					
					
					<div class="tab-pane fade " id="forex" role="tabpanel" aria-labelledby="forex-tab">
						<!-- <img  id="loading" src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/loading.GIF" style="width: 100px"; alt="Loading..."> -->
						
						<div class="owl-carousel owl-theme forex">
						
							<?php foreach ($results as $index => $result): 
								if($result->category == 'FOREX'):
									// include the forex ticker template 
									include('tickers_templates/forex.php');
								endif;
							endforeach; ?><!-- // end foreach -->

		
						</div>
					</div>
					
					<div class="tab-pane fade" id="shares" role="tabpanel" aria-labelledby="shares-tab">
						<div class="owl-carousel owl-theme shares">
						<?php foreach ($results as $index => $result) { 
								if($result->category == 'Shares'){ 
									// include the shares ticker template 
									include('tickers_templates/shares.php');
							 	} 
							} 
						?>

						</div>
					</div>
					<div class="tab-pane fade" id="commodities" role="tabpanel" aria-labelledby="commodities-tab">
						<div class="owl-carousel owl-theme commodities">
						<?php foreach ($results as $index => $result) { 
								if($result->category == 'Commodities'){ 
									// include the commodities ticker template 
									include('tickers_templates/commodities.php');
								} 
							} 
						?>
						</div>
					</div>
					<div class="tab-pane fade" id="indices" role="tabpanel" aria-labelledby="indices-tab">
						<div class="owl-carousel owl-theme indices">

						<?php 	foreach ($results as $index => $result) { 
									if($result->category == 'Indices'){ 
										// include the indices ticker template 
										include('tickers_templates/indices.php');
									} 
								} 
						?>
						</div>
					</div>
					<div class="tab-pane fade" id="risers" role="tabpanel" aria-labelledby="risers-tab">
						<div class="owl-carousel owl-theme most-popular">
							<?php 
							// ---------------RISERS-------------
								// create the 5 random riser signals
								$total_signals_number =  count($results);
								$random_numbers_risers = array();
								for ($i=0; $i < 5; $i++) {
									// create the random number
									$random_number = rand(0, ($total_signals_number-1));
									// check if the number has already been added to the array
									if(in_array($random_number, $random_numbers_risers)){
										// gnerate another random number
										$random_numbers_risers[] = rand(0, ($total_signals_number-1));
									}else{
										// add the number to the array
										$random_numbers_risers[] = $random_number;
									}
								}

								// loop through the random numbers and add the item to the most popular tab
								foreach($random_numbers_risers as $index ) :
									// store the data in a variable $result
									$result = $results[$index];

									// include the risers ticker template 
									include('tickers_templates/risers.php');					
								endforeach; 
							
							?>
						</div>
					</div>
					<div class="tab-pane fade" id="Fallers" role="tabpanel" aria-labelledby="Fallers-tab">
						<div class="owl-carousel owl-theme most-popular">
							<?php 
							
							// ---------------FALLERS-------------
								// create the 5 random riser signals
								
								$random_numbers_fallers = array();
								for ($i=0; $i < 5; $i++) {
									// create the random number
									$random_number = rand(0, ($total_signals_number-1));
									// check if the number has already been added to the array
									if(in_array($random_number, $random_numbers_fallers) && in_array($random_number, $random_numbers_risers)){
										// gnerate another random number
										$random_numbers_fallers[] = rand(0, ($total_signals_number-1));
									}else{
										// add the number to the array
										$random_numbers_fallers[] = $random_number;
									}
								}

								// loop through the random numbers and add the item to the most popular tab
								foreach($random_numbers_fallers as $index ) :
									// store the data in a variable $result
									$result = $results[$index];

									// include the fallers ticker template 
									include('tickers_templates/fallers.php');					
								endforeach; 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>