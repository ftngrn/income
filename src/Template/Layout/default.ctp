<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       Income: <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('https://code.jquery.com/ui/1.11.4/themes/flick/jquery-ui.css') ?>

		<?= $this->Html->script('https://code.jquery.com/jquery-2.2.3.min.js') ?>
		<?= $this->Html->script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') ?>
		<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
<!--
					<ul class="right">
          <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
          <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
          </ul>
-->
				</section>
    </nav>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
		</footer>
<script>
$(function() {
	$(".datepicker").datepicker({
		dateFormat: "yy-mm-dd",
		showButtonPanel: true
	});
});
</script>
</body>
</html>
