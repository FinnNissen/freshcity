<!DOCTYPE html>
	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
	<!--[if lt IE 7]>		<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="lt-ie9 lt-ie8 lt-ie7 no-js wf-inactive"> <![endif]-->
	<!--[if IE 7]>			<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="lt-ie9 lt-ie8 no-js wf-inactive"> <![endif]-->
	<!--[if IE 8]>			<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="lt-ie9 no-js wf-inactive"> <![endif]-->
	<!--[if gt IE 8]><!-->	<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="no-js wf-inactive"> <!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<title>SIGN UP &#187; <?= h($this->page->navigation_label()) ?> | Fresh City Farms</title>
	<?= $this->render_partial('layout:head') ?>
</head>
<?php $pages = $this->page->navigation_root_pages();
if(!isset($active_page)) $active_page = '';
$active_section = 'sign-up'; ?>

<body class="body <?php echo $active_section; ?>" id="<?php echo $active_page; ?>">
<?= $this->render_partial('layout:grid') ?>
	<div class="content">
		<?= $this->render_partial('layout:header', array('pages'=>$pages, 'active_page'=>$active_page, 'active_section'=>$active_section)) ?>
		<?= $this->render_page() ?>
	</div>
	<?= $this->render_partial('layout:footer') ?>
</body></html>