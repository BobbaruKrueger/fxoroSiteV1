<?php
/**
 * @package CSSecoThemes
 * includes/front/templates/criteria_to_qualify.php
 *
 * Criteria to qualify Form Template
 */
?>
<div class="criteriaToQualifyFormWrapper">
	<h5>Criteria to qualify</h5>
	<p>To qualify as a Professional Client you need to meet two of these three criteria:</p>
	<form id="criteriaToQualifyForm" action="/professional-questionare/">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="ctqTV">
						<div class="checkWr">
							<input type="checkbox" id="ctqTV" name="criteria[]">
						</div>
						<p><strong>Trading volume:</strong> Have you made an average of 10 significantly sized transactions per quarter over the last four quarters?</p>
					</label>
				</div>
				<div class="form-group">
					<label for="ctqP">
						<div class="checkWr">
							<input type="checkbox" id="ctqP" name="criteria[]">
						</div>
						<p><strong>Portfolio:</strong> Do you have a financial instrument portfolio, including cash deposits, exceeding €500,000 or currency equivalent?</p>
					</label>
				</div>
				<div class="form-group">
					<label for="ctqE">
						<div class="checkWr">
							<input type="checkbox" id="ctqE" name="criteria[]">
						</div>
						<p><strong>Experience:</strong> Have you worked in a professional position in the financial sector requiring knowledge of the transactions or services envisaged for at least 1+ year(s)?</p>
					</label>
				</div>
				<div class="form-group">
					<a class="linktocriteriadetails" href="#">View qualification criteria in detail</a>
					<div class="text-center">
						<button class="cssecoBtn animationbtn submit-button" id="submit" name="submit" type="submit" disabled >				
							Submit
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>