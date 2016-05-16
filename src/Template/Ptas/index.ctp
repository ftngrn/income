<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ptas index large-9 medium-8 columns content">
    <h3><?= __('Ptas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('guardian_id') ?></th>
                <th><?= $this->Paginator->sort('child_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('kana') ?></th>
                <th><?= $this->Paginator->sort('room') ?></th>
                <th><?= $this->Paginator->sort('job') ?></th>
                <th><?= $this->Paginator->sort('zip') ?></th>
                <th><?= $this->Paginator->sort('addr') ?></th>
                <th><?= $this->Paginator->sort('tel') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ptas as $pta): ?>
            <tr>
                <td><?= $this->Number->format($pta->id) ?></td>
                <td><?= $pta->has('guardian') ? $this->Html->link($pta->guardian->id, ['controller' => 'Guardians', 'action' => 'view', $pta->guardian->id]) : '' ?></td>
                <td><?= $pta->has('child') ? $this->Html->link($pta->child->name, ['controller' => 'Children', 'action' => 'view', $pta->child->id]) : '' ?></td>
                <td><?= h($pta->name) ?></td>
                <td><?= h($pta->kana) ?></td>
                <td><?= h($pta->room) ?></td>
                <td><?= h($pta->job) ?></td>
                <td><?= h($pta->zip) ?></td>
                <td><?= h($pta->addr) ?></td>
                <td><?= h($pta->tel) ?></td>
                <td><?= h($pta->mobile) ?></td>
                <td><?= h($pta->modified) ?></td>
                <td><?= h($pta->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pta->id)]) ?>
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
