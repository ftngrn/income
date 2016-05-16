<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medication Histories'), ['controller' => 'ChildMedicationHistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication History'), ['controller' => 'ChildMedicationHistories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childMedications index large-9 medium-8 columns content">
    <h3><?= __('Child Medications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('child_id') ?></th>
                <th><?= $this->Paginator->sort('guardian_id') ?></th>
                <th><?= $this->Paginator->sort('doctor') ?></th>
                <th><?= $this->Paginator->sort('doctor_tel') ?></th>
                <th><?= $this->Paginator->sort('diagnosis') ?></th>
                <th><?= $this->Paginator->sort('medicine_type') ?></th>
                <th><?= $this->Paginator->sort('medicine_object') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('method') ?></th>
                <th><?= $this->Paginator->sort('received') ?></th>
                <th><?= $this->Paginator->sort('received_staff_id') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($childMedications as $childMedication): ?>
            <tr>
                <td><?= $this->Number->format($childMedication->id) ?></td>
                <td><?= $childMedication->has('child') ? $this->Html->link($childMedication->child->name, ['controller' => 'Children', 'action' => 'view', $childMedication->child->id]) : '' ?></td>
                <td><?= $this->Number->format($childMedication->guardian_id) ?></td>
                <td><?= h($childMedication->doctor) ?></td>
                <td><?= h($childMedication->doctor_tel) ?></td>
                <td><?= h($childMedication->diagnosis) ?></td>
                <td><?= h($childMedication->medicine_type) ?></td>
                <td><?= h($childMedication->medicine_object) ?></td>
                <td><?= h($childMedication->start) ?></td>
                <td><?= $this->Number->format($childMedication->end) ?></td>
                <td><?= $this->Number->format($childMedication->method) ?></td>
                <td><?= h($childMedication->received) ?></td>
                <td><?= $this->Number->format($childMedication->received_staff_id) ?></td>
                <td><?= h($childMedication->modified) ?></td>
                <td><?= h($childMedication->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $childMedication->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $childMedication->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $childMedication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMedication->id)]) ?>
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
