<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/products/tabel.php
 *
 * Dynamic Tabel
 */

// get current page name
require_once(  get_template_directory(). '/includes/front/template-parts/fp/process/Api.php');
global $post;
global $wpdb;
$page_slug = $post->post_name;

// $api = new API();

// $api->getDataAsync();


// $data = $api->data_result;
$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3");


?>
<div class="row searchbar">
	<div class="col-12">
		<form>
			<div class="form-group mb-4">
				<i class="fas fa-search"></i>
				<input type="text" class="form-control" id="searchInstrument" aria-describedby="searchHelp" placeholder="Search Instrument">
				<ul class="list">

				</ul>	
			</div>
		</form>
	</div>
</div>
<div class="tabletickers">
	<ul class="nav" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link" id="most_popular-tab" data-toggle="tab" href="#most_popular" role="tab" aria-controls="most_popular" aria-selected="true">Most popular</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ( $page_slug == 'forex' ) ? 'active': '';?>" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="false">FOREX</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ( $page_slug == 'shares' ) ? 'active': '';?>" id="shares-tab" data-toggle="tab" href="#shares" role="tab" aria-controls="shares" aria-selected="false">Shares</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ( $page_slug == 'indices' ) ? 'active': '';?>" id="indices-tab" data-toggle="tab" href="#indices" role="tab" aria-controls="indices" aria-selected="false">Indices</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ( $page_slug == 'commodities' ) ? 'active': '';?>" id="commodities-tab" data-toggle="tab" href="#commodities" role="tab" aria-controls="commodities" aria-selected="false">Commodities</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php echo ( $page_slug == 'cryptocurrency' ) ? 'active': '';?>" id="crypto-tab" data-toggle="tab" href="#crypto" role="tab" aria-controls="crypto" aria-selected="false">Crypto</a>
		</li>
	</ul>
	<div class="tab-content" id="">
		<div class="tab-pane fade" id="most_popular" role="tabpanel" aria-labelledby="most_popular-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>  
						<th scope="col" class="cssecol2">Selling price</th>    
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>

				<?php 
					$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3 ORDER BY RAND() LIMIT 5");
					foreach ($results as $result) {
						$changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
						$changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ; 
						?>
							<tr class="<?php echo $result->symbol;?>">
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 symbol-name">
											<a href="instrument?instrument=<?php echo $result->category;?>&symbol=<?php echo $result->symbol;?>"> <span><?php echo $result->name ?></span> </a>		
										</div>
										<div class="col-12 p-0 change-percentage font-weight-bold">
											<span class="<?php echo ($changepercentage >= 0 ) ? 'positive' : 'negative' ;?>"><?php echo $changepercentage; ?></span>
										</div>
									</div>
								</td>

								<td>
									<div class="row m-0">
										<div class="col-12 p-0 sell-value">
											<span><?php echo $result->sell; ?></span>
										</div>
										<div class="col-12 p-0 sell-btn text-center">
											<a href="#" class="cssecoBtn animationbtn">Sell</a>
										</div>
									</div>
								</td>
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 buy-value text-center">
											<span><?php echo $result->buy;?></span>
										</div>
										<div class="col-12 p-0 buy-btn">
											<a href="#" class="cssecoBtn animationbtn">Buy</a>
										</div>
									</div>
								</td>
							</tr>
						<?php }
					?>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade <?php echo ( $page_slug == 'forex' ) ? 'show active': '';?>" id="forex" role="tabpanel" aria-labelledby="forex-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>  
						<th scope="col" class="cssecol2">Selling price</th>    
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
					$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3 WHERE category='FOREX' LIMIT 5");
					foreach ($results as $result) {
						$changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
						$changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ; 
						?>
							<tr class="<?php echo $result->symbol;?>">
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 symbol-name">
											<a href="instrument?instrument=FOREX&symbol=<?php echo $result->symbol;?>"> <span><?php echo $result->name ?></span> </a>		
										</div>
										<div class="col-12 p-0 change-percentage font-weight-bold">
											<span class="<?php echo ($changepercentage >= 0 ) ? 'positive' : 'negative' ;?>"><?php echo $changepercentage; ?></span>
										</div>
									</div>
								</td>

								<td>
									<div class="row m-0">
										<div class="col-12 p-0 sell-value">
											<span><?php echo $result->sell; ?></span>
										</div>
										<div class="col-12 p-0 sell-btn text-center">
											<a href="#" class="cssecoBtn animationbtn">Sell</a>
										</div>
									</div>
								</td>
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 buy-value text-center">
											<span><?php echo $result->buy;?></span>
										</div>
										<div class="col-12 p-0 buy-btn">
											<a href="#" class="cssecoBtn animationbtn">Buy</a>
										</div>
									</div>
								</td>
							</tr>
						<?php }
					?>
						
					
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade <?php echo ( $page_slug == 'shares' ) ? 'show active': '';?>" id="shares" role="tabpanel" aria-labelledby="shares-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>  
						<th scope="col" class="cssecol2">Selling price</th>    
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3 WHERE category='Shares' LIMIT 5");
					foreach ($results as $result) {
						$changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
						$changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ; 
						?>
							<tr class="<?php echo $result->symbol;?>">
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 symbol-name">
											<a href="instrument?instrument=FOREX&symbol=<?php echo $result->symbol;?>"> <span><?php echo $result->name ?></span> </a>		
										</div>
										<div class="col-12 p-0 change-percentage font-weight-bold">
											<span class="<?php echo ($changepercentage >= 0 ) ? 'positive' : 'negative' ;?>"><?php echo $changepercentage; ?></span>
										</div>
									</div>
								</td>

								<td>
									<div class="row m-0">
										<div class="col-12 p-0 sell-value">
											<span><?php echo $result->sell; ?></span>
										</div>
										<div class="col-12 p-0 sell-btn text-center">
											<a href="#" class="cssecoBtn animationbtn">Sell</a>
										</div>
									</div>
								</td>
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 buy-value text-center">
											<span><?php echo $result->buy;?></span>
										</div>
										<div class="col-12 p-0 buy-btn">
											<a href="#" class="cssecoBtn animationbtn">Buy</a>
										</div>
									</div>
								</td>
							</tr>
						<?php }
					?>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade <?php echo ( $page_slug == 'indices' ) ? 'show active': '';?>" id="indices" role="tabpanel" aria-labelledby="indices-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>  
						<th scope="col" class="cssecol2">Selling price</th>    
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3 WHERE category='Indices' LIMIT 5");
					foreach ($results as $result) {
						$changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
						$changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ; 
						?>
							<tr class="<?php echo $result->symbol;?>">
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 symbol-name">
											<a href="instrument?instrument=FOREX&symbol=<?php echo $result->symbol;?>"> <span><?php echo $result->name ?></span> </a>		
										</div>
										<div class="col-12 p-0 change-percentage font-weight-bold">
											<span class="<?php echo ($changepercentage >= 0 ) ? 'positive' : 'negative' ;?>"><?php echo $changepercentage; ?></span>
										</div>
									</div>
								</td>

								<td>
									<div class="row m-0">
										<div class="col-12 p-0 sell-value">
											<span><?php echo $result->sell; ?></span>
										</div>
										<div class="col-12 p-0 sell-btn text-center">
											<a href="#" class="cssecoBtn animationbtn">Sell</a>
										</div>
									</div>
								</td>
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 buy-value text-center">
											<span><?php echo $result->buy;?></span>
										</div>
										<div class="col-12 p-0 buy-btn">
											<a href="#" class="cssecoBtn animationbtn">Buy</a>
										</div>
									</div>
								</td>
							</tr>
						<?php }
					?>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade <?php echo ( $page_slug == 'commodities' ) ? 'show active': '';?>" id="commodities" role="tabpanel" aria-labelledby="commodities-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>  
						<th scope="col" class="cssecol2">Selling price</th>    
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3 WHERE category='Commodities' LIMIT 5");
					foreach ($results as $result) {
						$changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
						$changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ; 
						?>
							<tr class="<?php echo $result->symbol;?>">
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 symbol-name">
											<a href="instrument?instrument=FOREX&symbol=<?php echo $result->symbol;?>"> <span><?php echo $result->name ?></span> </a>		
										</div>
										<div class="col-12 p-0 change-percentage font-weight-bold">
											<span class="<?php echo ($changepercentage >= 0 ) ? 'positive' : 'negative' ;?>"><?php echo $changepercentage; ?></span>
										</div>
									</div>
								</td>

								<td>
									<div class="row m-0">
										<div class="col-12 p-0 sell-value">
											<span><?php echo $result->sell; ?></span>
										</div>
										<div class="col-12 p-0 sell-btn text-center">
											<a href="#" class="cssecoBtn animationbtn">Sell</a>
										</div>
									</div>
								</td>
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 buy-value text-center">
											<span><?php echo $result->buy;?></span>
										</div>
										<div class="col-12 p-0 buy-btn">
											<a href="#" class="cssecoBtn animationbtn">Buy</a>
										</div>
									</div>
								</td>
							</tr>
						<?php }
					?>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade <?php echo ( $page_slug == 'cryptocurrency' ) ? 'show active': '';?>" id="crypto" role="tabpanel" aria-labelledby="crypto-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>  
						<th scope="col" class="cssecol2">Selling price</th>    
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$results = $wpdb->get_results("SELECT symbol, name, sell, buy, closed, category  FROM tickers3 WHERE category='Cryptocurrency' LIMIT 5");
					foreach ($results as $result) {
						$changepercentage = round( ( ( $result->sell - $result->closed ) / $result->sell) * 100, 2);
						$changepercentage = ( $changepercentage > 0 ) ? '+'.$changepercentage : $changepercentage ; 
						?>
							<tr class="<?php echo $result->symbol;?>">
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 symbol-name">
											<a href="instrument?instrument=FOREX&symbol=<?php echo $result->symbol;?>"> <span><?php echo $result->name ?></span> </a>		
										</div>
										<div class="col-12 p-0 change-percentage font-weight-bold">
											<span class="<?php echo ($changepercentage >= 0 ) ? 'positive' : 'negative' ;?>"><?php echo $changepercentage; ?></span>
										</div>
									</div>
								</td>

								<td>
									<div class="row m-0">
										<div class="col-12 p-0 sell-value">
											<span><?php echo $result->sell; ?></span>
										</div>
										<div class="col-12 p-0 sell-btn text-center">
											<a href="#" class="cssecoBtn animationbtn">Sell</a>
										</div>
									</div>
								</td>
								<td>
									<div class="row m-0">
										<div class="col-12 p-0 buy-value text-center">
											<span><?php echo $result->buy;?></span>
										</div>
										<div class="col-12 p-0 buy-btn">
											<a href="#" class="cssecoBtn animationbtn">Buy</a>
										</div>
									</div>
								</td>
							</tr>
						<?php }
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="<?php echo get_template_directory_uri().'/vendor/api-service/table.js'?>"></script>