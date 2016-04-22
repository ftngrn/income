<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['controller' => 'DailyReports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Report'), ['controller' => 'DailyReports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Journals'), ['controller' => 'Journals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Journal'), ['controller' => 'Journals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weekly Ideas'), ['controller' => 'WeeklyIdeas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weekly Idea'), ['controller' => 'WeeklyIdeas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="staffs index large-9 medium-8 columns content">
    <h3><?= __('Staffs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('account') ?></th>
                <th><?= $this->Paginator->sort('display_name') ?></th>
                <th><?= $this->Paginator->sort('secret') ?></th>
                <th><?= $this->Paginator->sort('acl_group') ?></th>
                <th><?= $this->Paginator->sort('school') ?></th>
                <th><?= $this->Paginator->sort('system') ?></th>
                <th><?= $this->Paginator->sort('job') ?></th>
                <th><?= $this->Paginator->sort('room') ?></th>
                <th><?= $this->Paginator->sort('grade') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('kana') ?></th>
                <th><?= $this->Paginator->sort('old_name') ?></th>
                <th><?= $this->Paginator->sort('wife_name') ?></th>
                <th><?= $this->Paginator->sort('joined') ?></th>
                <th><?= $this->Paginator->sort('finished') ?></th>
                <th><?= $this->Paginator->sort('birthday') ?></th>
                <th><?= $this->Paginator->sort('tel') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('zip') ?></th>
                <th><?= $this->Paginator->sort('pref') ?></th>
                <th><?= $this->Paginator->sort('addr') ?></th>
                <th><?= $this->Paginator->sort('addr2') ?></th>
                <th><?= $this->Paginator->sort('died') ?></th>
                <th><?= $this->Paginator->sort('attended_25th') ?></th>
                <th><?= $this->Paginator->sort('attended_50th') ?></th>
                <th><?= $this->Paginator->sort('nondelivery') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staffs as $staff): ?>
            <tr>
                <td><?= $this->Number->format($staff->id) ?></td>
                <td><?= h($staff->account) ?></td>
                <td><?= h($staff->display_name) ?></td>
                <td><?= h($staff->secret) ?></td>
                <td><?= h($staff->acl_group) ?></td>
                <td><?= h($staff->school) ?></td>
                <td><?= $this->Number->format($staff->system) ?></td>
                <td><?= h($staff->job) ?></td>
                <td><?= h($staff->room) ?></td>
                <td><?= h($staff->grade) ?></td>
                <td><?= h($staff->name) ?></td>
                <td><?= h($staff->kana) ?></td>
                <td><?= h($staff->old_name) ?></td>
                <td><?= h($staff->wife_name) ?></td>
                <td><?= h($staff->joined) ?></td>
                <td><?= h($staff->finished) ?></td>
                <td><?= h($staff->birthday) ?></td>
                <td><?= h($staff->tel) ?></td>
                <td><?= h($staff->mobile) ?></td>
                <td><?= h($staff->zip) ?></td>
                <td><?= h($staff->pref) ?></td>
                <td><?= h($staff->addr) ?></td>
                <td><?= h($staff->addr2) ?></td>
                <td><?= h($staff->died) ?></td>
                <td><?= h($staff->attended_25th) ?></td>
                <td><?= h($staff->attended_50th) ?></td>
                <td><?= h($staff->nondelivery) ?></td>
                <td><?= h($staff->updated) ?></td>
                <td><?= h($staff->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $staff->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?>
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
