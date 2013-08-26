<section id="delivery-schedule">
	<div class="wrap">
		<div class="genbox full-col">
			<p class="p-heading">Please set your delivery information</p>
			<a href="<?= root_url() ?>type-and-size" class="btn medium white back"><span>&#171; Go Back</span></a>
			<a href="<?= root_url() ?>account-and-payment" class="btn medium next disabled"><span>Next Step &#187;</span></a>
		</div>
		<div class="genbox full-col">
			<div class="required fieldrow radio-row" id="delivery-schedule-row">
				<label for="delivery-weekly" class="completed"><input type="radio" id="delivery-weekly" name="delivery-schedule" value="Weekly" checked="checked"> Weekly Delivery</label>
				<label for="delivery-biweekly"><input type="radio" id="delivery-biweekly" name="delivery-schedule" value="Bi-weekly"> Bi-weekly Delivery</label>
			</div>
		</div>
	</div>
</section>
<section id="delivery-info">
	<div class="wrap">
		<div class="genbox six-col required fieldrow radio-row" id="delivered-to-row">
			<label>Delivered to</label>
			<label for="pick-up" class="for-boxes" class="completed"><input type="radio" id="pick-up" name="delivered-to" value="Pick-up" checked="checked"> Pick-up Location</label>
			<label for="residence" class="for-boxes"><input type="radio" id="residence" name="delivered-to" value="Residence"> Residence</label>
		</div>
		<div class="genbox four-col required fieldrow text-row" id="delivery-postal-row">
			<label for="delivery-postal">Postal</label>
			<a href="#" class="btn"><span>Look Up</span></a>
			<input type="text" name="delivery-postal" id="delivery-postal" maxlength="7" />
		</div>
		<fieldset class="delivered-to-type" id="pick-up-type-set" style="display:none">
			<div class="genbox six-col required fieldrow radio-row" id="pick-up-1-row">
				<label for="pick-up-1" class="for-boxes">
					<img src="<?= root_url('themes/fcf/resources/images') ?>/img.jpg" alt="Location 1" width="50%" height="auto" />
					<input type="radio" id="pick-up-1" name="pick-up-location" value="Location 1">Location 1
					<small class="tk-museo-sans">Address line 1 <br />Address line 2 <br />(416) 000-0000</small>
				</label>
			</div>
			<div class="genbox six-col required fieldrow radio-row" id="pick-up-2-row">
				<label for="pick-up-2" class="for-boxes">
					<img src="<?= root_url('themes/fcf/resources/images') ?>/img.jpg" alt="Location 2" width="50%" height="auto" />
					<input type="radio" id="pick-up-2" name="pick-up-location" value="Location 2">Location 2
					<small class="tk-museo-sans">Address line 1 <br />Address line 2 <br />(416) 000-0000</small>
				</label>
			</div>
			<div class="genbox six-col required fieldrow radio-row" id="pick-up-3-row">
				<label for="pick-up-3" class="for-boxes">
					<img src="<?= root_url('themes/fcf/resources/images') ?>/img.jpg" alt="Location 3" width="50%" height="auto" />
					<input type="radio" id="pick-up-3" name="pick-up-location" value="Location 3">Location 3
					<small class="tk-museo-sans">Address line 1 <br />Address line 2 <br />(416) 000-0000</small>
				</label>
			</div>
			<p><a href="#" class="tk-museo-sans more-link">Click to see ALL Pick-up Locations…</a></p>
		</fieldset>
		<fieldset class="delivered-to-type" id="residence-type-set" style="display:none">
			<div class="genbox five-col required fieldrow radio-row" id="residence-type-row">
				<label for="residence-type-house" class="for-boxes"><input type="radio" id="residence-type-house" name="residence-type" value="House" checked="checked"> House</label>
				<label for="residence-type-apt" class="for-boxes"><input type="radio" id="residence-type-apt" name="residence-type" value="Apartment"> Apartment</label>
				<label for="residence-type-office" class="for-boxes"><input type="radio" id="residence-type-office" name="residence-type" value="Office"> Office</label>
			</div>
			<div class="genbox five-col required fieldrow text-row" id="residence-address-1-row">
				<label for="residence-address-1">Address 1</label>
				<input type="text" name="residence-address-1" id="residence-address-1" />
			</div>
			<div class="genbox five-col required fieldrow text-row" id="residence-address-2-row">
				<label for="residence-address-2">Address 2</label>
				<input type="text" name="residence-address-2" id="residence-address-2" />
			</div>
			<div class="genbox five-col required fieldrow text-row" id="residence-city-row">
				<label for="residence-city">City</label>
				<input type="text" name="residence-city" id="residence-city" value="Toronto" />
			</div>
			<div class="genbox five-col required fieldrow select-row" id="residence-instructions-row">
				<label for="residence-instructions">Instructions</label>
				<select name="residence-instructions" id="residence-instructions">
					<option>- - - -</option>
					<option>Leave at front-door</option>
					<option>Leave at back-door</option>
					<option>Leave at front-desk</option>
					<option>Leave in storage room</option>
					<option>Leave in mail room</option>
					<option>Leave in foyer</option>
					<option>Other</option>
				</select>
			</div>
			<div class="genbox five-col fieldrow textarea-row" id="notes-row">
				<label for="notes">Notes</label>
				<textarea name="notes" id="notes" placeholder="optional"></textarea>
			</div>	
		</fieldset>
	</div>
</section>
<section id="submit">
	<div class="wrap">
		<fieldset class="genbox full-col submit">
			<a class="btn large next disabled" href="<?= root_url() ?>account-and-payment"><span>Account & Payment is Next &#187;</span></a>
		</fieldset>
	</div>
</section>