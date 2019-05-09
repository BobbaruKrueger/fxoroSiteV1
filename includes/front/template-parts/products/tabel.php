<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/products/tabel.php
 *
 * Dynamic Tabel
 */
?>
<div class="tabletickers">
	<ul class="nav" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="most_popular-tab" data-toggle="tab" href="#most_popular" role="tab" aria-controls="most_popular" aria-selected="true">Most popular</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="false">Forex</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="cfds-tab" data-toggle="tab" href="#cfds" role="tab" aria-controls="cfds" aria-selected="false">Shares</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="indices-tab" data-toggle="tab" href="#indices" role="tab" aria-controls="indices" aria-selected="false">Indices</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="commodities-tab" data-toggle="tab" href="#commodities" role="tab" aria-controls="commodities" aria-selected="false">Commodities</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="crypto-tab" data-toggle="tab" href="#crypto" role="tab" aria-controls="crypto" aria-selected="false">Cryptocurencies</a>
		</li>
	</ul>
	<div class="tab-content" id="">
		<div class="tab-pane fade show active" id="most_popular" role="tabpanel" aria-labelledby="most_popular-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>
						<th scope="col" class="cssecol2">Selling price</th>
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>popular</td>
						<td>sell</td>
						<td>buy</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade" id="forex" role="tabpanel" aria-labelledby="forex-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>
						<th scope="col" class="cssecol2">Selling price</th>
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>forex</td>
						<td>sell</td>
						<td>buy</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade" id="cfds" role="tabpanel" aria-labelledby="cfds-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>
						<th scope="col" class="cssecol2">Selling price</th>
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					<tr class="EURUSD">
                        <td>
                            <div class="row m-0 d-block">
                                <div class="col-12 p-0 symbol-name font-weight-bold">
                                    <span>EUR / USD</span>      
                                </div>
                                <div class="col-12 p-0 change-percentage font-weight-bold">
                                    <span class="positive" style="color: rgb(48, 171, 47);">+0.43</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row m-0 d-block">
                                <div class="col-12 p-0 sell-value">
                                    <span style="color: rgb(48, 171, 47);">1.1214</span>
                                </div>
                                <div class="col-12 p-0 sell-btn text-center">
                                    <a href="#" class="font-weight-bold text-white">Sell</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row m-0 d-block">
                                <div class="col-12 p-0 buy-value text-center">
                                    <span style="color: rgb(48, 171, 47);">1.1212</span>
                                </div>
                                <div class="col-12 p-0 buy-btn">
                                    <a href="#" class="font-weight-bold text-white">Buy</a>
                                </div>
                            </div>
                        </td>
                    </tr>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade" id="indices" role="tabpanel" aria-labelledby="indices-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>
						<th scope="col" class="cssecol2">Selling price</th>
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>indices</td>
						<td>sell</td>
						<td>buy</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade" id="commodities" role="tabpanel" aria-labelledby="commodities-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>
						<th scope="col" class="cssecol2">Selling price</th>
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>commo</td>
						<td>sell</td>
						<td>buy</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade" id="crypto" role="tabpanel" aria-labelledby="crypto-tab">
			<table class="table-bordered">
				<thead>
					<tr>
						<th scope="col" class="cssecol1">Unit variation</th>
						<th scope="col" class="cssecol2">Selling price</th>
						<th scope="col" class="cssecol3">Buying price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>crypto</td>
						<td>sell</td>
						<td>buy</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>