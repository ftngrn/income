<?php
$this->assign('title', '日誌');
$this->extend('../Layout/bootstrap-ui/dashboard');
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dailyReport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dailyReport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyReports form large-9 medium-8 columns content">
<?= $this->Form->create($dailyReport) ?>
<table>
<tr><td>
<?= $this->Form->input('room',['label'=>'クラス名']);?>
</td><td>
<?php echo $this->Form->input('date', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'日付',
						'class'=>'datepicker',
						]);
?>
</td><td>
<?= $this->Form->input('staff_id', ['options'=>$staffs,'label'=>'教職員名']);?>
</td></tr>
</table>
<table>
<tr><td>
<?= $this->Form->input('activity', ['rows'=>1,'label'=>'主な活動']);?>
</td><td>
<?= $this->Form->input('objective', ['rows'=>1,'label'=>'ねらい']);?>
</td></tr>
<tr><td>
<?= $this->Form->input('agenda', ['rows'=>8,'label'=>'その日の流れ']);?>
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
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
