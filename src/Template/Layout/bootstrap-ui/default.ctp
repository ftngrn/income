<?php

use Cake\Core\Configure;

/**
 * Default `html` block.
 */
if (!$this->fetch('html')) {
	$this->start('html');
	printf('<html lang="%s" class="no-js">', Configure::read('App.language'));
	$this->end();
}

/**
 * Default `title` block.
 */
if (!$this->fetch('title')) {
	$this->start('title');
	echo Configure::read('App.title');
	$this->end();
}

/**
 * Default `footer` block.
 */
if (!$this->fetch('tb_footer')) {
	$this->start('tb_footer');
	printf('<footer>%s &copy;2016 <a href="%s">Sapporo Gakuen</a>.</footer>', Configure::read('App.title'), 'https://www.sapporo-gakuen.jp/');
	$this->end();
}

/**
 * Default `body` block.
 */
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');
if (!$this->fetch('tb_body_start')) {
	$this->start('tb_body_start');
	echo '<body' . $this->fetch('tb_body_attrs') . '>';
	$this->end();
}
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
	$this->start('tb_flash');
	if (isset($this->Flash))
		echo $this->Flash->render();
	$this->end();
}
if (!$this->fetch('tb_body_end')) {
	$this->start('tb_body_end');
	echo '</body>';
	$this->end();
}

/**
 * Prepend `meta` block with `author` and `favicon`.
 */
$this->prepend('meta', $this->Html->meta('author', null, ['name' => 'author', 'content' => Configure::read('App.author')]));

/**
 * Prepend `css` block with Bootstrap stylesheets and append
 * the `$html5Shim`.
 */
$html5Shim =
<<<HTML

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
HTML;

$this->append('css', $html5Shim);

/**
 * Prepend `script` block with jQuery and Bootstrap scripts
 */

?>
<!DOCTYPE html>

<?= $this->fetch('html') ?>

	<head>

		<?= $this->Html->charset() ?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= Configure::read('App.title') ?>: <?= $this->fetch('title') ?></title>

		<?= $this->Html->meta('icon') ?>

		<link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/icon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/icon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/icon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/icon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/icon/manifest.json">
		<link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/icon/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<?= $this->fetch('meta') ?>

		<?= $this->Html->css([
					'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
					'https://code.jquery.com/ui/1.11.4/themes/flick/jquery-ui.css',
					'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
		]) ?>
		<?= $this->fetch('css') ?>
		<?= $this->Html->css(['income.css']) ?>
		<?= $this->Html->script([
					'https://code.jquery.com/jquery-2.2.3.min.js',
					'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
					'https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js',
					'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',
					'https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.5/marked.min.js',
		]) ?>

	</head>
	<?= $this->fetch('tb_body_start') ?>

		<?= $this->fetch('tb_flash') ?>

		<?= $this->fetch('content') ?>

		<?= $this->fetch('tb_footer') ?>

	<?= $this->Html->scriptStart() ?>
$(function() {
	$(".datepicker").datepicker({
		dateFormat: "yy-mm-dd",
		showButtonPanel: true
	});
});
	<?= $this->Html->scriptEnd() ?>

	<?= $this->fetch('script') ?>

	<?= $this->fetch('tb_body_end') ?>

</html>
