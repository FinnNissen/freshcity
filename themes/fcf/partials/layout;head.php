<title><?= h($this->page->title) ?></title>

<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="index,no-follow">
<meta name="description" content="<?= $this->page->description ?>">
<meta name="keywords" content="<?= h($this->page->keywords) ?>">
<link href="<?= root_url('blog/rss') ?>" type="application/rss+xml" rel="alternate" title="News">
<!-- <link rel="shortcut icon" href="<?= root_url('themes/fcf/resources/images') ?>/favicon.ico"> -->

<?= $this->css_combine(array(
  'ls_styles',
  '@css/jquery.fancybox.css',
  '@css/normalize.css',
  '@css/global.css',
  '@css/layout.css',
  '@css/style.css'
)) ?>

<?= $this->js_combine(array(
  '@javascript/webfont.js',
  '@javascript/jquery.js',
  '@javascript/modernizr.foundation.js',
  '@javascript/app.js',
  '@javascript/jquery.fancybox.js',
  '@javascript/jquery.jkey.js',
  'ls_core_jquery'
)) ?>

<?= $this->render_head() ?>