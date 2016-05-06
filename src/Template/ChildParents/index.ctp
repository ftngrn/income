<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Child Parent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Journals'), ['controller' => 'Journals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Journal'), ['controller' => 'Journals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Busstops'), ['controller' => 'Busstops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Busstop'), ['controller' => 'Busstops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childParents index large-9 medium-8 columns content">
    <h3><?= __('Child Parents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('account') ?></th>
                <th><?= $this->Paginator->sort('display_name') ?></th>
                <th><?= $this->Paginator->sort('secret') ?></th>
                <th><?= $this->Paginator->sort('school') ?></th>
                <th><?= $this->Paginator->sort('mother_name') ?></th>
                <th><?= $this->Paginator->sort('mother_kana') ?></th>
                <th><?= $this->Paginator->sort('father_name') ?></th>
                <th><?= $this->Paginator->sort('father_kana') ?></th>
                <th><?= $this->Paginator->sort('pref') ?></th>
                <th><?= $this->Paginator->sort('addr') ?></th>
                <th><?= $this->Paginator->sort('addr2') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('tel') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($childParents as $childParent): ?>
            <tr>
                <td><?= $this->Number->format($childParent->id) ?></td>
                <td><?= h($childParent->account) ?></td>
                <td><?= h($childParent->display_name) ?></td>
                <td><?= h($childParent->secret) ?></td>
                <td><?= h($childParent->school) ?></td>
                <td><?= h($childParent->mother_name) ?></td>
                <td><?= h($childParent->mother_kana) ?></td>
                <td><?= h($childParent->father_name) ?></td>
                <td><?= h($childParent->father_kana) ?></td>
                <td><?= h($childParent->pref) ?></td>
                <td><?= h($childParent->addr) ?></td>
                <td><?= h($childParent->addr2) ?></td>
                <td><?= h($childParent->mobile) ?></td>
                <td><?= h($childParent->tel) ?></td>
                <td><?= h($childParent->modified) ?></td>
                <td><?= h($childParent->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $childParent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $childParent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $childParent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childParent->id)]) ?>
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
