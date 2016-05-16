<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childHealths index large-9 medium-8 columns content">
    <h3><?= __('Child Healths') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('child_id') ?></th>
                <th><?= $this->Paginator->sort('guardian_id') ?></th>
                <th><?= $this->Paginator->sort('insurance_number') ?></th>
                <th><?= $this->Paginator->sort('doctor') ?></th>
                <th><?= $this->Paginator->sort('doctor_tel') ?></th>
                <th><?= $this->Paginator->sort('temperature') ?></th>
                <th><?= $this->Paginator->sort('has_allergy') ?></th>
                <th><?= $this->Paginator->sort('nap') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($childHealths as $childHealth): ?>
            <tr>
                <td><?= $this->Number->format($childHealth->id) ?></td>
                <td><?= $childHealth->has('child') ? $this->Html->link($childHealth->child->name, ['controller' => 'Children', 'action' => 'view', $childHealth->child->id]) : '' ?></td>
                <td><?= $this->Number->format($childHealth->guardian_id) ?></td>
                <td><?= h($childHealth->insurance_number) ?></td>
                <td><?= h($childHealth->doctor) ?></td>
                <td><?= h($childHealth->doctor_tel) ?></td>
                <td><?= $this->Number->format($childHealth->temperature) ?></td>
                <td><?= $this->Number->format($childHealth->has_allergy) ?></td>
                <td><?= $this->Number->format($childHealth->nap) ?></td>
                <td><?= h($childHealth->modified) ?></td>
                <td><?= h($childHealth->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $childHealth->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $childHealth->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $childHealth->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childHealth->id)]) ?>
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
