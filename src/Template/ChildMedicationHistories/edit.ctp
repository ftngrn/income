<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $childMedicationHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $childMedicationHistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Child Medication Histories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childMedicationHistories form large-9 medium-8 columns content">
    <?= $this->Form->create($childMedicationHistory) ?>
    <fieldset>
        <legend><?= __('Edit Child Medication History') ?></legend>
        <?php
            echo $this->Form->input('child_medication_id', ['options' => $childMedications]);
            echo $this->Form->input('staff_id', ['options' => $staffs]);
            echo $this->Form->input('medicated', ['empty' => true]);
            echo $this->Form->input('memo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
