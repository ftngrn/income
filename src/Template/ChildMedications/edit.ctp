<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $childMedication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $childMedication->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medication Histories'), ['controller' => 'ChildMedicationHistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication History'), ['controller' => 'ChildMedicationHistories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childMedications form large-9 medium-8 columns content">
    <?= $this->Form->create($childMedication) ?>
    <fieldset>
        <legend><?= __('Edit Child Medication') ?></legend>
        <?php
            echo $this->Form->input('child_id', ['options' => $children]);
            echo $this->Form->input('guardian_id');
            echo $this->Form->input('doctor');
            echo $this->Form->input('doctor_tel');
            echo $this->Form->input('diagnosis');
            echo $this->Form->input('medicine_type');
            echo $this->Form->input('medicine_object');
            echo $this->Form->input('start', ['empty' => true]);
            echo $this->Form->input('end');
            echo $this->Form->input('method');
            echo $this->Form->input('caution');
            echo $this->Form->input('received', ['empty' => true]);
            echo $this->Form->input('received_staff_id');
            echo $this->Form->input('memo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
