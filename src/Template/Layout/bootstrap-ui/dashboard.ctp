<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;
use Cake\Routing\Router;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');

/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
	$this->start('tb_flash');
	if (isset($this->Flash))
		echo $this->Flash->render();
	$this->end();
}
$this->end();
?>

<?= $this->start('tb_body_start') ?>
<body <?= $this->fetch('tb_body_attrs') ?>>

	<!-- Nav bar -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= Router::url(['controller'=>'Pages', 'action' => 'display', 'menu']) ?>"><?= Configure::read('App.title') ?></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-divider"></li>
					<?= $this->fetch('tb_left_actions') ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?= $this->fetch('tb_right_actions') ?>

					<?php if (!empty($loginUser)): ?>
					<li class="login-user">
						<?= $this->Html->link('<span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$loginUser['display_name'],
								['controller' => 'staffs', 'action' => 'view', $loginUser['id']],
								['escape' => false, 'title' => $loginUser['display_name']]
						); ?>
					</li>
					<li class="logout">
						<?= $this->Html->link('<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>',
								['controller' => 'staffs', 'action' => 'logout'],
								['escape' => false, 'title' => 'ログアウト']
						); ?>
					</li>
					<?php endif; ?>
				</ul>
				<ul class="nav navbar-nav navbar-right visible-xs">
					<?= $this->fetch('tb_actions') ?>
				</ul>
<!--
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
				</form>
-->
			</div>
		</div>
	</div>

<?= $this->end() ?>

<?= $this->prepend('content', null) ?>
	<div id="content" class="container-fluid">
		<div class="row">
<?php if (!$this->fetch('tb_sidebar')): ?>
			<div class="col-sm-12 col-md-12 main">
<?php else: ?>
			<div class="col-sm-3 col-md-2 sidebar">
<?= $this->fetch('tb_sidebar') ?>

			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php endif; ?>

<?php $page_header = $this->fetch('page_header'); ?>
<?php if (!empty($page_header)): ?>
				<h1 class="page-header"><?= $page_header; ?></h1>
<?php endif; ?>

				<div class="header-nav"><?= $this->fetch('header'); ?></div>
<?= $this->end() ?>
<?= $this->append('content') ?>
			</div>
		</div>

		<div id="footer-push"></div>

	</div>
<?= $this->end() ?>
<?= $this->fetch('content') ?>
<?php
	$this->start('tb_footer');
	echo $this->element('footer');
	$this->end();
?>

<?php
	$this->start('tb_body_end');
	echo '</body>';
	$this->end();

