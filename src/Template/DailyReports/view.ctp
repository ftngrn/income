<?php
use Cake\I18n\Date;
$this->extend('../Layout/bootstrap-ui/dashboard');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
$date = new Date($dailyReport->date);
$this->assign('title', sprintf('日誌 %s %s %s', $date->format('n/j'), $dailyReport->room, $dailyReport->staff->name));
$date_str = sprintf('<span class="date">%s</span><span class="week">%s</span>', $date->format('n/j'), $week_day[$date->format('w')]);
$this->assign('page_header', sprintf('日誌<span class="dateweek">%s</span><span class="room">%s</span><span class="name">%s</span>', $date_str, $dailyReport->room, $dailyReport->staff->name));
?>
<?php $this->start('tb_left_actions'); ?>
<li><?= $this->Html->link('日誌', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('日誌を書く', ['action' => 'add']) ?></li>
<li><?= $this->Html->link('再利用する', ['action' => 'add', 'source' => $dailyReport->id]) ?></li>
<li><?= $this->Form->postLink('削除', ['action' => 'delete', $dailyReport->id],['confirm' => '削除します。よろしいですか？']) ?></li>
<?php $this->end(); ?>

<div class="row dailyReports view large-9 medium-8 columns content">
	<div class="report col-sm-9 col-md-9">
		<h2>主な活動</h2>
		<p class="marked"><?= h($dailyReport->activity) ?></p>
		<h2>ねらい</h2>
		<p class="marked"><?= h($dailyReport->objective) ?></p>
		<h2>保育の流れ</h2>
		<p class="marked"><?= h($dailyReport->agenda) ?></p>
		<h2>やること・指導の要点</h2>
		<p class="marked"><?= h($dailyReport->gist) ?></p>
		<h2>感想・反省</h2>
		<p class="marked"><?= h($dailyReport->report) ?></p>
		<h2>問題・課題</h2>
		<p class="marked"><?= h($dailyReport->problem) ?></p>
		<h2>ケガ</h2>
		<p class="marked"><?= h($dailyReport->injury) ?></p>
		<h2>欠席・入退園</h2>
		<p class="marked"><?= h($dailyReport->movement) ?></p>
		<h2>配布物</h2>
		<p class="marked"><?= h($dailyReport->distribution) ?></p>
	</div>
	<div class="report-sub col-sm-3 col-md-3">
		<h2>その他の情報</h2>
		<dl class="dl-horizontal">
			<dt>クラス名</dt>
			<dd><?= h($dailyReport->room) ?></dd>
			<dt>教職員名</dt>
			<dd><?= h($dailyReport->staff->name) ?></dd>
			<dt>園長確認</dt>
			<dd><?= h($dailyReport->principal_checked) ?></dd>
			<dt>副園長確認</dt>
			<dd><?= h($dailyReport->sub_checked) ?></dd>
			<dt>主任確認1</dt>
			<dd><?= h($dailyReport->chief1_checked) ?></dd>
			<dt>主任確認2</dt>
			<dd><?= h($dailyReport->chief2_checked) ?></dd>
			<dt>初回日時</dt>
			<dd><?= h($dailyReport->created) ?></dd>
		</dl>
	</div>
</div>

<!-- Markdown用のCSS,JS -->
<?= $this->Html->css(['marked', 'report']) ?>
<?= $this->Html->scriptStart(['block' => true]) ?>
$(function() {
	//tableにはclassを追加する
	var renderer = new marked.Renderer();
	renderer.table = function(header, body) {
		return '<table class="table table-hover table-responsive">\n'
			+ '<thead>\n'
			+ header
			+ '</thead>\n'
			+ '<tbody>\n'
			+ body
			+ '</tbody>\n'
			+ '</table>\n';
	};
	marked.setOptions({
		renderer: renderer,
	});

	//Marked.js適用
	$('p.marked').each(function(i, block) {
		$(this).html(marked($(block).text()));
	});
});
<?= $this->Html->scriptEnd() ?>

