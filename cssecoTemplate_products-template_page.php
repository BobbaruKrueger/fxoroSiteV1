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
		$poza 	= 'forex.png';
		$c1		= '
			<p>
				With <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> you trade the most popular currency with confidence and the benefit from tight spreads with fast execution.
			</p>
			<div class="text-center">
				<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-lg-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Choose between 50 pairs of currencies
				</h5>
				<p>
					<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> offers a range of tradable currency pairs ranging from major and most popular pairs to exotic currencies that are much less common.
				</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						View list of currencies
					</a>
				</div>
			</section>
			<section>
				<h5>
					Trade safe as never before
				</h5>
				<p>
					Stop loss, instant margin protection and balance negative protection at your disposal in order to protect your profits.
				</p>
				<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
					Discover more
				</a>
			</section>
			<section>
				<h5>
					All the upgrades you need 
				</h5>
				<p>
					Receive the esclusive Autochartist signal service, real-time forex quotes, and a lot more and start  to trade with a 360 vision of the markets
				</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Ask for your tools
					</a>
				</div>
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
		$c1		= '
			<p>
				Traditionally Shares are of the most exciting investment opportunities for traders around the world, offering a wide variety of sectors, industries and countries to choose from. 
			</p>	
			<div class="text-center">
				<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-lg-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Trading shares with <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>
				</h5>
				<p>With <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> CFD SHARE trading you can take advantage of falling or rising markets by opening Sell or Buy positions among global markets including the UK, USA, Europe and Asia with a variety of well-known stocks and share without having to physically purchase them.</p>
				<p><span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> will offer you to choose between major corporations listed on the NYSE, NASDAQ and London Stock Trade, shares like Facebook, Apple and Alphabet  (link with list?)</p>
				<p class="font-weight-bold" style="color:#162856;">
					Trade the most popular FOREX pairs like EUR/USD, GBP/USD and EUR/GBP.  Use our advanced trading tools to protect your proﬁts and limit losses.
				</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Start trading now
					</a>
				</div>
			</section>
			<section>
				<h5>
					Advantages of trading on shares with CDF.
				</h5>
				<p>
					It is rare that share gives results in a short time, generally it can take months before seeing the result of your investment. 
				</p>
				<p>
					The CFD shares are instead designed for much shorter periods: they give you the chance to trade in a simpler and a faster way
				</p>
				<p class="font-weight-bold" style="color:#162856;">
					Discover <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> tools and start to trade on FOREX at your best
				</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Find out more
					</a>
				</div>
			</section>
		';
		$faq	= '
			<div class="accordion" id="accProducts">
				<div class="acW">
					<div class="prodacc-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What exactly is a share?
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accProducts">
						<div class="prodacc-body">
							Stocks are an equity investment that represents part ownership in a corporation and entitles you to part of that corporation\'s earnings and assets. ... Today, share ownership is usually recorded electronically, and the shares are held in street name by your brokerage firm.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingTwo">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What is the different between share and stock? 
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accProducts">
						<div class="prodacc-body">
							Stocks and shares have minor differences. A Stock refers to the capital raised by the company whereas shares refer to a single unit of stock. When people say they own stock, they mean they are talking about their ownership of companies.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingThree">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What are exactly  CFD’s ?
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accProducts">
						<div class="prodacc-body">
							CFDs are derivatives products that are made accessible to anyone by trading on live market price movements without actually owning the instrument on which the contract is based. <br>
							CFDs are used to speculate on movement of market prices regardless of whether the underlying markets are rising or falling. The actual underlying asset is never owned. Essentially, it is a contract between the client and the broker. Trading CFDs has several major advantages that increased the popularity over the last several years.
						</div>
					</div>
				</div>
			</div>
		';
	} elseif ( $slug == 'commodities' ) {
		$poza 	= 'commodities.jpg';
		$c1		= '
			<p>Gold, Oil and Silver and a lot more are all available on FXORO trading platform. Trade CFDs on Futures from all around the world and explore different trading opportunities</p>
			<div class="text-center">
				<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-lg-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Discover new indices
				</h5>
				<p>You can Trade a variety of popular commodity CFDs with interesting leverages. You’ll find a huge choice of indices available for investing with ETFs in a broad basket of commodities.</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Discover our list of commodities
					</a>
				</div>
			</section>
			<section>
				<h5>
					Stay ready for the markets
				</h5>
				<p>Get the right training to face the market of commodities with the support of our effective webinars and video-tutorials.</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Subscribe now
					</a>
				</div>
			</section>
			<section>
				<h5>
					Trade on the go
				</h5>
				<p>Trade on commodities wherever you are with updated from markets with real-time streaming quotes via alerts, directly on your mobile.</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Read more
					</a>
				</div>
			</section>
		';
		$faq	= '
			<div class="accordion" id="accProducts">
				<div class="acW">
					<div class="prodacc-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What are the most commonly traded commodities?
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accProducts">
						<div class="prodacc-body">
							The list of the most common commodities and the exchanges they are normally dealt through are given below: Crude Oil and derivatives - The most commonly traded commodity is Crude Oil, and its various derivatives such as heating oil and gasoline. ... Coffee - The second most traded commodity is Coffee, value wise.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingTwo">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>Do commodities go up when stocks go down?
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accProducts">
						<div class="prodacc-body">
							A better hedge is commodities. Research shows that investments in crops, metals, energy, currencies and other tangible things are negatively correlated with both stocks and bonds. When one group goes up, the other group tends to go down, and vice versa. This inverse relationship is not perfect.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingThree">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>Which commodity is best for trading?
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accProducts">
						<div class="prodacc-body">
							The actual trading of commodities involves more than dabbling in the stock market, so be prepared to devote some time to educating yourself not just on the commodity itself, but how it moves within the market.
						</div>
					</div>
				</div>
			</div>
		';
	} elseif ( $slug == 'indices' ) {
		$poza 	= 'indices.png';
		$c1		= '
			<p><span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> offers you a wide range of index CFDs to trade, you can easily diversify your portfolio and find potentially profitable trading opportunities in the markets.</p>
			<div class="text-center">
				<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
					Start your Trading now!!
				</a>
				<p class="text-center mb-3 mb-lg-0">
					Your capital is at risk.
				</p>
			</div>
		';
		$c2		= '
			<section>
				<h5>
					Trade Indices at your best
				</h5>
				<p>With <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> you have direct access to competitive spreads and generous leverage, along with the best execution you can imagine</p>
			</section>
			<section>
				<h5>
					Keep up with the markets.
				</h5>
				<p>
					24/24 You receive updated from the markets with real-time streaming quotes on all Indices, alerts, directly on your desktop or mobile.
				</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Discover More!
					</a>
				</div>
			</section>
			<section>
				<h5>
					Maximize your execution
				</h5>
				<p>Throughout the day and sometimes H24. Combine shares and open positions on entire lists with single transactions. </p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Start trading Indices!
					</a>
				</div>
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
				<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
					Start trading now
				</a>
				<p class="text-center mb-3 mb-lg-0">
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
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Start trading now
					</a>
				</div>
			</section>
			<section>
				<h5>
					What trading crypto with <span style="font-weight: bold; color:#1B2854;">FX<span style="color: #fbb000;">ORO</span></span>?
				</h5>
				<p>Due to the incredible popularity in recent years, cryptocurrencies have become a very interesting conventional asset. <span style="font-weight: bold; color:#1B2854;">FX<span style="color: #fbb000;">ORO</span></span> oﬀers to all his traders the opportunity to trade on a major digital currencies 24/7 with the support  of dedicated tools and personal coaches.</p>
				<p class="font-weight-bold" style="color:#162856;">
					Trade on cryptocurrencies with dedicate tools!!
				</p>
				<div class="text-center text-lg-left">
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
						Find out more
					</a>
				</div>
				
			</section>
		';
		$faq	= '
			<div class="accordion" id="accProducts">
				<div class="acW">
					<div class="prodacc-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>How does Bitcoin make money?
						</h5>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accProducts">
						<div class="prodacc-body">
							However, there are people who make money by "mining". From the bitcoin wikipedia page: Bitcoins are awarded to Bitcoin "miners" for the solution to a difficult proof-of-work problem which confirms transactions and prevents double-spending. Miners can also get extra bitcoins from voluntary transaction fees.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingTwo">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What affects the value of Bitcoin?
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accProducts">
						<div class="prodacc-body">
							As such, the monetary policy, inflation rates, and economic growth measurements that typically influence the value of a currency do not apply. This can make understanding why the price of bitcoin goes up or down confusing. Several factors can influence the price.
						</div>
					</div>
				</div>
				<div class="acW">
					<div class="prodacc-header" id="headingThree">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fas fa-plus"></i><i class="fas fa-minus"></i>What determines the value of Bitcoin?
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accProducts">
						<div class="prodacc-body">
							The price of Bitcoin is not the same as its value. Price is determined by the market in which it trades: by means of supply and demand. This is the same way the price of your secondhand car, a bag of apples in the supermarket, an ounce of gold and just about everything else is determined.
						</div>
					</div>
				</div>
			</div>
		';
	} 

?>
		<main id="prodsect1" class="col-12 site-main prodsect1" role="main">
			<div class="row">
				<div class="col-12 col-lg-6">
					<header class="entry-header">
						<?php the_title('<h1 class="entry-title mb-md-3 mb-xl-4 csseco_mr"><span>','</span></h1>' ); ?>
					</header><!--/.entry-header-->
					<?php echo $c1; ?>
				</div>
				<div class="col-12 col-lg-6 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/prodtemplate2/<?php echo $poza; ?>" alt="<?php echo $poza; ?>" class="imgMain">
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
			<div class="col-12 col-lg-5 tableTickersWrapper">
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
<!--	<div class="revealer" style=""></div>-->
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
					<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">				
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