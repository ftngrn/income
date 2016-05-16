<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Children'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="children form large-9 medium-8 columns content">
    <?= $this->Form->create($child) ?>
    <fieldset>
        <legend><?= __('Add Child') ?></legend>
        <?php
            echo $this->Form->input('guardian_id');
            echo $this->Form->input('school');
            echo $this->Form->input('room');
            echo $this->Form->input('grade');
            echo $this->Form->input('bus');
            echo $this->Form->input('course');
            echo $this->Form->input('name');
            echo $this->Form->input('kana');
            echo $this->Form->input('sex');
            echo $this->Form->input('birthed', ['empty' => true]);
            echo $this->Form->input('joined', ['empty' => true]);
            echo $this->Form->input('finished', ['empty' => true]);
            echo $this->Form->input('memo');
            echo $this->Form->input('season');
            echo $this->Form->input('number');
            echo $this->Form->input('oldname');
            echo $this->Form->input('newschool');
            echo $this->Form->input('newzip');
            echo $this->Form->input('newpref');
            echo $this->Form->input('newaddr');
            echo $this->Form->input('newaddr2');
            echo $this->Form->input('newtel');
            echo $this->Form->input('nondelivery');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
