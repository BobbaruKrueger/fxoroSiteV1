<?php
/**
 * @package fxoroVone
 * includes/front/templates/trading_conditions/retail_cfds_ecn.php
 *
 * Retail - CFDs Table - ECN
 */
?>
<table class="table-bordered table-striped">
	<thead>
		<tr>
			<th>Instrument</th>
			<th>Minimum <br>Spread (pips)</th>
			<th>Maximum<br>Leverage*</th>
			<th>Margin</th>
			<th>Contract Size<br> (per lot)</th>
			<th>Min Deal<br> Size</th>
			<th>Max Deal<br> Size</th>
			<th>Step</th>
			<th>Commission <br>($ per lots)</th>
			<th>Swap short <br>($ per lot)</th>
			<th>Swap long <br>($ per lot)</th>
			<th>Maximum<br>Exposure</th>
			<th>Trading hours (GMT+3)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>GOLD</td>
			<td>20</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>100</td>
			<td>1</td>
			<td>1,000</td>
			<td>1</td>
			<td>8$</td>
			<td>-1.26</td>
			<td>-11.03</td>
			<td>5,000</td>
			<td>Mon - Fri 01:00-00:00</td>
		</tr>
		<tr>
			<td>SILVER</td>
			<td>30</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>5,000</td>
			<td>50</td>
			<td>1,000</td>
			<td>50</td>
			<td>8$</td>
			<td>-0.88</td>
			<td>-6.87</td>
			<td>250,000</td>
			<td>Mon - Fri 01:00-00:00</td>
		</tr>
		<tr>
			<td>PLATINUM</td>
			<td>30</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>100</td>
			<td>1</td>
			<td>1,000</td>
			<td>1</td>
			<td>8$</td>
			<td>-8</td>
			<td>-6</td>
			<td>5,000</td>
			<td>Mon - Fri 01:00-00:00</td>
		</tr>
		<tr>
			<td>COPPER</td>
			<td>30</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>20,000</td>
			<td>200</td>
			<td>1,000</td>
			<td>200</td>
			<td>8$</td>
			<td>-3</td>
			<td>-4</td>
			<td>1,000,000</td>
			<td>Mon - Fri 01:00-00:00</td>
		</tr>
		<tr>
			<td>OIL</td>
			<td>1</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>1,000</td>
			<td>10</td>
			<td>30,000</td>
			<td>10</td>
			<td>8$</td>
			<td>-4.24</td>
			<td>-7.85</td>
			<td>50,000</td>
			<td>Mon - Fri 01:00-00:00</td>
		</tr>
		<tr>
			<td>BRENT</td>
			<td>1</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>1,000</td>
			<td>10</td>
			<td>30,000</td>
			<td>10</td>
			<td>8$</td>
			<td>-11.12</td>
			<td>-8.6</td>
			<td>50,000</td>
			<td>Mon - Fri 03:00-01:00</td>
		</tr>
		<tr>
			<td>NGAS</td>
			<td>2</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>10,000</td>
			<td>100</td>
			<td>300,000</td>
			<td>100</td>
			<td>8$</td>
			<td>-9.5</td>
			<td>-8.9</td>
			<td>1,000,000</td>
			<td>Mon - Fri 01:00-00:00</td>
		</tr>
	</tbody>
</table>
<table class="table-bordered table-striped mt-5" style="border-top: 1px solid rgb(222, 226, 230);">
	<thead>
		<tr>
			<th>Instrument</th>
			<th>Minimum <br>Spread (pips)</th>
			<th>Maximum<br>Leverage*</th>
			<th>Margin</th>
			<th>Contract Size<br> (per lot)</th>
			<th>Min Deal<br> Size</th>
			<th>Max Deal<br> Size</th>
			<th>Step</th>
			<th>Commission <br>($ per lots)</th>
			<th>Swap short <br>(<span>interest</span>)</th>
			<th>Swap long <br>(<span>interest</span>)</th>
			<th>Maximum<br>Exposure</th>
			<th>Trading hours (GMT+3)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>AUS200</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>20</td>
			<td>0.2</td>
			<td>200</td>
			<td>0.2</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>500</td>
			<td>Mon-Fri 01:50-08:30, 09:10-23:00</td>
		</tr>
		<tr>
			<td>FRA40</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>20</td>
			<td>0.2</td>
			<td>200</td>
			<td>0.2</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>1,000</td>
			<td>Mon-Fri 09:00-23:00</td>
		</tr>
		<tr>
			<td>GER30</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>10</td>
			<td>0.1</td>
			<td>100</td>
			<td>0.1</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>500</td>
			<td>Mon-Fri 09:00-23:00</td>
		</tr>
		<tr>
			<td>US30</td>
			<td>3</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>10</td>
			<td>0.1</td>
			<td>100</td>
			<td>0.1</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>250</td>
			<td>Mon-Fri 01:00-23:15, 23:30-24:00</td>
		</tr>
		<tr>
			<td>EUR50</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>20</td>
			<td>0.2</td>
			<td>200</td>
			<td>0.2</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>1,000</td>
			<td>Mon-Fri 09:00-23:00</td>
		</tr>
		<tr>
			<td>UK100</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>10</td>
			<td>0.1</td>
			<td>300</td>
			<td>0.1</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>500</td>
			<td>Mon-Fri 10:00-23:00</td>
		</tr>
		<tr>
			<td>IT40</td>
			<td>0.5</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>10</td>
			<td>0.1</td>
			<td>100</td>
			<td>0.1</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>250</td>
			<td>Mon-Fri 10:00-18:40</td>
		</tr>
		<tr>
			<td>HK50</td>
			<td>0.5</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>20</td>
			<td>0.2</td>
			<td>200</td>
			<td>0.2</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>200</td>
			<td>Mon-Fri 04:15-07:00, <br>08:00-11:15, 12:15-17:45</td>
		</tr>
		<tr>
			<td>SPA35</td>
			<td>0.5</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>10</td>
			<td>0.1</td>
			<td>100</td>
			<td>0.1</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>500</td>
			<td>Mon-Fri 10:00-21:00</td>
		</tr>
		<tr>
			<td>NAS100</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>30</td>
			<td>0.3</td>
			<td>300</td>
			<td>0.3</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>750</td>
			<td>Mon-Fri 01:00-23:15, 23:30-24:00</td>
		</tr>
		<tr>
			<td>JPN225</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>1,000</td>
			<td>10</td>
			<td>10,000</td>
			<td>10</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>35,000</td>
			<td>Mon-Fri 02:00-23:15</td>
		</tr>
		<tr>
			<td>US500</td>
			<td>0.5</td>
			<td>1 : 20</td>
			<td>5%</td>
			<td>50</td>
			<td>0.5</td>
			<td>500</td>
			<td>0.5</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>2,500</td>
			<td>Mon-Fri 01:00-23:15, 23:30-24:00</td>
		</tr>
		<tr>
			<td>SWI20</td>
			<td>0.5</td>
			<td>1 : 10</td>
			<td>10%</td>
			<td>10</td>
			<td>0.1</td>
			<td>100</td>
			<td>0.1</td>
			<td>8$</td>
			<td>-5</td>
			<td>-5</td>
			<td>100</td>
			<td>Mon-Fri 09:00-23:00</td>
		</tr>
	</tbody>
</table>