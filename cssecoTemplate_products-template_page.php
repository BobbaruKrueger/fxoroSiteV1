<?php
/**
  * Template Name: Products template
  * @package fxoroVone
  * cssecoTemplate_products-template_page.php
  */
?>
<?php get_header(); ?>
<?php 

	global $post;

	$slug = $post->post_name;

	if ( $slug == 'forex' ) {
		$poza 	= 'forex.jpg';
		$c1		= '
			<p>
				FOREX market is 10 times larger than any stock market. With its over £4 trillion of daily trades it presents endless opportunities for individual traders. 
			</p>
			<p>
				<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> oﬀers an array of tradable currency pairs ranging from major and more popular pairs, to exotic currencies that are far less common. 
			</p>	
			<div class="text-center">
				<p class="font-weight-bold" style="color:#162856;">Trade the most popular <strong>FOREX</strong> pairs now!!</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-sm-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Advantages of FOREX trading
				</h5>
				<ul>
					<li>You get access to over 60 currency pairs 24 hours a day, 5 days a week.</li>
					<li>Maximize your portfolio’s potential by taking advantage of all market directions whether the market is going up or down.</li>
					<li>Access the ﬁnancial market with minimum capital and ﬂexible leverage capabilities.</li>
					<li>Deep liquidity, stable prices and low spreads.</li>
					<li>Margin trading, where you can trade assets that exceed your account’s capital.</li>
					<li>No fees or commissions.</li>
				</ul>
				<p class="font-weight-bold" style="color:#162856;">
					Trade the most popular FOREX pairs like EUR/USD, GBP/USD and EUR/GBP.  Use our advanced trading tools to protect your proﬁts and limit losses.
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
			</section>
			<section>
				<h5>
					Discover our FOREX tools
				</h5>
				<p>
					<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> provides a number of educative tools in order to allow traders to access the market and take the right investing decisions in the best conditions.
				</p>
				<p class="font-weight-bold" style="color:#162856;">
					Discover <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> tools and start to trade on FOREX at your best
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Register now
				</a>
			</section>
			<section>
				<h5>
					Trade with the best platforms
				</h5>
				<p>
					As a leading regulated FOREX broker, <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> oﬀers you full access to the FX Markets via the traders’ favorite platform, MetaTrader4 which can be accessed either downloaded, via the web or mobile.
				</p>
				<p class="font-weight-bold" style="color:#162856;">
					Register in order to download your MT4 and start to trade 
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Download MT4
				</a>
			</section>
		';
		$faq	= '
			<div class="accordion" id="accProducts">
				<div class="acW">
					<div class="prodacc-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What is FOREX?
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accProducts">
						<div class="prodacc-body">
							FOREX is the abbreviation of "Foreign Exchange" and is the process of buying and selling currencies. The foreign exchange market is the largest and most liquid financial market in the world; it is open 24 hours a day from Sunday evening to Friday evening and includes central banks, speculators, organizations, governments, private investors, funds and more. Over the years, the size of the FOREX market has been steadily increasing. According to the Bank for International Settlements (BIS) in the 2013 Triennial Exchange Markets Survey, the average daily volume in FOREX was estimated at $ 5.345 billion, 34% higher than the $ 3971 billion of April 2010 (3.210 $ billion a day in April 2007 and $ 1.7 trillion in 1998). 
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingTwo">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>How does the FOREX and CFD market work?
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accProducts">
						<div class="prodacc-body">
							FOREX is traded in currency pairs, while the CFD is a contract for difference whose price derives from the value of the underlying asset. The most common currency pairs are the Euro / US Dollar (EUR / USD), US Dollar / Japanese Yen (USD / JPY), British Pound / US Dollar (GBP / USD), Euro / Japanese Yen (EUR / JPY) and Australian Dollar / US Dollar (AUD / USD). You can buy and sell any currency or financial instrument.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingThree">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What is the leverage?
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accProducts">
						<div class="prodacc-body">
							PIP stands for percentage of point. A pip is the smallest amount of change in the price of a financial asset. For most currency pairs, the pip is 0.0001 of the currency pair price, while in CFDs it is usually cents. Pips are the basis for calculating spreads and for price quotations. We at <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> offer quotes on certain assets with fractions of pips to provide greater precision and so that our customers also benefit from small price changes. A fractionated pip is equal to 1/10 of a pip. Leverage is used to significantly increase your buying potential. No other market gives you both liquidity and financial leverage at the same time. <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> provides financial leverage up to 400: 1. This means that with a deposit of € 100, you can start trading up to € 40,000. 
						</div>
					</div>
				</div>
			</div>
		';
	} elseif ( $slug == 'shares' ) {
		$poza 	= 'CFDs.png';
		$c1		= '';
		$c2		= '';
		$faq	= '';
	} elseif ( $slug == 'commodities' ) {
		$poza 	= 'commodities.jpg';
		$c1		= '
			<p>Commodities are the raw materials that are being used to create a livable world such as energy (oil), metals (gold, silver) as well as agricultural products (corn).  These are the three classes of Commodities and they are the essential building blocks of the global economy. They generally meet the following criteria of having to be tradable, deliverable and be liquid</p>
			<div class="text-center">
				<p class="font-weight-bold" style="color:#162856;">Trade on <strong>commodities</strong> pairs now!!</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-sm-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Advantages of commodities trading
				</h5>
				<p>Moreover, investing in raw materials can be very useful for diversifying your own portfolio. in fact, the historically negative correlation between raw materials and equities is evident. In that, when the latter go wrong, investors tend to "take refuge" in the raw materials. Said in Anglo-Saxon language commodities. When equities ﬂy, investors tend to abandon commodities as they are considered more stable.</p>
				<p class="font-weight-bold" style="color:#162856;">
					Start trading on commodities with the support of our tools.
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
			</section>
			<section>
				<h5>
					How to invest on commodities
				</h5>
				<p>You can invest in raw materials through the purchase of future or future contracts. The commodity indices are replicate a basket of raw materials. There are several indices available for investing with ETFs in a broad basket of commodities. Then there are signs on individual raw materials or selected segments that derive from the indexes mentioned.</p>
				<p class="font-weight-bold" style="color:#162856;">
					Discover our tools and start to trade  on commodities at your best.
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Register now
				</a>
			</section>
		';
		$faq	= '';
	} elseif ( $slug == 'indices' ) {
		$poza 	= 'indices.png';
		$c1		= '
			<p>Equity index futures are based on the indices of common stocks, and are providing eﬀective hedging instruments for hedging equity to the investors. Equity indices are also one of the most popular investment products among retail investors. Equity index futures are one of the eﬀective tools in avoiding the risk of stock market ﬂuctuations and price volatility. In order to view the list of indices you can trade with <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>, please click here.</p>
			<div class="text-center">
				<p class="font-weight-bold" style="color:#162856;">Trade the most popular <strong>incides</strong> pairs now!!</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-sm-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Advantages of indices trading
				</h5>
				<p class="m-0">Working with stock indexes involves a series of very important advantages that certainly reﬂect the real reasons why they are widely used in investments. Among the main advantages:</p>
				<ul>
					<li>Possibility of trading indices throughout the day and sometimes H24</li>
					<li>Greater liquidity than individual securities</li>
					<li>Possibility to open positions on entire lists with single transactions</li>
					<li>Possibility of trading downwards or upwards, gaining both when the stock indices rise and when they fall</li>
				</ul>
				<p class="font-weight-bold" style="color:#162856;">
					Click here to discover the main european global indices.
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
			</section>
			<section>
				<h5>
					Discover our indices tools
				</h5>
				<p>
					<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> provides a number of educative tools in order to allow traders to access the market and take the right investing decisions in the best conditions.
				</p>
				<p class="font-weight-bold" style="color:#162856;">
					Discover tools and start to trade on FOREX at your best.
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Download MT4
				</a>
			</section>
		';
		$faq	= '
			<div class="accordion" id="accProducts">
				<div class="acW">
					<div class="prodacc-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What are indices?
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accProducts">
						<div class="prodacc-body">
							<p>
								The indices are lists of shares, selected by geographical origin or by stock exchange, which replicate the average trend of all the actions that comprise them.<br>
								The NASDAQ is one of the most important and followed indices.<br>
								Taking the example of NASDAQ we can say that the index in question is composed of a weighted average of all the actions that compose it, following these principles:
							</p>
							<ul class="mb-0">
								<li>The specific weight of each individual share is calculated within the list, by calculating the capitalization of the company with respect to the total capitalization of the list </li>
								<li>The progress of the action is multiplied by its specific weight</li>
								<li>The result of each action, added together, gives the index performance</li>
								<li>When we invest in indices, therefore, we are investing in a huge segment of a nation\'s economy, and more generally on all the companies that make up the price list of the index we have chosen.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingTwo">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>Are the indices trading dependent from the time? 
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accProducts">
						<div class="prodacc-body">
							 Financial indexes are based around the world, and among the major financial centers we cannot fail to mention New York, Hong Kong, London and Tokyo. This means that depending on where you are in the world, the indices will open at different times. For example, if you are in London, the FTSE will open at 08:00 am until 4:30 pm.However, if one is in London it means that the US markets, for example, will open in the European afternoon and close in the evening, while the indices in China and Japan will open during the European night and will remain open until the early hours of the next morning.It is also important to remember that each index has different opening hours also considering the pertinent time zone. For example, the FTSE100 opens at 08:00 and closes at 16:30 GMT. Instead the main US indexes open at 09:30 and close at 16:00 ET, while the Hang Seng and the Nikkei have two daily sessions, with an hour of lunch break between the morning session and the afternoon session.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingThree">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>Indices typology?
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accProducts">
						<div class="prodacc-body">
							The indices can be calculated according to 4 methodologies, which classify them by type. we find: Equally weighted indices: in this case “equally” translates as “equality”, equality is calculated between the weighting factors for all the securities forming part of the index, without considering the capitalisations of the companies included, therefore all the bonds form the indices have the same importance and the same weight;Price weighted indices: for this type of index each security has a different weight depending on its price. They are indexes that are relatively simple to calculate, but that do not perfectly reflect the trend of the entire portfolio. Precisely for this reason, in this index are represented above all the securities with the highest price, for this the more the price of a stock increases the more this title acquires importance in the group; Value weighted indices: these are the most used securities precisely because they are considered more correct and fair. These indices associate securities with a proportional weight to the capitalization of the issuing company and are also also adjusted whenever the companies perform splits, pay dividends, make groupings, demergers and so on. In this case each title has the importance it deserves; Sustainability indexes: these are the ones that traders prefer, and they have a weight on each stock which varies according to the economic principles of size.To give some examples we can mention for the value indices weigted: the S & P500 (USA), the FTSE Mib (Italy), CAC40 (France), DAX30 (Germany), FTSE 100 (England), Topix (Japan). For the other indices, we have the best known Dow Jones (USA) and the Nikkei 225 (Japan) which is a price weigted index.  
						</div>
					</div>
				</div>
			</div>
		';
	} elseif ( $slug == 'cryptocurrency' ) {
		$poza 	= 'cryptocurrency.png';
		$c1		= '
			<p>Cryptocurrencies are a form of money of the future. They have the potential to transform the entire global ﬁnancial system. More and more, companies, shops and people are using them increasing in the same time prices. Its volatility makes it an excellent alternative in any ﬁnancial trading portfolio.</p>
			<div class="text-center">
				<p class="font-weight-bold" style="color:#162856;">Trade the most popular <strong>cryptocurrencies</strong> now!!</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-sm-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					What are cryptocurrencies?
				</h5>
				<p>A cryptocurrency is a digital currency that is transferred from one subject to another in virtual transactions. Cryptocurrencies exist only in the form of data and not as physical objects. In other words, you can\'t hold a Bitcoin or put Ethereum in a safe. Owning Bitcoin means signing a collective agreement registered on every computer in the Bitcoin network in which the ownership of Bitcoin is attested and, more importantly, the legitimate creation by a miner.</p>
				<p class="font-weight-bold" style="color:#162856;">
					Trade the most popular cryptocurrencies now!!
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
			</section>
			<section>
				<h5>
					What trading crypto with <span style="font-weight: bold; color:#1B2854;">FX<span style="color: #fbb000;">ORO</span></span>?
				</h5>
				<p>Due to the incredible popularity in recent years, cryptocurrencies have become a very interesting conventional asset. <span style="font-weight: bold; color:#1B2854;">FX<span style="color: #fbb000;">ORO</span></span> oﬀers to all his traders the opportunity to trade on a major digital currencies 24/7 with the support  of dedicated tools and personal coaches.</p>
				<p class="font-weight-bold" style="color:#162856;">
					Trade on cryptocurrencies with dedicate tools!!
				</p>
				<a href="#" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
			</section>
		';
		$faq	= '';
	} 

