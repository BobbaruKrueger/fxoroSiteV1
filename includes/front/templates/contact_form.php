<?php
/**
 * @package CSSecoThemes
 * includes/front/templates/contact_form.php
 *
 * Contact Form Template
 */
?>

<form id="cssecoContactForm">
	<div class="row"> 
		<div class="col-12 col-md-4 pr-md-1">
			<div class="form-group">
				<label for="fname">First Name</label>
				<input type="text" id="fname" class="form-control" placeholder="First Name" name="First Name"  />
			</div>
		</div>
		<div class="col-12 col-md-4 pl-md-1 pr-md-1">
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" class="form-control" placeholder="Last Name" name="Last Name"  />
			</div>	
		</div>
		<div class="col-12 col-md-4 pl-md-1">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" class="form-control" placeholder="Email" name="Email"  />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 pr-md-1">
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
		<div class="col-12 col-md-6 pl-md-1">
			<div class="form-group">
				<label for="phonenumber">Phone</label>
				<div class="phoneFP clearfix">
					<input id="phoneprefix" class="form-control phoneprefixclass phone-prefix" type="text" name="phone-country-code" value="" readonly="">
					<input id="phonenumber" class="form-control phonenumberclass phone-number" name="phone" type="tel" placeholder="Phone">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-12">
			<div class="form-group">
				<label for="refmessage">Message</label>
				<textarea class="form-control" id="refmessage" rows="3"></textarea>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form-group cssecoBtnW">
				<button type="submit" class="cssecoBtn animationbtn">Submit</button>
			</div>
		</div>
	</div>
</form>