<section id="account">
	<div class="wrap">
		<div class="genbox full-col">
			<p class="p-heading">Please create Account & enter Payment Information</p>
			<a href="<?= root_url() ?>delivery-info" class="btn medium white back"><span>&#171; Go Back</span></a>
			<a href="<?= root_url() ?>review" class="btn medium next"><span>Next Step &#187;</span></a>
		</div>
		<h3 class="genbox full-col tk-museo-sans p-heading">Create Account with…</h3>
		<a href="#" class="genbox three-col" id="facebook-account">Facebook</a>
		<a href="#" class="genbox three-col" id="google-account">Google</a>
		<h3 class="genbox full-col tk-museo-sans p-heading">OR</h3>
		<fieldset class="genbox five-col" id="account-name-email">
			<div class="required fieldrow text-row" id="account-name-row">
				<label for="account-name">Name</label>
				<input type="text" name="account-name" id="account-name" />
			</div>
			<div class="required fieldrow text-row" id="account-email-row">
				<label for="account-email">Email</label>
				<input type="text" name="account-email" id="account-email" />
			</div>
		</fieldset>
		<fieldset class="genbox five-col" id="account-pass-confirm">
			<div class="required fieldrow text-row" id="account-pass-row">
				<label for="account-pass">Password</label>
				<input type="text" name="account-pass" id="account-pass" />
			</div>
			<div class="required fieldrow text-row" id="account-confirm-row">
				<label for="account-confirm">Confirm</label>
				<input type="text" name="account-confirm" id="account-confirm" />
			</div>
		</fieldset>
	</div>
</section>