<? $active_page = isset($active_page) ? $active_page : 'home' ?>
<header class="check-out">
	<nav class="wrap">
		<ul class="inline" id="main-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Bag Overview</a></li>
			<li><a href="#">Store</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Sign Up</a></li>
		</ul>
		<ul class="inline" id="secondary-nav">
			<li><a href="#">My Account</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Get Involved</a></li>
			<li><a href="#">City Farming</a></li>
			<li><a href="#">Our Farming</a></li>
		</ul>
	</nav>
	<div class="breadcrumb">
		<? $this->render_block('breadcrumbs') ?>
	</div>
</header>
