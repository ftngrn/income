<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Child'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="children index large-9 medium-8 columns content">
    <h3><?= __('Children') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('guardian_id') ?></th>
                <th><?= $this->Paginator->sort('school') ?></th>
                <th><?= $this->Paginator->sort('room') ?></th>
                <th><?= $this->Paginator->sort('grade') ?></th>
                <th><?= $this->Paginator->sort('bus') ?></th>
                <th><?= $this->Paginator->sort('course') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('kana') ?></th>
                <th><?= $this->Paginator->sort('sex') ?></th>
                <th><?= $this->Paginator->sort('birthed') ?></th>
                <th><?= $this->Paginator->sort('joined') ?></th>
                <th><?= $this->Paginator->sort('finished') ?></th>
                <th><?= $this->Paginator->sort('season') ?></th>
                <th><?= $this->Paginator->sort('number') ?></th>
                <th><?= $this->Paginator->sort('oldname') ?></th>
                <th><?= $this->Paginator->sort('newschool') ?></th>
                <th><?= $this->Paginator->sort('newzip') ?></th>
                <th><?= $this->Paginator->sort('newpref') ?></th>
                <th><?= $this->Paginator->sort('newaddr') ?></th>
                <th><?= $this->Paginator->sort('newaddr2') ?></th>
                <th><?= $this->Paginator->sort('newtel') ?></th>
                <th><?= $this->Paginator->sort('nondelivery') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($children as $child): ?>
            <tr>
                <td><?= $this->Number->format($child->id) ?></td>
                <td><?= $this->Number->format($child->guardian_id) ?></td>
                <td><?= h($child->school) ?></td>
                <td><?= h($child->room) ?></td>
                <td><?= h($child->grade) ?></td>
                <td><?= h($child->bus) ?></td>
                <td><?= h($child->course) ?></td>
                <td><?= h($child->name) ?></td>
                <td><?= h($child->kana) ?></td>
                <td><?= h($child->sex) ?></td>
                <td><?= h($child->birthed) ?></td>
                <td><?= h($child->joined) ?></td>
                <td><?= h($child->finished) ?></td>
                <td><?= $this->Number->format($child->season) ?></td>
                <td><?= $this->Number->format($child->number) ?></td>
                <td><?= h($child->oldname) ?></td>
                <td><?= h($child->newschool) ?></td>
                <td><?= h($child->newzip) ?></td>
                <td><?= h($child->newpref) ?></td>
                <td><?= h($child->newaddr) ?></td>
                <td><?= h($child->newaddr2) ?></td>
                <td><?= h($child->newtel) ?></td>
                <td><?= h($child->nondelivery) ?></td>
                <td><?= h($child->modified) ?></td>
                <td><?= h($child->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $child->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $child->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $child->id], ['confirm' => __('Are you sure you want to delete # {0}?', $child->id)]) ?>
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
