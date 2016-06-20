<?php
$this->assign('title', '保護者・園児を追加');
$this->extend('../Layout/bootstrap-ui/dashboard');

?>
<?php $this->start('tb_left_actions'); ?>
<li><?= $this->Html->link('保護者', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('園児', ['controller' => 'children', 'action' => 'index']) ?></li>
<?php $this->end(); ?>

<div class="guardians form large-9 medium-8 columns content">
<?= $this->Form->create($guardian) ?>
<h2>園児の情報</h2>
<table class="table table-hover table-responsive">
<tr>
	<td><?= $this->Form->input('children.0.school', ['label' => '通う先']) ?></td>
	<td><?= $this->Form->input('children.0.room', ['label' => 'クラス']) ?></td>
	<td><?php echo $this->Form->input('children.0.joined', [
							'type' => 'text',
							'empty' => true,
							'value' => date("Y-m-d"),
							'label' => '入園年月日',
							'class' => 'datepicker',
						]);
?></td>
</tr>
<tr>
	<td><?= $this->Form->input('children.0.name', ['label' => '園児の氏名']) ?></td>
	<td><?= $this->Form->input('children.0.kana', ['label' => '園児のかな']) ?></td>
	<td><?= $this->Form->input('children.0.sex', ['label' => '園児の性別']) ?></td>
</tr>
<tr>
	<td><?php echo $this->Form->input('children.0.birthed', [
							'type' => 'text',
							'empty' => true,
							'value' => null,
							'label' => '誕生年月日',
							'class' => 'datepicker',
						]);
?></td>
	<td><?= $this->Form->input('children.0.bus', ['label' => 'どのバス']) ?></td>
	<td><?= $this->Form->input('children.0.course', ['label' => 'バスコース（リボン）']) ?></td>
</tr>
<tr>
	<td></td>
	<td colspan="2"><?= $this->Form->input('children.0.memo', ['label' => '園児の備考', 'rows' => 3]) ?></td>
</tr>
</table>

<h2>保護者の情報</h2>
<table class="table table-hover table-responsive">
<tr>
	<td><?= $this->Form->input('mother_name',['label' => '母親の氏名']); ?></td>
	<td><?= $this->Form->input('mother_kana',['label' => '母親のかな']); ?></td>
</tr>
<tr>
	<td><?= $this->Form->input('father_name',['label' => '父親の氏名']); ?></td>
	<td><?= $this->Form->input('father_kana',['label' => '父親のかな']); ?></td>
</tr>
<tr>
	<td><?= $this->Form->input('zip',['label' => '郵便番号']); ?></td>
	<td><?= $this->Form->input('pref',['label' => '都道府県']); ?></td>
</tr>
<tr>
	<td><?= $this->Form->input('addr',['label' => '住所1']); ?></td>
	<td><?= $this->Form->input('addr2',['label' => '住所2']); ?></td>
</tr>
<tr>
	<td><?= $this->Form->input('mobile',['label' => '携帯番号']); ?></td>
	<td><?= $this->Form->input('tel',['label' => '家電話']); ?></td>
</tr>
<tr>
	<td><?= $this->Form->input('tels',['label' => 'その他電話', 'rows' => 5]); ?></td>
	<td><?= $this->Form->input('memo',['label' => '保護者の備考', 'rows' => 5]); ?></td>
</tr>
<tr>
	<td colspan="2">
		<?= $this->Form->button('内容を保存する', ['class' => 'btn btn-lg btn-success']) ?>
		<?= $this->Form->end() ?>
	</td>
</tr>
</table>
</div>
