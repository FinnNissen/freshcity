<section id="type-and-size">
	<div class="wrap">
		<div class="genbox full-col">
			<p class="p-heading">Please select your bag type & size</p>
			<a href="<?= root_url() ?>delivery-info" class="btn medium next disabled"><span>Next Step &#187;</span></a>
		</div>
		<div class="genbox four-col" id="veggie-bag">
			<img src="<?= root_url('themes/fcf/resources/images') ?>/IMG-veggie-fruit-bag.png" alt="Veggie Bag" width="100%" height="auto" />
			<h2 class="tk-league-gothic p-name all-caps">Veggie Bag</h2>
			<div class="required fieldrow radio-row" id="veggie-size-row">
				<label for="veggie-small"><input type="radio" id="veggie-small" name="type-and-size" value="Veggie Small"> Regular, $27<sup>.99</sup></label>
				<label for="veggie-large"><input type="radio" id="veggie-large" name="type-and-size" value="Veggie Large"> Large, $37<sup>.99</sup></label>
			</div>
			<p>The Veggie Bag contains 8 to 12 types of vegetables. Our salad greens are usually harvested the day-of or the day before delivery ensuring the freshest produce.</p>
		</div>
		<div class="genbox four-col" id="veggie-fruit-bag">
			<img src="<?= root_url('themes/fcf/resources/images') ?>/IMG-veggie-fruit-bag.png" alt="Veggie & Fruit Bag" width="100%" height="auto" />
			<h2 class="tk-league-gothic p-name all-caps">Veggie & Fruit Bag</h2>
			<div class="required fieldrow radio-row" id="veggie-fruit-size-row">
				<label for="veggie-fruit-small"><input type="radio" id="veggie-fruit-small" name="type-and-size" value="Veggie & Fruit Small"> Regular, $27<sup>.99</sup></label>
				<label for="veggie-fruit-large"><input type="radio" id="veggie-fruit-large" name="type-and-size" value="Veggie & Fruit Large"> Large, $37<sup>.99</sup></label>
			</div>
			<p>The Veggie & Fruit Bag contains 8 to 12 types of produce, approximately 2/3 veggies and 1/3 fruit. It feeds one to three adults per week depending on how much you cook at home and how much vegetables you consume.</p>
		</div>
		<div class="genbox four-col" id="fruit-bag">
			<img src="<?= root_url('themes/fcf/resources/images') ?>/IMG-veggie-fruit-bag.png" alt="Fruit Bag" width="100%" height="auto" />
			<h2 class="tk-league-gothic p-name all-caps">Fruit Bag</h2>
			<div class="required fieldrow radio-row" id="fruit-size-row">
				<label for="fruit-small"><input type="radio" id="fruit-small" name="type-and-size" value="Fruit Small"> Regular, $27<sup>.99</sup></label>
				<label for="fruit-large"><input type="radio" id="fruit-large" name="type-and-size" value="Fruit Large"> Large, $37<sup>.99</sup></label>
			</div>
			<p>The Fruit Bag contains 4 to 6 types of fruit, with about 3 to 8 servings of each fruit. We prioritize local produce and add imports during the colder months.</p>
		</div>
	</div>
</section>
<section id="never-send-list">
	<div class="wrap">
		<h3 class="genbox full-col tk-museo-sans p-heading"><a href="#">Create a ‘Never-Send’ List (optional)</a></h3>
		<fieldset class="genbox five-col" style="display:none">
			<div class="fieldrow select-row" id="never-send-1-row">
				<label for="never-send-1">Item 1</label>
				<select name="never-send-1" id="never-send-1">
					<option>- - - -</option>
					<option>Item</option>
					<option>Item</option>
					<option>Item</option>
					<option>…</option>
				</select>
			</div>
			<div class="fieldrow select-row" id="never-send-2-row">
				<label for="never-send-2">Item 2</label>
				<select name="never-send2" id="never-send-2">
					<option>- - - -</option>
					<option>Item</option>
					<option>Item</option>
					<option>Item</option>
					<option>…</option>
				</select>
			</div>
			<div class="fieldrow select-row" id="never-send-3-row">
				<label for="never-send-3">Item 3</label>
				<select name="never-send-3" id="never-send-3">
					<option>- - - -</option>
					<option>Item</option>
					<option>Item</option>
					<option>Item</option>
					<option>…</option>
				</select>
			</div>
			<div class="fieldrow select-row" id="never-send-4-row">
				<label for="never-send-4">Item 4</label>
				<select name="never-send-4" id="never-send-4">
					<option>- - - -</option>
					<option>Item</option>
					<option>Item</option>
					<option>Item</option>
					<option>…</option>
				</select>
			</div>
			<div class="fieldrow select-row" id="never-send-5-row">
				<label for="never-send-5">Item 5</label>
				<select name="never-send-5" id="never-send-5">
					<option>- - - -</option>
					<option>Item</option>
					<option>Item</option>
					<option>Item</option>
					<option>…</option>
				</select>
			</div>
		</fieldset>
		<p class="genbox full-col">Click the text above to create a list of 5 items we should never include in your bag. <br />You’ll be able to edit this later.</p>
	</div>
</section>
<section id="submit">
	<div class="wrap">
		<fieldset class="genbox full-col submit">
			<a href="<?= root_url() ?>delivery-info" class="btn large next disabled"><span>Delivery Information is Next &#187;</span></a>
		</fieldset>
	</div>
</section>