?>

		<main id="prodsect1" class="col-12 site-main prodsect1" role="main">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<?php the_title('<h1 class="entry-title mb-md-3 mb-xl-4"><span>','</span></h1>' ); ?>
					</header><!--/.entry-header-->
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-6">
					<?php echo $c1; ?>
				</div>
				<div class="col-12 col-lg-6 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/<?php echo $poza; ?>" alt="<?php echo $poza; ?>" class="">
					<p class="font-weight-bold mt-4" style="color: #162856;">
						 MCA Intelifunds Ltd autorizzato e regolamentato  dalla Securities and Exchange Commission di Cipro.  
					</p>
				</div>
			</div>
		</main>
	</div><!-- .row -->
</div><!-- .container -->
<section id="prodsect2" class="prodsect2">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<?php echo $c2; ?>
			</div>
			<div class="col-12 col-lg-5">
				<!-- template part-->
				<?php 
					include( locate_template( 'includes/front/template-parts/products/tabel.php', false, false ) );
				?>
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/cellphones.png" alt="CellPhones" class="aboutUsPhones" style="visibility: hidden;">
			</div>
		</div>
	</div>
</section>
<section id="prodsect3" class="prodsect3">
	<div class="revealer" style=""></div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">
					Why <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>?
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-4 col-lg-2 offset-lg-1 text-center">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/hand_icon.png" alt="Hand" class="">	
					</div>
				</div>	
				<p>Simple & Intuitive Platform</p>
			</div>
			<div class="col-12 col-sm-4 col-lg-2 text-center">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/page_icon.png" alt="Page" class="">
					</div>
				</div>
				<p>Competitive Spreads</p>
			</div>
			<div class="col-12 col-sm-4 col-lg-2 text-center">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/zero_icon.png" alt="Zero" class="">	
					</div>
				</div>
				<p>No Commissions</p>
			</div>
			<div class="col-12 col-sm-6 col-lg-2 text-center">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/frame_icon.png" alt="Frame" class="">	
					</div>
				</div>
				<p>Authorised and Regulated</p>
			</div>
			<div class="col-12 col-sm-6 col-lg-2 text-center">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/man_icon.png" alt="Frame" class="">	
					</div>
				</div>
				<p>24/7 Online Support</p>
			</div>
		</div>
	</div>
</section>
<section id="prodsect4" class="prodsect4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>
					FAQ
				</h3>
				<?php echo $faq; ?>
				<div class="cssecoBtnWrapper">
					<a href="#" class="cssecoBtn animationbtn">				
						Start trading now
					</a>
					<p class="mb-0">
						Your capital is at risk.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">


<?php get_footer(); ?>