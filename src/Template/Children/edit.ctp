<?php
$this->assign('title', '園児を編集する');
$this->extend('../Layout/bootstrap-ui/dashboard');
$this->assign('page_header', '園児の情報');
?>
<?= $this->Html->css(['child']) ?>
<?php $this->start('tb_left_actions', ['label' => '']) ?>
<li><?= $this->Html->link('園児を探す', ['controller' => 'incomes', 'action' => 'search']) ?></li>
<li><?= $this->Html->link('一覧', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('追加', ['controller' => 'guardians', 'action' => 'add']) ?></li>
<li><?= $this->Form->postLink('削除', ['action' => 'delete', $child->id],['confirm' => '削除します。よろしいですか？']) ?></li>
<?php $this->end(); ?>

<div class="children form large-9 medium-8 columns content">
<?= $this->Form->create($child, ['type' => 'file']) ?>

<?= $this->Form->input('kana', ['label' => 'かな（半角スペースで区切る）']) ?>
<?= $this->Form->input('name', ['label' => '氏名（半角スペースで区切る）']) ?>
<?= $this->Form->input('sex', ['label' => '性別', 'type' => 'radio', 'options' => $sexs]) ?>
<?= $this->Form->input('guardian_id', ['options' => $guardians, 'label' => '保護者']) ?>
<?= $this->Form->input('school', ['label' => '真駒内幼稚園／プチピヨランド']) ?>
<?= $this->Form->input('room', ['label' => 'クラス／プチピヨコース']) ?>
<?= $this->Form->input('bus', ['label' => 'バス']) ?>
<?= $this->Form->input('course', ['label' => 'バスコース（リボン色）']) ?>
<?= $this->Form->input('grade', ['label' => '学年']) ?>
<?= $this->Form->input('birthed', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'誕生日',
						'class'=>'datepicker',
						]);
?>
<?= $this->Form->input('joined', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'登園日',
						'class'=>'datepicker',
						]);
?>
<?= $this->Form->input('finished', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'退園日',
						'class'=>'datepicker',
						]);
?>
<?= $this->Form->input('memo', ['label' => '備考']) ?>
<?= $this->Form->input('photos.0.file', [
					'label' => '写真',
					'type' => 'file',
				]) ?>
<?php foreach($child->photos as $photo): ?>
<?= $this->Html->image(['controller' => 'photos', 'action' => 'thumbnail', $photo->id], ['class' => 'thumbnail']) ?>
<?php endforeach; ?>

<?= $this->Form->button('内容を保存する', ['class' => 'btn btn-lg btn-success']) ?>
<?= $this->Form->end() ?>
</div>
