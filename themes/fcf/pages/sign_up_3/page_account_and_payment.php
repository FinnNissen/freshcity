<section id="account">
	<div class="wrap">
		<div class="genbox full-col">
			<p class="p-heading">Please create Account & enter Payment Information</p>
			<a href="<?= root_url() ?>delivery-info" class="btn medium white back"><span>&#171; Go Back</span></a>
			<a href="<?= root_url() ?>review" class="btn medium next disabled"><span>Next Step &#187;</span></a>
		</div>
		<h3 class="genbox full-col tk-museo-sans p-heading">Sign-in with your…</h3>
		<a href="#" class="genbox three-col tk-museo-sans" id="facebook-account">Facebook Account</a>
		<a href="#" class="genbox three-col tk-museo-sans" id="google-account">Google+ Account</a>
		<h3 class="genbox full-col tk-museo-sans p-heading">…OR create account from scratch.</h3>
		<fieldset class="genbox five-col" id="account-name-email">
			<div class="required fieldrow text-row" id="account-name-row">
				<label for="account-name">Name</label>
				<input type="text" name="account-name" id="account-name" />
			</div>
			<div class="required fieldrow text-row" id="account-email-row">
				<label for="account-email">Email</label>
				<input type="email" name="account-email" id="account-email" />
			</div>
		</fieldset>
		<fieldset class="genbox five-col" id="account-pass-confirm">
			<div class="required fieldrow text-row" id="account-pass-row">
				<label for="account-pass">Password</label>
				<input type="password" name="account-pass" id="account-pass" />
			</div>
			<div class="required fieldrow text-row" id="account-pass-confirm-row">
				<label for="account-pass-confirm">Confirm</label>
				<input type="password" class="confirm" name="account-pass" id="account-pass-confirm" />
			</div>
		</fieldset>
	</div>
</section>
<section id="payment">
	<div class="wrap">
		<div class="genbox five-col required fieldrow radio-row" id="payment-type-row">
			<label for="payment-type-cc" class="for-boxes"><input type="radio" id="payment-type-cc" name="payment-type" value="Credit Card" checked="checked"> Credit Card</label>
			<label for="payment-type-pp" class="for-boxes"><input type="radio" id="payment-type-pp" name="payment-type" value="PayPal"> PayPal</label>
			<label for="payment-type-cheque" class="for-boxes"><input type="radio" id="payment-type-cheque" name="payment-type" value="Cheque"> Cheque</label>
		</div>
		<fieldset class="genbox ten-col payment-type" id="credit-card">
			<div class="required fieldrow text-row" id="name-on-cc-row">
				<label for="name-on-cc">Name On Card</label>
				<input type="text" name="name-on-cc" id="name-on-cc" />
			</div>
			<div class="required fieldrow text-row" id="cc-number-row">
				<label for="cc-number">Credit Card Number</label>
				<input type="text" name="cc-number" id="cc-number" />
			</div>
			<div class="required fieldrow text-row" id="expiry-date-row">
				<label for="expiry-date">Expiry Date</label>
				<select name="expiry-date" id="expiry-date-month">
					<option>- - - -</option>
					<option>01 - Jan</option>
					<option>02 - Feb</option>
					<option>03 - Mar</option>
					<option>04 - Apr</option>
					<option>05 - May</option>
					<option>06 - Jun</option>
					<option>07 - Jul</option>
					<option>08 - Aug</option>
					<option>09 - Sep</option>
					<option>10 - Oct</option>
					<option>11 - Nov</option>
					<option>12 - Dec</option>
				</select>
				<select name="expiry-date" id="expiry-date-year">
					<option>- - - -</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
				</select>
			</div>
			<div class="required fieldrow text-row" id="cvc-row">
				<label for="cvc">CVC</label>
				<input type="text" name="cvc" id="cvc" maxlength="3" />
			</div>
		</fieldset>
	</div>
</section>
<section id="promo-and-rules">
	<div class="wrap">
		<p>promo and rules</p>
	</div>
</section>
<section id="submit">
	<div class="wrap">
		<fieldset class="genbox full-col submit">
			<a class="btn large next disabled" href="<?= root_url() ?>account-and-payment"><span>Review & Buy it &#187;</span></a>
		</fieldset>
	</div>
</section>