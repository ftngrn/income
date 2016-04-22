<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Daily Report'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyReports index large-9 medium-8 columns content">
    <h3><?= __('Daily Reports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('room') ?></th>
                <th><?= $this->Paginator->sort('staff_id') ?></th>
                <th><?= $this->Paginator->sort('principal_checked') ?></th>
                <th><?= $this->Paginator->sort('sub_checked') ?></th>
                <th><?= $this->Paginator->sort('chief1_checked') ?></th>
                <th><?= $this->Paginator->sort('chief2_checked') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dailyReports as $dailyReport): ?>
            <tr>
                <td><?= $this->Number->format($dailyReport->id) ?></td>
                <td><?= h($dailyReport->date) ?></td>
                <td><?= h($dailyReport->room) ?></td>
                <td><?= $dailyReport->has('staff') ? $this->Html->link($dailyReport->staff->name, ['controller' => 'Staffs', 'action' => 'view', $dailyReport->staff->id]) : '' ?></td>
                <td><?= h($dailyReport->principal_checked) ?></td>
                <td><?= h($dailyReport->sub_checked) ?></td>
                <td><?= h($dailyReport->chief1_checked) ?></td>
                <td><?= h($dailyReport->chief2_checked) ?></td>
                <td><?= h($dailyReport->updated) ?></td>
                <td><?= h($dailyReport->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dailyReport->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dailyReport->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dailyReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyReport->id)]) ?>
                </td>
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
