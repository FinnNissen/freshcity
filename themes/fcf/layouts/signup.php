<!DOCTYPE html>
	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
	<!--[if lt IE 7]>		<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="lt-ie9 lt-ie8 lt-ie7 no-js wf-inactive"> <![endif]-->
	<!--[if IE 7]>			<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="lt-ie9 lt-ie8 no-js wf-inactive"> <![endif]-->
	<!--[if IE 8]>			<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="lt-ie9 no-js wf-inactive"> <![endif]-->
	<!--[if gt IE 8]><!-->	<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="no-js wf-inactive"> <!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<title><?= h($this->page->title) ?> | Fresh City Farms</title>
	<?= $this->render_partial('layout:head') ?>
</head>
<? $active_page = isset($active_page) ? $active_page : 'sign-up-1' ?>
<body class="body sign-up" id="<?= $active_page ?>">
<?= $this->render_partial('layout:grid') ?>
	<div class="content">
		<?= $this->render_partial('layout:header') ?>
		<?= $this->render_page() ?>
	</div>
	<?= $this->render_partial('layout:footer') ?>
</body></html>