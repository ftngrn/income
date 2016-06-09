<?php
$this->assign('title', '園児を編集する');
$this->extend('../Layout/bootstrap-ui/dashboard');
$this->assign('page_header', '園児の情報');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
?>
<?php $this->start('tb_left_actions', ['label' => '']) ?>
<li><?= $this->Html->link('園児を探す', ['controller' => 'incomes', 'action' => 'search']) ?></li>
<li><?= $this->Html->link('一覧', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('追加', ['controller' => 'guardians', 'action' => 'add']) ?></li>
<li><?= $this->Form->postLink('削除', ['action' => 'delete', $child->id],['confirm' => '削除します。よろしいですか？']) ?></li>
<?php $this->end(); ?>

<div class="children form large-9 medium-8 columns content">
<?= $this->Form->create($child, ['type' => 'file']) ?>

<table class="table table-hover table-responsive">
<tr><td>
<?= $this->Form->input('kana', ['label' => 'かな（半角スペースで区切る）']) ?>
</td><td>
<?= $this->Form->input('name', ['label' => '氏名（半角スペースで区切る）']) ?>
</td><td>
<?= $this->Form->input('sex', ['label' => '性別']) ?>
</td></tr>
<tr><td>
<?= $this->Form->input('guardian_id', ['options' => $guardians, 'label' => '保護者']) ?>
</td><td>
<?= $this->Form->input('school', ['label' => '真駒内幼稚園／プチピヨランド']) ?>
</td><td>
<?= $this->Form->input('room', ['label' => 'クラス名／コース名']) ?>
</td></tr>
<tr><td>
<?= $this->Form->input('bus', ['label' => 'バス色']) ?>
</td><td>
<?= $this->Form->input('course', ['label' => 'コース名（リボン色）']) ?>
</td><td>
<?= $this->Form->input('grade', ['label' => '学年']) ?>
</td></tr>
<tr><td>
<?= $this->Form->input('birthed', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'誕生日',
						'class'=>'datepicker',
						]);
?>
</td><td>
<?= $this->Form->input('joined', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'登園日',
						'class'=>'datepicker',
						]);
?>
</td><td>
<?= $this->Form->input('finished', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'退園日',
						'class'=>'datepicker',
						]);
?>
</td></tr>
<tr><td colspan="2">
<?= $this->Form->input('memo', ['label' => '備考']) ?>
</td><td>
<?= $this->Form->input('photos.0.file', [
					'label' => '写真',
					'type' => 'file',
				]) ?>
</td></tr>
</table>

<?= $this->Form->button('内容を保存する', ['class' => 'btn btn-lg btn-success']) ?>
<?= $this->Form->end() ?>
</div>
