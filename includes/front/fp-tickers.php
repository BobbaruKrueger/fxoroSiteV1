<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/fp/fp-tickers.php
 */
?>
<?php 
require_once('process/Api.php'); 

$api = new Api();

$api->getData();

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
						Opening an account with <span>FX<span>ORO</span></span> means staying up to date with the latest market development. <span>FX<span>ORO</span></span> offers seamless trading quotes of over 2000 trading assets. Visit our website for one click updates any time you need.
					</p>
				</div>
			</div>
			<div class="row bottom">
				<ul class="nav col-12 col-md-3" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="active" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="true">Forex</a>
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
				</ul>
				<div class="tab-content col-12 col-md-9" id="">
					<div class="tab-pane fade show active" id="forex" role="tabpanel" aria-labelledby="forex-tab">
						<!-- <img  id="loading" src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/loading.GIF" style="width: 100px"; alt="Loading..."> -->
						
						<div class="owl-carousel owl-theme forex">
						
							<?php foreach ($api->data_result['Forex'] as $symbol => $value) { ?>
								<div class="item <?php echo $symbol;?>">
									<div class="col-10 offset-1 itemInner">
										<div class="row">
											<div class="col-12 cssecoFlagsW">
												<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/<?php echo substr($symbol,0,3) ?>.png" alt="Forex <?php echo substr($symbol, 0,3);?> Flag" width="30px">
												<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/<?php echo substr($symbol, -3) ?>.png" alt="Forex <?php echo substr($symbol, -3) ?>  Flag" width="30px">
											</div>
										</div>
										<div class="row">
											<div class="col-12 currencyW">
												<?php echo$value['Name'][0]; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-12 changeW">
												-0.09%
											</div>
										</div>
										<div class="row">
											<div class="col-12 canvasW">
												<canvas id="<?php echo $symbol;?>"></canvas>
											</div>
										</div>
										<div class="row">
											<div class="col-6 sellprice">
												<div class="row">
													<div class="col-12">
														<h3>Sell:</h3>
													</div>
												</div>
												<div class="row">
													<div class="col-12 price">
														<span class="value"><?php echo $value['SellPrice'][0]?></span><span class="caret"></span>
													</div>
												</div>
											</div>
											<div class="col-6 buyprice">
												<div class="row">
													<div class="col-12 ">
														<h3>Buy:</h3>
													</div>
												</div>
												<div class="row">
													<div class="col-12 price">
														<span class="value"><?php echo $value['BuyPrice'][0]?></span><span class="caret"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php 
										$dates_labels = $value['Graph'][0]['Dates'];
										$dates_values = $value['Graph'][0]['Values'];
										$first_fifteen_values = array_slice($dates_values, 0,  (count($dates_values)/2 ) );
										$last_fifteen_values = array_slice($dates_values,  (count($dates_values)/2) -1, count($dates_values) );

										$average_first = array_sum($first_fifteen_values) / count($first_fifteen_values);
										$average_last = array_sum($last_fifteen_values) / count($last_fifteen_values);
										$tendency_colour = ( $average_first > $average_last ) ? 'rgb(190, 0, 17)' : 'rgb(48, 171, 47)';
										
									?>
							<script>
								let lastfifteen<?php echo $symbol; ?> = <?php echo json_encode($last_fifteen_values);?>;
								let selector<?php echo $symbol; ?> = document.getElementById("<?php echo $symbol; ?>").getContext('2d');

								lastfifteen<?php echo $symbol; ?>.unshift( NaN, NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN);
								
								
								let chart<?php echo $symbol; ?> = new Chart(selector<?php echo $symbol; ?>, {
									// The type of chart we want to create
									
									// The data for our dataset
									data: {
										labels: <?php echo json_encode($dates_labels);?>,
										
										datasets: [{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: <?php echo json_encode($first_fifteen_values);?>, 
											type: 'line',
										},
										{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: [NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5], 
											type: 'line',
											showLine: false
										},
										{
											label: '',
											backgroundColor: '<?php echo $tendency_colour;?>',
											borderColor: '<?php echo $tendency_colour;?>',
											fill: false,
											data: lastfifteen<?php echo $symbol; ?>,
											type: 'line',
										}]
									},        
									// Configuration options go here
									options: {
										legend: {
											display: false
										},
										elements:{
											point:{
												radius:1
											},
											line:{
												tension: 0
											}
										},
										layout: {
											padding: {
												left: 25,
												right: 25,
												top: 30,
												bottom: 30
											}
										},
										scales: {
											xAxes: [{                            
												
                									
													display: false //this will remove only the label  
														
											}],
											yAxes: [{     
																		
													display: false //this will remove only the label         
											}]
										}
									}
								});
							</script>		
								</div>
							<?php  } ?><!-- // end foreach -->

		
						</div>
					</div>
					
					<div class="tab-pane fade" id="shares" role="tabpanel" aria-labelledby="shares-tab">
						<div class="owl-carousel owl-theme shares">
						<?php foreach ($api->data_result['Shares'] as $symbol => $value) { ?>
							<div class="item <?php echo $symbol;?>">
								
								<div class="col-10 offset-1 itemInner">
									<div class="row">
										<div class="col-12 cssecoFlagsW">
											
										<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/<?php echo $value['Name'][0] ?>.png" alt="Forex <?php echo $value['Name'][0];?> Flag" width="30px">
            							
										</div>
									</div>
									<div class="row">
										<div class="col-12 currencyW">
											
											<?php echo$value['Name'][0]; ?>
										</div>
									</div>
									<div class="row">
										<div class="col-12 changeW">
											-0.09%
										</div>
									</div>
									<div class="row">
										<div class="col-12 canvasW">
											<canvas id="<?php echo $symbol; ?>"></canvas>
										</div>
									</div>
									<div class="row">
										<div class="col-6 sellprice">
											<div class="row">
												<div class="col-12">
													<h3>Sell:</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-12 price">
													<span class="value"><?php echo $value['SellPrice'][0]?></span><span class="caret"></span>
												</div>
											</div>
										</div>
										<div class="col-6 buyprice">
											<div class="row">
												<div class="col-12 ">
													<h3>Buy:</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-12 price">
													<span class="value"><?php echo $value['BuyPrice'][0]?></span><span class="caret"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<?php 
										$dates_labels = $value['Graph'][0]['Dates'];
										$dates_values = $value['Graph'][0]['Values'];
										$first_fifteen_values = array_slice($dates_values, 0,  (count($dates_values)/2 ) );
										$last_fifteen_values = array_slice($dates_values,  (count($dates_values)/2) -1, count($dates_values) );

										$average_first = array_sum($first_fifteen_values) / count($first_fifteen_values);
										$average_last = array_sum($last_fifteen_values) / count($last_fifteen_values);
										$tendency_colour = ( $average_first > $average_last ) ? 'rgb(190, 0, 17)' : 'rgb(48, 171, 47)';
										
									?>
							<script>
								let lastfifteen<?php echo $symbol; ?> = <?php echo json_encode($last_fifteen_values);?>;
								let selector<?php echo $symbol; ?> = document.getElementById("<?php echo $symbol; ?>").getContext('2d');

								lastfifteen<?php echo $symbol; ?>.unshift( NaN, NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN);
								
								
								let chart<?php echo $symbol; ?> = new Chart(selector<?php echo $symbol; ?>, {
									// The type of chart we want to create
									
									// The data for our dataset
									data: {
										labels: <?php echo json_encode($dates_labels);?>,
										
										datasets: [{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: <?php echo json_encode($first_fifteen_values);?>, 
											type: 'line',
										},
										{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: [NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5], 
											type: 'line',
											showLine: false
										},
										{
											label: '',
											backgroundColor: '<?php echo $tendency_colour;?>',
											borderColor: '<?php echo $tendency_colour;?>',
											fill: false,
											data: lastfifteen<?php echo $symbol; ?>,
											type: 'line',
										}]
									},        
									// Configuration options go here
									options: {
										legend: {
											display: false
										},
										elements:{
											point:{
												radius:1
											},
											line:{
												tension: 0
											}
										},
										layout: {
											padding: {
												left: 20,
												right: 20,
												top: 20,
												bottom: 20
											}
										},
										scales: {
											xAxes: [{                            
												
                									
													display: false //this will remove only the label  
														
											}],
											yAxes: [{     
																		
													display: false //this will remove only the label         
											}]
										}
									}
								});
							</script>		
							</div>

							
							<?php  } ?><!-- // end foreach -->
						</div>
					</div>
					<div class="tab-pane fade" id="commodities" role="tabpanel" aria-labelledby="commodities-tab">
						<div class="owl-carousel owl-theme commodities">
						<?php foreach ($api->data_result['Commodities'] as $symbol => $value) { ?>
							
							<div class="item <?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>">
								
								<div class="col-10 offset-1 itemInner">
									<div class="row">
										<div class="col-12 cssecoFlagsW">
											
										<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>.png" alt="Forex <?php echo $value['Name'][0];?> Flag" width="30px">
            							
										</div>
									</div>
									<div class="row">
										<div class="col-12 currencyW">
											
											<?php echo$value['Name'][0]; ?>
										</div>
									</div>
									<div class="row">
										<div class="col-12 changeW">
											-0.09%
										</div>
									</div>
									<div class="row">
										<div class="col-12 canvasW">
											<canvas id="<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>"></canvas>
										</div>
									</div>
									<div class="row">
										<div class="col-6 sellprice">
											<div class="row">
												<div class="col-12">
													<h3>Sell:</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-12 price">
													<span class="value"><?php echo $value['SellPrice'][0]?></span><span class="caret"></span>
												</div>
											</div>
										</div>
										<div class="col-6 buyprice">
											<div class="row">
												<div class="col-12 ">
													<h3>Buy:</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-12 price">
													<span class="value"><?php echo $value['BuyPrice'][0]?></span><span class="caret"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php 
										$dates_labels = $value['Graph'][0]['Dates'];
										$dates_values = $value['Graph'][0]['Values'];
										$first_fifteen_values = array_slice($dates_values, 0,  (count($dates_values)/2 ) );
										$last_fifteen_values = array_slice($dates_values,  (count($dates_values)/2) -1, count($dates_values) );

										$average_first = array_sum($first_fifteen_values) / count($first_fifteen_values);
										$average_last = array_sum($last_fifteen_values) / count($last_fifteen_values);
										$tendency_colour = ( $average_first > $average_last ) ? 'rgb(190, 0, 17)' : 'rgb(48, 171, 47)';
										
									?>
							<script>
								let lastfifteen<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?> = <?php echo json_encode($last_fifteen_values);?>;
								let selector<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?> = document.getElementById("<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>").getContext('2d');

								lastfifteen<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>.unshift( NaN, NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN);
								
								
								let chart<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?> = new Chart(selector<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>, {
									// The type of chart we want to create
									
									// The data for our dataset
									data: {
										labels: <?php echo json_encode($dates_labels);?>,
										
										datasets: [{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: <?php echo json_encode($first_fifteen_values);?>, 
											type: 'line',
										},
										{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: [NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5], 
											type: 'line',
											showLine: false
										},
										{
											label: '',
											backgroundColor: '<?php echo $tendency_colour;?>',
											borderColor: '<?php echo $tendency_colour;?>',
											fill: false,
											data: lastfifteen<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>,
											type: 'line',
										}]
									},        
									// Configuration options go here
									options: {
										legend: {
											display: false
										},
										elements:{
											point:{
												radius:1
											},
											line:{
												tension: 0
											}
										},
										layout: {
											padding: {
												left: 20,
												right: 20,
												top: 20,
												bottom: 20
											}
										},
										scales: {
											xAxes: [{                            
												
                									
													display: false //this will remove only the label  
														
											}],
											yAxes: [{     
																		
													display: false //this will remove only the label         
											}]
										}
									}
								});
							</script>		
							
							</div>

							<?php  } ?><!-- // end foreach -->
						</div>
					</div>
					<div class="tab-pane fade" id="indices" role="tabpanel" aria-labelledby="indices-tab">
						<div class="owl-carousel owl-theme indices">

						<?php foreach ($api->data_result['Indices'] as $symbol => $value) { ?>
							
							<div class="item <?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>">
								
								<div class="col-10 offset-1 itemInner">
									<div class="row">
										<div class="col-12 cssecoFlagsW">
											
										<img  src="wp-content/themes/CSSecoStarterThemeV2-master/imgs/tickers/<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>.png" alt="Forex <?php echo $value['Name'][0];?> Flag" width="30px">
            							
										</div>
									</div>
									<div class="row">
										<div class="col-12 currencyW">
											
											<?php echo$value['Name'][0]; ?>
										</div>
									</div>
									<div class="row">
										<div class="col-12 changeW">
											-0.09%
										</div>
									</div>
									<div class="row">
										<div class="col-12 canvasW">
											<canvas id="<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>"></canvas>
										</div>
									</div>
									<div class="row">
										<div class="col-6 sellprice">
											<div class="row">
												<div class="col-12">
													<h3>Sell:</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-12 price">
													<span class="value"><?php echo $value['SellPrice'][0]?></span><span class="caret"></span>
												</div>
											</div>
										</div>
										<div class="col-6 buyprice">
											<div class="row">
												<div class="col-12 ">
													<h3>Buy:</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-12 price">
													<span class="value"><?php echo $value['BuyPrice'][0]?></span><span class="caret"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php 
										$dates_labels = $value['Graph'][0]['Dates'];
										$dates_values = $value['Graph'][0]['Values'];
										$first_fifteen_values = array_slice($dates_values, 0,  (count($dates_values)/2 ) );
										$last_fifteen_values = array_slice($dates_values,  (count($dates_values)/2) -1, count($dates_values) );

										$average_first = array_sum($first_fifteen_values) / count($first_fifteen_values);
										$average_last = array_sum($last_fifteen_values) / count($last_fifteen_values);
										$tendency_colour = ( $average_first > $average_last ) ? 'rgb(190, 0, 17)' : 'rgb(48, 171, 47)';
										
									?>
							<script>
								let lastfifteen<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?> = <?php echo json_encode($last_fifteen_values);?>;
								let selector<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>= document.getElementById("<?php echo $value['Name'][0]; ?>").getContext('2d');

								lastfifteen<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>.unshift( NaN, NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN,NaN);
								
								
								let chart<?php echo $value['Name'][0]; ?> = new Chart(selector<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>, {
									// The type of chart we want to create
									
									// The data for our dataset
									data: {
										labels: <?php echo json_encode($dates_labels);?>,
										
										datasets: [{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: <?php echo json_encode($first_fifteen_values);?>, 
											type: 'line',
										},
										{
											label: '',
											backgroundColor: 'rgba(218, 223, 225, 1)',
											borderColor: 'rgba(218, 223, 225, 1)',
											fill: false,
											data: [NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5,NaN,2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5, NaN, 2.5], 
											type: 'line',
											showLine: false
										},
										{
											label: '',
											backgroundColor: '<?php echo $tendency_colour;?>',
											borderColor: '<?php echo $tendency_colour;?>',
											fill: false,
											data: lastfifteen<?php echo  str_replace( ' ',  '', $value['Name'][0] ); ?>,
											type: 'line',
										}]
									},        
									// Configuration options go here
									options: {
										legend: {
											display: false
										},
										elements:{
											point:{
												radius:1
											},
											line:{
												tension: 0
											}
										},
										layout: {
											padding: {
												left: 20,
												right: 20,
												top: 20,
												bottom: 20
											}
										},
										scales: {
											xAxes: [{                            
												
                									
													display: false //this will remove only the label  
														
											}],
											yAxes: [{     
																		
													display: false //this will remove only the label         
											}]
										}
									}
								});
							</script>		
							
							</div>



							<?php  } ?><!-- // end foreach -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>