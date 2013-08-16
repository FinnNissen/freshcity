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
		<p>payment</p>
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