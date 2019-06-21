<?php
/**
 * @package fxoroVone
 * includes/front/templates/trading_conditions/trading_condition_table.php
 *
 * Referral Form Template
 */
?>
<?php 
	if ( isset( $_GET['type'] ) && !empty( $_GET['type'] ) ){
		$type = $_GET['type'];	
	} else {
		$type = '';
	}
?>
<div class="trading_condition_table col-12">
	<div class="row">
		<div class="col-12 switcher text-center mb-3 mb-xl-4">
			<ul class="nav clearfix" id="switcher" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="true">Professional</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="retail-tab" data-toggle="tab" href="#retail" role="tab" aria-controls="retail" aria-selected="false">Retail</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-4">
			<div class="fixW">
				<a href="<?php home_url(); ?>/fxoro_site_mf/trading-conditions">FIX</a>
<!--				<a href="<?php home_url(); ?>/trading-conditions">FIX</a>-->
			</div>
		</div>
		<div class="col-12 col-sm-4">
			<div class="floatingW">
				<a href="?type=float">Floating</a>
			</div>
		</div>
		<div class="col-12 col-sm-4">
			<div class="ecnW">
				<a href="?type=ecn">ECN</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 tct">
			<?php 
				if ( $type == 'float' ) {
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/floating.php', false, false ) );
				} elseif ( $type == 'ecn' ) {
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/ecn.php', false, false ) );
				} else {
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/fix.php', false, false ) );
				}
			?>
			
		</div>
	</div>
</div>



					
