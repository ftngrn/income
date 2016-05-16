<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Child Medication History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childMedicationHistories index large-9 medium-8 columns content">
    <h3><?= __('Child Medication Histories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('child_medication_id') ?></th>
                <th><?= $this->Paginator->sort('staff_id') ?></th>
                <th><?= $this->Paginator->sort('medicated') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($childMedicationHistories as $childMedicationHistory): ?>
            <tr>
                <td><?= $this->Number->format($childMedicationHistory->id) ?></td>
                <td><?= $childMedicationHistory->has('child_medication') ? $this->Html->link($childMedicationHistory->child_medication->id, ['controller' => 'ChildMedications', 'action' => 'view', $childMedicationHistory->child_medication->id]) : '' ?></td>
                <td><?= $childMedicationHistory->has('staff') ? $this->Html->link($childMedicationHistory->staff->name, ['controller' => 'Staffs', 'action' => 'view', $childMedicationHistory->staff->id]) : '' ?></td>
                <td><?= h($childMedicationHistory->medicated) ?></td>
                <td><?= h($childMedicationHistory->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $childMedicationHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $childMedicationHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $childMedicationHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMedicationHistory->id)]) ?>
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
