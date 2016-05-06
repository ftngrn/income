<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Child Medication History'), ['action' => 'edit', $childMedicationHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Child Medication History'), ['action' => 'delete', $childMedicationHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMedicationHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Child Medication Histories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Medication History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="childMedicationHistories view large-9 medium-8 columns content">
    <h3><?= h($childMedicationHistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Child Medication') ?></th>
            <td><?= $childMedicationHistory->has('child_medication') ? $this->Html->link($childMedicationHistory->child_medication->id, ['controller' => 'ChildMedications', 'action' => 'view', $childMedicationHistory->child_medication->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Staff') ?></th>
            <td><?= $childMedicationHistory->has('staff') ? $this->Html->link($childMedicationHistory->staff->name, ['controller' => 'Staffs', 'action' => 'view', $childMedicationHistory->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($childMedicationHistory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Medicated') ?></th>
            <td><?= h($childMedicationHistory->medicated) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($childMedicationHistory->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($childMedicationHistory->memo)); ?>
    </div>
</div>
