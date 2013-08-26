<section id="account">
	<div class="wrap">
		<div class="genbox full-col">
			<p class="p-heading">Please create account & enter payment information</p>
			<a href="<?= root_url() ?>delivery-info" class="btn medium white back"><span>&#171; Go Back</span></a>
			<a href="<?= root_url() ?>review" class="btn medium next disabled"><span>Next Step &#187;</span></a>
		</div>
		<!-- <div class="genbox six-col sign-in-with" id="facebook-account">
			<h3 class="tk-museo-sans p-heading"><img src="<?= root_url('themes/fcf/resources/images') ?>/img.jpg" alt="img" width="80" height="80" /> {Customer Name} <small>lisa.m@gmail.com</small></h3>
			<p class="tk-museo-sans">Your account is linked via Facebook <a href="#">Unlink it</a></p>
		</div> -->
		<fieldset class="genbox four-col" id="create-account-set">
			<h3 class="tk-museo-sans p-heading">Fill in your details…</h3>
			<div class="required fieldrow text-row" id="account-name-row">
				<label for="account-name">Name</label>
				<input type="text" name="account-name" id="account-name" />
			</div>
			<div class="required fieldrow text-row" id="account-email-row">
				<label for="account-email">Email</label>
				<input type="email" name="account-email" id="account-email" />
			</div>
			<div class="required fieldrow text-row" id="account-pass-row">
				<label for="account-pass">Password</label>
				<input type="password" name="account-pass" id="account-pass" />
			</div>
			<div class="required fieldrow text-row" id="account-pass-confirm-row">
				<label for="account-pass-confirm">Confirm Pass</label>
				<input type="password" class="confirm" name="account-pass" id="account-pass-confirm" />
			</div>
		</fieldset>
		<div class="genbox four-col">
			<h3 class="tk-museo-sans p-heading">…sign-in with your</h3>
			<a href="#" class="sign-in-with tk-museo-sans" id="facebook-account">Facebook Account</a>
			<a href="#" class="sign-in-with tk-museo-sans" id="google-account">Google+ Account</a>
		</div>
	</div>
</section>
<section id="payment">
	<div class="wrap">
		<h3 class="genbox five-col tk-museo-sans p-heading">Choose your payment method</h3>
		<div class="genbox five-col required fieldrow radio-row" id="payment-type-row">
			<label for="credit-card" class="for-boxes"><input type="radio" id="credit-card" name="payment-type" value="Credit Card" checked="checked"> Credit Card</label>
			<label for="paypal" class="for-boxes"><input type="radio" id="paypal" name="payment-type" value="PayPal"> PayPal</label>
			<label for="cheque" class="for-boxes"><input type="radio" id="cheque" name="payment-type" value="Cheque"> Cheque</label>
		</div>
		<fieldset class="genbox six-col payment-type" id="credit-card-set">
			<div class="required fieldrow text-row" id="cc-number-row">
				<label for="cc-number">Card Number</label>
				<input type="number" name="cc-number" id="cc-number" maxlength="20" />
			</div>
			<div class="required fieldrow text-row" id="name-on-cc-row">
				<label for="name-on-cc">Name On Card</label>
				<input type="text" name="name-on-cc" id="name-on-cc" />
			</div>
			<div class="required fieldrow select-row" id="expiry-date-row">
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
				<input type="number" name="cvc" id="cvc" maxlength="3" />
			</div>
		</fieldset>
		<fieldset class="genbox six-col payment-type" id="paypal-set" style="display:none">
			<p>Paypal lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</fieldset>
		<fieldset class="genbox six-col payment-type" id="cheque-set" style="display:none">
			<p>Cheque ut enim ad minim veniam, quis nostrud exercitation sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</fieldset>
	</div>
</section>
<section id="promo-and-rules">
	<div class="wrap">
		<fieldset class="genbox eight-col" id="promo-code-set">
			<div class="fieldrow text-row" id="promo-code-row">
				<label for="promo-code">Promo Code</label>
				<input type="text" name="promo-code" id="promo-code" />
			</div>
			<div class="fieldrow select-row" id="feedback-row">
				<label for="feedback">How did you hear about us?</label>
				<select name="feedback" id="feedback">
					<option>- - - -</option>
					<option value="Option 1">Option 1</option>
					<option value="Option 2">Option 2</option>
					<option value="Option 3">Option 3</option>
				</select>
			</div>
		</fieldset>
		<fieldset class="genbox eight-col" id="rules-agree-set">
			<div class="required fieldrow checkbox-row" id="rules-agree-row">
				<label for="rules-agree" class="for-boxes"><input type="checkbox" id="rules-agree" name="rules-agree" value="Agreed"> I agree to all <a href="#">the rules</a></label>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</fieldset>
	</div>
</section>
<section id="submit">
	<div class="wrap">
		<fieldset class="genbox full-col submit">
			<a class="btn large next disabled" href="<?= root_url() ?>account-and-payment"><span>Review & Buy it &#187;</span></a>
		</fieldset>
	</div>
</section>