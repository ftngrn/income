<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Child Medication'), ['action' => 'edit', $childMedication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Child Medication'), ['action' => 'delete', $childMedication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMedication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Child Medications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Medication'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Medication Histories'), ['controller' => 'ChildMedicationHistories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Medication History'), ['controller' => 'ChildMedicationHistories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="childMedications view large-9 medium-8 columns content">
    <h3><?= h($childMedication->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Child') ?></th>
            <td><?= $childMedication->has('child') ? $this->Html->link($childMedication->child->name, ['controller' => 'Children', 'action' => 'view', $childMedication->child->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Doctor') ?></th>
            <td><?= h($childMedication->doctor) ?></td>
        </tr>
        <tr>
            <th><?= __('Doctor Tel') ?></th>
            <td><?= h($childMedication->doctor_tel) ?></td>
        </tr>
        <tr>
            <th><?= __('Diagnosis') ?></th>
            <td><?= h($childMedication->diagnosis) ?></td>
        </tr>
        <tr>
            <th><?= __('Medicine Type') ?></th>
            <td><?= h($childMedication->medicine_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Medicine Object') ?></th>
            <td><?= h($childMedication->medicine_object) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($childMedication->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Guardian Id') ?></th>
            <td><?= $this->Number->format($childMedication->guardian_id) ?></td>
        </tr>
        <tr>
            <th><?= __('End') ?></th>
            <td><?= $this->Number->format($childMedication->end) ?></td>
        </tr>
        <tr>
            <th><?= __('Method') ?></th>
            <td><?= $this->Number->format($childMedication->method) ?></td>
        </tr>
        <tr>
            <th><?= __('Received Staff Id') ?></th>
            <td><?= $this->Number->format($childMedication->received_staff_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($childMedication->start) ?></td>
        </tr>
        <tr>
            <th><?= __('Received') ?></th>
            <td><?= h($childMedication->received) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($childMedication->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($childMedication->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Caution') ?></h4>
        <?= $this->Text->autoParagraph(h($childMedication->caution)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($childMedication->memo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Child Medication Histories') ?></h4>
        <?php if (!empty($childMedication->child_medication_histories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Child Medication Id') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Medicated') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childMedication->child_medication_histories as $childMedicationHistories): ?>
            <tr>
                <td><?= h($childMedicationHistories->id) ?></td>
                <td><?= h($childMedicationHistories->child_medication_id) ?></td>
                <td><?= h($childMedicationHistories->staff_id) ?></td>
                <td><?= h($childMedicationHistories->medicated) ?></td>
                <td><?= h($childMedicationHistories->memo) ?></td>
                <td><?= h($childMedicationHistories->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChildMedicationHistories', 'action' => 'view', $childMedicationHistories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChildMedicationHistories', 'action' => 'edit', $childMedicationHistories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChildMedicationHistories', 'action' => 'delete', $childMedicationHistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMedicationHistories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
