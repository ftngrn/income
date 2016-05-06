<?php
$this->assign('title', '日誌を書く');
$this->extend('../Layout/bootstrap-ui/dashboard');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
?>
<?php $this->start('tb_left_actions'); ?>
<li><?= $this->Html->link('日誌', ['action' => 'index']) ?></li>
<?php $this->end(); ?>

<?php
	$agenda_for_teacher =<<<_EOT_
08:30　登園・身支度・自由遊び
09:50　片付け
10:10　朝の会
10:20　主な活動
11:30　昼食

13:30　片付け・身支度・帰りの会
14:00　降園
_EOT_
?>
<div class="dailyReports form large-9 medium-8 columns content">
<?= $this->Form->create($dailyReport) ?>
<table class="table table-hover table-responsive">
<tr><td>
<?= $this->Form->input('room',['label'=>'クラス名']);?>
</td><td>
<?php echo $this->Form->input('date', [
						'type'=>'text',
						'empty'=>true,
						'value'=>date("Y-m-d"),
						'label'=>'日付',
						'class'=>'datepicker',
						]);
?>
</td><td>
<?= $this->Form->input('staff_id', ['options'=>$staffs,'label'=>'教職員名']);?>
</td></tr>
</table>
<table class="table table-hover table-responsive">
<tr><td>
<?= $this->Form->input('activity', ['rows'=>1,'label'=>'主な活動']);?>
</td><td>
<?= $this->Form->input('objective', ['rows'=>1,'label'=>'ねらい']);?>
</td></tr>
<tr><td>
<?= $this->Form->input('agenda', ['rows'=>8,'label'=>'その日の流れ','value'=>'']);?>
</td><td>
<?= $this->Form->input('gist', ['rows'=>8,'label'=>'やること・指導の要点']);?>
</td></tr>
<tr><td>
<?= $this->Form->input('report', ['rows'=>8,'label'=>'感想・反省']);?>
</td><td>
<?= $this->Form->input('problem', ['rows'=>8,'label'=>'課題・問題意識']);?>
</td></tr>
<tr><td>
<?= $this->Form->input('distribution', ['rows'=>6,'label'=>'配布物・プリント']);?>
</td><td>
<?= $this->Form->input('injury', ['rows'=>2,'label'=>'ケガ']);?>
<?= $this->Form->input('movement', ['rows'=>2,'label'=>'欠席・入退園児']);?>
</td></tr>
</table>
<?= $this->Form->button('内容を保存する', ['class' => 'btn btn-lg btn-success']) ?>
<?= $this->Form->end() ?>
</div>
