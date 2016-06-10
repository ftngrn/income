<?php
$this->assign('title', '園児一覧');
$this->extend('../Layout/bootstrap-ui/dashboard');
$this->assign('page_header', '園児の一覧');
?>
<?= $this->Html->css(['child']) ?>
<?php $this->start('tb_left_actions', ['label' => '']) ?>
<li><?= $this->Html->link('園児を探す', ['controller' => 'incomes', 'action' => 'search']) ?></li>
<li><?= $this->Html->link('一覧', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('追加', ['controller' => 'guardians', 'action' => 'add']) ?></li>
<?php $this->end(); ?>

<div class="children index large-9 medium-8 columns content">
	<div class="row">
		<div class="col-md-1">
			<?= $this->Paginator->sort('id') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('school') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('room') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('bus') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('course') ?>
		</div>
		<div class="col-md-2">
			<?= $this->Paginator->sort('kana') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('birthed') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('joined') ?>
		</div>
		<div class="col-md-1">
			<?= $this->Paginator->sort('created') ?>
		</div>
		<div class="col-md-2">
			Actions
		</div>
	</div>

<?php foreach ($children as $child): ?>
	<div class="row">
		<div class="col-md-1">
			<?= $this->Number->format($child->id) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->school) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->room) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->bus) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->course) ?>
		</div>
		<div class="col-md-2">
			<?= h($child->kana) ?>
			<?= h($child->name) ?>
			<?= h($child->sex) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->birthed) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->joined) ?>
		</div>
		<div class="col-md-1">
			<?= h($child->created) ?>
		</div>
		<div class="col-md-2">
			<?= $this->Html->link('確認', ['action' => 'view', $child->id], ['class' => 'btn btn-sm btn-info']) ?>
			<?= $this->Html->link('変更', ['action' => 'edit', $child->id], ['class' => 'btn btn-sm btn-warning']) ?>
		</div>
	</div>

<?php endforeach; ?>
	<div class="paginator">
		<ul class="pagination">
			<?= $this->Paginator->prev('< ' . __('previous')) ?>
			<?= $this->Paginator->numbers() ?>
			<?= $this->Paginator->next(__('next') . ' >') ?>
		</ul>
		<p><?= $this->Paginator->counter() ?></p>
	</div>

</div>

