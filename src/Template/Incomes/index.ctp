<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Income'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="incomes index large-9 medium-8 columns content">
    <h3><?= __('Incomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('child_id') ?></th>
                <th><?= $this->Paginator->sort('guardian_id') ?></th>
                <th><?= $this->Paginator->sort('staff_id') ?></th>
                <th><?= $this->Paginator->sort('income_types') ?></th>
                <th><?= $this->Paginator->sort('cautions') ?></th>
                <th><?= $this->Paginator->sort('absence_type') ?></th>
                <th><?= $this->Paginator->sort('childcare_start') ?></th>
                <th><?= $this->Paginator->sort('childcare_end') ?></th>
                <th><?= $this->Paginator->sort('childcare_meal') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('repeat_type') ?></th>
                <th><?= $this->Paginator->sort('repeat_week') ?></th>
                <th><?= $this->Paginator->sort('sickness') ?></th>
                <th><?= $this->Paginator->sort('consulted') ?></th>
                <th><?= $this->Paginator->sort('fevered') ?></th>
                <th><?= $this->Paginator->sort('recovered') ?></th>
                <th><?= $this->Paginator->sort('temperature') ?></th>
                <th><?= $this->Paginator->sort('cough') ?></th>
                <th><?= $this->Paginator->sort('route') ?></th>
                <th><?= $this->Paginator->sort('ip_addr') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($incomes as $income): ?>
            <tr>
                <td><?= $this->Number->format($income->id) ?></td>
                <td><?= $income->has('child') ? $this->Html->link($income->child->name, ['controller' => 'Children', 'action' => 'view', $income->child->id]) : '' ?></td>
                <td><?= $income->has('guardian') ? $this->Html->link($income->guardian->id, ['controller' => 'Guardians', 'action' => 'view', $income->guardian->id]) : '' ?></td>
                <td><?= $income->has('staff') ? $this->Html->link($income->staff->name, ['controller' => 'Staffs', 'action' => 'view', $income->staff->id]) : '' ?></td>
                <td><?= $this->Number->format($income->income_types) ?></td>
                <td><?= h($income->cautions) ?></td>
                <td><?= h($income->absence_type) ?></td>
                <td><?= h($income->childcare_start) ?></td>
                <td><?= h($income->childcare_end) ?></td>
                <td><?= h($income->childcare_meal) ?></td>
                <td><?= h($income->start) ?></td>
                <td><?= h($income->end) ?></td>
                <td><?= h($income->repeat_type) ?></td>
                <td><?= h($income->repeat_week) ?></td>
                <td><?= h($income->sickness) ?></td>
                <td><?= h($income->consulted) ?></td>
                <td><?= h($income->fevered) ?></td>
                <td><?= h($income->recovered) ?></td>
                <td><?= $this->Number->format($income->temperature) ?></td>
                <td><?= h($income->cough) ?></td>
                <td><?= h($income->route) ?></td>
                <td><?= h($income->ip_addr) ?></td>
                <td><?= h($income->modified) ?></td>
                <td><?= h($income->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $income->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $income->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?>
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
