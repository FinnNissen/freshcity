<? $active_page = isset($active_page) ? $active_page : 'home' ?>
<header>
	<nav class="wrap">
		<a href="#" class="img-txt" id="logo">Fresh City Farms: Toronto Organic Delivery, Box Home Delivery, Imports for Variety, No Commitment, Minimal Packaging, Customizable, Support City Farming</a>
		<ul class="inline tk-league-gothic" id="main-nav">
			<li id="<?= $active_page == 'home' ? 'active' : null ?>"><a href="#">Home</a></li>
			<li><a href="#">Bag Overview</a></li>
			<li><a href="#">Store</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Blog</a></li>
			<li id="<?= $active_page == 'sign-up-1' || 'sign-up-2' ? 'active' : null ?>"><a href="#" class="sign-up">Sign Up</a></li>
		</ul>
		<ul class="inline tk-museo-sans" id="secondary-nav">
			<li><a href="#">My Account</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Get Involved</a></li>
			<li><a href="#">City Farming</a></li>
			<li><a href="#">Our Farming</a></li>
		</ul>
	</nav>
</header>
<div class="status-bar">
	<? $this->render_block('breadcrumbs') ?>
</div>