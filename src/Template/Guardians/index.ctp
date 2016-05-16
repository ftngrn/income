<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Busstops'), ['controller' => 'Busstops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Busstop'), ['controller' => 'Busstops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="guardians index large-9 medium-8 columns content">
    <h3><?= __('Guardians') ?></h3>
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
                <th><?= $this->Paginator->sort('zip') ?></th>
                <th><?= $this->Paginator->sort('pref') ?></th>
                <th><?= $this->Paginator->sort('addr') ?></th>
                <th><?= $this->Paginator->sort('addr2') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('tel') ?></th>
                <th><?= $this->Paginator->sort('nondelivery') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guardians as $guardian): ?>
            <tr>
                <td><?= $this->Number->format($guardian->id) ?></td>
                <td><?= h($guardian->account) ?></td>
                <td><?= h($guardian->display_name) ?></td>
                <td><?= h($guardian->secret) ?></td>
                <td><?= h($guardian->school) ?></td>
                <td><?= h($guardian->mother_name) ?></td>
                <td><?= h($guardian->mother_kana) ?></td>
                <td><?= h($guardian->father_name) ?></td>
                <td><?= h($guardian->father_kana) ?></td>
                <td><?= h($guardian->zip) ?></td>
                <td><?= h($guardian->pref) ?></td>
                <td><?= h($guardian->addr) ?></td>
                <td><?= h($guardian->addr2) ?></td>
                <td><?= h($guardian->mobile) ?></td>
                <td><?= h($guardian->tel) ?></td>
                <td><?= h($guardian->nondelivery) ?></td>
                <td><?= h($guardian->modified) ?></td>
                <td><?= h($guardian->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $guardian->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $guardian->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $guardian->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guardian->id)]) ?>
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
