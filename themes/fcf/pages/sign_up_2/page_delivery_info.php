<section id="delivery-schedule">
	<div class="wrap">
		<div class="genbox full-col">
			<p class="p-heading">Please set your Delivery Information</p>
			<!-- <p>Lorem ipsum dolor sit amet, consectetur.</p> -->
			<a href="<?= root_url() ?>type-and-size" class="btn large white back"><span>&#171; Step Back</span></a>
			<a href="<?= root_url() ?>account-and-payment" class="btn large next"><span>Next Step &#187;</span></a>
		</div>
		<div class="genbox full-col">
			<h3 class="tk-museo-sans p-heading">Delivery Schedule</h3>
			<div class="required fieldrow radio-row">
				<label for="delivery-weekly" class="selected"><input type="radio" id="delivery-weekly" name="delivery-schedule" value="Weekly" checked="checked"> Weekly</label>
				<label for="delivery-biweekly"><input type="radio" id="delivery-biweekly" name="delivery-schedule" value="Bi-weekly"> Bi-weekly</label>
			</div>
		</div>
	</div>
</section>
<section id="delivery-info">
	<div class="wrap">
		<div class="genbox six-col required fieldrow radio-row selected" id="delivered-to-row">
			<label for="delivered-to">Delivered to</label>
			<label for="pickup" class="for-boxes"><input type="radio" id="pickup" name="delivered-to" value="Pick-up" checked="checked"> Pick-up Location</label>
			<label for="residence" class="for-boxes"><input type="radio" id="residence" name="delivered-to" value="Residence"> Residence</label>
		</div>
		<div class="genbox four-col required fieldrow text-row" id="delivery-postal-row">
			<label for="delivery-postal">Postal</label>
			<a href="#" class="btn"><span>Search</span></a>
			<input type="text" name="delivery-postal" id="delivery-postal" maxlength="6" />
		</div>
		<div class="tk-museo-sans note right">Delivery Fee: <strong>$3</strong><br /> Delivery Time: <br /><strong>Wednesday (5 &ndash; 7PM)</strong></div>
		<div class="genbox five-col required fieldrow radio-row delivery-info-row" id="residence-type-row">
			<label for="residence-type" class="for-boxes"><input type="radio" id="residence-type" name="delivered-to" value="House"> House</label>
			<label for="residence-type" class="for-boxes"><input type="radio" id="residence-type" name="delivered-to" value="Apartment"> Apartment</label>
			<label for="residence-type" class="for-boxes"><input type="radio" id="residence-type" name="delivered-to" value="Office"> Office</label>
		</div>
		<div class="genbox four-col required fieldrow text-row" id="residence-unit-row">
			<label for="residence-unit">Unit</label>
			<input type="text" name="residence-unit" id="residence-unit" />
		</div>
		<div class="genbox four-col required fieldrow text-row" id="residence-address-row">
			<label for="residence-address">Address</label>
			<input type="text" name="residence-address" id="residence-address" />
		</div>
		<div class="genbox four-col required fieldrow text-row" id="residence-city-row">
			<label for="residence-city">City</label>
			<input type="text" name="residence-city" id="residence-city" />
		</div>
		<div class="genbox four-col required fieldrow select-row" id="residence-leave-row">
			<label for="select">Leave…</label>
			<select name="select" id="select">
				<option>- select one -</option>
				<option>with concierge</option>
				<option>at front-door</option>
				<option>in storage room</option>
				<option>other</option>
			</select>
		</div>
		<div class="genbox five-col fieldrow textarea-row" id="notes-row">
			<label for="notes">Notes</label>
			<textarea name="notes" id="notes"></textarea>
		</div>
		<fieldset class="genbox full-col submit">
			<a class="btn large next" href="<?= root_url() ?>account-and-payment"><span>Account & Payment is Next &#187;</span></a>
		</fieldset>
	</div>
</section>