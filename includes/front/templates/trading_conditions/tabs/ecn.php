<?php
/**
 * @package fxoroVone
 * includes/front/templates/trading_conditions/tabs/ecn.php
 *
 * ECN
 */
?>
<div class="tab-content mt-3 mt-xl-4" id="swithcerContent">
	<div class="tab-pane fade show active" id="professional" role="tabpanel" aria-labelledby="professional-tab">
		<ul class="nav nav-tabs" id="pro-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="fxp-tab" data-toggle="tab" href="#fxp" role="tab" aria-controls="fxp" aria-selected="true">FX</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="cfdsp-tab" data-toggle="tab" href="#cfdsp" role="tab" aria-controls="cfdsp" aria-selected="false">CFD's</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="fxp" role="tabpanel" aria-labelledby="fxp-tab">
				<!-- Professional - FX-->
				<?php 
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/tables/professional_fx_ecn.php', false, false ) );
				?>
			</div>
			<div class="tab-pane" id="cfdsp" role="tabpanel" aria-labelledby="cfdsp-tab">
				<!-- Professional - CFD's-->
				<?php 
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/tables/professional_cfds_ecn.php', false, false ) );
				?>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="retail" role="tabpanel" aria-labelledby="retail-tab">
		<ul class="nav nav-tabs" id="ret-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="fxr-tab" data-toggle="tab" href="#fxr" role="tab" aria-controls="fxr" aria-selected="true">FX</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="cfdsr-tab" data-toggle="tab" href="#cfdsr" role="tab" aria-controls="cfdsr" aria-selected="false">CFD's</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="fxr" role="tabpanel" aria-labelledby="fxr-tab">
				<!-- Retail - FX-->
				<?php 
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/tables/retail_fx_ecn.php', false, false ) );
				?>
			</div>
			<div class="tab-pane" id="cfdsr" role="tabpanel" aria-labelledby="cfdsr-tab">
				<!-- Retail - CFD's-->
				<?php 
					include( locate_template( 'includes/front/templates/trading_conditions/tabs/tables/retail_cfds_ecn.php', false, false ) );
				?>
			</div>
		</div>
	</div>
</div>