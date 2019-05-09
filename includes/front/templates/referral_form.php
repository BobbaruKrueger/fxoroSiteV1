<?php
/**
 * @package CSSecoThemes
 * includes/front/templates/referral_form.php
 *
 * Referral Form Template
 */
?>

<form id="cssecoReferralForm">
	<div class="row">
		<div class="col-12">
			<h5>Referral Friends Form</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="fname">First Name</label>
				<input type="text" id="fname" class="form-control" placeholder="First Name" name="First Name"  />
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" class="form-control" placeholder="Last Name" name="Last Name"  />
			</div>	
		</div>
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" class="form-control" placeholder="Email" name="Email"  />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="country">Country</label>
				<select class="form-control" id="country">
					<option>Romania</option>
					<option>Rusia</option>
					<option>Italia</option>
					<option>Belgia</option>
					<option>Ungaria</option>
				</select>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="phonenumber">Phone</label>
				<div class="phoneFP clearfix">
					<input id="phoneprefix" class="form-control phoneprefixclass phone-prefix" type="text" name="phone-country-code" value="" readonly="">
					<input id="phonenumber" class="form-control phonenumberclass phone-number" name="phone" type="tel" placeholder="Phone">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="ffname">Friend's First Name</label>
				<input type="text" id="ffname" class="form-control" placeholder="Friend's First Name" name="Friend's First Name" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="flsname">Friend's Last Name</label>
				<input type="text" id="flsname" class="form-control" placeholder="Friend's Last Name" name="Friend's Last Name"  />
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="femail">Friend's Email</label>
				<input type="email" id="femail" class="form-control" placeholder="Friend's Email" name="Friend's Email"  />
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="form-group">
				<label for="fcountry">Friend's Country</label>
				<select class="form-control" id="fcountry">
					<option>Romania</option>
					<option>Rusia</option>
					<option>Italia</option>
					<option>Belgia</option>
					<option>Ungaria</option>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="form-group phoneFP clearfix">
				<label for="fphonenumber">Friend's Phone</label>
				<div class="phoneFP clearfix">
					<input id="fphoneprefix" class="form-control phoneprefixclass phone-prefix" type="text" name="phone-country-code" value="" readonly="">
					<input id="fphonenumber" class="form-control phonenumberclass phone-number" name="phone" type="tel" placeholder="Phone">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-8">
			<div class="form-group">
				<label for="refmessage">Message</label>
				<textarea class="form-control" id="refmessage" rows="3"></textarea>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form-group m-0 text-center text-md-right">
				<button type="submit" class="cssecoBtn animationbtn">Submit</button>
			</div>
		</div>
	</div>
</form>