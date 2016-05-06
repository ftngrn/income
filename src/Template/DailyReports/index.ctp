<?php
$this->assign('title', '日誌');
$this->extend('../Layout/bootstrap-ui/dashboard');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
?>
<?php $this->start('tb_left_actions'); ?>
<li><?= $this->Html->link('日誌を書く', ['action' => 'add']) ?></li>
<?php $this->end(); ?>

<div class="dailyReports index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th><?= $this->Paginator->sort('staff_id', '記入者') ?></th>
                <th><?= $this->Paginator->sort('room', 'クラス名') ?></th>
                <th><?= $this->Paginator->sort('date', '日報の日付') ?></th>
                <th><?= $this->Paginator->sort('gist', 'やること') ?></th>
                <th><?= $this->Paginator->sort('gist', '感想・反省') ?></th>
                <th><?= $this->Paginator->sort('principal_checked', '園長の確認') ?></th>
                <th class="actions">操作</th>
                <th><?= $this->Paginator->sort('modified', '更新日時') ?></th>
                <th><?= $this->Paginator->sort('created', '作成日時') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dailyReports as $dailyReport): ?>
						<?php
							$dt = new DateTime($dailyReport->date);
							$date = sprintf("%d/%2d/%2d %s", $dt->format('Y'), $dt->format('n'), $dt->format('j'), $week_day[$dt->format('w')]);
						?>
            <tr>
                <td><?= $this->Number->format($dailyReport->id) ?></td>
                <td><small><?= $dailyReport->has('staff') ? $this->Html->link($dailyReport->staff->name, ['controller' => 'Staffs', 'action' => 'view', $dailyReport->staff->id]) : '' ?></small></td>
                <td><?= h($dailyReport->room) ?></td>
                <td><?= $this->Html->link($date, ['action' => 'edit', $dailyReport->id], ['class' => 'btn btn-primary']) ?></td>
                <td><small title="<?= h($dailyReport->gist) ?>"><?= h($this->Text->truncate($dailyReport->gist, 20, ['ellipsis' => '...'])) ?></small></td>
                <td><small title="<?= h($dailyReport->report) ?>"><?= h($this->Text->truncate($dailyReport->report, 20, ['ellipsis' => '...'])) ?></small></td>
                <td><?= h($dailyReport->principal_checked) ?></td>
                <td class="actions">
                    <?= $this->Html->link('表示', ['action' => 'view', $dailyReport->id], ['class' => 'btn btn-sm btn-warning']) ?>
                    <?= $this->Html->link('再利用', ['action' => 'add', 'source' => $dailyReport->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('書き足し', ['action' => 'edit', $dailyReport->id], ['class' => 'btn btn-sm btn-primary']) ?>
                </td>
                <td><small><?= h($dailyReport->modified) ?></small></td>
                <td><small><?= h($dailyReport->created) ?></small></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
