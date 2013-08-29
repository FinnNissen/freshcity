<?php /* foreach ($pages as $page) : echo $page->title . '(' . $page->id . ') | '; endforeach; */ ?>
<header>
	<nav class="wrap">
		<a href="<?= root_url() ?>" class="img-txt" id="logo" title="Fresh City Farms &#187; Toronto Organic Delivery, Box Home Delivery, Imports for Variety, No Commitment, Minimal Packaging, Customizable, Support City Farming">Fresh City Farms &#187; Toronto Organic Delivery, Box Home Delivery, Imports for Variety, No Commitment, Minimal Packaging, Customizable, Support City Farming</a>
		<ul class="inline tk-league-gothic" id="main-nav">
			<li id="<?php if (isset($active_page) && $active_page == 'home') echo 'active' ?>"><?= '<a href="' . root_url('/') . '" title="' . $pages[0]->navigation_label() . '">' . $pages[0]->title . '</a>'; ?></li>
			<li id="<?php if (isset($active_page) && $active_page == 'bag-overview') echo 'active' ?>"><?= '<a href="' . root_url('bag-overview') . '" title="' . $pages[1]->navigation_label() . '">' . $pages[1]->title . '</a>'; ?></li>
			<li id="<?php if (isset($active_page) && $active_page == 'store') echo 'active' ?>"><?= '<a href="' . root_url('store') . '" title="' . $pages[2]->navigation_label() . '">' . $pages[2]->title . '</a>'; ?></li>
			<li id="<?php if (isset($active_page) && $active_page == 'about-us') echo 'active' ?>"><?= '<a href="' . root_url('about-us') . '" title="' . $pages[3]->navigation_label() . '">' . $pages[3]->title . '</a>'; ?></li>
			<li id="<?php if (isset($active_page) && $active_page == 'blog') echo 'active' ?>"><?= '<a href="' . root_url('blog') . '" title="' . $pages[4]->navigation_label() . '">' . $pages[4]->title . '</a>'; ?></li>
			<li id="<?php if (isset($active_section) && $active_section == 'sign-up') echo 'active' ?>"><a href="<?= root_url('sign-up/step-1') ?>" title="Sign Up title&hellip; change this" class="sign-up">Sign Up</a></li>
		</ul>
		<ul class="inline tk-museo-sans" id="secondary-nav">
			<li id="<?php if (isset($active_page) && $active_page == 'overview') echo 'active' ?>"><?= '<a class="account" href="' . root_url('account/overview') . '" title="' . $pages[14]->navigation_label() . '">' . $pages[14]->title . '</a>'; ?></li>
			<li id="<?php if (isset($active_page) && $active_page == 'contact-us') echo 'active' ?>"><a href="#">Contact Us</a></li>
			<li id="<?php if (isset($active_page) && $active_page == 'get-involved') echo 'active' ?>"><a href="#">Get Involved</a></li>
			<li id="<?php if (isset($active_page) && $active_page == 'city-farming') echo 'active' ?>"><a href="#">City Farming</a></li>
			<li id="<?php if (isset($active_page) && $active_page == 'our-farm') echo 'active' ?>"><a href="#">Our Farm</a></li>
		</ul>
	</nav>
</header>
<div class="status-bar">
	<? $this->render_block('breadcrumbs') ?>
</div>