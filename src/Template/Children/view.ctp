<?php
$title = sprintf("園児の詳細 #%d", $child->id);
$this->assign('title', $title);
$this->assign('page_header', $title);
$this->extend('../Layout/bootstrap-ui/dashboard');
?>
<?= $this->Html->css(['child']) ?>
<?php $this->start('tb_left_actions', ['label' => '']) ?>
<li><?= $this->Html->link('園児を探す', ['controller' => 'incomes', 'action' => 'search']) ?></li>
<li><?= $this->Html->link('一覧', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('追加', ['controller' => 'guardians', 'action' => 'add']) ?></li>
<li><?= $this->Html->link('この園児を編集', ['action' => 'edit', $child->id]) ?></li>
<?php $this->end(); ?>

<div class="children view large-9 medium-8 columns content">
	<h3><?= h($child->kana) ?>（<?= h($child->name) ?>）</h3>

	<table class="table table-hover table-responsive">
		<tr>
			<th class="right">保護者</th>
			<td><?= $child->has('guardian') ? $this->Html->link($child->guardian->mother_name, ['controller' => 'Guardians', 'action' => 'view', $child->guardian->id]) : '' ?></td>
			<td rowspan="10" class="top">
<?php foreach($child->photos as $photo): ?>
				<?= $this->Html->image(['controller' => 'photos', 'action' => 'view', $photo->id], ['class' => 'img-rounded img-responsive w300']) ?>
<?php endforeach; ?>
			</td>
		</tr>
		<tr>
			<th class="right">通い先</th>
			<td><?= h($child->school) ?></td>
		</tr>
		<tr>
			<th class="right">クラス<span class="slash">／</span>学年</th>
			<td><?= h($child->room) ?><span class="slash">／</span><?= h($child->grade) ?></td>
		</tr>
		<tr>
			<th class="right">バス<span class="slash">／</span>バスコース</th>
			<td><?= h($child->bus) ?><span class="slash">／</span><?= h($child->course) ?></td>
		</tr>
		<tr>
			<th class="right">名前<span class="slash">／</span>かな<span class="slash">／</span>性別</th>
			<td><?= h($child->name) ?><span class="slash">／</span><?= h($child->kana) ?><span class="slash">／</span><?= h($child->sex) ?></td>
		</tr>
		<tr>
			<th class="right">誕生日</th>
			<td><?= h($child->birthed) ?></td>
		</tr>
		<tr>
			<th class="right">入園日</th>
			<td><?= h($child->joined) ?></td>
		</tr>
		<tr>
			<th class="right">備考</th>
			<td><?= $this->Text->autoParagraph(h($child->memo)); ?></td>
		</tr>
		<tr>
			<th class="right">最終更新日<span class="slash">／</span>作成日</th>
			<td><?= h($child->modified) ?><span class="slash">／</span><?= h($child->created) ?></td>
		</tr>
		<tr>
			<th class="right"><?= __('Id') ?></th>
			<td><?= $child->id ?></td>
		</tr>
	</table>

	<div class="related">
	</div>
</div>
